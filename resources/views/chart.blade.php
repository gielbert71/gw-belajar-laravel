@extends('template.main')
@section('title')
@parent
Highchart
@endsection
@section('content')
<h1 style="text-align: center;">Highchart Laravel</h1>
<div class="row" style="margin-left: 1px;">
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">

            <div class="inner">
                <h3><?php echo $totalProducts ?></h3>
                <p>Products</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="crud-products.php" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">

            <div class="inner">
                <h3><?php echo $totalCategories ?></h3>
                <p>Categories</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">

            <div class="inner">
                <h3><?php echo $totalPrice ?></h3>
                <p>Total Price</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">

            <div class="inner">
                <h3><?php echo $totalStock ?></h3>
                <p>Total Stock</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

</div>
<br>
<center>
    <div id="ccontainer"></div>
    <br>
    <div id="pieContainer"></div>
    <br>
    <div id="categoryTotalContainer"></div>
</center>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script>
    var categories = <?php echo json_encode($categories->pluck('category_name')) ?>;
    var productCounts = <?php echo json_encode($categories->pluck('products_count')) ?>;

    Highcharts.chart('ccontainer', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Jumlah Produk per Kategori'
        },
        xAxis: {
            categories: categories
        },
        yAxis: {
            title: {
                text: 'Number of Products'
            }
        },
        series: [{
            name: 'Products',
            data: productCounts
        }]
    });
</script>

<script>
    var categories = <?php echo json_encode($categories->pluck('category_name')) ?>;
    var productCounts = <?php echo json_encode($categories->pluck('products_count')) ?>;

    Highcharts.chart('pieContainer', {
        chart: {
            type: 'pie'
        },
        title: {
            text: 'Jumlah Produk per Kategori'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                }
            }
        },
        series: [{
            name: 'Products',
            data: categories.map(function(category, index) {
                return {
                    name: category,
                    y: productCounts[index]
                };
            })
        }]
    });
</script>
<script>
    var categories = <?php echo json_encode($categoryData->pluck('category_name')); ?>;
    var categoryData = <?php echo json_encode($categoryData->pluck('products')->map(function($products) {
        return $products->map(function($product) {
            return [
                'total_price' => $product->total_price,
                'total_stock' => $product->total_stock,
            ];
        });
    })); ?>;

    console.log('Categories:', categories);
    console.log('Category Data:', categoryData);

    Highcharts.chart('categoryTotalContainer', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Jumlah harga dan stock per kategori'
        },
        xAxis: {
            categories: categories
        },
        yAxis: [{
            title: {
                text: 'Harga'
            },
        }, {
            title: {
                text: 'Stock'
            },
            opposite: true,
        }],
        series: [{
            name: 'Harga',
            data: categoryData.map(function(category) {
                return category.reduce(function(sum, product) {
                    return sum + product.total_price;
                }, 0);
            })
        }, {
            name: 'Stock',
            data: categoryData.map(function(category) {
                return category.reduce(function(sum, product) {
                    return sum + product.total_stock;
                }, 0);
            })
        }]
    });
</script>

@endsection
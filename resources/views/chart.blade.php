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
    <div id="chart-containerr"></div>
    <br>
    <div id="chart-containers"></div>
</center>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="{{asset('Highcharts-11.2.0/code/highcharts.src.js') }}"></script>
<script>
    var categories = <?php echo json_encode($categories->pluck('category_name')) ?>;
    var productCounts = <?php echo json_encode($categories->pluck('products_count')) ?>;

    productCounts = productCounts.map(function(value) {
        return parseFloat(value);
    });

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
    productCounts = productCounts.map(function(value) {
        return parseFloat(value);
    });

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
    var categories = <?php echo json_encode($categories->pluck('category_name')) ?>;
    var totalPrices = <?php echo json_encode(array_values($categoryPrices)); ?>;

    // Convert totalPrices values to numbers
    totalPrices = totalPrices.map(function(value) {
        return parseFloat(value);
    });

    document.addEventListener('DOMContentLoaded', function() {
        console.log('Document is ready.');

        try {
            Highcharts.chart('chart-containerr', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Jumlah Harga per Kategori'
                },
                xAxis: {
                    categories: categories
                },
                yAxis: {
                    title: {
                        text: 'Jumlah Harga'
                    }
                },
                series: [{
                    name: 'Jumlah Harga per Kategori',
                    data: totalPrices
                }]
            });
            console.log('Chart successfully rendered.');
        } catch (error) {
            console.error('Error rendering chart:', error);
        }
    });
</script>

<script>
    var categories = <?php echo json_encode($categories->pluck('category_name')) ?>;
    var totalStocks = <?php echo json_encode(array_values($categoryStock)); ?>;

    // Convert totalPrices values to numbers
    totalStocks = totalStocks.map(function(value) {
        return parseFloat(value);
    });

    document.addEventListener('DOMContentLoaded', function() {
        console.log('Document is ready.');

        try {
            Highcharts.chart('chart-containers', {
                chart: {
                    type: 'pie'
                },
                title: {
                    text: 'Jumlah Stock per Kategori'
                },
                xAxis: {
                    categories: categories
                },
                yAxis: {
                    title: {
                        text: 'Jumlah Stock'
                    }
                },
                series: [{
                    name: 'Jumlah sotck',
                    data: categories.map(function(category, index) {
                        return {
                            name: category,
                            y: totalStocks[index]
                        };
                    })
                }]
            });
            console.log('Chart successfully rendered.');
        } catch (error) {
            console.error('Error rendering chart:', error);
        }
    });
</script>



@endsection
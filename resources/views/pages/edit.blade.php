@extends('template.main')
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3>Edit</h3>
    </div>
    <form action="{{ route('update', $products->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="product_name">Nama Produk</label>
                <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Nama Produk" value="{{ $products->product_name }}">
            </div>
            <div class="form-group">
                <label for="category_id">Kategori Produk</label>
                <select name="category_id" id="category_id" class="form-control">
                    @foreach($categories as $id => $categoryName)
                    <option value="{{ $id }}" {{ $products->category_id == $id ? 'selected' : '' }}>
                        {{ $categoryName }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="product_code">Kode Produk</label>
                <input type="text" class="form-control" id="product_code" name="product_code" placeholder="Kode Produk" value="{{ $products->product_code }}">
            </div>
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Deskripsi" value="{{ $products->description }}">
            </div>
            <div class="form-group">
                <label for="price">Harga</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Harga" value="{{ $products->price }}">
            </div>
            <div class="form-group">
                <label for="stock">Stok</label>
                <input type="text" class="form-control" id="stock" name="stock" placeholder="Stok" value="{{$products->stock}}">
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary" type="submit">Submit</button>
            <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
        </div>
    </form>
</div>
@endsection
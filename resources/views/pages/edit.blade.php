@extends('template.main')
@section('content')
<div class="card card-primary">
    <div class="card-header"><h3>Edit</h3></div>
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
                    <option value="1" {{ $products->category_id == 1 ? 'selected' : '' }}>1</option>
                    <option value="2" {{ $products->category_id == 2 ? 'selected' : '' }}>2</option>
                    <option value="3" {{ $products->category_id == 3 ? 'selected' : '' }}>3</option>
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
        </div>
        <div class="card-footer">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
</div>
@endsection

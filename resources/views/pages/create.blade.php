@extends('template.main')
@section('content')
<div class="card card-primary">
    <div class="card-header"><h3>Create</h3></div>
    <form action="{{route('buat')}}" method="post">
    @csrf
    <div class="card-body">
    <div class="form-group">
        <label for="product_name">Nama Produk</label>
        <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Nama Produk">
    </div>
    <div class="form-group">
        <label for="category_id">Kategori Produk</label>
        <select name="category_id" id="category_id" class="form-control">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
    </div>
    <div class="form-group">
        <label for="product_code">Kode Produk</label>
        <input type="text" class="form-control" id="product_code" name="product_code" placeholder="Kode Produk">
    </div>
    <div class="form-group">
        <label for="description">Deskripsi</label>
        <input type="text" class="form-control" id="description" name="description" placeholder="Deskripsi">
    </div>
    <div class="form-group">
        <label for="price">Harga</label>
        <input type="text" class="form-control" id="price" name="price" placeholder="Harga">
    </div>
    </div>
    <div class="card-footer">
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
</form>
</div>
@endsection
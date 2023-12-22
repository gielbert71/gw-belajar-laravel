@extends('template.main')
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3>Create</h3>
    </div>
    <form action="{{route('buat')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="product_name">Nama Produk</label>
                <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Nama Produk">
            </div>
            <div class="form-group">
                <label for="category_id">Kategori Produk</label>
                <select name="category_id" id="category_id" class="form-control">
                    @foreach($categories as $id => $categoryName)
                    <option value="{{ $id }}">{{ $categoryName }}</option>
                    @endforeach
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
            <div class="form-group">
                <label for="stock">Stok</label>
                <input type="text" class="form-control" id="stock" name="stock" placeholder="Stok">
            </div>
            <div class="form-group">
                <label for="image">Upload File Cover Kategori</label>
                <input class="form-control" type="file" name="image" id="image">
                @error('file_cover')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
</div>
@endsection
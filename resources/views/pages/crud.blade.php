@extends('template.main')
@section('content')
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<div class="row">
    <div class="col-sm-12 col-md-6"></div>
    <div class="col-sm-12 col-md-6"></div>
</div>
<div class="row">

    <div class="col-sm-12">
        @auth
        <a href="{{route('create')}}">Create</a>
        @endauth
        <table class=table table-bordered table-hover dataTable dtr-inline">
            <th>Nama Produk</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            @auth
            <th>Aksi</th>
            @endauth
            
            @foreach ($produk as $prod)
            <tr>
                <td>{{$prod->product_name}}</td>
                <td>{{$prod->description}}</td>
                <td>{{$prod->price}}</td>
                @auth
                <td>
                    <a href="{{route('edit',$prod->id)}}" class="btn btn-primary" style="display: inline;">Edit</a><br>
                    <form action="{{route('delete',$prod->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary">Delete</button>
                    </form>
                </td>
                @endauth
            </tr>
            <br>
            @endforeach
        </table>
    </div>
</div>
</div>
</div>
</div>
</div>
@endsection
@extends('template.main')
@section('title')
Products
@endsection
@section('content')
<div style="margin-left: 10px;">
    <h1>
        Hi,
        @guest
        Guest!
        @endguest
        @auth
        {{ auth()->user()->name }}!
        @endauth
    </h1>
    <h6>
        @guest
        <a href="{{route('login')}}">Login now!</a>
        @endguest
        @auth
        Role:
        @if(auth()->user()->hasRole('user'))
        User
        @elseif(auth()->user()->hasRole('admin'))
        Admin
        @elseif(auth()->user()->hasRole('superadmin'))
        Superadmin
        @else
        Unknown Role
        @endif
        @endauth
    </h6>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row" style="display:flex; justify-content: center; align-items:center">
                    <div class="row">

                        <div class="column">

                        </div>
                    </div>
                    @hasanyrole('admin|superadmin')
                    <div class="col-sm-12">
                        <table class="table table-bordered table-hover dataTable dtr-inline">
                            <th>Nama Produk</th>
                            <th>Gambar</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Aksi</th>

                            @foreach ($produk as $prod)
                            <tr>
                                <td>{{$prod->product_name}}</td>
                                <td><img src="{{asset('cover/'.$prod->image)}}" alt="{{$prod->image}}" style="width:150px;"></td>
                                <td>{{$prod->description}}</td>
                                <td>{{$prod->price}}</td>
                                <td>{{$prod->stock}}</td>
                                <td>
                                    <a href="{{route('edit',$prod->id)}}" class="btn btn-primary" style="display: inline; margin-top: 10px; padding: 5px 18px;">Edit</a>
                                    @role('superadmin')
                                    <br>
                                    <form action="{{route('delete',$prod->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" style="margin-top: 10px; padding: 5px 10px">Delete</button>
                                        @endrole
                                    </form>
                                </td>
                            </tr>
                            <br>
                            @endforeach
                        </table>
                    </div>
                    <br>
                    @else
                    @foreach ($produk as $prod)
                    <div class="column" style="display:flex; justify-content: center; align-items:center; margin: 50px 5px">
                        
                        <div class="col-sm-12" style="display:flex; justify-content: center; align-items:center">
                            <div style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);max-width: 300px; margin: auto; text-align: center; font-family: arial;">
                                <img src="{{asset('cover/'.$prod->image)}}" alt="{{$prod->image}}" style="height:100%; width:100%;">
                                <h1>{{$prod->product_name}}</h1>
                                <p>Rp.{{ number_format($prod->price, 0, ',', '.') }}</p>
                                <p>{{$prod->description}}</p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                @endforeach
                @endhasanyrole
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
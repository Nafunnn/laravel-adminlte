@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Products</h1>
@stop

@section('content')
    <p>Selamat datang di halaman products!</p>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Produk</h3>
        </div>
        <div class="card-body">
            <div class="mb-3 d-flex justify-content-end">
                <a href="{{ url('admin/products/create') }}" class="btn btn-primary">Tambah Produk</a>
            </div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Status</th>
                        <th width="10%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>{{ $product->is_active ? 'Aktif' : 'Tidak Aktif' }}</td>
                            <td>
                                <a href="{{ url('admin/products/' . $product->id . '/edit') }}" class="btn btn-primary">Edit</a>
                                <form action="{{ url('admin/products/' . $product->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $products->links() }}
        </div>
    </div>
@stop

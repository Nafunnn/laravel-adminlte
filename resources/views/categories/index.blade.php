@extends('adminlte::page')

@section('title', 'Categories')

@section('content_header')
    <h1>Categories</h1>
@stop

@section('content')
    <p>Selamat datang di halaman categories!</p>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Kategori</h3>
        </div>
        <div class="card-body">
            <div class="mb-3 d-flex justify-content-end">
                <a href="{{ url('admin/categories/create') }}" class="btn btn-primary">Tambah Kategori</a>
            </div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Jumlah Produk</th>
                        <th width="10%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->description }}</td>
                            <td>{{ $category->products->count() }}</td>
                            <td>
                                <a href="{{ url('admin/categories/' . $category->id . '/edit') }}" class="btn btn-primary">Edit</a>
                                <form action="{{ url('admin/categories/' . $category->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $categories->links() }}
        </div>
    </div>
@stop

@extends('adminlte::page')

@section('title', 'Edit Category')

@section('content_header')
    <h1>Edit Category</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Kategori</h3>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/categories/' . $category->id) }}" method="POST">
                @csrf
                @method('PUT')
                @csrf
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Nama Kategori</label>
                        <input type="text" name="name" class="form-control" placeholder="Masukkan nama kategori" value="{{ old('name', $category->name) }}">
                        @error('name')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea name="description" class="form-control" placeholder="Masukkan deskripsi kategori">{{ old('description', $category->description) }}</textarea>
                        @error('description')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="{{ url('admin/categories') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@stop

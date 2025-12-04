@extends('adminlte::page')

@section('title', 'Create Product')

@section('content_header')
    <h1>Create Product</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Produk</h3>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/products') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Nama Produk</label>
                        <input type="text" name="name" class="form-control" placeholder="Masukkan nama produk" value="{{ old('name') }}">
                        @error('name')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea name="description" class="form-control" placeholder="Masukkan deskripsi produk">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="price" class="form-label">Harga</label>
                        <input type="number" name="price" class="form-control" placeholder="Masukkan harga" value="{{ old('price') }}">
                        @error('price')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-2">
                        <label for="stock" class="form-label">Stok</label>
                        <input type="number" name="stock" class="form-control" placeholder="Masukkan jumlah stok" value="{{ old('stock') }}">
                        @error('stock')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label for="category_id" class="form-label">Kategori</label>
                        <select name="category_id" class="form-control">
                            <option value="">Pilih kategori</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id')==$category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-2">
                        <label for="image" class="form-label">Gambar</label>
                        <input type="file" name="image" class="form-control" accept="image/*">
                        @error('image')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-2">
                        <label for="is_active" class="form-label">Status</label>
                        <select name="is_active" class="form-control">
                            <option value="1" {{ old('is_active')==1 ? 'selected' : '' }}>Aktif</option>
                            <option value="0" {{ old('is_active')==0 ? 'selected' : '' }}>Tidak Aktif</option>
                        </select>
                        @error('is_active')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="{{ url('admin/products') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@stop

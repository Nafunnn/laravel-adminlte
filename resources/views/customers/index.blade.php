@extends('adminlte::page')

@section('title', 'Customers')

@section('content_header')
    <h1>Customers</h1>
@stop

@section('content')
    <p>Selamat datang di halaman customers!</p>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Customer</h3>
        </div>
        <div class="card-body">
            <div class="mb-3 d-flex justify-content-end">
                <a href="{{ url('admin/customers/create') }}" class="btn btn-primary">Tambah Customer</a>
            </div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Zip</th>
                        <th>Country</th>
                        <th>Notes</th>
                        <th width="10%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($customers as $customer)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->phone }}</td>
                            <td>{{ $customer->address }}</td>
                            <td>{{ $customer->city }}</td>
                            <td>{{ $customer->state }}</td>
                            <td>{{ $customer->zip }}</td>
                            <td>{{ $customer->country }}</td>
                            <td>{{ $customer->notes }}</td>
                            <td>
                                <a href="{{ url('admin/customers/' . $customer->id . '/edit') }}" class="btn btn-primary">Edit</a>
                                <form action="{{ url('admin/customers/' . $customer->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="11" class="text-center">Data customer tidak ditemukan</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $customers->links() }}
        </div>
    </div>
@stop

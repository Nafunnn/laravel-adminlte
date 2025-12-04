@extends('adminlte::page')

@section('title', 'Profile')

@section('content_header')
    <h1>Profile</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            <div class="mb-3">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="mb-3">
                @include('profile.partials.update-password-form')
            </div>
        </div>
    </div>
@stop
@extends('dashboard.layouts.app')

@section('container')
    @include('dashboard.partials.card')
    <h1 class="h4 d-flex justify-content-center">Welcome Back, {{ auth()->user()->name }}.</h1>
@endsection

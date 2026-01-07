@extends('layouts.layout')

@section('title')
    admin-dashboard
@endsection

@section('content')
    <x-navbar :credential="Auth::guard('admin')->user()" />
@endsection

@extends('layouts.layout')

@section('title')
    users-dashboard 
@endsection

@section('content')
    <x-navbar :credential="Auth::user()" />
@endsection
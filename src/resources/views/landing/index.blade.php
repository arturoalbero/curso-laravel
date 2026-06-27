@extends('landing.layouts.landing')
@section('title', 'Inicio')
@section('header')
    <h1>Empresa fantástica</h1>
    <h2>Compartimos nuestra fantasía contigo</h2>
@endsection
@section('content')
<img src="{{ asset('assets/images/empresa-fantastica.png') }}" alt="Empresa" width="70%%">
    
@endsection
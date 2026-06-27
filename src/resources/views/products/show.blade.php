@extends('layouts.app')

@section('title', 'Detalle del producto')

@section('content')
    <h2>{{ $product->name }}</h2>
    <p>{{ $product->description }}</p>
    <p>Precio: {{ $product->price }}</p>
    <p>Stock: {{ $product->stock }}</p>
    <a href="{{ route('products.index') }}">Volver</a>
@endsection
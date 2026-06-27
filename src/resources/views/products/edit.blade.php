@extends('layouts.app')

@section('title', 'Editar producto')

@section('content')
<h2>Editar Producto</h2>
<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <label>Nombre:</label>
    <input type="text" name="name" value="{{ old('name', $product->name) }}" required>
    @error('name')
    <small style="color:red">{{ $message }}</small>
    @enderror

    <label>Descripción:</label>
    <textarea name="description" required>{{ old('description', $product->description) }}</textarea>
    @error('description')
    <small style="color:red">{{ $message }}</small>
    @enderror

    <label>Precio:</label>
    <input type="number" name="price" step="0.01" value="{{ old('price', $product->price) }}" required>
    @error('price')
    <small style="color:red">{{ $message }}</small>
    @enderror

    <label>Stock:</label>
    <input type="number" name="stock" value="{{ old('stock', $product->stock) }}">
    @error('stock')
    <small style="color:red">{{ $message }}</small>
    @enderror

    <button type="submit">Actualizar</button>
    <a href="{{ route('products.index') }}">Cancelar</a>
</form>
@endsection
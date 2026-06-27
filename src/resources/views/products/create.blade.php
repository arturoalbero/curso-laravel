@extends('layouts.app')

@section('title', 'Crear Nuevo producto')

@section('content')
<h2>Crear Producto</h2>
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    
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
    <input type="text" name="name" required value="{{ old('name') }}">
    @error('name')
    <small style="color:red">{{ $message }}</small>
    @enderror

    <label>Descripción:</label>
    <textarea name="description" required>{{ old('description') }}</textarea>
    @error('description')
    <small style="color:red">{{ $message }}</small>
    @enderror

    <label>Precio:</label>
    <input type="number" name="price" required step="0.01" value="{{ old('price') }}">
    @error('price')
    <small style="color:red">{{ $message }}</small>
    @enderror

    <label>Stock:</label>
    <input type="number" name="stock" value="{{ old('stock') }}">
    @error('stock')
    <small style="color:red">{{ $message }}</small>
    @enderror

    <button type="submit">Guardar</button>
    <a href="{{ route('products.index') }}">Cancelar</a>
</form>
@endsection
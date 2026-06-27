@extends('layouts.app')

@section('title', 'Listado de Productos')

@section('content')
    <h2>Listado de Productos</h2>

    @include('_partials.messages')

    @forelse ($products as $product)
        <div >
            <h3><a  href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a></h3>
            <p>{{ $product->description }}</p>
            <small>{{ 'price: '.$product->price }}</small>
            <small>{{ 'stock: '.$product->stock }}</small>
            <div>
                <a  href="{{ route('products.edit', $product->id) }}">Editar</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </div>
        </div>
    @empty
        <p>No hay productos disponibles.</p>
    @endforelse
@endsection




@extends('landing.layouts.landing')
@section('title', 'Servicios')

@section('header')
    <h1>Servicios</h1>
@endsection

@section('content')
    @component('components.card')
        @slot('title', 'Ciudad 1');
        @slot('content')
            <p>Viaje a la ciudad maravillosa</p>
        @endslot
        @slot('ciudad','ciudad-1')
        @slot('duration', '3 días')
        @slot('price', '250€')
        @slot('link','https://ayto.mutxamel.org/' )
    @endcomponent
    @component('components.card')
        @slot('title', 'Ciudad 2');
        @slot('content')
            <p>Escapada a la ciudad fantástica</p>
        @endslot
        @slot('ciudad','ciudad-2')
        @slot('duration', '5 días')
        @slot('price', '550€')
        @slot('link','https://turismosantjoan.es/' )
    @endcomponent
    @component('components.card')
        @slot('title', 'Ciudad 3');
        @slot('content')
            <p>Piérdete en la ciudad de ensueño</p>
        @endslot
        @slot('ciudad','ciudad-3')
        @slot('duration', '15 días')
        @slot('price', '3500€')
        @slot('link','https://www.elcampello.es/' )
    @endcomponent

@endsection
@extends('landing.layouts.landing')
@section('title', 'Contacto')
@section('header')
    <h1>Contacto</h1>
@endsection
@section('content')
    <div class="contact-page">

        
        <div>
            <img src="{{ asset('assets/images/mapa.png') }}" alt="Mapa de localización" style="width:50%">
        </div>

        
        <div>
            <a href="tel:+34965000000" class="card">
                <p><strong>Teléfono</strong></p>
                <p>+34 965 000 000</p>
                <p>Lun–Vie, 9:00–18:00</p>
            </a>

            <a href="mailto:hola@empresa.com" class="card">
                <p><strong>Email</strong></p>
                <p>hola@empresafantastica.com</p>
                <p>Respondemos en 24h</p>
            </a>

            <div class="card">
                <p><strong>Dirección</strong></p>
                <p>Calle Fantástica, 12</p>
                <p>03001 Alicante, España</p>
            </div>

        </div>
    </div>
@endsection
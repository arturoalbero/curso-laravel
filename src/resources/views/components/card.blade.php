<div class="card">
    <h2>{{ $title }}</h2>

    <img src="{{ asset('assets/images/'.$ciudad .'.png') }}" alt="Servicio" width="128px">
    <p> Precio: {{ $price }}
    <p> Duración: {{ $duration }}
    <p>{{ $content }}</p>
    
    <form action={{ $link }} method="get">

        <button type="submit"> Más información </button>
    </form>

</div>
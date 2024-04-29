<x-layout title="Consulta">
<section class="container">
    <div class="consulta">
        <h1>Consulta</h1>
        <ul class="list-consulta">
            @foreach ($materiais as $material)
                <li class="li-consulta">{{ $material->nome }}: {{ $material->quantidade }}</li>
            @endforeach
        </ul>
        <a class="btn btn-primary" role="button" href="{{ route('login') }}">Login</a>
    </div>
</section>
</x-layout>
<x-layout title="Consulta">
<section class="container">
    <div class="consulta">
        <h1>Consulta</h1>

        <ul class="list-consulta">
            @foreach ($materiais as $material)
                <li class="li-consulta">{{ $material->nome }}: {{ $material->quantidade }}</li>
                <div class="form-buttons">
                    <a class="btn btn-success" role="button" href="{{ route('editar.material', ['material' => $material->id])}}">Editar</a>

                    <form action="{{ route('editar.deletar', ['material' => $material->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Tem certeza que deseja apagar esse Material?')">Apagar</button>
                    </form>
                </div>
            @endforeach
        </ul>
        <a class="btn btn-primary" href="/Cadastrar" role="button">Cadastrar</a>
        <div style="margin-top: 10px;">
            <a style="text-decoration: none;" href="/Consulta/visitante" role="button">Logout</a>
        </div>
    </div>
</section>
</x-layout>
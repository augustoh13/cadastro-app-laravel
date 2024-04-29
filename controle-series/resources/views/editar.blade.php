<x-layout title="Editar">
    <section class="container">
        <div class="consulta">
            <h1>Editar</h1>
            <form action="{{ route('editar.salvar', ['material' => $material->id]) }}" method="POST">
                @csrf
                @method('PUT')

                <div>
                    <label for="nome" class="form-label disabled">MATERIAL</label>
                    <input type="text" id="nome" name="nome" class="form-control disabled" value="{{ $material->nome }}">
                    <label for="quantidade" class="form-label">NOVA QUANTIDADE</label>
                    <input type="number" id="quantidade" name="quantidade" class="form-control" value="{{ $material->quantidade }}">
                </div>
                <button type="submit" class="btn btn-primary">Atualizar</button>
            </form>
        </div>
    </section>
</x-layout>
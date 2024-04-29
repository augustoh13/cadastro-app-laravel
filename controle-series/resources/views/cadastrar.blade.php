<x-layout title="Cadastrar">
<section class="container">
    <div class="consulta">
        <h1>Cadastrar</h1>
        <form action="/Cadastrar/salvar" method="post">
            @csrf
            <div>
                <label for="nome" class="form-label">MATERIAL</label>
                <input type="text" id="nome" name="nome" class="form-control">
                <label for="quantidade" class="form-label">QUANTIDADE</label>
                <input type="number" id="quantidade" name="quantidade" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Adicionar</button>
        </form>
    </div>
</section>
</x-layout>
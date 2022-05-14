
<x-layout title="Nova série">

    <form action="/series/salvar" method="post">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome: </label>
            <input class="form-control" type="text" id="nome" name="nome">
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</x-layout>

@extends("layout")

@section("title", "Editar Cliente")

@section("content")
    <h1>Editar cliente</h1>
    <form action="{{route("clients.update", $client)}}" method="POST">
        @csrf
        @method("PUT")
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$client->name}}" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="address" name="address" value="{{$client->address}}" required>
        </div>
        <div class="mb-3">
            <label for="observation" class="form-label">Observação</label>
            <textarea class="form-control" id="observation" rows="3"
                      name="observation" required>{{$client->observation}}</textarea>
        </div>
        <button class="btn btn-primary">
            Enviar
        </button>
    </form>
@endsection

@extends("layout")

@section("title", "Detalhes de cliente")

@section("content")
    <div class="card">
        <h5 class="card-header">Detalhes do cliente {{$client->name}}</h5>
        <div class="card-body">
            <p class="card-text"><strong>ID:</strong> {{$client->id}}</p>
            <p class="card-text"><strong>Nome:</strong> {{$client->name}}</p>
            <p class="card-text"><strong>Endereço:</strong> {{$client->address}}</p>
            <p class="card-text"><strong>Observação:</strong> {{$client->observation}}</p>
            <a href="{{route("clients.index")}}" class="btn btn-primary">Voltar</a>
        </div>
    </div>
</div>
@endsection

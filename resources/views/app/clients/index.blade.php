@extends("layout")

@section("title", "Listagem de clientes")

@section("content")
    <h1>Lista de clientes</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Endereço</th>
            <th scope="col">Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clients as $client)
            <tr>
                <th scope="row">{{$client->id}}</th>
                <td><a href="{{route("clients.show", $client)}}">{{$client->name}}</a></td>
                <td>{{$client->address}}</td>
                <td>
                    <a href="{{route("clients.edit", $client)}}" class="btn btn-primary">Editar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{route("clients.create")}}" class="btn btn-success">Novo cliente</a>
@endsection

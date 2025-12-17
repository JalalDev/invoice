@extends('inc.master')
@section('title', "Liste des clients")

@section('content')

    <div class="row mb-5">
        <div class="col-md-6">
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Nouveau client
            </button>
        </div>
        <div class="col-md-6">
            <form action="{{ route('clients.search') }}" method="GET">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" placeholder="Rechercher ..." name="search" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-secondary w-100">Rechercher</button>
                    </div>
                </div>
            </form>
        </div>
    </div>



    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Adresse</th>
                <th>Tel</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($clients as $client)
                <tr>
                    <td>{{ $client->nom }}</td>
                    <td>{{ $client->adresse }}</td>
                    <td>{{ $client->telephone }}</td>
                    <td>{{ $client->email }}</td>
                    <td>
                        <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-sm btn-info">Edit</a>
                        <form action="{{ route('clients.destroy', $client->id) }}" method="post" class="d-inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Pas de client disponible</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $clients->links() }}

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter un client</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="{{ route('clients.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" placeholder="Nom du client" name="nom" required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" placeholder="Tél du client" name="telephone">
                    </div>
                    <div class="form-group mb-3">
                        <input type="email" class="form-control" placeholder="Email du client" name="email">
                    </div>
                    <div class="form-group mb-3">
                        <textarea rows="3" class="form-control" placeholder="Adresse du client" name="adresse"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </form>


            </div>
        </div>
    </div>
    </div>

@endsection


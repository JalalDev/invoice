@extends('inc.master')
@section('title', "Liste des clients")

@section('content')

    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Nouveau client
    </button>

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Adresse</th>
                <th>Tel</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($clients as $client)
                <tr>
                    <td>{{ $client->nom }}</td>
                    <td>{{ $client->adresse }}</td>
                    <td>{{ $client->telephone }}</td>
                    <td>{{ $client->email }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Pas de client disponible</td>
                </tr>
            @endforelse
        </tbody>
    </table>

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


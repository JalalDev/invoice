@extends('inc.master')
@section('title', "Modifier le client")


@section('content')

<form action="{{ route('clients.update', $client->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group mb-3">
        <input type="text" class="form-control" placeholder="Nom du client" name="nom" value="{{ $client->nom }}" required>
    </div>
    <div class="form-group mb-3">
        <input type="text" class="form-control" placeholder="Tél du client" name="telephone" value="{{ $client->telephone }}">
    </div>
    <div class="form-group mb-3">
        <input type="email" class="form-control" placeholder="Email du client" name="email" value="{{ $client->email }}">
    </div>
    <div class="form-group mb-3">
        <textarea rows="3" class="form-control" placeholder="Adresse du client" name="adresse">{{ $client->adresse }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>

@endsection

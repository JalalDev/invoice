@extends('inc.master')
@section('title', "Modifier l'article")


@section('content')

<form action="{{ route('articles.update', $article->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group mb-3">
        <input type="text" class="form-control" placeholder="Intitulé de l'article" name="intitule" value="{{ $article->intitule }}" required>
    </div>
    <div class="form-group mb-3">
        <input type="number" class="form-control" placeholder="Prix de l'article" name="prix" value="{{ $article->prix }}" required>
    </div>
    <div class="form-group mb-3">
        <textarea rows="3" class="form-control" placeholder="Description" name="description">{{ $article->description }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>

@endsection

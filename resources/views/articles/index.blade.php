@extends('inc.master')
@section('title', "Liste des articles")

@section('content')

    <div class="row mb-5">
        <div class="col-md-6">
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Nouvel article
            </button>
        </div>
        <div class="col-md-6"></div>
    </div>

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Intitulé</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($articles as $article)
                <tr>
                    <td>{{ $article->intitule }}</td>
                    <td>{{ $article->description }}</td>
                    <td>{{ $article->prix }}</td>
                    <td>
                        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-sm btn-info">Edit</a>
                        <form action="{{ route('articles.destroy', $article->id) }}" method="post" class="d-inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Pas d'articles disponible</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $articles->links() }}

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter un article</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('articles.store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" placeholder="Intitule de l'article" name="intitule" required>
                        </div>
                        <div class="form-group mb-3">
                            <input type="number" step="0.01" class="form-control" placeholder="Prix de l'article" name="prix">
                        </div>
                        <div class="form-group mb-3">
                            <textarea class="form-control" placeholder="Description" name="description" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </form>


                </div>
            </div>
        </div>
    </div>

@endsection

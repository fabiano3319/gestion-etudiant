@extends('layouts.app')
@section('title', 'Liste des classes')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 mb-0">Gestion des classes</h1>
        <a href="{{ route('classes.create') }}" class="btn btn-primary">Ajouter une classe</a>
    </div>

    <div class="card shadow-sm">
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>Nom</th>
                        <th>Année scolaire</th>
                        <th>Étudiants</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($classes as $classe)
                        <tr>
                            <td>{{ $classe->nom }}</td>
                            <td>{{ $classe->annee_scolaire }}</td>
                            <td>{{ $classe->etudiants_count }}</td>
                            <td class="text-end">
                                <a href="{{ route('classes.edit', $classe) }}" class="btn btn-warning btn-sm">Modifier</a>
                                <form action="{{ route('classes.destroy', $classe) }}" method="POST" class="d-inline"
                                      onsubmit="return confirm('Supprimer cette classe ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted">Aucune classe pour le moment.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
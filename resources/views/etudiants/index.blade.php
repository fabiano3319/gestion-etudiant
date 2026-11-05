@extends('layouts.app')
@section('title', 'Liste des étudiants')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h3 mb-0">Gestion des étudiants</h1>
    <a href="{{ route('etudiants.create') }}" class="btn btn-primary">Ajouter un étudiant</a>
</div>

<div class="card shadow-sm">
    <div class="table-responsive">
        <table class="table table-striped table-hover align-middle mb-0">
            <thead class="table-dark">
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date de naissance</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($etudiants as $etudiant)
                <tr>
                    <td>{{ $etudiant->nom }}</td>
                    <td>{{ $etudiant->prenom }}</td>
                    <td>{{ $etudiant->date_naissance }}</td>
                    <td class="text-end">
                        <a href="{{ route('etudiants.show', $etudiant) }}" class="btn btn-info btn-sm">Voir</a>
                        <a href="{{ route('etudiants.edit', $etudiant) }}" class="btn btn-warning btn-sm">Modifier</a>
                        <form action="{{ route('etudiants.destroy', $etudiant) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Supprimer cet étudiant ?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
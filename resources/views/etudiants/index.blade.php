@extends('layouts.app')

@section('content')
    @if(session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif

    <a href="{{ route('etudiants.create') }}" class="btn btn-primary">Ajouter un étudiant</a>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de naissance</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($etudiants as $etudiant)
                <tr>
                    <td>{{ $etudiant->nom }}</td>
                    <td>{{ $etudiant->prenom }}</td>
                    <td>{{ $etudiant->date_naissance }}</td>
                    <td>
                        <a href="{{ route('etudiants.show', $etudiant) }}">Voir</a>
                        <a href="{{ route('etudiants.edit', $etudiant) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('etudiants.destroy', $etudiant) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Supprimer cet étudiant ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5">Aucun étudiant enregistré.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection
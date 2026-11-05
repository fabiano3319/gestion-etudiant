@extends('layouts.app')
@section('title', 'Liste des étudiants')

@section('content')
    <h2>Modifier l'étudiant</h2>

    @if($errors->any())
        <div class="alert" style="background:#f8d7da;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('etudiants.update', $etudiant) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nom</label>
        <input type="text" name="nom" value="{{ old('nom', $etudiant->nom) }}">

        <label>Prénom</label>
        <input type="text" name="prenom" value="{{ old('prenom', $etudiant->prenom) }}">

        <label>Date de naissance</label>
        <input type="date" name="date_naissance" value="{{ old('date_naissance', $etudiant->date_naissance) }}">

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
@endsection
@extends('layouts.app')

@section('content')
    <h2>Détails de l'étudiant</h2>

    <p><strong>Nom :</strong> {{ $etudiant->nom }}</p>
    <p><strong>Prénom :</strong> {{ $etudiant->prenom }}</p>
    <p><strong>Date de naissance :</strong> {{ $etudiant->date_naissance }}</p>

    <a href="{{ route('etudiants.index') }}" class="btn btn-primary">Retour à la liste</a>
@endsection
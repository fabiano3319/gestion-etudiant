@extends('layouts.app')
@section('title', 'Ajouter une classe')

@section('content')
    <h1 class="h3 mb-3">Ajouter une classe</h1>

    <form action="{{ route('classes.store') }}" method="POST" class="card card-body shadow-sm">
        @csrf
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" id="nom" name="nom" value="{{ old('nom') }}"
                   class="form-control @error('nom') is-invalid @enderror">
            @error('nom') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label for="annee_scolaire" class="form-label">Année scolaire</label>
            <input type="text" id="annee_scolaire" name="annee_scolaire" placeholder="2025-2026"
                   value="{{ old('annee_scolaire') }}"
                   class="form-control @error('annee_scolaire') is-invalid @enderror">
            @error('annee_scolaire') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <a href="{{ route('classes.index') }}" class="btn btn-secondary">Annuler</a>
        </div>
    </form>
@endsection
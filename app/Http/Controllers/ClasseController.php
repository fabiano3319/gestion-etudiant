<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    public function index()
    {
        $classes = Classe::withCount('etudiants')->get();
        return view('classes.index', compact('classes'));
    }

    public function create()
    {
        return view('classes.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nom' => 'required|string|max:255',
            'annee_scolaire' => 'required|string|max:20',
        ]);

        Classe::create($data);

        return redirect()->route('classes.index')
            ->with('success', 'Classe ajoutée avec succès.');
    }

    public function edit(Classe $classe)
    {
        return view('classes.edit', compact('classe'));
    }

    public function update(Request $request, Classe $classe)
    {
        $data = $request->validate([
            'nom' => 'required|string|max:255',
            'annee_scolaire' => 'required|string|max:20',
        ]);

        $classe->update($data);

        return redirect()->route('classes.index')
            ->with('success', 'Classe modifiée avec succès.');
    }

    public function destroy(Classe $classe)
    {
        $classe->delete();

        return redirect()->route('classes.index')
            ->with('success', 'Classe supprimée.');
    }
}

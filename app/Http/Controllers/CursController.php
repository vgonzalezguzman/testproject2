<?php

namespace App\Http\Controllers;

use App\Models\Curs;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CursController extends Controller
{
    public function index()
    {
        $cursos = Curs::all();
        return Inertia::render('cursos', [
            'cursos' => $cursos,
        ]);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nom' => 'required|string|max:150',
            'Etapa' => 'required|in:ESO,BTX,CF',
            'Descripcio' => 'required|string|max:1000',
            'Actiu' => 'required|boolean',
        ]);

        $curs = Curs::create($request->all());

        return response()->json($curs, 201);
    }

    public function show($id)
    {
        $curs = Curs::findOrFail($id);
        return response()->json($curs);
    }

    public function edit($id)
    {
        // No need to return anything for Vue.js frontend
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Nom' => 'required|string|max:150',
            'Etapa' => 'required|in:ESO,BTX,CF',
            'Descripcio' => 'required|string|max:1000',
            'Actiu' => 'required|boolean',
        ]);

        $curs = Curs::findOrFail($id);
        $curs->update($request->all());

        return response()->json($curs, 200);
    }

    public function destroy($id)
    {
        $curs = Curs::findOrFail($id);
        $curs->delete();

        return response()->json(null, 204);
    }
}

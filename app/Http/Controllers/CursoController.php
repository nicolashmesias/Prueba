<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    function index (){
        $curso = Curso::all();
        return view('cursos.index', compact('curso'));
    }
    function show (Curso $curso){
        return view('cursos.show', compact('curso'));

    }

    function create () {
        return view('cursos.create');
    }
    function store (Request $request) { 
        Curso::create($request->all());
        return redirect('/cursos')->with('success', 'Curso agregado correctamente.');
    }
    function edit ($id) {
    $curso = Curso::find($id);
    return view('curso.edit', compact('edit'));
    }
    function update (Request $request, $id) {
        $curso = Curso::find($id);
        $curso -> update($request->all());
        return redirect('/cursos')->with('success', 'Curso actualizado correctamente.');

    }
    function destroy ($id) {
        Curso::find($id)->delete();
        return redirect('/cursos')->with('success', 'Curso eliminado correctamente.');

    }
    
}

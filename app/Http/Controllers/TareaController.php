<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;


class TareaController extends Controller
{
    public function tareas()
    {
        $tareas = Tarea::all();
        return view('tareas', compact('tareas'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        auth()->user()->tareas()->create([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->has('status') ? true : false
        ]);
        return redirect('/tareas');
    }

    public function edit(Tarea $tarea)
    {
        return view('edit', compact('tarea'));
    }

    public function update(Request $request, Tarea $tarea)
    {
        $tarea->update([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->has('status') ? true : false
        ]);
        return redirect('/tareas');
    }

    public function destroy(Request $request, Tarea $tarea)
    {
        $tarea->delete();
        return redirect()->route('tareas');
    }
}

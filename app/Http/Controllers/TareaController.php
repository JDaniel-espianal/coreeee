<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;
use App\Http\Requests\TareaRequest;


class TareaController extends Controller
{
    public function tareas()
    {
        $tareas = Tarea::where('status', 0)->get();
        return view('tareas', compact('tareas'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(TareaRequest $request)
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

    public function update(TareaRequest $request, Tarea $tarea)
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

    public function terminadas()
    {
        $terminadas = Tarea::where('status', 1)->get();
        return view('terminadas', compact('terminadas'));
    }
}

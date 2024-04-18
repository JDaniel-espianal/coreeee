<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;

class TareaController extends Controller
{
    public function index()
    {
        
        $tareas = auth()->user()->tareas;
        return view('tareas.index', compact('tareas'));
    }

    public function store(Request $request)
    {
        
        auth()->user()->tareas()->create([
            'title' => $request->title,
            'description' => $request->description,
            'status' => false
        ]);

        return redirect('/tareas');
    }

    public function update(Request $request, Tarea $tarea)
    {
        
        $tarea->update(['status' => $request->status]);

        return redirect('/tareas');
    }
}

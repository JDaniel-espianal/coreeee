@extends('layouts.main')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <H1>Hola {{$user->name}}</H1>
            <h4> Tu correo electronico es: {{$user->email}}</h4>
        </div>
    </div>
        <h2 class="m-3">Tareas creadas por ti.</h2>
        <a href="{{ route('create') }}" class="btn btn-primary m-3">Crear nueva tarea.</a>
        <div class="row row-cols-1 row-cols-md-3 g-4 m-3">
            @forelse($tareas as $tarea)
                <div class="col card text-bg-secondary me-4" style="max-width: 18rem;">
                    <div class="card-header"><h5>{{ $tarea->title }}</h5></div>
                    <div class="card-body">
                        <p>{{ $tarea->description }}</p>
                        <p>{{ $tarea->status == 1 ? 'Terminada' : 'Sin Terminar' }}</p>
                        <p>Creada por: <strong>{{ $tarea->user->name }}</strong></p>
                        <div class="d-flex">
                            <a href="{{ route('edit', ['tarea' => $tarea->id]) }}" class="btn btn-primary m-2">Editar</a>
                            @if ($tarea->status == 1)
                                <form method="POST" action="{{ route('destroy', $tarea->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-warning m-2" value="Delete" />
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <p>No hay datos.</p>
            @endforelse
        </div>
    </div>
@endsection
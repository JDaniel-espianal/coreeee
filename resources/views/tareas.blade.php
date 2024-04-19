@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="container">
            <a href="{{ route('create') }}" class=" btn btn-secondary m-3">Crear nueva tarea.</a>
            <div >
                <ul>
                    @forelse($tareas as $tarea)
                        <div class="card m-3" style="width: 18rem;">
                            <li class="card-header"><h5>{{ $tarea->title }}</h5></li>
                            <div class="card-body border border-1 ">
                                <li><p>{{ $tarea->description }}</p></li>
                                <li><p>{{ $tarea->status == 1 ? 'Terminada' : 'Sin Terminar' }}</p></li>
                                <li><p>Creada por: <strong>{{ $tarea->user->name }} </strong> </p></li>
                                <div>
                                    <a href="{{ route('edit', ['tarea' => $tarea->id]) }}" class="btn btn-primary mb-4">Editar</a>
                                    @if ($tarea->status == 1)
                                        <form method="POST" action="{{ route('destroy', $tarea->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="btn btn-primary mb-4" value="Delete" />
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </div>  
                    @empty
                        <p>No data</p>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
@endsection
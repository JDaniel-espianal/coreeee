@extends('layouts.main')

@section('content')
<div class="container">
    
    <a href="{{ route('tareas') }}" class="btn btn-primary m-4"> Regresar a tareas </a>
    <div>
        <div class="container mt-4 w-50">
            <h3>Editar tarea</h3>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('update', $tarea->id) }}">
                @method('PUT')
                @csrf
                <div class="mb-3 ">
                    <label for="titlelabel" class="form-label">Title.</label>
                    <input type="text" class="form-control" id="titleemailInput" name="title" required value="{{ $tarea->title }}">
                </div>
                <div class="mb-3">
                    <label for="descriptionlabel" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" name="description" required value="{{ $tarea->description }}">
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="statuscheck" name="status" checked>
                    <label class="form-check-label" for="flexSwitchCheckChecked">Tarea terminada</label>
                </div>
                <button type="submit" class="btn btn-primary mb-4">Actualizar</button>
            </form>
        </div>
    </div>
</div>
@endsection
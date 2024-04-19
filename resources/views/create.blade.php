@extends('layouts.main')

@section('content')
<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <a href="{{ route('tareas') }}" class="btn btn-primary m-4"> Regresar a tareas </a>
    <div>
        <div class="container mt-4 w-50">
            <h3>Crear una nueva tarea</h3>
            <form method="POST" action="{{ route('store') }}">
                @csrf
                <div class="mb-3 ">
                    <label for="titlelabel" class="form-label">Title.</label>
                    <input type="text" class="form-control" id="titleemailInput" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="descriptionlabel" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" name="description" required>
                </div>
                <div class="mb-3 form-check"> 
                    <input type="checkbox" class="form-check-input" id="statuscheck" name="status">
                    <label class="form-check-label" for="statuslabel">Terminada?</label>
                </div>
                <button type="submit" class="btn btn-primary mb-4">Crear</button>
            </form>
        </div>
    </div>
</div>
        

@endsection
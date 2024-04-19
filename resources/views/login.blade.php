@extends('layouts.main')

@section('content')
<div class="container mt-4 w-50">
    <form method="POST" action="{{ route('inicio-session') }}">
        @csrf
        <div class="mb-3 ">
            <label for="emailInput" class="form-label">Email</label>
            <input type="email" class="form-control" id="emailInput" name="email" required>
        </div>
        <div class="mb-3">
            <label for="passwordInput" class="form-label">Password</label>
            <input type="password" class="form-control" id="paswordInput" name="password" required>
        </div>
        <div class="mb-3 form-check"> 
            <input type="checkbox" class="form-check-input" id="rememberCheck" name="remember">
            <label class="form-check-label" for="rememberCheck"> Manten la seseion abierta </label>
        </div>
        <button type="submit" class="btn btn-primary mb-4">Inicia</button>
    </form>
    <div> 
        <p>¿Aun no tienes cuenta?</p>
        <a class="btn btn-primary mb-4" href="{{ route('register') }}">Registrate ya!</a>
    </div>
</div>
@endsection
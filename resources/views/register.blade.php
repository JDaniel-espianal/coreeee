@extends('layouts.main')

@section('content')
    <div class="container-fluid" style="width: 100%; height: 700px;">
        <div class="container mt-4">
            <form method="POST" action="{{ route('auth-register') }}">
                @csrf
                <div class="mb-3">
                    <label for="emailInput" class="form-label">Email</label>
                    <input type="email" class="form-control" id="emailInput" name="email" required autocomplete="disable">
                </div>
                <div class="mb-3">
                    <label for="passwordInput" class="form-label">Password</label>
                    <input type="password" class="form-control" id="paswordInput" name="password" required autocomplete="disable">
                </div>
                <div class="mb-3"> 
                    <label for="userInput" class="form-label">Name</label>
                    <input type="text" class="form-control" id="userInput" name="name" autocomplete="disable">
                </div>
                <button type="submit " class="btn btn-primary mb-4">Registrate</button>
            </form>
            <div> 
                <p>¿Ya estas registrado?</p>
                <a class="btn btn-primary mb-4" href="{{ route('login') }}">Inicia</a>
            </div>

        </div>

    </div>
@endsection
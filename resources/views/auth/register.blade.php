@extends('layouts.app')

@section('content')
<div class="container content">
    
    <h1 class="backg" >Créer un compte</h1>

                    <form method="POST" action="{{ route('register') }}" class="backg">
                        @csrf
                            <label for="name" >Le Nom </label>
                            <div class="mb-3">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="email" > Address E-Mail </label>
                            <div class="mb-3">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="password">Mot De Passe</label>
                            <div class="mb-3">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="password-confirm" >Confirmez Le Mot De Passe</label>
                            <div class="mb-3">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-outline-dark">
                                Créer
                                </button>
                            </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection

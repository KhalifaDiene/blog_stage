@extends('layouts.auth.app')

@section('title')
    Inscription
@endsection

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="log-in-pop">
    <div class="log-in-pop-left">
        <h1>Bienvenue</h1>
        <p>Inscription pour accéder à la partie Admin de l'application</p>
        <p><strong>NB</strong> : Seulement réservé aux Administrateurs</p>
        <div>
            <img src=" {{ asset('assets/images/logo3.png') }} " alt="">
        </div>

    </div>
    <div class="log-in-pop-right text-center">
        <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
        </a>
        <h4>Create an Account</h4>
        <p>Don't have an account? Create your account. It's take less then a minutes</p>
        <form method="POST" action="{{ route('register') }}" class="s12">
            @csrf
            <input type="hidden" name="profil" value="admin">
            <div>
                <div class="input-field s12">
                    <input type="text" id="name" class="@error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" name="name">
                    <label for="name">Entrez votre nom</label>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div>
                <div class="input-field s12">
                    <input type="email" id="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" name="email">
                    <label for="email">Entrez votre email</label>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div>
                <div class="input-field s12">
                    <input type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    <label for="password">Entrez votre mot de passe</label>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div>
                <div class="input-field s12">
                    <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                    <label for="password-confirm">Confirmez votre mot de passe</label>
                </div>
            </div>
            <div>
                <div class="input-field s4">
                    <input type="submit" value="S'inscrire" class="waves-effect waves-light log-in-btn"> </div>
            </div>
        </form>
    </div>
</div>
@endsection

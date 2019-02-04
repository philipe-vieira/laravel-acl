@extends('auth.templates.template')

@section('content')
    <form class="login form" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <input id="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                   name="email" value="{{ old('email') }}" placeholder="Informe o seu e-mail" required
                   autofocus>

            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
            @endif
        </div>

        <div class="form-group">
            <input id="password" type="password"
                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                   placeholder="Informe a sua senha" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
            @endif
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-login">
                {{ __('Login') }}
            </button>

            <div class="text-right">
                @if (Route::has('password.request'))
                    <a class="recuperar" href="{{ route('password.request') }}">
                        {{ __('Esqueceu sua senha?') }}
                    </a>
                @endif
            </div>

        </div>
    </form>
@endsection

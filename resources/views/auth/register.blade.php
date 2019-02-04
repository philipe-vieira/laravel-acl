@extends('auth.templates.template')

@section('content')
    <form class="login form" method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group">
            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                   value="{{ old('name') }}"
                   placeholder="Informe o seu nome" required autofocus>

            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
            @endif
        </div>

        <div class="form-group ">
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                   name="email" value="{{ old('email') }}"
                   placeholder="Informe o seu email" required>

            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
            @endif
        </div>

        <div class="form-group ">
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                   name="password"
                   placeholder="Informe a sua senha" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
            @endif
        </div>

        <div class="form-group ">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                   placeholder="Confirme a sua senha" required>
        </div>

        <div class="form-group ">
            <button type="submit" class="btn btn-login">
                {{ __('Register') }}
            </button>
        </div>
    </form>
@endsection

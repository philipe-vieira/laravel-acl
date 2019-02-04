@extends('auth.templates.template')

@section('content')
    <form class="form login" method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="form-group ">
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                   name="email" value="{{ $email ?? old('email') }}"
                   placeholder="Informe o seu e-mail" required autofocus>

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
                   placeholder="Confirme sua senha" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-login">
                {{ __('Resetar Senha') }}
            </button>
        </div>
    </form>
@endsection

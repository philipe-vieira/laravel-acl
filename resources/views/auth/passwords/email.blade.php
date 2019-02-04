@extends('auth.templates.template')

@section('content')
    <div class="col-12">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </div>

    <form class="login form" method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="form-group">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                       name="email" value="{{ old('email') }}"  placeholder="Informe o seu e-mail" required>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
        </div>

        <div class="form-group ">
                <button type="submit" class="btn btn-login">
                    <i class="fa fa-btn fa-envelope"></i> {{ __('Enviar link de recuperação de senha.') }}
                </button>
        </div>
    </form>
@endsection

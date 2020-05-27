@extends('auth.layout')

@push('scripts')
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card card-default">
                <div class="card-header">Reset Password</div>

                <!-- Esto es una libreria de laravel que installé para que los
                    usuarios cambien la contraseña temporal una vez que ingresen-->
                <!-- De esta forma se evita que las cookies sean interceptadas por terceros una vez que el usuario cierra la sesion despues de reset password
                https://github.com/laracasts/flash-->
                <!-- EL usuario debe de ingresar a la cuenta y cambiar manualmente la contraseña por que sino caundo intente ingresar nuevamente no se le permitira-->
                <!-- En mensaje Flash se lo agregue al TRAIT del vendor en Illuminate/Foundation/Auth/ResetPassword.php-->
                <!-- Abajo se ejecuta un script para conseguir los layouts-->
                <!-- El CSS se lo agregue arriba atravez de un PUSH-->
                @include('flash::message')

                <!-------------BODY----------------->
                <div class="card-body">

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <!--- Este es el token que se genero para poder entrar en la aplicacion-->
                        <input type="hidden" name="token" value="{{ $token }}">

                        <!--------------------FORM-ROW------------------->
                        <div class="form-group row">

                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                            <!-------COL--------->
                            <div class="col-md-6">

                                <input id="email" type="email" class="form-control {{ $errors->has('email') ? ' is-danger' : '' }}" 
                                        name="email" value="{{ $email }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <!------- /COL--------->

                        </div>
                        <!-------------------- /FORM-ROW ------------------->



                        <!-------------------- FORM-ROW ------------------->
                        <div class="form-group row">

                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <!-------COL--------->
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <!------- /COL--------->

                        </div>
                        <!-------------------- /FORM-ROW ------------------->


                        <!-------------------- FORM-ROW ------------------->
                        <div class="form-group row">

                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                            <!------- COL--------->
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <!------- /COL--------->

                        </div>
                        <!-------------------- /FORM-ROW ------------------->


                        <!----------BUTTON---------------->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Reset Password
                                </button>
                            </div>
                        </div>
                        <!---------- /BUTTON---------------->

                    </form>
                </div>
                <!-------------BODY----------------->

            </div>
        </div>
    </div>
</div>

<!-- Este script permite ejecutar la ventana modal para el mensaje de cambiar la contraseña-->
<script>
    $('#flash-overlay-modal').modal();
</script>

@endsection

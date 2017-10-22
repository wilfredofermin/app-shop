@extends('layouts.principal')
@section('content')
@section('body-class','signup-page')
<div class="header header-filter" style="background-image: url('{{asset('img/city.jpg')}}'); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="card card-signup">
                    <form class="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="header header-primary text-center">
                            <h4>NUEVO REGISTRO</h4>
                         <!--   <div class="social-line">
                                <a href="#pablo" class="btn btn-simple btn-just-icon">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                                <a href="#pablo" class="btn btn-simple btn-just-icon">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#pablo" class="btn btn-simple btn-just-icon">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </div>-->
                        </div>
                        <p class="text-divider">Ingresa tus datos</p>
                        <div class="content">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">face</i>
                                </span>
                                <div class="form-group is-empty">
                                    <input type="text" name="name" value="{{ old('name') }}"  class="form-control" placeholder="Nombre completo..." required autofocus><span class="material-input"></span>
                                </div>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">email</i>
                                </span>
                                <input id="email" type="email" class="form-control" name="email" placeholder="Correo electronico..." value="{{ old('email') }}" required >
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña..."  required>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                                <input id="password" type="password" class="form-control" name="password_confirmation"  placeholder="Confirmar contraseña..."  required>
                            </div>
                        </div>
                        <div class="footer text-center">
                            <button type="submit" class="btn btn-simple btn-primary btn-lg">REGISTRAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

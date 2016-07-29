@extends('layouts.header')

@section('conteudo')
    <div id="" class="container" style="margin: 52px auto;">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 panel"
                 style="padding: 10px; border-color: #e7e7e7; background-color: #F8F8F8">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6 col-sm-6 form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <input class="form-control" id="name" name="name" type="text" value="{{ old('name') }}"
                                   placeholder="Nome"
                                   aria-describedby=""/>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="col-md-6 col-sm-6 form-group{{ $errors->has('sobrenome') ? ' has-error' : '' }}">
                            <input class="form-control" id="sobrenome" name="sobrenome" type="text"
                                   value="{{ old('sobrenome') }}" placeholder="Sobrenome"
                                   aria-describedby=""/>
                         @if ($errors->has('sobrenome'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('sobrenome') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                                   placeholder="Email"
                                   aria-describedby=""/>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                       <!-- <div class="col-md-6 col-sm-6 form-group{{ $errors->has('confirmEmail') ? ' has-error' : '' }}">
                            <input id="confirmEmail" type="email" class="form-control" name="confEmail"
                                   value="{{ old('confirmEmail') }}" placeholder="Confirmar email"
                                   aria-describedby=""/>
                            @if ($errors->has('confirmEmail'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('confirmEmail') }}</strong>
                                    </span>
                            @endif
                        </div>-->
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input id="password" class="form-control" name="password" type="password" placeholder="Senha"
                                   aria-describedby=""/>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif

                        </div>
                        <div class="col-md-6 col-sm-6 form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <input id="password-confirm" class="form-control" name="password_confirmation" type="password"
                                   placeholder="Confirmar senha"
                                   aria-describedby=""/>

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-6 form-group" style="margin-bottom: 0px;">
                            <label style="line-height: 34px; font-weight: normal;"><input type="checkbox"/>&nbspConfirmo
                                que
                                li os <a href="#">termos de uso</a>.</label>
                        </div>
                        <div class="col-md-6 col-sm-6 form-group" style="margin-bottom: 0px;">
                            <button class="btn btn-primary" name="cad" type="submit" style="width: 100%;">Cadastrar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

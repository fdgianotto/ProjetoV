@extends('layouts.header')

@section('conteudo')
    <div id="" class="container" style="margin: 52px auto;">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 panel" style="padding: 10px; border-color: #e7e7e7; background-color: #F8F8F8">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <div class="row">

                            <div class="col-md-6 col-sm-6 form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}"
                                           aria-describedby="">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                <input id="password" class="form-control" name="password" type="password" placeholder="Senha"
                                       aria-describedby="">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                           <div class="row">
                                <div class="col-md-6 col-sm-6 form-group" style="margin-bottom: 0px;">
                                    <label style="line-height: 34px; font-weight: normal;">
                                        <input type="checkbox" name="lembrar">&nbspLembrar meus dados.
                                    </label>
                                </div>
                                <div class="col-md-6 col-sm-6 form-group" style="margin-bottom: 0px;">
                                    <button class="btn btn-primary" type="submit" style="width: 100%;" name="entrar">Entrar</button>
                                </div>

                              <a class="btn btn-link" href="{{ url('/password/reset') }}">Esqueceu a Senha?</a>
                            </div>


                        </div>

                    </form>
                </div>
            </div>
        </div>
@endsection

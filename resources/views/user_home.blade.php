@extends('layouts.header')

@section('conteudo')
<div id="anchor1" class="container" style="margin: 52px auto 0px auto;">
    <div class="row" style="margin-bottom: 0px;">
        <div class="col-md-8 col-md-offset-2 panel"
             style="padding: 10px; border-color: #e7e7e7; background-color: #F8F8F8; margin-bottom: 0px;">
            <div class="panel-heading">
                <h4 class="text-center">Meu perfil</h4>
            </div>
            <div id="perfil_default" class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{ Auth::user()->foto_user }} " class="img-circle center-block" style="width: 160px;"/>
                    </div>
                </div>
                <!-- LINHA NOME -->
                <div class="row margin-top-2">
                    <div class="col-md-12">
                        <p class="text-center"><b>Nome</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i>{{Auth::user()->name}}  {{Auth::user()->sobrenome}}</i>
                        </p>
                        <p class="text-center"><b>Email</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i>{{Auth::user()->email}}</i>
                        </p>
                       <!-- <p class="text-center"><b>Login</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i>{{Auth::user()->email}}</i>
                        </p> -->
                        @if( Auth::user()->admin == 1 ){?>
                        <p class="text-center">
                            <b>Usuário</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i>//CARGO//</i>
                        </p>
                        @endif
                        <br>
                        <p class="text-center" style="opacity: 0.5"><i>Utilize a barra de navegação para ver ou enviar projetos ou editar
                            suas configurações pessoais!</i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="margin-top">
</div>

@endsection
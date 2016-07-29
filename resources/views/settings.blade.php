@extends('layouts.header')

@section('title')
    Configurações - Busquete
@endsection

@section('conteudo')

    <div id="anchor1" class="container" style="margin: 52px auto 0px auto;">
        <div class="row" style="margin-bottom: 0px;">
            <div class="col-md-8 col-md-offset-2 panel"
                 style="padding: 10px; border-color: #e7e7e7; background-color: #F8F8F8; margin-bottom: 0px;">
                <div class="panel-heading">
                    <h4 class="text-center">Configurações</h4>
                </div>
                <div id="" class="panel-body">
                    <div class="row">
                        <v class="col-md-12">
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active"><a data-toggle="tab" href="#tab1"><span
                                                class="glyphicon glyphicon-user"></span>&nbspMinha conta</a></li>
                                <li><a data-toggle="tab" href="#tab2"><span class="glyphicon glyphicon-king"></span>&nbspAdministradores</a>
                                </li>
                                <li><a data-toggle="tab" href="#tab3"><span class="glyphicon glyphicon-globe"></span>&nbspSite</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab1" class="tab-pane fade in active">
                                    <div class="row margin-top-2">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Informações pessoais</label>
                                                <div class="form-group no-margin-bottom">
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6 margin-bottom">
                                                            <button class="btn btn-info" id="inputUserNameButton"
                                                                    data-toggle="modal" data-target="#alterarNome"
                                                                    style="width: 100%"><span
                                                                        class="glyphicon glyphicon-tag"></span>&nbsp&nbsp&nbspAlterar
                                                                meu nome
                                                            </button>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 margin-bottom">
                                                            <button class="btn btn-info" id="inputUserPictureButton"
                                                                    data-toggle="modal" data-target="#alterarImagem"
                                                                    style="width: 100%"><span
                                                                        class="glyphicon glyphicon-picture"></span>&nbsp&nbsp&nbspAlterar
                                                                minha foto de exibição
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Segurança</label>
                                                <div class="form-group no-margin-bottom">
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6 margin-bottom">
                                                            <button class="btn btn-info" id="inputUserPasswordButton"
                                                                    data-toggle="modal" data-target="#alterarSenha"
                                                                    style="width: 100%"><span
                                                                        class="glyphicon glyphicon-lock"></span>&nbsp&nbsp&nbspAlterar
                                                                minha
                                                                senha
                                                            </button>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 margin-bottom">
                                                            <button class="btn btn-info" id="inputUserEmailButton"
                                                                    data-toggle="modal" data-target="#alterarEmail"
                                                                    style="width: 100%"><span
                                                                        class="glyphicon glyphicon-envelope"></span>&nbsp&nbsp&nbspAlterar
                                                                meu
                                                                endereço de email
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputProjectName">Confirmar senha (deixe em branco manter a
                                                    senha)</label>
                                                <input type="text" class="form-control" id="inputProjectName"
                                                       placeholder="Insira o nome completo do projeto">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab2" class="tab-pane fade">
                                        <div class="row margin-top-2">
                                            <div class="col-md-12">

                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab3" class="tab-pane fade">
                                        <div class="row margin-top-2">
                                            <div class="col-md-12">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="margin-top"></div>

    <!-- INÍCIO - MODAL ALTERAR NOME -->
    <div class="modal fade" id="alterarNome" tabindex="-1" role="dialog" aria-labelledby="alterarNomeLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content disable-box-shadow">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="alterarNomeLabel">Alterar meu nome</h4>
                    @if(session('erroNome'))
                        <h6 class="-align-right alert-danger">
                            {{session('erroNome')}}
                        </h6>
                    @endif
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="{{ url('/config') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="inputUserName">Nome</label>
                            <input type="text" name="novoNome" class="form-control" id="inputUserName"
                                   placeholder="Digite apenas seu primeiro nome">
                        </div>
                        <div class="form-group no-margin-bottom">
                            <label for="inputUserSecondName">Sobrenome</label>
                            <input type="text" name="novoSobrenome" class="form-control" id="inputUserSecondName"
                                   placeholder="Digite o restante do seu nome">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="alterar" class="btn btn-success"><span
                                class="glyphicon glyphicon-ok"></span>&nbsp&nbsp&nbspConfirmar
                        alteração
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- TÉRMINO - MODAL ALTERAR NOME -->

    <!-- INÍCIO - MODAL ALTERAR IMAGEM -->
    <div class="modal fade" id="alterarImagem" tabindex="-1" role="dialog" aria-labelledby="alterarImagemLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content disable-box-shadow">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="alterarImagemLabel">Alterar minha foto</h4>
                    @if(session('erroFoto'))
                        <h6 class="-align-right alert-danger">
                            {{session('errofoto')}}
                        </h6>
                    @endif
                </div>
                <div class="modal-body">
                    <!-- The fileinput-button span is used to style the file input field as button -->
                     <span class="btn btn-success fileinput-button">
                           <i class="glyphicon glyphicon-plus"></i>
                     <span>Selecionar Imagem</span>
                         <!-- The file input field used as target for the file upload widget -->
                            <input id="fileupload" type="file" name="foto_perfil" data-token="{!! csrf_token() !!}">
                    </span>
                    <br>
                    <br>
                    <!-- The global progress bar
                    <div id="progress" class="progress">
                        <div class="progress-bar progress-bar-success"></div>
                    </div>
                    -->
                    <!-- The container for the uploaded files-->
                    <div id="files" class="files"></div>
                    <br>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span>&nbsp&nbsp&nbspConfirmar
                        alteração
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- TÉRMINO - MODAL ALTERAR IMAGEM -->

    <!-- INÍCIO - MODAL ALTERAR SENHA -->
    <div class="modal fade" id="alterarSenha" tabindex="-1" role="dialog" aria-labelledby="alterarSenhaLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content disable-box-shadow">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="alterarSenhaLabel">Alterar minha senha</h4>
                    @if(session('erroSenha'))
                        <h6 class="-align-right alert-danger">
                            {{session('erroSenha')}}
                        </h6>
                    @endif

                </div>
                <div class="modal-body">
                    <form role="form" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="inputUserPasswordOld">Senha antiga</label>
                            <input type="password" name="passwordOld" class="form-control" id="inputUserPasswordOld"
                                   placeholder="Digite sua senha antiga">
                        </div>

                        <div class="form-group">
                            <label for="inputUserPasswordNew">Nova senha</label>
                            <input class="form-control" name="password" type="password" id="inputUserPasswordNew"
                                   placeholder="Digite a nova senha desejada"/>
                        </div>
                        <div class="form-group">
                            <label for="inputUserPasswordNewConfirm">Confirmar nova senha</label>
                            <input class="form-control" name="password_confirmation" type="password"
                                   id="inputUserPasswordNewConfirm"
                                   placeholder="Confirme a senha digitada anteriormente"/>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="mudar" class="btn btn-success"><span
                                        class="glyphicon glyphicon-ok"></span>&nbsp&nbsp&nbspConfirmar
                                alteração
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- TÉRMINO - MODAL ALTERAR SENHA -->

    <!-- INÍCIO - MODAL ALTERAR EMAIL -->
    <div class="modal fade" id="alterarEmail" tabindex="-1" role="dialog" aria-labelledby="alterarEmailLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content disable-box-shadow">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="alterarEmailLabel">Alterar meu endereço de email</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="inputUserEmailOld">Endereço de email antigo</label>
                        <input type="password" class="form-control" id="inputUserEmailOld"
                               placeholder="Digite seu endereço de email antigo">
                    </div>
                    <div class="form-group">
                        <label for="inputUserEmailNew">Novo endereço de email</label>
                        <input type="password" class="form-control" id="inputUserEmailNew"
                               placeholder="Digite o novo endereço de email desejado">
                    </div>
                    <div class="form-group no-margin-bottom">
                        <label for="inputUserEmailNewConfirm">Confirmar novo endereço de email</label>
                        <input type="password" class="form-control" id="inputUserEmailNewConfirm"
                               placeholder="Confirme o endereço de email digitado anteriormente">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span>&nbsp&nbsp&nbspConfirmar
                        alteração
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- TÉRMINO - MODAL ALTERAR EMAIL -->

@endsection

@section('scripts')

    @parent
    <script>
        (function ($) {
            'use strict';
            $(document).ready(function () {
                var uploadButton = $('<button/>')
                        .addClass('btn btn-success')
                        .prop('disabled', true)
                        .text('Processando...')
                        .on('click', function () {
                            var $this = $(this),
                                    data = $this.data();
                            $this
                                    .off('click')
                                    .text('Parar')
                                    .on('click', function () {
                                        $this.remove();
                                        data.abort();
                                    });
                            data.submit().always(function () {
                                $this.remove();
                            });
                        });

                var $fileupload = $('#fileupload');

                $fileupload.fileupload({
                    url: '/upload',
                    dataType: 'json',
                    formData: {_token: $fileupload.data('token')},
                    autoUpload: false,
                    acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
                    maxFileSize: 999000,
                    // Enable image resizing, except for Android and Opera,
                    // which actually support image resizing, but fail to
                    // send Blob objects via XHR requests:
                    disableImageResize: /Android(?!.*Chrome)|Opera/
                            .test(window.navigator.userAgent),
                    previewMaxWidth: 100,
                    previewMaxHeight: 100,
                    previewCrop: true
                }).on('fileuploadadd', function (e, data) {
                    data.context = $('<div/>').appendTo('#files');
                    $.each(data.files, function (index, file) {
                        var node = $('<p/>')
                                .append($('<span/>').text(file.name));
                        if (!index) {
                            node
                                    .append('<br>')
                                    .append(uploadButton.clone(true).data(data));
                        }
                        node.appendTo(data.context);
                    });
                }).on('fileuploadprocessalways', function (e, data) {
                    var index = data.index,
                            file = data.files[index],
                            node = $(data.context.children()[index]);
                    if (file.preview) {
                        node
                                .prepend('<br>')
                                .prepend(file.preview);
                    }
                    if (file.error) {
                        node
                                .append('<br>')
                                .append($('<span class="text-danger"/>').text(file.error));
                    }
                    if (index + 1 === data.files.length) {
                        data.context.find('button')
                                .text('Confirmar Alteração')
                                .prop('disabled', !!data.files.error);
                    }
                }).on('fileuploaddone', function (e, data) {
                    $.each(data.result.files, function (index, file) {
                        if (file.url) {
                            var link = $('<a>')
                                    .attr('target', '_blank')
                                    .prop('href', file.url);
                            $(data.context.children()[index])
                                    .wrap(link);
                        } else if (file.error) {
                            var error = $('<span class="text-danger"/>').text(file.error);
                            $(data.context.children()[index])
                                    .append('<br>')
                                    .append(error);
                        }
                    });
                }).on('fileuploadfail', function (e, data) {
                    $.each(data.files, function (index) {
                        var error = $('<span class="text-danger"/>').text('Falha no Upload do Arquivo.');
                        $(data.context.children()[index])
                                .append('<br>')
                                .append(error);
                    });
                }).prop('disabled', !$.support.fileInput)
                        .parent().addClass($.support.fileInput ? undefined : 'disabled');
            });
        })(window.jQuery);

    </script>
@stop
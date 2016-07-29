@extends('layouts.header')

@section('conteudo')
<div id="anchor1" class="container" style="margin: 52px auto 0px auto;">
    {{print_r($projeto)}}
    <div class="row" style="margin-bottom: 0px;">
        <div class="col-md-8 col-md-offset-2 panel"
             style="padding: 10px; border-color: #e7e7e7; background-color: #F8F8F8; margin-bottom: 0px;">
            <div class="panel-heading">
                <h4 class="text-center">Minhas solicitações</h4>
            </div>
            <div id="" class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a data-toggle="tab" href="#tab1"><span class="badge">0</span>&nbspAprovados</a></li>
                            <li><a data-toggle="tab" href="#tab2"><span class="badge">0</span>&nbspEm
                                observação</a></li>
                            <li><a data-toggle="tab" href="#tab3"><span class="badge">0</span>&nbspRecusados</a></li>
                            <li><a data-toggle="tab" href="#tab4"><span class="glyphicon glyphicon-plus-sign"></span>&nbspAdicionar</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="tab1" class="tab-pane fade in active">
                                <div class="row margin-top-2">
                                    <div class="col-sm-4 col-md-4">
                                        <div class="thumbnail">
                                            <div class="caption">
                                                <h3>Nome do projeto</h3>
                                                <p>Descrição do projeto</p>
                                                <p class="text-right"><a href="#" class="btn btn-success" role="button">Visualizar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab2" class="tab-pane fade">
                                <div class="row margin-top-2">
                                    <div class="col-sm-4 col-md-4">
                                        <div class="thumbnail">
                                            <div class="caption">
                                                <h3>Nome do projeto</h3>
                                                <p>Descrição do projeto</p>
                                                <p class="text-right"><a class="btn btn-warning" role="button" disabled>Aguardando
                                                    retorno</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab3" class="tab-pane fade">
                                <div class="row margin-top-2">
                                    <div class="col-sm-4 col-md-4">
                                        <div class="thumbnail">
                                            <div class="caption">
                                                <h3>Nome do projeto</h3>
                                                <p>Descrição do projeto</p>
                                                <p class="text-right"><a href="#" class="btn btn-danger" role="button">Editar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab4" class="tab-pane fade">
                                <div class="row margin-top-2">
                                    <div class="col-md-12">
                                        <form method="post" action="#">
                                            <div class="form-group">
                                                <label for="inputProjectName">Nome do projeto</label>
                                                <input type="text" class="form-control" id="inputProjectName"
                                                       placeholder="Insira o nome completo do projeto">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputProjectSummary">Resumo do projeto</label>
                                                <textarea class="form-control" id="inputProjectSummary"
                                                          placeholder="Digite um breve resumo sobre o seu projeto, destacando os principais pontos..."
                                                          style="resize: vertical"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputProjectTags">Palavras-chave</label>
                                                <input type="text" class="form-control" id="inputProjectTags"
                                                       placeholder="Digite palavras separadas por espaço que melhor descrevem o seu projeto">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputProjectSubject">Curso</label>
                                                <select type="text" class="form-control" id="inputProjectSubject">
                                                    <option value="" disabled selected>Selecione o curso pertencente ao
                                                        assunto do projeto
                                                    </option>
                                                    <!-- INÍCIO - REPETIÇÃO DOS CURSOS -->
                                                    <option value="">//CURSO//</option>
                                                    <!-- TÉRMINO - REPETIÇÃO DOS CURSOS -->
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputProjectDataSubmissao">Data de submissão</label>
                                                <input type="date" class="form-control" id="inputProjectDataSubmissao"
                                                       disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputProjectUser">Usuário responsável</label>
                                                <input type="text" class="form-control" id="inputProjectUser"
                                                       placeholder="Insira o seu nome completo" value="{{Auth::user()->name}} {{Auth::user()->sobrenome}}"
                                                       disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputProjectFile">Arquivo</label>
                                                <input type="file" id="inputProjectFile"
                                                       placeholder="Insira o seu nome completo" value="{{Auth::user()->name}} {{Auth::user()->sobrenome}}"
                                                       accept="application/pdf">
                                                <p class="help-block">Selecione apenas o arquivo .pdf contendo a parte
                                                    escrita do trabalho</p>
                                            </div>
                                            <div class="form-group">
                                                <button type="subm" class="form-control" id="inputProjectUser"
                                                       placeholder="Insira o seu nome completo" value="{{Auth::user()->name}} {{Auth::user()->sobrenome}}"
                                                       disabled>
                                            </div>
                                        </form>
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

<div id="anchor1" class="container" style="margin: 52px auto 0px auto;">
    <div class="row" style="margin-bottom: 0px;">
        <div class="col-md-8 col-md-offset-2 panel"
             style="padding: 10px; border-color: #e7e7e7; background-color: #F8F8F8; margin-bottom: 0px;">
            <div class="panel-heading">
                <h4 class="text-center">Projetos a serem analisados</h4>
            </div>
            <div id="" class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs nav-justified">
                            <!-- INICIO - REPETIÇÃO DAS TABS DOS CURSOS -->
                            <li class="active"><a data-toggle="tab" href="#tab1"><span class="badge">0</span>&nbsp//CURSO//</a>
                            </li>
                            <!-- TÉRMINO - REPETIÇÃO DAS TABS DOS CURSOS -->
                        </ul>
                        <div class="tab-content">
                            <!-- INICIO - REPETIÇÃO DOS CONTENTS DOS CURSOS -->
                            <div id="tab1" class="tab-pane fade in active">
                                <div class="row margin-top-2">
                                    <!-- INICIO - REPETIÇÃO DAS THUMBNAILS DOS PROJETOS -->
                                    <div class="col-sm-4 col-md-4">
                                        <div class="thumbnail">
                                            <div class="caption">
                                                <h3>Nome do projeto</h3>
                                                <p>Descrição do projeto</p>
                                                <p class="text-right"><a href="#" class="btn btn-info" role="button">Avaliar</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TÉRMINO - REPETIÇÃO DAS THUMBNAILS DOS PROJETOS -->
                                </div>
                            </div>
                            <!-- TÉRMINO - REPETIÇÃO DOS CONTENTS DOS CURSOS -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="margin-top"></div>
@endsection

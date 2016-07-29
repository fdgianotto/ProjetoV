@extends('layouts.header')

@section('title')
    Resultado da busca para ///
@endsection

@section('conteudo')

    <!-- navegação fixada embaixo -->
    <div class="container navbar-default border margin-search-bottom">

        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 bottom-nav-pad">
                <form class="input-group" method="get">
                    <input class="form-control" type="text" placeholder="///CARREGAR-TEXTO-PESQUISADO"/>
                    <span class="input-group-btn"><button id="search" class="btn btn-default" type="submit">&nbsp<span
                                    class="glyphicon glyphicon-search"></span>&nbsp</button>
                    </span>
                </form>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-4 bottom-nav-pad">
                <select onchange="$('#search').click()" class="form-control">
                    <option selected disabled>Ordenar</option>
                    <option disabled></option>
                    <option>Ordem alfabética crescente</option>
                    <option>Ordem alfabética decrescente</option>
                    <option>Mais recente primeiro</option>
                    <option>Mais antigo primeiro</option>
                </select>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-4 bottom-nav-pad">
                <select onchange="$('#search').click()" class="form-control">
                    <option selected disabled>Data</option>
                    <option disabled></option>
                    <option>Hoje</option>
                    <option>Última semana</option>
                    <option>Último mês</option>
                    <option>Último trimestre</option>
                    <option>Último semestre</option>
                    <option>Último ano</option>
                </select>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-4 bottom-nav-pad">
                <select onchange="$('#search').click()" class="form-control">
                    <option selected disabled>Curso</option>
                    <option disabled></option>
                    <option>Informática</option>
                    <option>Mecânica</option>
                    <option>Carregar os cursos utilizando PHP</option>
                </select>
            </div>
        </div>
    </div>
    <!-- /navegação fixada embaixo -->

    <div class="margin-search-top"></div>

    <!-- repetição -->

    <div class="container panel margin-search"
         style="padding: 10px; border-color: #e7e7e7; background-color: #F8F8F8; margin-bottom: 0px;">
        <div class="row">
            <div class="col-md-10 col-sm-10 col-xs-12">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Título&nbsp
                            <small><i>Por Insira o Nome Aqui</i></small>
                        </h4>
                        <p class="limit_chars">
                            O vídeo fornece uma maneira poderosa de ajudá-lo a provar seu argumento. Ao clicar em Vídeo
                            Online,
                            você pode colar o código de inserção do vídeo que deseja adicionar. Você também pode digitar
                            uma
                            palavra-chave para pesquisar online o vídeo mais adequado ao seu documento.
                            Para dar ao documento uma aparência profissional, o Word fornece designs de cabeçalho,
                            rodapé, folha
                            de rosto e caixa de texto que se complementam entre si. Por exemplo, você pode adicionar uma
                            folha
                            de rosto, um cabeçalho e uma barra lateral correspondentes. Clique em Inserir e escolha os
                            elementos
                            desejados nas diferentes galerias.
                            Temas e estilos também ajudam a manter seu documento coordenado. Quando você clica em Design
                            e
                            escolhe um novo tema, as imagens, gráficos e elementos gráficos SmartArt são alterados para
                            corresponder ao novo tema. Quando você aplica estilos, os títulos são alterados para
                            coincidir com o
                            novo tema.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12">
                <div class="text-right">
                    <a href="#" class="btn btn-default" data-toggle="tooltip" data-placement="left"
                       title="Ver todos os detalhes"><span class="glyphicon glyphicon-search"></span></a>
                    <a href="#" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Baixar PDF"><span class="glyphicon glyphicon-arrow-down"></span></a>
                </div>
            </div>
        </div>
    </div>

    <!-- /repetição -->

    <div class="margin-search-bottom"></div>

@endsection

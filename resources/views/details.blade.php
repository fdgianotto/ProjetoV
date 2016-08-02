@extends('layouts.header')

@section('title')
    Detalhes para ///NomeDoProjetoAqui - Busquete
@endsection

@section('conteudo')

    <div class="margin-search-top"></div>

    <!-- panel -->

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <b>Título</b>
                    </div>
                    <div class="panel-body">

                        <label>Resumo do trabalho</label>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean metus leo, dictum vitae
                            rutrum ac, faucibus eget arcu. Vestibulum faucibus varius elit, eget mollis felis mollis
                            sed. Nulla facilisi. Ut dignissim erat sit amet metus mollis lacinia. Aenean ac quam nisl.
                            Curabitur ac lacus dapibus, posuere arcu sed, mattis erat. Vestibulum rhoncus leo et elit
                            mattis malesuada. In sed libero augue. In cursus, ipsum vitae gravida luctus, risus felis
                            hendrerit enim, eu molestie tortor enim sit amet ipsum. Vestibulum nec venenatis ex, in
                            sollicitudin ipsum. Nullam at diam luctus, viverra neque in, bibendum eros. Phasellus
                            interdum finibus enim eget pellentesque. Morbi a vehicula tellus. In hac habitasse platea
                            dictumst. Donec purus risus, interdum quis nisl ut, feugiat bibendum sem. Etiam egestas
                            sodales lacus.
                        </p><br>
                        <label>Integrantes</label>
                        <p>
                            <span>Integrante 1</span>
                        </p>

                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6 text-left">
                                <a onclick="goBack()" class="btn btn-default">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    Voltar
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                <a href="#" class="btn btn-default">
                                    Download
                                    <span class="glyphicon glyphicon-arrow-down"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /panel -->

@endsection

@section('scripts')
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
@endsection
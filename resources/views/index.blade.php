@extends('layouts.header')

@section('title')
    Busquete
@endsection

@section('conteudo')
    <div id="centralizar" class="container margin-top">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="row">
                    <div class="col-md-12">
                        <form class="input-group" method="get">
                            <input class="form-control input-lg" type="text" placeholder="Pesquisar..."/>
                    <span class="input-group-btn"><button class="btn btn-default input-lg" type="submit">&nbsp<span
                                    class="glyphicon glyphicon-search"></span>&nbsp</button>
                    </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

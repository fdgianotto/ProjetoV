<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"
          integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <link rel="stylesheet" href="/css/jquery.fileupload.css">
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

</head>

<body background="/images/bg.png">

<nav class="navbar navbar-default" style="border-radius: 0px; margin-bottom: 0px;">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}"><span class="glyphicon glyphicon-book"></span>&nbspPROJETO
                V</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->

        @if (Auth::check())
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li id="li1" class="active"><a href="{{ url('/') }}" id="home_link"><span id="icon1"
                                                                                              class="glyphicon glyphicon-home">&nbsp</span>Home<span
                                    class="sr-only">(atual)</span></a></li>
                    <li id="li2" class=""><a href="{{ url('/sobre') }}" id="about_link"><span id="icon2"
                                                                                              class="glyphicon glyphicon-info-sign">&nbsp</span>Sobre</a>
                    </li>
                    <li id="li3" class=""><a href="{{ url('/perfil') }}"><span id="icon3"
                                                                               class="glyphicon glyphicon-user">&nbsp</span>Perfil</a>
                    </li>
                    <li id="li3" class=""><a href="{{ url('/proj') }}"><span id="icon3"
                                                                             class="glyphicon glyphicon-user">&nbsp</span>Projetos</a>
                    </li>
                    <li id="li3" class=""><a href="{{url('/config')}}"><span id="icon3"
                                                                             class="glyphicon glyphicon-user">&nbsp</span>Configurações</a>
                    </li>

                    <li id="li4" class=""><a href="{{ url('/logout') }}"><span id="icon4"
                                                                               class="glyphicon glyphicon-log-out">&nbsp</span>Sair</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        @else
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li id="li1" class="active"><a href="{{url('/')}}" id="home_link"><span id="icon1"
                                                                                            class="glyphicon glyphicon-home">&nbsp</span>Home<span
                                    class="sr-only">(atual)</span></a></li>
                    <li id="li2" class=""><a href="{{ url('/sobre') }}" id="about_link"><span id="icon2"
                                                                                              class="glyphicon glyphicon-info-sign">&nbsp</span>Sobre</a>
                    </li>
                    <li id="li3" class=""><a href="{{ url('/login') }}"><span id="icon3"
                                                                              class="glyphicon glyphicon-log-in">&nbsp</span>Login</a>
                    </li>

                    <li id="li4" class=""><a href="{{url('/register')}}"><span id="icon4"
                                                                               class="glyphicon glyphicon-plus">&nbsp</span>Cadastro</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->

        @endif
    </div><!-- /.container-fluid -->
</nav>

@yield('conteudo')


@yield('scripts')
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"
            integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/init.js"></script>
    <script src="/js/editar_perfil.js"></script>
    <script src="/js/tabs.js"></script>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
    <script src="js/vendor/jquery.ui.widget.js"></script>
    <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
    <script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
    <!-- The Canvas to Blob plugin is included for image resizing functionality -->
    <script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
    <!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
    <script src="js/jquery.iframe-transport.js"></script>
    <!-- The basic File Upload plugin -->
    <script src="js/jquery.fileupload.js"></script>
    <!-- The File Upload processing plugin -->
    <script src="js/jquery.fileupload-process.js"></script>
    <!-- The File Upload image preview & resize plugin -->
    <script src="js/jquery.fileupload-image.js"></script>
    <!-- The File Upload audio preview plugin -->
    <script src="js/jquery.fileupload-audio.js"></script>
    <!-- The File Upload video preview plugin -->
    <script src="js/jquery.fileupload-video.js"></script>
    <!-- The File Upload validation plugin -->
    <script src="js/jquery.fileupload-validate.js"></script>
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
</body>
</html>
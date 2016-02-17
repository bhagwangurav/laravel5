<!DOCTYPE html>
<!DOCTYPE html>
<html>
    <head>
        <title>Gaganbavada</title>

        {!! Html::style('css/app.css') !!}       
        {!! Html::style('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') !!}
        {!! Html::style('css/style.css') !!}

        {!! Html::script('js/jquery.min.js') !!}
        {!! Html::script('js/bootstrap.min.js') !!}
        {!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js') !!}
        {!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js') !!}
        

        <style>
        body { padding-top: 60px; }
        @media (max-width: 979px) {
            body { padding-top: 0px; }
        }
        </style>
    </head>
    
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://localhost/gaganbavada/public/index.php/">Gaganbawada</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="http://localhost/gaganbavada/public/index.php/">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="{{ Route('contact') }}">Contact</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

    <body>
        <div class="container">
            @yield('content')
        </div><!-- /.container -->
    </body>
</html>

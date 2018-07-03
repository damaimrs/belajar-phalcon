<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Tutorial CRUD Phalcon</title>
        
        <!-- {{ javascript_include('js/jquery.js') }} 
        {{ stylesheet_link('css/bootstrap.min.css') }}
        {{ javascript_include('js/bootstrap.min.js') }} -->
        {{ stylesheet_link('bootstrap-master/dist/css/bootstrap.min.css') }}
        {{ javascript_include('js-axell/jquery-3.3.1.min.js') }}
        {{ javascript_include('bootstrap-master/dist/js/bootstrap.min.js') }}
        
        {% block head %}
        {% endblock %}
    </head>
    <body>        
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand">Phalcon</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="{{ url('index/index') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('data/index') }}">Pegawai</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('calendar/index') }}">Calendar</a>
                </li>
            </div>
          </nav>            
          {% block content %}
          {% endblock %}
          <?php echo $this->getContent(); ?> 
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script-->
        <!-- Latest compiled and minified JavaScript -->
        
    </body>
</html>

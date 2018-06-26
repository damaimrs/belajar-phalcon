<html>
 <head>
  <title>Tutorial Bootstrap dan Phalcon</title>
  {{ stylesheet_link('css/bootstrap.min.css') }}
  {{ javascript_include('js/bootstrap.min.js') }}
 </head>
 <body>
 <nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
     <!-- Brand and toggle get grouped for better mobile display -->
     <div class="container-fluid">
         <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
             </button>
             <a class="navbar-brand" href="#">Belajar Phalcon</a>
         </div>
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="navbarCollapse">
             <ul class="nav navbar-nav">
                 <li><a href="{{ url('index/index') }}">Home</a></li>
                 <li><a href="{{ url('data/index') }}" >Pegawai</a></li>
                  
             </ul>
         </div>
     </div>
 </nav>
  {% block content %}
  {% endblock %}
 </body>
</html>
 
<span style="font-family: Times New Roman;"><span style="white-space: normal;">
</span></span>
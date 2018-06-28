<!--  <nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
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
         <div class="collapse navbar-collapse" id="navbarCollapse">
             <ul class="nav navbar-nav">
                 <li><a href="{{ url('index/index') }}">Home</a></li>
                 <li><a href="{{ url('data/index') }}" >Pegawai</a></li>
                  
             </ul>
         </div>
     </div>
 </nav> -->
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
  </div>
</nav>
  {% block content %}
  {% endblock %}

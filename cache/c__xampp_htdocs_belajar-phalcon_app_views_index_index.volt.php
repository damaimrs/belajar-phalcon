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
                 <li><a href="<?= $this->url->get('index/index') ?>">Home</a></li>
                 <li><a href="<?= $this->url->get('data/index') ?>" >Pegawai</a></li>
                  
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
        <a class="nav-link" href="<?= $this->url->get('index/index') ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= $this->url->get('data/index') ?>">Pegawai</a>
      </li>
  </div>
</nav>
   
<div class="jumbotron">
    <div class="container-fluid">
        <h1>Welcome!</h1>
        <p>Belajar CRUD Phalcon ya</p>
        <br><br><br><br><br>
        <p><a href="http://getbootstrap.com/" target="_blank" class="btn btn-success btn-lg">Bootstrap Link Here</a></p>
    </div>
</div>
<div class="container-fluid">     
    <hr>
    <div class="row">
        <div class="col-xs-12">
            <footer>
                <p>&copy; Belajar CRUD Phalcon </p>
            </footer>
        </div>
    </div>
</div>


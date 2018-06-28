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
<!--       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
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


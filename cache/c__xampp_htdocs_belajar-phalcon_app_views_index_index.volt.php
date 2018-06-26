<html>
 <head>
  <title>Tutorial Bootstrap dan Phalcon</title>
  <?= $this->tag->stylesheetLink('css/bootstrap.min.css') ?>
  <?= $this->tag->javascriptInclude('js/bootstrap.min.js') ?>
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
                 <li><a href="<?= $this->url->get('index/index') ?>">Home</a></li>
                 <li><a href="<?= $this->url->get('data/index') ?>" >Pegawai</a></li>
                  
             </ul>
         </div>
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

 </body>
</html>
 
<span style="font-family: Times New Roman;"><span style="white-space: normal;">
</span></span>
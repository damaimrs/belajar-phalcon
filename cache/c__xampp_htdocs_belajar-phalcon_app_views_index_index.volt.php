<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Tutorial CRUD Phalcon</title>
        
        <!-- <?= $this->tag->javascriptInclude('js/jquery.js') ?> 
        <?= $this->tag->stylesheetLink('css/bootstrap.min.css') ?>
        <?= $this->tag->javascriptInclude('js/bootstrap.min.js') ?> -->
        <?= $this->tag->stylesheetLink('bootstrap-master/dist/css/bootstrap.min.css') ?>
        <?= $this->tag->javascriptInclude('js-axell/jquery-3.3.1.min.js') ?>
        <?= $this->tag->javascriptInclude('bootstrap-master/dist/js/bootstrap.min.js') ?>
        
        
        
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
                  <a class="nav-link" href="<?= $this->url->get('index/index') ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= $this->url->get('data/index') ?>">Pegawai</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= $this->url->get('calendar/index') ?>">Calendar</a>
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

          <?php echo $this->getContent(); ?> 
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script-->
        <!-- Latest compiled and minified JavaScript -->
        
    </body>
</html>

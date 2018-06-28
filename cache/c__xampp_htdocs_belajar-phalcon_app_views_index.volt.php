<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Tutorial CRUD Phalcon</title>
        <?= $this->tag->stylesheetLink('css/bootstrap.min.css') ?>
        <?= $this->tag->javascriptInclude('js/jquery.js') ?>        
        <?= $this->tag->javascriptInclude('js/moment.js') ?>
        <?= $this->tag->javascriptInclude('js/transition.js') ?>
        <?= $this->tag->javascriptInclude('js/collapse.js') ?>
        <?= $this->tag->javascriptInclude('js/bootstrap.min.js') ?>
        <?= $this->tag->javascriptInclude('js/bootstrap-datepicker-id.js') ?>
        <?= $this->tag->javascriptInclude('js/calendar.js') ?>
    </head>
    <body>
        <div class="container">
            <?php echo $this->getContent(); ?>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script-->
        <!-- Latest compiled and minified JavaScript -->
        
    </body>
</html>

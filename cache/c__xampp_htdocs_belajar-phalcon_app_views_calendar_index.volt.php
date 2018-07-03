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
        
        

<?= $this->tag->stylesheetLink('css/fullcalendar.css') ?>
<?= $this->tag->stylesheetLink('css/fullcalendar.print.css') ?>

//<?= $this->tag->javascriptInclude('js/jquery-1.10.2.js') ?>
//<?= $this->tag->javascriptInclude('js/jquery-ui.custom.min.js') ?>

<?= $this->tag->javascriptInclude('js/fullcalendar.js') ?>

<script>

	$(document).ready(function() {
	    var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		

		$('#external-events div.external-event').each(function() {
		

			var eventObject = {
				title: $.trim($(this).text()) 
			};
			
			$(this).data('eventObject', eventObject);
			

			$(this).draggable({
				zIndex: 999,
				revert: true,     
				revertDuration: 0  
			});
			
		});
	
		
		var calendar =  $('#calendar').fullCalendar({
			header: {
				left: 'title',
				center: 'agendaDay,agendaWeek,month',
				right: 'prev,next today'
			},
			editable: true,
			firstDay: 1, 
			selectable: true,
			defaultView: 'month',
			
			axisFormat: 'h:mm',
			columnFormat: {
                month: 'ddd',    
                week: 'ddd d', 
                day: 'dddd M/d', 
                agendaDay: 'dddd d'
            },
            titleFormat: {
                month: 'MMMM yyyy', 
                week: "MMMM yyyy", 
                day: 'MMMM yyyy' 
            },
			allDaySlot: false,
			selectHelper: true,
	        eventClick: function(calEvent, jsEvent, view)
	        {
	        	jQuery.noConflict();
	        	$('#modal-show').modal(); 

	        },
			select: function(start, end, allDay) {
				var title = prompt('Event Title:');
				if (title) {
					calendar.fullCalendar('renderEvent',
						{
							title: title,
							start: start,
							end: end,
							allDay: allDay
						},
						true
					);
				}
				calendar.fullCalendar('unselect');
			},
			droppable: true, 
			drop: function(date, allDay) {
			
			
				var originalEventObject = $(this).data('eventObject');
				
			
				var copiedEventObject = $.extend({}, originalEventObject);
				
			
				copiedEventObject.start = date;
				copiedEventObject.allDay = allDay;
				
				
				$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
				
			
				if ($('#drop-remove').is(':checked')) {
				
					$(this).remove();
				}
				
			},
			
			events: [
				<?php foreach ($pegawai as $p) { ?>
					{
						title: '<?= $p->nama_pegawai ?>',
						start: new Date(
							'<?= $p->date_pegawai ?>'.split(/[- :]/)[0],
							'<?= $p->date_pegawai ?>'.split(/[- :]/)[1]-1,
							'<?= $p->date_pegawai ?>'.split(/[- :]/)[2],
							'<?= $p->date_pegawai ?>'.split(/[- :]/)[3],
							'<?= $p->date_pegawai ?>'.split(/[- :]/)[4]),
						end: new Date(y, m, d+1, 16, 0),
						allDay: false,
						className: 'important'
					},
				<?php } ?>
					{
						title: 'Lunch',
						start: new Date(y, m, d, 12, 0),
						end: new Date(y, m, d, 14, 0),
						allDay: false,
						className: 'important'
					}
			]			
		});
		
		
	});

</script>
<style>

	body {
		/*margin-top: 40px;*/
		text-align: center;
		/*font-size: 14px;*/
		/*font-family: "Helvetica Nueue",Arial,Verdana,sans-serif;*/
		/*background-color: #DDDDDD;*/
		}
		
	#wrap {
		// width: 1100px;
		// margin: 0 auto;
		}
		
	#external-events {
		float: left;
		width: 150px;
		padding: 0 10px;
		text-align: left;
		}
		
	#external-events h4 {
		font-size: 16px;
		margin-top: 0;
		padding-top: 1em;
		}
		
	.external-event {
		margin: 10px 0;
		padding: 2px 4px;
		background: #3366CC;
		color: #fff;
		font-size: .85em;
		cursor: pointer;
		}
		
	#external-events p {
		margin: 1.5em 0;
		font-size: 11px;
		color: #666;
		}
		
	#external-events p input {
		margin: 0;
		vertical-align: middle;
		}

	#calendar {
/* 		float: right; */
		margin-top: 50px !important;
		margin-bottom: 100px !important; 
        margin: 0 auto;
		width: 900px;
		background-color: #FFFFFF;
		border-radius: 10px;
        box-shadow: 0 1px 2px #C3C3C3;
		}

</style>

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
          
<div id='wrap'>

<div id='calendar'></div>

<div style='clear:both'></div>

<!-- Modal -->
<div class="modal fade" id="modal-show" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
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

<!DOCTYPE html>
<html>
<head>

<?= $this->tag->stylesheetLink('css/fullcalendar.css') ?>
<?= $this->tag->stylesheetLink('css/fullcalendar.print.css') ?>
<!-- <link href='css/fullcalendar.css' rel='stylesheet' />
<link href='css/fullcalendar.print.css' rel='stylesheet' media='print' /> -->

<?= $this->tag->javascriptInclude('js/jquery-1.10.2.js') ?>
<?= $this->tag->javascriptInclude('js/jquery-ui.custom.min.js') ?>
<!-- <script src=''></script> -->
<!-- <script src='js/jquery-ui.custom.min.js'></script> -->

<?= $this->tag->javascriptInclude('js/fullcalendar.js') ?>
<!-- <script src='js/fullcalendar.js'></script> -->
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
				{
					title: 'All Day Event',
					start: new Date(y, m, 1)
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d-3, 16, 0),
					allDay: false,
					className: 'info'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d+4, 16, 0),
					allDay: false,
					className: 'info'
				},
				{
					title: 'Meeting',
					start: new Date(y, m, d, 10, 30),
					allDay: false,
					className: 'important'
				},
				{
					title: 'Lunch',
					start: new Date(y, m, d, 12, 0),
					end: new Date(y, m, d, 14, 0),
					allDay: false,
					className: 'important'
				},
				{
					title: 'Birthday Party',
					start: new Date(y, m, d+1, 19, 0),
					end: new Date(y, m, d+1, 22, 30),
					allDay: false,
				},
				{
					title: 'Click for Google',
					start: new Date(y, m, 28),
					end: new Date(y, m, 29),
					url: 'http://google.com/',
					className: 'success'
				}
			],			
		});
		
		
	});

</script>
<style>

	body {
		margin-top: 40px;
		text-align: center;
		font-size: 14px;
		font-family: "Helvetica Nueue",Arial,Verdana,sans-serif;
		background-color: #DDDDDD;
		}
		
	#wrap {
		width: 1100px;
		margin: 0 auto;
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
        margin: 0 auto;
		width: 900px;
		background-color: #FFFFFF;
		  border-radius: 6px;
        box-shadow: 0 1px 2px #C3C3C3;
		}

</style>
</head>
<body>
<div id='wrap'>

<div id='calendar'></div>

<div style='clear:both'></div>
</div>
</body>
</html>

{% extends 'index.volt' %}

{% block head %}

{{ stylesheet_link('css/fullcalendar.css') }}
{{ stylesheet_link('css/fullcalendar.print.css') }}

//{{ javascript_include('js/jquery-1.10.2.js') }}
//{{ javascript_include('js/jquery-ui.custom.min.js') }}

{{ javascript_include('js/fullcalendar.js') }}

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
				{% for p in pegawai %}
					{
						title: '{{p.nama_pegawai}}',
						start: new Date(
							'{{p.date_pegawai}}'.split(/[- :]/)[0],
							'{{p.date_pegawai}}'.split(/[- :]/)[1]-1,
							'{{p.date_pegawai}}'.split(/[- :]/)[2],
							'{{p.date_pegawai}}'.split(/[- :]/)[3],
							'{{p.date_pegawai}}'.split(/[- :]/)[4]),
						end: new Date(y, m, d+1, 16, 0),
						allDay: false,
						className: 'important'
					},
				{%endfor%}
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
{% endblock %}

{% block content %}
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
{% endblock%}

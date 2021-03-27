<script>

    document.addEventListener('DOMContentLoaded', function() {
       
        let draggableEl = document.getElementById('external-events');
        var  checkbox = document.getElementById('drop-remove');  
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'timeGridWeek',
        headerToolbar: { center: 'dayGridMonth,timeGridWeek' }, // buttons for switching between views

        views: {
        dayGridMonth: { // name of view
            titleFormat: { year: 'numeric', month: '2-digit', day: '2-digit' }
            // other view-specific options here
        }},
         editable: true,
      droppable: true, // this allows things to be dropped onto the calendar
      drop: function(arg) {
        // is the "remove after drop" checkbox checked?
        if (checkbox.checked) {
          // if so, remove the element from the "Draggable Events" list
          arg.draggedEl.parentNode.removeChild(arg.draggedEl);
        }
      },      
      });
      var Draggable = FullCalendar.Draggable;
      calendar.render();
      new Draggable(draggableEl, {
    itemSelector: '.fc-event',
    eventData: function(eventEl) {
      return {
        title: eventEl.innerText
      };
    }
  });
    });

  </script>

<style>

    body {
      margin-top: 40px;
      font-size: 14px;
      font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    }
  
    #wrap {
      width: 1100px;
      margin: 0 auto;
    }
  
    #external-events {
      float: left;
      width: 150px;
      padding: 0 10px;
      border: 1px solid #ccc;
      background: #eee;
      text-align: left;
    }
  
    #external-events h4 {
      font-size: 16px;
      margin-top: 0;
      padding-top: 1em;
    }
  
    #external-events .fc-event {
      margin: 10px 0;
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
      float: left;
      width: 100%;
    }
  
  </style>
<div class="box box-info padding-1">
    
    <div class="box-body">
       
        <div class="form-group">
            {{ Form::label('horaInicio') }}
            {{ Form::time('horaInicio', $citum->horaInicio, ['class' => 'form-control' . ($errors->has('horaInicio') ? ' is-invalid' : ''), 'placeholder' => 'Horainicio']) }}
            {!! $errors->first('horaInicio', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horaFin') }}
            {{ Form::time('horaFin', $citum->horaFin, ['class' => 'form-control' . ($errors->has('horaFin') ? ' is-invalid' : ''), 'placeholder' => 'Horafin']) }}
            {!! $errors->first('horaFin', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
          {{ Form::label('Fecha') }}
          {{ Form::date('fecha', $citum->horaFin, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'fecha de cita']) }}
          {!! $errors->first('horaFin', '<div class="invalid-feedback">:message</p>') !!}
      </div>
        <div class="form-group">
            {{ Form::label('Pacienteid') }}
            {{ Form::text('Pacienteid', $citum->Pacienteid, ['class' => 'form-control' . ($errors->has('Pacienteid') ? ' is-invalid' : ''), 'placeholder' => 'Pacienteid']) }}
            {!! $errors->first('Pacienteid', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Agendaid') }}
            {{ Form::text('Agendaid', $citum->Agendaid, ['class' => 'form-control' . ($errors->has('Agendaid') ? ' is-invalid' : ''), 'placeholder' => 'Agendaid']) }}
            {!! $errors->first('Agendaid', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

    {{-- <div id='external-events'>
        <p>
          <strong>Draggable Events</strong>
        </p>
      
        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
          <div class='fc-event-main' data-event='{ "title": "my event", "duration": "05:00" }'>My Event 1</div>
        </div>
        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
          <div class='fc-event-main'>My Event 2</div>
        </div>
     
      
        <p>
          <input type='checkbox' id='drop-remove' />
          <label for='drop-remove'>remove after drop</label>
        </p>
      </div> --}}
      <h5>Horarios de Citas</h5>
      <div id='calendar'></div>
</div>
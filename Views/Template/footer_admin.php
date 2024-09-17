
<!DOCTYPE html>

<script src="<?=media();?>/js/index.js"></script>

<body>
    
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

<!-- Inicio Toggle modo dark -->
<div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Claro
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Oscuro
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>
    <!-- Fin Toggle modo dark -->
    

<script>
const base_url = "<?=base_url();?>";
</script>

<script type="text/javascript" src="<?=media();?>/js/functions_admin.js"></script>
<script src="<?=media();?>/js/<?=$data['page_functions_js'];?>"></script>

<!-- JavaScript -->
<script src="<?=media();?>/js/jquery-3.7.0.min.js"></script>
<script src="<?=media();?>/js/bootstrap.min.js"></script>

<script src="<?=media();?>/js/main.js"></script>

<script src="<?=media();?>/js/fontawesome.js"></script>
<script src="<?=media();?>/js/plugins/dropzone.js"></script>

<!-- Page specific javascripts-->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts@5.4.3/dist/echarts.min.js"></script>

<!-- The javascript plugin to display page loading on top-->
<script src="<?=media();?>/js/plugins/pace.min.js"></script>

<!-- Page specific javascripts-->
<script src="
https://cdn.jsdelivr.net/npm/bootstrap-sweetalert@1.0.1/dist/sweetalert.min.js
"></script>
<!-- <script type="text/javascript" src="<?=media();?>/js/plugins/sweetalert.min.js"></script> -->
<script type="text/javascript" src="<?=media();?>/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="<?=media();?>/js/datepicker/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="<?=media();?>/js/datepicker/fecha.js"></script>
<script type="text/javascript" src="<?=media();?>/js/plugins/select2.min.js"></script>

<!-- Data table plugin-->
<script type="text/javascript" src="<?=media();?>/js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?=media();?>/js/plugins/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="<?=media();?>/js/plugins/bootstrap-select.min.js"></script>
<script type="text/javascript" language="javascript"
    src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" language="javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" language="javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" language="javascript"
    src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

<script src="<?=media();?>/js/datepicker/jquery-ui.min.js"></script>


<!-- FullCalendar CSS -->
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css" rel="stylesheet">

<!-- FullCalendar JS -->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales/es.js"></script> <!-- Archivo de localización en español -->

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var barChart;

    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      locale: 'es',
      firstDay: 0,
      dateClick: function(info) {
        var fecha = info.dateStr;

        document.querySelectorAll('.fc-daygrid-day.fc-selected').forEach(function(el) {
          el.classList.remove('fc-selected');
        });

        info.dayEl.classList.add('fc-selected');

        cargarHoras(fecha);
      }
    });

    calendar.render();

    var fechaActual = new Date();
    var fechaActualStr = fechaActual.toISOString().split('T')[0];

    cargarHoras(fechaActualStr);

    function cargarHoras(fecha) {
      var horasPorCompetencia = {
        'Técnico en Programación de Software': [6, 7, 8, 5],
        'Maquinaria Pesada': [4, 5, 6, 3],
        'Técnico en Sistemas': [5, 8, 6, 7]
      };

      var competencias = [
        { id: 287507, nombre: 'Técnico en Programación de Software' },
        { id: 2406543, nombre: 'Maquinaria Pesada' },
        { id: 285607, nombre: 'Técnico en Sistemas' }
      ];

      var horasDelDia = competencias.map(function(comp) {
        return horasPorCompetencia[comp.nombre][Math.floor(Math.random() * 4)];
      });

      if (barChart) {
        barChart.destroy();
      }

      var ctxBar = document.getElementById('hoursChart').getContext('2d');
      barChart = new Chart(ctxBar, {
        type: 'bar',
        data: {
          labels: competencias.map(comp => comp.id),
          datasets: [{
            label: 'Horas trabajadas el ' + fecha,
            data: horasDelDia,
            backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56']
          }]
        },
        options: {
          responsive: true,
          plugins: {
            tooltip: {
              callbacks: {
                label: function(tooltipItem) {
                  var index = tooltipItem.dataIndex;
                  var competencia = competencias[index];
                  var value = tooltipItem.raw || 0;
                  return `${competencia.nombre}: ${value} horas`;
                }
              }
            }
          },
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
    }
  });
</script>



<style>
  
  /* CSS para resaltar la fecha seleccionada */
  .fc-daygrid-day.fc-selected {
    background-color: #f39c12; /* Cambia el color de fondo según tu preferencia */
    color: white;
  }

  /* Elimina el subrayado en todo el calendario */
  .fc-daygrid-day a {
    text-decoration: none;
  }

  /* Elimina el subrayado de los días de la semana */
  .fc-col-header-cell a {
    text-decoration: none;
  }

  /* Cambia el color de fondo del día actual */
  .fc-day-today {
    background-color: #7C75F0 !important; /* Cambia el color de fondo según tu preferencia */
    color: white !important; /* Opcional: cambia el color del texto */
  }
</style>

</body>
</html>
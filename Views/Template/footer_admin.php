
<!DOCTYPE html>



<body>
  
<script>
const base_url = "<?=base_url();?>";
</script>

<!-- modo oscuro -->
<script src="<?=media();?>/js/index.js"></script>

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
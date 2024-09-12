
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


<script type="text/javascript">
      const salesData = {
      	xAxis: {
      		type: 'category',
      		data: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul' , 'Ago' , 'Sep' , 'Oct' , 'Nov' , 'Dici' ,]
      	},
      	yAxis: {
      		type: 'value',
      		axisLabel: {
      			formatter: '{value}'
      		}
      	},
      	series: [
      		{
      			data: [15, 34, 22, 12, 135, 12, 26 , 22 , 44, 33, 55, 33],
      			type: 'line',
      			smooth: true
      		}
      	],
      	tooltip: {
      		trigger: 'axis',
      		formatter: "<b>{b0}:</b> {c0}"
      	}
      }
      
      const supportRequests = {
      	tooltip: {
      		trigger: 'item'
      	},
      	legend: {
      		orient: 'vertical',
      		left: 'left'
      	},
      	series: [
      		{
      			name: 'Support Requests',
      			type: 'pie',
      			radius: '50%',
      			data: [
      				{ value: 300, name: 'Completada' },
      				{ value: 50, name: 'Faltantes' },
      				{ value: 100, name: 'Terminado' }
      			],
      			emphasis: {
      				itemStyle: {
      					shadowBlur: 10,
      					shadowOffsetX: 0,
      					shadowColor: 'rgba(0, 0, 0, 0.5)'
      				}
      			}
      		}
      	]
      };
      
      const salesChartElement = document.getElementById('salesChart');
      const salesChart = echarts.init(salesChartElement, null, { renderer: 'svg' });
      salesChart.setOption(salesData);
      new ResizeObserver(() => salesChart.resize()).observe(salesChartElement);
      
      const supportChartElement = document.getElementById("supportRequestChart")
      const supportChart = echarts.init(supportChartElement, null, { renderer: 'svg' });
      supportChart.setOption(supportRequests);
      new ResizeObserver(() => supportChart.resize()).observe(supportChartElement);
    </script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>

</body>
</html>
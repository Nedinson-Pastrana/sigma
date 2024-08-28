<?php require __DIR__ . '/../Template/header_admin.php'; ?>
<?php require __DIR__ . '/../Template/nav_admin.php'; ?>


<body class="app sidebar-mini">
  <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="bi bi-house-door me-2"></i>Inicio</h1>
          <p>Bienvenidos a SIGMA SOFT </p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
          <li class="breadcrumb-item"><a href="#">Inicio</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="widget-small primary coloured-icon">
            
            <i class="icon bi bi-people fs-1"></i>
            
            <div class="info">
              <h4>Instructores</h4>
              <p><b>5</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="widget-small info coloured-icon"><i class="icon bi bi-clipboard2-check"></i>
          <div class="info">
            <h4>PROGRAMAS</h4>
              <p><b>25</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="widget-small warning coloured-icon"><i class="icon bi bi-table"></i>
            <div class="info">
              <h4>COMPETENCIA</h4>
              <p><b>10</b></p>
            </div>
          </div>
        </div>
        

        <!-- graficas en el inicio -->
        
        <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Horas semanales</h3>
            <div class="ratio ratio-16x9">
              <div id="salesChart"></div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Progreso Total</h3>
            <div class="ratio ratio-16x9">
              <div id="supportRequestChart"></div>
            </div>
          </div>
        </div>
      </div>
    </main> 

  
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts@5.4.3/dist/echarts.min.js"></script>
    <script type="text/javascript">
      const salesData = {
      	xAxis: {
          type: 'category',
      		data: ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo']
      	},
      	yAxis: {
      		type: 'value',
      		axisLabel: {
      			formatter: '${value}'
      		}
      	},
      	series: [
      		{
      			data: [150, 230, 224, 218, 135, 147, 260],
      			type: 'line',
      			smooth: true
      		}
      	],
      	tooltip: {
      		trigger: 'axis',
      		formatter: "<b>{b0}:</b> ${c0}"
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
  
  <?php require __DIR__ . '/../Template/footer_admin.php'; ?>
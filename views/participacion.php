<h1>Participacion Universitaria</h1>
<div id="canvas">
<canvas id="myChart" width="1024" height="300"></canvas>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<script>
  var ctx = document.getElementById("myChart").getContext('2d');
  var chart = new Chart(ctx, {
   type: 'bar',
   data: {
      labels: ['Facultad de ingeneria', 'Facultad de ciencias quimico biologicas','Universidad Autonoma de Campeche','Facultad de medicina'],
      datasets: [{
         label: 'Medidores',   
         data: [10, 30,25,15],
         backgroundColor: '#22aa99'
      }, {
         label: 'Difusión',
         data: [30, 25,15,10],
         backgroundColor: '#994499'
      }, {
         label: 'Asistencia a talleres',
         data: [25, 30,10,15],
         backgroundColor: '#316395'
      }, {
         label: 'Jardines',
         data: [15, 10,30,25],
         backgroundColor: '#b82e2e'
      }, ]
   },
   options: {
      responsive: false,
      legend: {
         position: 'right'
      },
      scales: {
         xAxes: [{
            stacked: true 
         }],
         yAxes: [{
            stacked: true
         }]
      }
   }
});
</script>
<link rel="stylesheet" type="text/css" href="./styles/consumo.css"/>
<div id="canvas">
<canvas id="myChart" width="1024" height="300"></canvas>
</div>
<select id="seleccionCampus">
        <option value="-1">Campus:</option>
		<option value="1">Facultad de ingenieria</option>
		<option value="2">Facultad de Ciencias Quimico Biologicas</option>	
		<option value="3">Universidad Autonoma de Campeche</option>
		<option value="4">Facultad de medicina</option>	
</select>
<button id="boton" onClick="CargarDatosGraficoBar()">Mostrar Grafica general</button>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<script>
document.getElementById('seleccionCampus').addEventListener('change',function(e){
    var campus = e.target.value;
    CargarDatosGraficoMensual(campus)
})
        
function CargarDatosGraficoMensual(campus){
            $.ajax({
                url:"model/controlador_grafico1.php",
                type: 'POST'
            }).done(function(resp){
               
                var tituloHor = ['enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octube','noviembre','diciembre'];
                var cantidad = [];
                var data = JSON.parse(resp);
                switch (campus){
                    case '1':
                        for(var i=1 ;i<=12;i++){
                        console.log(data[0][i]);
                        cantidad.push(data[0][i]);
                        }
                    break;
                    case '2':
                        for(var i=1 ;i<=12;i++){
                        console.log(data[1][i]);
                        cantidad.push(data[1][i]);
                        }
                    break;
                    case '3':
                        for(var i=1 ;i<=12;i++){
                        console.log(data[2][i]);
                        cantidad.push(data[2][i]);
                        }
                    break;
                    case '4':
                        for(var i=1 ;i<=12;i++){
                        console.log(data[3][i]);
                        cantidad.push(data[3][i]);
                        }
                    break;
                }
                if (campus != '-1'){
                    CrearGrafico(tituloHor,cantidad,'Consumo de agua en m^3','Consumo de agua mensual');
                }
            
            })}

        function CargarDatosGraficoBar(){
            $.ajax({
                url:"model/controlador_grafico.php",
                type: 'POST'
            }).done(function(resp){
                var tituloHor = [];
                var cantidad = [];
                var data = JSON.parse(resp);
                for(var i=0; i< data.length;i++){
                    tituloHor.push(data[i][0]); 
                    cantidad.push(data[i][1]);
                }
                CrearGrafico(tituloHor,cantidad,'Consumo de agua en m^3','Consumo de agua');
            })}
                
                
        let myChart;
        function CrearGrafico(tituloHor,cantidad,leyenda,titulo){
            const ctx = document.getElementById('myChart').getContext('2d');
            if (myChart) {
        myChart.destroy();
    }
                myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: tituloHor,
        datasets: [{
            label: leyenda,
            data: cantidad,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        indexAxis: 'y',
        plugins:{
        title:{
            display: true,
            text: titulo
        }
        }
    }
});
        }
</script>
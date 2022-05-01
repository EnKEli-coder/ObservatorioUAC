<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   		integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   		crossorigin=""/>
<link rel="stylesheet" type="text/css" href="./styles/mapa.css"/>
<div id ="contenedor">
	<div id="izq">
		<div id="map">
        
    	</div>	
	</div>
    
    <div id = "der">
    <select name="select-location" id="select-location">
		<option value="-1">Seleccione un lugar:</option>
		<option value="19.8458842,-90.4796041">Facultad de ingenieria</option>
		<option value="19.8479988,-90.4772787">Facultad de Ciencias Quimico Biologicas</option>	
		<option value="19.8280552,-90.5545804">Universidad Autonoma de campeche</option>
		<option value="19.8184557,-90.5306849">Facultad de medicina</option>			
	</select>
    </div>
</div>

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   		integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   		crossorigin=""></script>   		
	
	<script src= "./js/mapa.js"></script>
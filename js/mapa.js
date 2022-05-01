let map = L.map('map').setView([19.8458842,-90.4796041],12)

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',{
  attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);
var coords = null;
document.getElementById('select-location').addEventListener('change',function(e){
    coords = e.target.value.split(",");
    
    map.flyTo(coords,15);
    L.marker(coords).addTo(map);
  })


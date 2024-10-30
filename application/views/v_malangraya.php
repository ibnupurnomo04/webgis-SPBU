<style>
.container{
        width: 1300px;
        height: 600px;
        position: relative;
        
    }
    .box{
        width: 100%;
        height: 100%;            
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0.8;  /* for demo purpose  */
    }
</style>

<div class="row">
<div class=" container">
<div id="map" class="box" style="height: 550px;"></div>
</div>
</div>

<!-- Leaflet JS -->

    <script src="geojsonjs/kota-malang.js"></script>
    <script src="geojsonjs/kota-batu.js"></script>
    <script src="geojsonjs/kabupaten-malang.js"></script>

<script>
//PETA
var mymap = L.map('map').setView([-7.966909313309958, 112.63349700299008], 13);
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
	maxZoom: 19,
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(mymap);

var peta2 = L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
	subdomains: 'abcd',
	maxZoom: 20
});

var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.de/{z}/{x}/{y}.png', {
	maxZoom: 18,
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
});

//PETA ADMINISTRASI Malang Raya
var kotMlg = {
    "color": "#8758FF",
    "weight": 5,
    "opacity": 0.65
};

var kotBat = {
    "color": "#3CCF4E",
    "weight": 5,
    "opacity": 0.65
};

var kabMlg = {
    "color": "#FDD36A",
    "weight": 5,
    "opacity": 0.65
};


var area1= L.geoJSON(kotamalang, {
                    style :kotMlg
                    }).bindPopup("kota malang").addTo(mymap);

var area2=   L.geoJSON(kotabatu, {
                    style :kotBat
                    }).bindPopup("kota batu").addTo(mymap);

var area3=  L.geoJSON(kabmalang, {
                    style :kabMlg
                    }).bindPopup("kabupaten malang").addTo(mymap);


var baseMaps = {
    "dark mode" : peta2,
    "light mode": peta3
    
};
var overlayMaps =
{
    
    'Kabupaten Malang'  :area3,
    'Kota Malang'       :area1,
    'Kota Batu'         :area2
    
    
}
L.control.layers(baseMaps,overlayMaps).addTo(mymap);
</script>
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




    <script src="pendudukjs/mukim-kab-malang.js"></script>
    <script src="pendudukjs/mukim-kota-batu.js"></script>
    <script src="pendudukjs/mukim-kota-malang.js"></script>
<script>
    //PETA
var mymap = L.map('map').setView([-7.990966522151231, 112.6254429207638], 10);
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



//PETA PEMUKIMAN ----------------------------------------------------------------------------

var pndkkotmlg = {
    "color": "#609966",
    "weight": 5,
    "opacity": 0.65
};

var pndkkotbat = {
    "color": "#E7B10A",
    "weight": 5,
    "opacity": 0.65
};

var pndkkabmlg = {
    "color": "#865DFF",
    "weight": 5,
    "opacity": 0.65
};


var omah1=L.geoJSON(pndkkabmalang, {
    style :pndkkabmlg
}).bindPopup("Kabupaten malang ").addTo(mymap);

var omah2=L.geoJSON(pndkkotbatu, {
    style :pndkkotbat
}).bindPopup("kota batu").addTo(mymap);

var omah3=L.geoJSON(pndkkotamalang, {
    style :pndkkotmlg
}).bindPopup("kota malang").addTo(mymap);


var baseMaps = {
    "dark mode" : peta2,
    "light mode": peta3
    
};
var overlayMaps =
{
    
    "Pemukiman kabupaten malang":omah1,
    "pemukiman Kota Batu"       :omah2,
    "pemukiman Kota Malang"     :omah3,
    
    
}
L.control.layers(baseMaps,overlayMaps).addTo(mymap);
</script>

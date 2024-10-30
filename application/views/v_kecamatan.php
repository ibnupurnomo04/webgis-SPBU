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

<!-- kecamatan kota malang -->
<script src="kecamatanjs/Kecamatan_KEDUNGKANDANG.js"></script>
<script src="kecamatanjs/Kecamatan_SUKUN.js"></script>
<script src="kecamatanjs/Kecamatan_KLOJEN.js"></script>
<script src="kecamatanjs/Kecamatan_BLIMBING.js"></script>
<script src="kecamatanjs/Kecamatan_LOWOKWARU.js"></script>
<!-- kecamatan kota batu -->
<script src="kecamatanjs/Kecamatan_BATU.js"></script>
<script src="kecamatanjs/Kecamatan_JUNREJO.js"></script>
<script src="kecamatanjs/Kecamatan_BUMIAJI.js"></script>
<!-- kecamatan kabupaten malang -->
<script src="kecamatanjs/Kecamatan_DONOMULYO.js"></script>
<script src="kecamatanjs/Kecamatan_KALIPARE.js"></script>
<script src="kecamatanjs/Kecamatan_PAGAK.js"></script>
<script src="kecamatanjs/Kecamatan_BANTUR.js"></script>
<script src="kecamatanjs/Kecamatan_GEDANGAN.js"></script>
<script src="kecamatanjs/Kecamatan_SUMBERMANJINGWETAN.js"></script>
<script src="kecamatanjs/Kecamatan_DAMPIT.js"></script>
<script src="kecamatanjs/Kecamatan_TIRTOYUDO.js"></script>
<script src="kecamatanjs/Kecamatan_AMPELGADING.js"></script>
<script src="kecamatanjs/Kecamatan_PONCOKUSUMO.js"></script>
<script src="kecamatanjs/Kecamatan_WAJAK.js"></script>
<script src="kecamatanjs/Kecamatan_TUREN.js"></script>
<script src="kecamatanjs/Kecamatan_BULULAWANG.js"></script>
<script src="kecamatanjs/Kecamatan_GONDANGLEGI.js"></script>
<script src="kecamatanjs/Kecamatan_PAGELARAN.js"></script>
<script src="kecamatanjs/Kecamatan_KEPANJEN.js"></script>
<script src="kecamatanjs/Kecamatan_SUMBERPUCUNG.js"></script>
<script src="kecamatanjs/Kecamatan_KROMENGAN.js"></script>
<script src="kecamatanjs/Kecamatan_NGAJUM.js"></script>
<script src="kecamatanjs/Kecamatan_WONOSARI.js"></script>
<script src="kecamatanjs/Kecamatan_WAGIR.js"></script>
<script src="kecamatanjs/Kecamatan_PAKISAJI.js"></script>
<script src="kecamatanjs/Kecamatan_TAJINAN.js"></script>
<script src="kecamatanjs/Kecamatan_TUMPANG.js"></script>
<script src="kecamatanjs/Kecamatan_PAKIS.js"></script>
<script src="kecamatanjs/Kecamatan_JABUNG.js"></script>
<script src="kecamatanjs/Kecamatan_LAWANG.js"></script>
<script src="kecamatanjs/Kecamatan_SINGOSARI.js"></script>
<script src="kecamatanjs/Kecamatan_KARANGPLOSO.js"></script>
<script src="kecamatanjs/Kecamatan_DAU.js"></script>
<script src="kecamatanjs/Kecamatan_PUJON.js"></script>
<script src="kecamatanjs/Kecamatan_NGANTANG.js"></script>
<script src="kecamatanjs/Kecamatan_KASEMBON.js"></script>
    
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

var kotamalang = {
    "color": "#00425A",
    "weight": 3,
    "opacity": 0.90
};

var kotabatu = {
    "color": "#1F8A70",
    "weight": 3,
    "opacity": 0.90
};

var kabmalang = {
    "color": "#D1512D",
    "weight": 3,
    "opacity": 0.90
};

//kecamatan kota batu
L.geoJSON(batu, {
	style :kotabatu
}).bindPopup("kecamatan batu").addTo(mymap);
L.geoJSON(junrejo, {
	style :kotabatu
}).bindPopup("kecamatan junrejo").addTo(mymap);
L.geoJSON(bumiaji, {
	style :kotabatu
}).bindPopup("kecamatan bumiaji").addTo(mymap);

//kecamatan kota malang
L.geoJSON(kedungkandang, {
	style :kotamalang
}).bindPopup("kecamatan kedungkandang").addTo(mymap);
L.geoJSON(sukun, {
	style :kotamalang
}).bindPopup("kecamatan sukun").addTo(mymap);
L.geoJSON(klojen, {
	style :kotamalang
}).bindPopup("kecamatan klojen").addTo(mymap);
L.geoJSON(blimbing, {
	style :kotamalang
}).bindPopup("kecamatan blimbing").addTo(mymap);
L.geoJSON(lowokwaru, {
	style :kotamalang
}).bindPopup("kecamatan lowokwaru").addTo(mymap);

//kecamatan kabupaten malang 
L.geoJSON(donomulyo, {
	style :kabmalang
}).bindPopup("kecamatan Donomulyo").addTo(mymap);
L.geoJSON(kalipare, {
	style :kabmalang
}).bindPopup("kecamatan Kalipare").addTo(mymap);
L.geoJSON(pagak, {
	style :kabmalang
}).bindPopup("kecamatan Pagak").addTo(mymap);
L.geoJSON(bantur, {
	style :kabmalang
}).bindPopup("kecamatan bantur").addTo(mymap);
L.geoJSON(gedangan, {
	style :kabmalang
}).bindPopup("kecamatan Gedangan").addTo(mymap);
L.geoJSON(sumbermanjing, {
	style :kabmalang
}).bindPopup("kecamatan Sumbermanjing Wetan").addTo(mymap);
L.geoJSON(dampit, {
	style :kabmalang
}).bindPopup("kecamatan Dampit").addTo(mymap);
L.geoJSON(tirtoyudo, {
	style :kabmalang
}).bindPopup("kecamatan Tirtoyudo").addTo(mymap);
L.geoJSON(ampelgading, {
	style :kabmalang
}).bindPopup("kecamatan ampelgading").addTo(mymap);
L.geoJSON(poncokusumo, {
	style :kabmalang
}).bindPopup("kecamatan Poncokusumo").addTo(mymap);
L.geoJSON(wajak, {
	style :kabmalang
}).bindPopup("kecamatan Wajak").addTo(mymap);
L.geoJSON(turen, {
	style :kabmalang
}).bindPopup("kecamatan Turen").addTo(mymap);
L.geoJSON(bululawang, {
	style :kabmalang
}).bindPopup("kecamatan Bululawang").addTo(mymap);
L.geoJSON(gondanglegi, {
	style :kabmalang
}).bindPopup("kecamatan GOndanglegi").addTo(mymap);
L.geoJSON(pagelaran, {
	style :kabmalang
}).bindPopup("kecamatan Pagelaran").addTo(mymap);
L.geoJSON(kepanjen, {
	style :kabmalang
}).bindPopup("kecamatan Kepanjen").addTo(mymap);
L.geoJSON(sumberpucung, {
	style :kabmalang
}).bindPopup("kecamatan Sumberpucung").addTo(mymap);
L.geoJSON(kromengan, {
	style :kabmalang
}).bindPopup("kecamatan Kromengan").addTo(mymap);
L.geoJSON(ngajum, {
	style :kabmalang
}).bindPopup("kecamatan Ngajum").addTo(mymap);
L.geoJSON(wonosari, {
	style :kabmalang
}).bindPopup("kecamatan Wonosari").addTo(mymap);
L.geoJSON(wagir, {
	style :kabmalang
}).bindPopup("kecamatan Wagir").addTo(mymap);
L.geoJSON(pakisaji, {
	style :kabmalang
}).bindPopup("kecamatan Pakisasji").addTo(mymap);
L.geoJSON(tajinan, {
	style :kabmalang
}).bindPopup("kecamatan Tajinan").addTo(mymap);
L.geoJSON(tumpang, {
	style :kabmalang
}).bindPopup("kecamatan Tumpang").addTo(mymap);
L.geoJSON(pakis, {
	style :kabmalang
}).bindPopup("kecamatan Pakis").addTo(mymap);
L.geoJSON(jabung, {
	style :kabmalang
}).bindPopup("kecamatan Jabung").addTo(mymap);
L.geoJSON(lawang, {
	style :kabmalang
}).bindPopup("kecamatan Lawang").addTo(mymap);
L.geoJSON(singosari, {
	style :kabmalang
}).bindPopup("kecamatan Singosari").addTo(mymap);
L.geoJSON(karangploso, {
	style :kabmalang
}).bindPopup("kecamatan Karangploso").addTo(mymap);
L.geoJSON(dau, {
	style :kabmalang
}).bindPopup("kecamatan Dau").addTo(mymap);
L.geoJSON(pujon, {
	style :kabmalang
}).bindPopup("kecamatan Pujon").addTo(mymap);
L.geoJSON(ngantang, {
	style :kabmalang
}).bindPopup("kecamatan Ngantang").addTo(mymap);
L.geoJSON(kasembon, {
	style :kabmalang
}).bindPopup("kecamatan Kasembon").addTo(mymap);

var baseMaps = {
    "dark mode" : peta2,
    "light mode": peta3
    
};


L.control.layers(baseMaps).addTo(mymap);

</script>

<!--
'kecamatan batu	    :kecbatu,	
'kecamatan junrejo' :kecjunrejo,
'kecamatan bumiaji' :kecbumiaji,
'kecamatan Kedungkandang'    :keckedungkandang,
'kecamatan Sukun'            :kecsukun,
'kecamatan Klojen'           :kecklojen,
'kecamatan Blimbing'         :kecblimbing,
'kecamatan Lowokwaru'        :keclowokwaru,
 'kecamatan Donomulyo'           :kecdonomulyo,
    'kecamatan Kalipare'            :keckalipare,
    'kecamatan Pagak'               :kecpagak,
    'kecamatan Bantur'              :kecbantur,
    'kecamatan Gedangan'            :kecgedangan,
    "kecamatan Sumbermanjing"       :kecsumber,
    "kecamatan Dampit"              :kecdampit,         
    "kecamatan Tirtoyudo"           :kectirto,
    "kecamatan Ampelgading"         :kecampel,
    "kecamatan Poncokusumo"         :kecponco,
    "kecamatan Wajak"               :kecwajak,
    "kecamatan Turen"               :kecturen,
    "kecamatan Bululawang"          :kecbulu,
    "kecamatan Gondanglegi"         :kecgondang,
    "kecamatan Pagelaran"           :kecpagelaran,
    "kecamatan Kepanjen"            :keckepanjen,
    "kecamatan Sumberpucung"        :kecsumberpuc,
    "kecamatan Kromengan"           :keckrom,
    "kecamatan Ngajum"              :kecngajum,
    "kecamatan Wonosari"            :kecwono,
    "kecamatan Wagir"               :kecwagir,
    "kecamatan Pakisaji"            :kecpakisaji,
    "kecamatan Tajinan"             :kectajinan,
    "kecamatan Tumpang"             :kectumpang,
    "kecamatan Pakis"               :kecpakis,
    "kecamatan Jabung"              :kecjabung,
    "kecamatan Lawang"              :keclawang,
    "kecamatan Singosari"           :kecsingosari,
    "kecamatan Karangploso"         :keckarang,
    "kecamatan Dau"                 :kecdau,
    "kecamatan Pujon"               :kecpujon,
    "kecamatan Ngantang"            :kecngantang,
    "kecamatan Kasembon"            :keckasembon
-->
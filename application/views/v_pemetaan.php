<!--style-->
<style>
        .box{
            width: 100%;
            height: 100%;            
            position: relative;
            top: 10;
            left: 10;
            opacity: 0.8;  /* for demo purpose  */
        }
        
    </style>
<section >
<div class="row">
<div class=" container">
<div id="map" class="box"   style="height: 650px; "></div>
</div>
</div>
</section>




<!-- SCRIPT UNTUK PETA -->
<script type="text/javascript">

//--------------------STYLE
    //wilayah malang raya    
        var kotMlg = {
            color: "#4C4C6D",
            fillColor : "#E8F6EF",
            weight: 5,
            fillOpacity: 0.90,
        };
        var kotBat = {
            color: "#4C4C6D",
            fillColor: "#1B9C85",
            weight: 5,
            fillOpacity: 0.80,
        };
        var kabMlg = {
            color: "#4C4C6D",
            fillColor:"#FFE194",
            weight: 5,
            fillOpacity: 0.70,
        };
    //kecamatan malang raya 
        var kotamalang = {
            "color": "#FA7070",
            weight: 6,
            fillOpacity: 0.30,
        };

        var kotabatu = {
            "color": "#A8E890",
            weight: 6,
            fillOpacity: 0.30,
        };

        var kabmalang = {
            "color": "#E86A33",
            weight: 6,
            fillOpacity: 0.30,
        };
    //stylependuduk
        var pndkkotmlg = {
            "color": "#609966",
            weight: 5,
            fillOpacity: 0.50,
        };
        
        var pndkkotbat = {
            "color": "#E7B10A",
            weight: 3,
            fillOpacity: 0.50,
        };

        var pndkkabmlg = {
            "color": "#865DFF",
            weight: 3,
            fillOpacity: 0.50,
        };

    //jalan
        var stylekolektor = {
            "color" : "#FC2947",
            "weight": "5"
        }
        var stylelokal = {
            "color" : "#54B435",
            "weight": "3"
        }
        var stylelain = {
            "color" : "#009FBD",
            "weight": "2"
        }
        var stylesetapak = {
            "color" : "#FEFF86",
            "weight": "2"
        }

    //interaksi spasial
        var styleterbanyak = {
            color: "#181D31",
            fillColor : "#FC2947",
            weight: 2,
            fillOpacity: 0.95,
        };
        var style10besar = {
            color: "#181D31",
            fillColor : "#EB774C",
            weight: 2,
            fillOpacity: 0.65,
        };
        var style20besar = {
            color: "#181D31",
            fillColor : "#F5A26D",
            weight: 2,
            fillOpacity: 0.55,
        };
        var style30besar = {
            color: "#181D31",
            fillColor : "#FFCC8F",
            weight: 2,
            fillOpacity: 0.35,
        };

    //kepadatan
        var styletinggi = {
            color: "#16003B",
            fillColor : "#E14D2A",
            weight: 4,
            fillOpacity: 0.95,
        };
        var stylesedang = {
            color: "#16003B",
            fillColor : "#EB774C",
            weight: 4,
            fillOpacity: 0.95,
        };
        var stylerendah = {
            color: "#16003B",
            fillColor : "#FFCC8F",
            weight: 4,
            fillOpacity: 0.85,
        };
//--------------------END STYLE


//BASE MAP
    var mymap   =new L.map('map', {zoom:13, center:new L.latLng(-7.966909313309958, 112.63349700299008)});
    mymap.addLayer(new L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
	maxZoom: 19,
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }));	//base layer

    var peta2 = L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
    	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
    	subdomains: 'abcd',
    	maxZoom: 20
    });

//WILAYAH MALANG RAYA
    var wilayahmlg=L.layerGroup();
    var area1= L.geoJSON.ajax("bahan/gsmalangraya/kotamalang.geojson", {
                        style :kotMlg
                        }).bindPopup("kota malang <br> jumlah penduduk : 843810").addTo(wilayahmlg);

    var area2= L.geoJSON.ajax("bahan/gsmalangraya/kotabatu.geojson", {
                        style :kotBat
                        }).bindPopup("kota batu <br> jumlah penduduk : 213046").addTo(wilayahmlg);  

    var area3= L.geoJSON.ajax("bahan/gsmalangraya/kabupatenmalang.geojson", {
                        style :kabMlg
                        }).bindPopup("kabupaten malang <br> jumlah penduduk : 2619975").addTo(wilayahmlg);


//KECAMATAN KOTA MALANG
    var camatankotmalang=L.layerGroup();
    var keckedungkandang=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_KEDUNGKANDANG.geojson", {
    	    style :kotamalang
            }).bindPopup("kecamatan kedungkandang <br> jumlah penduduk : 207428").addTo(camatankotmalang);
    var kecsukun=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_SUKUN.geojson", {
    	    style :kotamalang
            }).bindPopup("kecamatan sukun <br> jumlah penduduk : 196300").addTo(camatankotmalang);
    var kecklojen=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_KLOJEN.geojson", {
    	            style :kotamalang
                    }).bindPopup("kecamatan klojen <br> jumlah penduduk : 94112").addTo(camatankotmalang);
    var kecblimbing=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_BLIMBING.geojson", {
    	                style :kotamalang
                        }).bindPopup("kecamatan blimbing <br> jumlah penduduk : 182331").addTo(camatankotmalang);
    var keclowokwaru=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_LOWOKWARU.geojson", {
    	                style :kotamalang
                        }).bindPopup("kecamatan lowokwaru <br> jumlah penduduk : 163639").addTo(camatankotmalang);
    
//KECAMATAN KOTA BATU
    var camatanbatu=L.layerGroup();
    var kecbatu=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_BATU.geojson", {
    	style :kotabatu
        }).bindPopup("kecamatan batu <br> jumlah penduduk : 96921").addTo(camatanbatu);

    var kecjunrejo=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_JUNREJO.geojson", {
    	style :kotabatu
        }).bindPopup("kecamatan junrejo <br> jumlah penduduk : 55105").addTo(camatanbatu);

    var kecbumiaji=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_BUMIAJI.geojson", {
    	style :kotabatu
        }).bindPopup("kecamatan bumiaji <br> jumlah penduduk : 61020").addTo(camatanbatu);

//KECAMATAN KABUPATEN MALANG
    var camatkabmalang=L.layerGroup();
    var kecdonomulyo=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_DONOMULYO.geojson", {
    	    style :kabmalang
            }).bindPopup("kecamatan Donomulyo <br> jumlah penduduk : 62585").addTo(camatkabmalang);
    var keckalipare=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_KALIPARE.geojson", {
    	    style :kabmalang
            }).bindPopup("kecamatan Kalipare <br> jumlah penduduk : 59545").addTo(camatkabmalang);
    var kecpagak=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_PAGAK.geojson", {
    	    style :kabmalang
            }).bindPopup("kecamatan Pagak <br> jumlah penduduk : 45597").addTo(camatkabmalang);
    var kecbantur=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_BANTUR.geojson", {
    	    style :kabmalang
            }).bindPopup("kecamatan bantur <br> jumlah penduduk : 68824").addTo(camatkabmalang);
    var kecgedangan=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_GEDANGAN.geojson", {
    	    style :kabmalang
            }).bindPopup("kecamatan Gedangan <br> jumlah penduduk : 53289").addTo(camatkabmalang);
    var kecsumber=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_SUMBERMANJINGWETAN.geojson", {
    	    style :kabmalang
            }).bindPopup("kecamatan Sumbermanjing Wetan <br> jumlah penduduk : 89928").addTo(camatkabmalang);
    var kecdampit=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_DAMPIT.geojson", {
    	    style :kabmalang
            }).bindPopup("kecamatan Dampit <br> jumlah penduduk : 118479").addTo(camatkabmalang);
    var kectirto=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_TIRTOYUDO.geojson", {
    	    style :kabmalang
            }).bindPopup("kecamatan Tirtoyudo <br> jumlah penduduk : 60928").addTo(camatkabmalang);
    var kecampel=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_AMPELGADING.geojson", {
    	    style :kabmalang
            }).bindPopup("kecamatan ampelgading <br> jumlah penduduk : 52000").addTo(camatkabmalang);
    var kecponco=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_PONCOKUSUMO.geojson", {
    	    style :kabmalang
            }).bindPopup("kecamatan Poncokusumo <br> jumlah penduduk : 92648").addTo(camatkabmalang);
    var kecwajak=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_WAJAK.geojson", {
    	    style :kabmalang
            }).bindPopup("kecamatan Wajak <br> jumlah penduduk : 81170").addTo(camatkabmalang);
    var kecturen=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_TUREN.geojson", {
    	    style :kabmalang
            }).bindPopup("kecamatan Turen <br> jumlah penduduk : 115290").addTo(camatkabmalang);
    var kecbulu=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_BULULAWANG.geojson", {
    	    style :kabmalang
            }).bindPopup("kecamatan Bululawang <br> jumlah penduduk : 72917").addTo(camatkabmalang);
    var kecgondang=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_GONDANGLEGI.geojson", {
    	    style :kabmalang
            }).bindPopup("kecamatan Gondanglegi <br> jumlah penduduk : 86796").addTo(camatkabmalang);
    var kecpagelaran=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_PAGELARAN.geojson", {
    	    style :kabmalang
            }).bindPopup("kecamatan Pagelaran <br> jumlah penduduk : 68147").addTo(camatkabmalang);
    var keckepanjen=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_KEPANJEN.geojson", {
    	    style :kabmalang
            }).bindPopup("kecamatan Kepanjen <br> jumlah penduduk : 109634").addTo(camatkabmalang);
    var kecsumberpuc=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_SUMBERPUCUNG.geojson", {
    	    style :kabmalang
            }).bindPopup("kecamatan Sumberpucung <br> jumlah penduduk : 55460").addTo(camatkabmalang);
    var keckrom=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_KROMENGAN.geojson", {
    	    style :kabmalang
            }).bindPopup("kecamatan Kromengan <br> jumlah penduduk : 38033").addTo(camatkabmalang);
    var kecngajum=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_NGAJUM.geojson", {
    	    style :kabmalang
            }).bindPopup("kecamatan Ngajum <br> jumlah penduduk : 49504").addTo(camatkabmalang);
    var kecwono=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_WONOSARI.geojson", {
    	    style :kabmalang
            }).bindPopup("kecamatan Wonosari <br> jumlah penduduk : 41357").addTo(camatkabmalang);
    var kecwagir=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_WAGIR.geojson", {
    	    style :kabmalang
            }).bindPopup("kecamatan Wagir <br> jumlah penduduk : 93211").addTo(camatkabmalang);
    var kecpakisaji=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_PAKISAJI.geojson", {
    	    style :kabmalang
            }).bindPopup("kecamatan Pakisasji <br> jumlah penduduk : 93157").addTo(camatkabmalang);
    var kectajinan=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_TAJINAN.geojson", {
    	    style :kabmalang
            }).bindPopup("kecamatan Tajinan <br> jumlah penduduk : 55119").addTo(camatkabmalang);
    var kectumpang=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_TUMPANG.geojson", {
    	    style :kabmalang
            }).bindPopup("kecamatan Tumpang <br> jumlah penduduk : 75657").addTo(camatkabmalang);
    var kecpakis=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_PAKIS.geojson", {
    	    style :kabmalang
            }).bindPopup("kecamatan Pakis <br> jumlah penduduk : 171657").addTo(camatkabmalang);
    var kecjabung=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_JABUNG.geojson", {
    	    style :kabmalang
            }).bindPopup("kecamatan Jabung <br> jumlah penduduk : 75365").addTo(camatkabmalang);
    var keclawang=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_LAWANG.geojson", {
    	    style :kabmalang
            }).bindPopup("kecamatan Lawang <br> jumlah penduduk : 114928").addTo(camatkabmalang);
    var kecsingosari=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_SINGOSARI.geojson", {
    	    style :kabmalang
            }).bindPopup("kecamatan Singosari <br> jumlah penduduk : 190487").addTo(camatkabmalang);
    var keckarang=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_KARANGPLOSO.geojson", {
    	    style :kabmalang
            }).bindPopup("kecamatan Karangploso <br> jumlah penduduk : 89032").addTo(camatkabmalang);
    var kecdau=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_DAU.geojson", {
    	    style :kabmalang
            }).bindPopup("kecamatan Dau <br> jumlah penduduk : 82220").addTo(camatkabmalang);
    var kecpujon=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_PUJON.geojson", {
    	    style :kabmalang
            }).bindPopup("kecamatan Pujon <br> jumlah penduduk : 69040").addTo(camatkabmalang);
    var kecngantang=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_NGANTANG.geojson", {
    	    style :kabmalang
            }).bindPopup("kecamatan Ngantang <br> jumlah penduduk : 56376").addTo(camatkabmalang);
    var keckasembon=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_KASEMBON.geojson", {
    	    style :kabmalang
            }).bindPopup("kecamatan Kasembon <br> jumlah penduduk : 31595").addTo(camatkabmalang);
//KAWASAN PEMUKIMAN
    var mukim1=L.layerGroup();
    var omah1=L.geoJSON.ajax('bahan/pendudukgeojs/mukim-kab-malang.geojson', {
        style :pndkkabmlg
    }).bindPopup("Kabupaten malang ").addTo(mukim1);
    var mukim2=L.layerGroup();
    var omah2=L.geoJSON.ajax('bahan/pendudukgeojs/mukim-kota-batu.geojson', {
        style :pndkkotbat
    }).bindPopup("kota batu").addTo(mukim2);
    var mukim3=L.layerGroup();
    var omah3=L.geoJSON.ajax('bahan/pendudukgeojs/mukim-kota-malang.geojson', {
        style :pndkkotmlg
    }).bindPopup("kota malang").addTo(mukim3);

//NEAREST NEIGHBOR
    //point spbu
    //SPBU
    var Iconspbu = L.Icon.extend({
        options: {
            iconSize:     [38, 45],
            shadowSize:   [50, 64],
        }
    });

    var IconBensin = new Iconspbu({iconUrl: '<?= base_url('bahan/gas-station-pertamina.png') ?>'});
    <?php  foreach ($spbu as $key => $value) { ?>
    L.marker([<?= $value->latitude ?>, <?= $value->longitude ?>],{icon: IconBensin}).addTo(mymap)
        	.bindPopup("<b><?= $value->nama_spbu ?></b><br><?= $value->penyedia ?><br><?= $value->alamat ?>");
    <?php } ?>
    
    var heat = L.heatLayer([
        <?php  foreach ($spbu as $key => $value) { ?>
            [<?= $value->latitude ?>, <?= $value->longitude ?>,50],
        <?php } ?>
    ],{radius:50})
    var heatmaps=L.layerGroup([heat]);
//PETA INTERAKSI SPASIAL
    //KANTOR KECAMATAN
        var Iconoffice = L.Icon.extend({
            options: {
                iconSize:     [38, 45],
                shadowSize:   [50, 64],
            }
        
        
        });
    
        var IconKntrkec = new Iconoffice({iconUrl: '<?= base_url('bahan/ngantor.png') ?>'});
    
        var office=L.layerGroup();
        <?php foreach ($kantorkec as $key => $value) { ?>
        L.marker([<?= $value->latitude ?>, <?= $value->longitude ?>],{icon: IconKntrkec}).addTo(office)
        						.bindPopup("<b><?= $value->nama_kantor ?></b><br><?= $value->wilayah ?><br><?= $value->alamat ?>");
        <?php } ?>
    //Itensitas kendaraan Sukun
    var itensitasukun=L.layerGroup();
        var interkedun=[[-8.00487665693767,112.61858148186926],[-8.011652239541558,112.64381772603932]];
        var interlowok=[[-8.00487665693767,112.61858148186926],[-7.945861330285805,112.63052716330117]];
        var interblim=[[-8.00487665693767,112.61858148186926],[-7.930173743398412,112.65189535303317]];
        var interkloje=[[-8.00487665693767,112.61858148186926],[-7.96569125625155,112.61804947241214]];
        var intersingo=[[-8.00487665693767,112.61858148186926],[-7.893861286766666,112.66293458186821]];
        var interwagir=[[-8.00487665693767,112.61858148186926],[-8.008769482952703,112.57244276837524]];
        var interpakji=[[-8.00487665693767,112.61858148186926],[-8.060928514826793,112.60164855488179]];
        var interpakis=[[-8.00487665693767,112.61858148186926],[-7.958967133543515,112.71686035488077]];
        var interbulul=[[-8.00487665693767,112.61858148186926],[-8.077694427829869,112.64098160379154]];
        var interdau  =[[-8.00487665693767,112.61858148186926],[-7.914074954750221,112.58596379905701]];

        var interpanje=[[-8.00487665693767,112.61858148186926],[-8.12987657899868,112.56622318371782]];
        var intertajin=[[-8.00487665693767,112.61858148186926],[-8.049271228635726,112.68162180563698]];
        var interlawan=[[-8.00487665693767,112.61858148186926],[-7.836316385585332,112.69707227892864]];
        var interkaran=[[-8.00487665693767,112.61858148186926],[-7.891395958587032,112.59440191255075]];
        var interturen=[[-8.00487665693767,112.61858148186926],[-8.169575025723118,112.68943669310302]];
        var interbatu =[[-8.00487665693767,112.61858148186926],[-7.87991707863725,112.52867179720941]];     
        var interjabun=[[-8.00487665693767,112.61858148186926],[-7.944972206510775,112.73413126837467]];   
        var interponco=[[-8.00487665693767,112.61858148186926],[-8.042102441254215,112.77287464138747]];
        var intertumpa=[[-8.00487665693767,112.61858148186926],[-8.17606693802475,112.63566388371831]];
        var intergonda=[[-8.00487665693767,112.61858148186926],[-8.17606693802475,112.63566388371831]];

        var interwajak=[[-8.00487665693767,112.61858148186926],[-8.102253081115615,112.73016845488225]];
        var interdampi=[[-8.00487665693767,112.61858148186926],[-8.211428328973343,112.74854853954203]];
        var interjunre=[[-8.00487665693767,112.61858148186926],[-7.91055557931054,112.55761445488028]];
        var interpagel=[[-8.00487665693767,112.61858148186926],[-8.195850066757924,112.61975679905969]];
        var interngaju=[[-8.00487665693767,112.61858148186926],[-8.096319878145657,112.54093117022342]];
        var interpucun=[[-8.00487665693767,112.61858148186926],[-8.156563127210354,112.4741116413887]];
        var interbumia=[[-8.00487665693767,112.61858148186926],[-7.838044440202887,112.52769552809151]];
        var interpujon=[[-8.00487665693767,112.61858148186926],[-7.849224913003989,112.48033478371494]];       
        var intersumbe=[[-8.00487665693767,112.61858148186926],[-8.278716388656624,112.69003608686435]];
        var interbantu=[[-8.00487665693767,112.61858148186926],[-8.316174958375807,112.58031377866625]];
        var interkalip=[[-8.00487665693767,112.61858148186926],[-8.205203370998408,112.4657687683773]];
        var interkrome=[[-8.00487665693767,112.61858148186926],[-8.130200469153094,112.48998965303534]];
        var interwonos=[[-8.00487665693767,112.61858148186926],[-8.033054305286328,112.49776268371676]];
        var intergedan=[[-8.00487665693767,112.61858148186926],[-8.292802294407691,112.64822312789612]];
        var interpagak=[[-8.00487665693767,112.61858148186926],[-8.225327995508875,112.52579524138947]];
        var intertirto=[[-8.00487665693767,112.61858148186926],[-8.226857480300573,112.83293284613062]];
        var interdonom=[[-8.00487665693767,112.61858148186926],[-8.285206920962832,112.4279539786642]];
        var interngant=[[-8.00487665693767,112.61858148186926],[-7.84655732346883,112.37190926329482]];
        var interampel=[[-8.00487665693767,112.61858148186926],[-8.234095147669102,112.87767672789555]];
        var interkasem=[[-8.00487665693767,112.61858148186926],[-7.783746624542625,112.31114942789091]];

        var options1 = { use: L.polyline, delay: 350, dashArray: [15,30],  weight: 10, color: "#293462", pulseColor: "#00FFAB"};
        var options2 = { use: L.polyline, delay: 350, dashArray: [15,32],  weight: 10, color: "#293462", pulseColor: "#00FFAB"};
        var options3 = { use: L.polyline, delay: 350, dashArray: [15,34],  weight: 10, color: "#293462", pulseColor: "#00FFAB"};
        var options4 = { use: L.polyline, delay: 350, dashArray: [15,36],  weight: 10, color: "#293462", pulseColor: "#00FFAB"};
        var options5 = { use: L.polyline, delay: 350, dashArray: [15,38],  weight: 10, color: "#293462", pulseColor: "#00FFAB"};
        var options6 = { use: L.polyline, delay: 350, dashArray: [15,40],  weight: 10, color: "#293462", pulseColor: "#00FFAB"};
        var options7 = { use: L.polyline, delay: 350, dashArray: [15,42],  weight: 10, color: "#293462", pulseColor: "#00FFAB"};
        var options8 = { use: L.polyline, delay: 350, dashArray: [15,44],  weight: 10, color: "#293462", pulseColor: "#00FFAB"};
        var options9 = { use: L.polyline, delay: 350, dashArray: [15,46],  weight: 10, color: "#293462", pulseColor: "#00FFAB"};
        var options10 ={ use: L.polyline, delay: 350, dashArray: [15,48],  weight: 10, color: "#293462", pulseColor: "#00FFAB"};
        
        var options11 ={ use: L.polyline, delay: 650, dashArray: [20,60], weight: 10, color: "#293462", pulseColor: "#FFD93D"};
        var options12 ={ use: L.polyline, delay: 650, dashArray: [20,62], weight: 10, color: "#293462", pulseColor: "#FFD93D"};
        var options13 ={ use: L.polyline, delay: 650, dashArray: [20,64], weight: 10, color: "#293462", pulseColor: "#FFD93D"};
        var options14 ={ use: L.polyline, delay: 650, dashArray: [20,66], weight: 10, color: "#293462", pulseColor: "#FFD93D"};
        var options15 ={ use: L.polyline, delay: 650, dashArray: [20,68], weight: 10, color: "#293462", pulseColor: "#FFD93D"};
        var options16 ={ use: L.polyline, delay: 650, dashArray: [20,60], weight: 10, color: "#293462", pulseColor: "#FFD93D"};
        var options17 ={ use: L.polyline, delay: 650, dashArray: [20,62], weight: 10, color: "#293462", pulseColor: "#FFD93D"};
        var options18 ={ use: L.polyline, delay: 650, dashArray: [20,64], weight: 10, color: "#293462", pulseColor: "#FFD93D"};
        var options19 ={ use: L.polyline, delay: 650, dashArray: [20,66], weight: 10, color: "#293462", pulseColor: "#FFD93D"};
        var options20 ={ use: L.polyline, delay: 650, dashArray: [20,68], weight: 10, color: "#293462", pulseColor: "#FFD93D"};
        
        var options21 ={ use: L.polyline, delay: 800, dashArray: [10,90], weight: 10, color: "#293462", pulseColor: "#FC2947"};
        var options22 ={ use: L.polyline, delay: 800, dashArray: [10,91], weight: 10, color: "#293462", pulseColor: "#FC2947"};
        var options23 ={ use: L.polyline, delay: 800, dashArray: [10,92], weight: 10, color: "#293462", pulseColor: "#FC2947"};
        var options24 ={ use: L.polyline, delay: 800, dashArray: [10,93], weight: 10, color: "#293462", pulseColor: "#FC2947"};
        var options25 ={ use: L.polyline, delay: 800, dashArray: [10,94], weight: 10, color: "#293462", pulseColor: "#FC2947"};
        var options26 ={ use: L.polyline, delay: 800, dashArray: [10,95], weight: 10, color: "#293462", pulseColor: "#FC2947"};
        var options27 ={ use: L.polyline, delay: 800, dashArray: [10,96], weight: 10, color: "#293462", pulseColor: "#FC2947"};
        var options28 ={ use: L.polyline, delay: 800, dashArray: [10,97], weight: 10, color: "#293462", pulseColor: "#FC2947"};
        var options29 ={ use: L.polyline, delay: 800, dashArray: [10,98], weight: 10, color: "#293462", pulseColor: "#FC2947"};
        var options30 ={ use: L.polyline, delay: 800, dashArray: [10,99], weight: 10, color: "#293462", pulseColor: "#FC2947"};
        var options31 ={ use: L.polyline, delay: 800, dashArray: [10,99], weight: 10, color: "#293462", pulseColor: "#FC2947"};
        var options32 ={ use: L.polyline, delay: 800, dashArray: [10,99], weight: 10, color: "#293462", pulseColor: "#FC2947"};
        var options33 ={ use: L.polyline, delay: 800, dashArray: [10,99], weight: 10, color: "#293462", pulseColor: "#FC2947"};
        var options34 ={ use: L.polyline, delay: 800, dashArray: [10,99], weight: 10, color: "#293462", pulseColor: "#FC2947"};
        var options35 ={ use: L.polyline, delay: 800, dashArray: [10,99], weight: 10, color: "#293462", pulseColor: "#FC2947"};
        var options36 ={ use: L.polyline, delay: 800, dashArray: [10,99], weight: 10, color: "#293462", pulseColor: "#FC2947"};
        var options37 ={ use: L.polyline, delay: 800, dashArray: [10,99], weight: 10, color: "#293462", pulseColor: "#FC2947"};
        var options38 ={ use: L.polyline, delay: 800, dashArray: [10,99], weight: 10, color: "#293462", pulseColor: "#FC2947"};
        var options39 ={ use: L.polyline, delay: 800, dashArray: [10,99], weight: 10, color: "#293462", pulseColor: "#FC2947"};
        var options40 ={ use: L.polyline, delay: 800, dashArray: [10,99], weight: 10, color: "#293462", pulseColor: "#FC2947"};

        var path1 = new L.Polyline.AntPath(interkedun,options1);   
        var path2 = new L.Polyline.AntPath(interlowok,options2);
        var path3 = new L.Polyline.AntPath(interblim,options3);
        var path4 = new L.Polyline.AntPath(interkloje,options4);
        var path5 = new L.Polyline.AntPath(intersingo,options5);
        var path6 = new L.Polyline.AntPath(interwagir,options6);
        var path7 = new L.Polyline.AntPath(interpakji,options7);
        var path8 = new L.Polyline.AntPath(interpakis,options8);
        var path9 = new L.Polyline.AntPath(interbulul  ,options9);
        var path10 =new L.Polyline.AntPath(interdau,options10);

        var path11 =new L.Polyline.AntPath(interpanje,options11); 
        var path12 =new L.Polyline.AntPath(intertajin,options12);
        var path13 =new L.Polyline.AntPath(interlawan, options13);  
        var path14 =new L.Polyline.AntPath(interkaran,options14); 
        var path15 =new L.Polyline.AntPath(interturen,options15); 
        var path16 =new L.Polyline.AntPath(interbatu,options16); 
        var path17 =new L.Polyline.AntPath(interjabun,options17); 
        var path18 =new L.Polyline.AntPath(interponco,options18); 
        var path19 =new L.Polyline.AntPath(intertumpa,options19); 
        var path20 =new L.Polyline.AntPath(intergonda,options20); 

        var path21 =new L.Polyline.AntPath(interwajak,options21); 
        var path22 =new L.Polyline.AntPath(interdampi,options22); 
        var path23 =new L.Polyline.AntPath(interjunre,options23); 
        var path24 =new L.Polyline.AntPath(interpagel,options24); 
        var path25 =new L.Polyline.AntPath(interngaju,options25); 
        var path26 =new L.Polyline.AntPath(interpucun,options26); 
        var path27 =new L.Polyline.AntPath(interbumia,options27); 
        var path28 =new L.Polyline.AntPath(interpujon,options28); 
        var path29 =new L.Polyline.AntPath(intersumbe,options29);
        var path30 =new L.Polyline.AntPath(interbantu,options30);
        var path31 =new L.Polyline.AntPath(interkalip,options31); 
        var path32 =new L.Polyline.AntPath(interkrome,options32);
        var path33 =new L.Polyline.AntPath(interwonos,options33);
        var path34 =new L.Polyline.AntPath(intergedan,options34);
        var path35 =new L.Polyline.AntPath(interpagak,options35);
        var path36 =new L.Polyline.AntPath(intertirto,options36);
        var path37 =new L.Polyline.AntPath(interdonom,options37);
        var path38 =new L.Polyline.AntPath(interngant,options38);
        var path39 =new L.Polyline.AntPath(interampel,options39);
        var path40 =new L.Polyline.AntPath(interkasem,options40);

        path1.bindPopup("1.<br> Sukun-kedungkandang         <br> nilai:5429082,187").addTo(itensitasukun);
        path2.bindPopup("2.<br> Sukun-lowokwaru             <br> nilai:3417269,755").addTo(itensitasukun);
        path3.bindPopup("3.<br> Sukun-blimbing              <br> nilai:3167396,044").addTo(itensitasukun);
        path4.bindPopup("4.<br> Sukun-klojen                <br> nilai:2979707,355").addTo(itensitasukun);
        path5.bindPopup("5.<br> Sukun-Singosari             <br> nilai:2280036,47").addTo(itensitasukun);
        path6.bindPopup("6.<br> Sukun-Wagir                 <br> nilai:2178252,298").addTo(itensitasukun);
        path7.bindPopup("7.<br> Sukun-Pakisaji              <br> nilai:2126362,686").addTo(itensitasukun);
        path8.bindPopup("8.<br> Sukun-Pakis                 <br> nilai:2005730,304").addTo(itensitasukun);
        path9.bindPopup("9.<br> Sukun-Bululawang            <br> nilai:1389670,592").addTo(itensitasukun);
        path10.bindPopup("10.<br>Sukun-Dau                  <br> nilai:1195539,704").addTo(itensitasukun);

        path11.bindPopup("11.<br> Sukun-Kepanjen            <br> nilai:1150863,861").addTo(itensitasukun);
        path12.bindPopup("12.<br> Sukun-Tajinan             <br> nilai:1081985,97").addTo(itensitasukun);
        path13.bindPopup("13.<br> Sukun-Lawang              <br> nilai:1025471,2").addTo(itensitasukun);
        path14.bindPopup("14.<br> Sukun-Karangploso         <br> nilai:924708,0212").addTo(itensitasukun);
        path15.bindPopup("15.<br> Sukun-Turen               <br> nilai:838201").addTo(itensitasukun);
        path16.bindPopup("16.<br> Sukun-Batu                <br> nilai:799394,6345").addTo(itensitasukun);
        path17.bindPopup("17.<br> Sukun-Jabung              <br> nilai:747179,2677").addTo(itensitasukun);
        path18.bindPopup("18.<br> Sukun-Poncokusumo         <br> nilai:736307,7895").addTo(itensitasukun);
        path19.bindPopup("19.<br> Sukun-Tumpang             <br> nilai:675066,7773").addTo(itensitasukun);
        path20.bindPopup("20.<br> Sukun-Gondanglegi         <br> nilai:650307,4351").addTo(itensitasukun);
            
        path21.bindPopup("21.<br> Sukun-Wajak               <br> nilai:647710,2033").addTo(itensitasukun);
        path22.bindPopup("22.<br> Sukun-Dampit              <br> nilai:597877,3188").addTo(itensitasukun);
        path23.bindPopup("23.<br> Sukun-Junrejo             <br> nilai:581565,1344").addTo(itensitasukun);
        path24.bindPopup("24.<br> Sukun-Pagelaran           <br> nilai:464488,059").addTo(itensitasukun);
        path25.bindPopup("25.<br> Sukun-Ngajum              <br> nilai:435768,3946").addTo(itensitasukun);
        path26.bindPopup("26.<br> Sukun-Sumberpucung        <br> nilai:409278,1203").addTo(itensitasukun);
        path27.bindPopup("27.<br> Sukun-Bumiaji             <br> nilai:396630").addTo(itensitasukun);
        path28.bindPopup("28.<br> Sukun-Pujon               <br> nilai:395118,1341").addTo(itensitasukun);
        path29.bindPopup("29.<br> Sukun-Sumbermanjing       <br> nilai:385433,7642").addTo(itensitasukun);
        path30.bindPopup("30.<br>Sukun-BBantur              <br> nilai:300894,2361").addTo(itensitasukun);
        path31.bindPopup("31.<br> Sukun-Kalipare            <br> nilai:287898,6084").addTo(itensitasukun);
        path32.bindPopup("32.<br> Sukun-Kromengan           <br> nilai:286048,9617").addTo(itensitasukun);
        path33.bindPopup("33.<br> Sukun-Wonosari            <br> nilai:266176,3639").addTo(itensitasukun);
        path34.bindPopup("34.<br> Sukun-Gedangan            <br> nilai:238283,1595").addTo(itensitasukun);
        path35.bindPopup("35.<br> Sukun-Pagak               <br> nilai:236790,7698").addTo(itensitasukun);
        path36.bindPopup("36.<br> Sukun-Tirtoyudo           <br> nilai:226948,129").addTo(itensitasukun);
        path37.bindPopup("37.<br> Sukun-Donomulyo           <br> nilai:206825,5135").addTo(itensitasukun);
        path38.bindPopup("38.<br> Sukun-Ngantang            <br> nilai:200845,8947").addTo(itensitasukun);
        path39.bindPopup("39.<br> Sukun-Ampelgading         <br> nilai:168720,6612").addTo(itensitasukun);
        path40.bindPopup("40.<br> Sukun-Kasembon            <br> nilai:89367,41354").addTo(itensitasukun);
    
    //Itensitas kendaraan Batu
        var itensitasbatu=L.layerGroup();
        var interlowok2= [[-7.87991707863725,112.52867179720941],[-7.945861330285805,112.63052716330117]];
        var interdau2=   [[-7.87991707863725,112.52867179720941],[-7.914074954750221,112.58596379905701]];
        var interjunre2= [[-7.87991707863725,112.52867179720941],[-7.91055557931054,112.55761445488028]]; 
        var interblim2=  [[-7.87991707863725,112.52867179720941],[-7.930173743398412,112.65189535303317]];
        var intersingo2= [[-7.87991707863725,112.52867179720941],[-7.893861286766666,112.66293458186821]];
        var intersukun2= [[-7.87991707863725,112.52867179720941],[-8.00487665693767,112.61858148186926]];
        var interpujon2= [[-7.87991707863725,112.52867179720941],[-7.849224913003989,112.48033478371494]];
        var interkaran2= [[-7.87991707863725,112.52867179720941],[-7.891395958587032,112.59440191255075]];
        var interkedun2= [[-7.87991707863725,112.52867179720941],[-8.011652239541558,112.64381772603932]];
        var interpakis2= [[-7.87991707863725,112.52867179720941],[-7.958967133543515,112.71686035488077]];

        var interkloje2=[[-7.87991707863725,112.52867179720941],[-7.96569125625155,112.61804947241214]];
        var interlawan2=[[-7.87991707863725,112.52867179720941],[-7.836316385585332,112.69707227892864]];
        var interwagir2=[[-7.87991707863725,112.52867179720941],[-8.008769482952703,112.57244276837524]];
        var interpakji2=[[-7.87991707863725,112.52867179720941],[-8.060928514826793,112.60164855488179]];
        var interpanje2=[[-7.87991707863725,112.52867179720941],[-8.12987657899868,112.56622318371782]];
        var interjabun2=[[-7.87991707863725,112.52867179720941],[-7.944972206510775,112.73413126837467]];
        var interturen2=[[-7.87991707863725,112.52867179720941],[-8.169575025723118,112.68943669310302]];
        var interponco2=[[-7.87991707863725,112.52867179720941],[-8.042102441254215,112.77287464138747]];
        var intertumpa2=[[-7.87991707863725,112.52867179720941],[-8.002230755697871,112.76164637022251]];
        var interbulul2=[[-7.87991707863725,112.52867179720941],[-8.077694427829869,112.64098160379154]];

        var interdampi2=[[-7.87991707863725,112.52867179720941],[-8.211428328973343,112.74854853954203]];
        var interngant2=[[-7.87991707863725,112.52867179720941],[-7.84655732346883,112.37190926329482]];
        var intergonda2=[[-7.87991707863725,112.52867179720941],[-8.17606693802475,112.63566388371831]];
        var interwajak2=[[-7.87991707863725,112.52867179720941],[-8.102253081115615,112.73016845488225]];
        var intertajin2=[[-7.87991707863725,112.52867179720941],[-8.049271228635726,112.68162180563698]];
        var interpagel2=[[-7.87991707863725,112.52867179720941],[-8.195850066757924,112.61975679905969]];
        var intersumbe2=[[-7.87991707863725,112.52867179720941],[-8.278716388656624,112.69003608686435]];
        var interpucun2=[[-7.87991707863725,112.52867179720941],[-8.156563127210354,112.4741116413887]];
        var interbantu2=[[-7.87991707863725,112.52867179720941],[-8.316174958375807,112.58031377866625]];
        var interngaju2=[[-7.87991707863725,112.52867179720941],[-8.096319878145657,112.54093117022342]];
        var interbumia2=[[-7.87991707863725,112.52867179720941],[-7.838044440202887,112.52769552809151]];
        var interkalip2=[[-7.87991707863725,112.52867179720941],[-8.205203370998408,112.4657687683773]];
        var interwonos2=[[-7.87991707863725,112.52867179720941],[-8.033054305286328,112.49776268371676]];
        var intergedan2=[[-7.87991707863725,112.52867179720941],[-8.292802294407691,112.64822312789612]];
        var intertirto2=[[-7.87991707863725,112.52867179720941],[-8.226857480300573,112.83293284613062]];
        var interpagak2=[[-7.87991707863725,112.52867179720941],[-8.225327995508875,112.52579524138947]];
        var interkrome2=[[-7.87991707863725,112.52867179720941],[-8.130200469153094,112.48998965303534]];
        var interdonom2=[[-7.87991707863725,112.52867179720941],[-8.285206920962832,112.4279539786642]];
        var interkasem2=[[-7.87991707863725,112.52867179720941],[-7.783746624542625,112.31114942789091]];
        var interampel2=[[-7.87991707863725,112.52867179720941],[-8.234095147669102,112.87767672789555]];

        var path41= new L.Polyline.AntPath(interlowok2,options1);   
        var path42= new L.Polyline.AntPath(interdau2,options2);
        var path43= new L.Polyline.AntPath(interjunre2,options3);
        var path44= new L.Polyline.AntPath(interblim2,options4);
        var path45= new L.Polyline.AntPath(intersingo2,options5);
        var path46= new L.Polyline.AntPath(intersukun2,options6);
        var path47= new L.Polyline.AntPath(interpujon2,options7);
        var path48= new L.Polyline.AntPath(interkaran2,options8);
        var path49= new L.Polyline.AntPath(interkedun2,options9);
        var path50 =new L.Polyline.AntPath(interpakis2,options10);

        var path51 =new L.Polyline.AntPath(interkloje2,options11); 
        var path52 =new L.Polyline.AntPath(interlawan2,options12);
        var path53 =new L.Polyline.AntPath(interwagir2, options13);  
        var path54 =new L.Polyline.AntPath(interpakji2,options14); 
        var path55 =new L.Polyline.AntPath(interpanje2,options15); 
        var path56 =new L.Polyline.AntPath(interjabun2,options16); 
        var path57 =new L.Polyline.AntPath(interturen2,options17); 
        var path58 =new L.Polyline.AntPath(interponco2,options18); 
        var path59 =new L.Polyline.AntPath(intertumpa2,options19); 
        var path60 =new L.Polyline.AntPath(interbulul2,options20); 

        var path61 =new L.Polyline.AntPath(interdampi2,options21); 
        var path62 =new L.Polyline.AntPath(interngant2,options22); 
        var path63 =new L.Polyline.AntPath(intergonda2,options23); 
        var path64 =new L.Polyline.AntPath(interwajak2,options24); 
        var path65 =new L.Polyline.AntPath(intertajin2,options25); 
        var path66 =new L.Polyline.AntPath(interpagel2,options26); 
        var path67 =new L.Polyline.AntPath(intersumbe2,options27); 
        var path68 =new L.Polyline.AntPath(interpucun2,options28); 
        var path69 =new L.Polyline.AntPath(interbantu2,options29);
        var path70 =new L.Polyline.AntPath(interngaju2,options30);
        var path71 =new L.Polyline.AntPath(interbumia2,options31); 
        var path72 =new L.Polyline.AntPath(interkalip2,options32);
        var path73 =new L.Polyline.AntPath(interwonos2,options33);
        var path74 =new L.Polyline.AntPath(intergedan2,options34);
        var path75 =new L.Polyline.AntPath(intertirto2,options35);
        var path76 =new L.Polyline.AntPath(interpagak2,options36);
        var path77 =new L.Polyline.AntPath(interkrome2,options37);
        var path78 =new L.Polyline.AntPath(interdonom2,options38);
        var path79 =new L.Polyline.AntPath(interkasem2,options39);
        var path80 =new L.Polyline.AntPath(interampel2,options40);
        
        path41.bindPopup("1.<br> Batu-Lowokwaru          <br> nilai:1003800,982").addTo(itensitasbatu);
        path42.bindPopup("2.<br> Batu-Dau                <br> nilai:983807,9778").addTo(itensitasbatu);
        path43.bindPopup("3.<br> Batu-Junrejo            <br> nilai:905225,7127").addTo(itensitasbatu);
        path44.bindPopup("4.<br> Batu-Blimbing           <br> nilai:888025,2689").addTo(itensitasbatu);
        path45.bindPopup("5.<br> Batu-Singosari          <br> nilai:870858,0437").addTo(itensitasbatu);
        path46.bindPopup("6.<br> Batu-Sukun              <br> nilai:816549,0258").addTo(itensitasbatu);
        path47.bindPopup("7.<br> Batu-Pujon              <br> nilai:751845,6").addTo(itensitasbatu);
        path48.bindPopup("8.<br> Batu-Karangploso        <br> nilai:731277,1586").addTo(itensitasbatu);
        path49.bindPopup("9.<br> Batu-kedungkandang      <br> nilai:690863,546").addTo(itensitasbatu);
        path50.bindPopup("10.<br>Batu-Pakis              <br> nilai:594184,5749").addTo(itensitasbatu);

        path51.bindPopup("11.<br> Batu-klojen           <br> nilai:539729,5356").addTo(itensitasbatu);
        path52.bindPopup("12.<br> Batu-Lawang           <br> nilai:421929,42").addTo(itensitasbatu);
        path53.bindPopup("13.<br> Batu-Wagir            <br> nilai:348807,0784").addTo(itensitasbatu);
        path54.bindPopup("14.<br> Batu-Pakisaji         <br> nilai:294099,9869").addTo(itensitasbatu);
        path55.bindPopup("15.<br> Batu-Kepanjen         <br> nilai:266311,7021").addTo(itensitasbatu);
        path56.bindPopup("16.<br> Batu-Jabung           <br> nilai:234869,8124").addTo(itensitasbatu);
        path57.bindPopup("17.<br> Batu-Turen            <br> nilai:226194,7791").addTo(itensitasbatu);
        path58.bindPopup("18.<br> Batu-Poncokusumo      <br> nilai:220086,6865").addTo(itensitasbatu);
        path59.bindPopup("19.<br> Batu-Tumpang          <br> nilai:205976,1825").addTo(itensitasbatu);
        path60.bindPopup("20.<br> Batu-Bululawang       <br> nilai:196857,62").addTo(itensitasbatu);
            
        path61.bindPopup("21.<br> Batu-Dampit           <br> nilai:193318,235").addTo(itensitasbatu);
        path62.bindPopup("22.<br> Batu-Ngantang         <br> nilai:191719,9402").addTo(itensitasbatu);
        path63.bindPopup("23.<br> Batu-Gondanglegi      <br> nilai:182480,5882").addTo(itensitasbatu);
        path64.bindPopup("24.<br> Batu-Wajak            <br> nilai:171396,0255").addTo(itensitasbatu);
        path65.bindPopup("25.<br> Batu-Tajinan          <br> nilai:147574,2707").addTo(itensitasbatu);
        path66.bindPopup("26.<br> Batu-Pagelaran        <br> nilai:135623,7246").addTo(itensitasbatu);
        path67.bindPopup("27.<br> Batu-Sumbermanjing    <br> nilai:134504,81").addTo(itensitasbatu);
        path68.bindPopup("28.<br> Batu-Sumberpucung     <br> nilai:115348,4691").addTo(itensitasbatu);
        path69.bindPopup("29.<br> Batu-Bantur           <br> nilai:107070,48").addTo(itensitasbatu);
        path70.bindPopup("30.<br> Batu-Ngajum           <br> nilai:105450,048").addTo(itensitasbatu);
        path71.bindPopup("31.<br> Batu-Bumiaji          <br> nilai:98568,657").addTo(itensitasbatu);
        path72.bindPopup("32.<br> Batu-Kalipare         <br> nilai:95391,09").addTo(itensitasbatu);
        path73.bindPopup("33.<br> Batu-Wonosari         <br> nilai:94984,87671").addTo(itensitasbatu);
        path74.bindPopup("34.<br> Batu-Gedangan         <br> nilai:81592,78308").addTo(itensitasbatu);
        path75.bindPopup("35.<br> Batu-Tirtoyudo        <br> nilai:81226,99708").addTo(itensitasbatu);
        path76.bindPopup("36.<br> Batu-Pagak            <br> nilai:80791,71548").addTo(itensitasbatu);
        path77.bindPopup("37.<br> Batu-Kromengan        <br> nilai:79960,8762").addTo(itensitasbatu);
        path78.bindPopup("38.<br> Batu-Donomulyo        <br> nilai:76395,47588").addTo(itensitasbatu);
        path79.bindPopup("39.<br> Batu-Kasembon         <br> nilai:71380,39615").addTo(itensitasbatu);
        path80.bindPopup("40.<br> Batu-Ampelgading      <br> nilai:62607,35404").addTo(itensitasbatu);
    
    //Itensitas kendaraan Kab malang
        var itensitasingosari=L.layerGroup();
        var interblim3=  [[-7.893861286766666,112.66293458186821],[-7.930173743398412,112.65189535303317]];
        var interlowok3= [[-7.893861286766666,112.66293458186821],[-7.945861330285805,112.63052716330117]];
        var interlawan3= [[-7.893861286766666,112.66293458186821],[-7.836316385585332,112.69707227892864]];
        var intersukun3= [[-7.893861286766666,112.66293458186821],[-8.00487665693767,112.61858148186926]];
        var interkedun3= [[-7.893861286766666,112.66293458186821],[-8.011652239541558,112.64381772603932]];
        var interpakis3= [[-7.893861286766666,112.66293458186821],[-7.958967133543515,112.71686035488077]];
        var interkaran3= [[-7.893861286766666,112.66293458186821],[-7.891395958587032,112.59440191255075]];
        var interkloje3= [[-7.893861286766666,112.66293458186821],[-7.96569125625155,112.61804947241214]];
        var interdau3=   [[-7.893861286766666,112.66293458186821],[-7.914074954750221,112.58596379905701]];
        var interbat3=   [[-7.893861286766666,112.66293458186821],[-7.87991707863725,112.52867179720941]];

        var interjabun3=[[-7.893861286766666,112.66293458186821],[-7.944972206510775,112.73413126837467]];
        var interwagir3=[[-7.893861286766666,112.66293458186821],[-8.008769482952703,112.57244276837524]];
        var interpakji3=[[-7.893861286766666,112.66293458186821],[-8.060928514826793,112.60164855488179]];
        var interjunre3=[[-7.893861286766666,112.66293458186821],[-7.91055557931054,112.55761445488028]];
        var interponco3=[[-7.893861286766666,112.66293458186821],[-8.042102441254215,112.77287464138747]];
        var intertumpa3=[[-7.893861286766666,112.66293458186821],[-8.002230755697871,112.76164637022251]];
        var interbulul3=[[-7.893861286766666,112.66293458186821],[-8.077694427829869,112.64098160379154]];
        var interpanje3=[[-7.893861286766666,112.66293458186821],[-8.12987657899868,112.56622318371782]];
        var interturen3=[[-7.893861286766666,112.66293458186821],[-8.169575025723118,112.68943669310302]];
        var interbumia3=[[-7.893861286766666,112.66293458186821],[-7.838044440202887,112.52769552809151]];

        var interpujon3=[[-7.893861286766666,112.66293458186821],[-7.849224913003989,112.48033478371494]];
        var intertajin3=[[-7.893861286766666,112.66293458186821],[-8.049271228635726,112.68162180563698]];
        var interdampi3=[[-7.893861286766666,112.66293458186821],[-8.211428328973343,112.74854853954203]];
        var interwajak3=[[-7.893861286766666,112.66293458186821],[-8.102253081115615,112.73016845488225]];
        var intergonda3=[[-7.893861286766666,112.66293458186821],[-8.17606693802475,112.63566388371831]];
        var interpagel3=[[-7.893861286766666,112.66293458186821],[-8.195850066757924,112.61975679905969]];
        var interngaju3=[[-7.893861286766666,112.66293458186821],[-8.096319878145657,112.54093117022342]];
        var intersumbe3=[[-7.893861286766666,112.66293458186821],[-8.278716388656624,112.69003608686435]];
        var interpucun3=[[-7.893861286766666,112.66293458186821],[-8.156563127210354,112.4741116413887]];
        var interngant3=[[-7.893861286766666,112.66293458186821],[-7.84655732346883,112.37190926329482]];
        var interwonos3=[[-7.893861286766666,112.66293458186821],[-8.033054305286328,112.49776268371676]];
        var interkalip3=[[-7.893861286766666,112.66293458186821],[-8.205203370998408,112.4657687683773]];
        var interbantu3=[[-7.893861286766666,112.66293458186821],[-8.316174958375807,112.58031377866625]];
        var interpagak3=[[-7.893861286766666,112.66293458186821],[-8.225327995508875,112.52579524138947]];
        var intertirto3=[[-7.893861286766666,112.66293458186821],[-8.226857480300573,112.83293284613062]];
        var interkrome3=[[-7.893861286766666,112.66293458186821],[-8.130200469153094,112.48998965303534]];
        var intergedan3=[[-7.893861286766666,112.66293458186821],[-8.292802294407691,112.64822312789612]];
        var interdonom3=[[-7.893861286766666,112.66293458186821],[-8.285206920962832,112.4279539786642]];
        var interampel3=[[-7.893861286766666,112.66293458186821],[-8.234095147669102,112.87767672789555]];
        var interkasem3=[[-7.893861286766666,112.66293458186821],[-7.783746624542625,112.31114942789091]];

        var path81= new L.Polyline.AntPath(interblim3,options1);   
        var path82= new L.Polyline.AntPath(interlowok3,options2);
        var path83= new L.Polyline.AntPath(interlawan3,options3);
        var path84= new L.Polyline.AntPath(intersukun3,options4);
        var path85= new L.Polyline.AntPath(interkedun3,options5);
        var path86= new L.Polyline.AntPath(interpakis3,options6);
        var path87= new L.Polyline.AntPath(interkaran3,options7);
        var path88= new L.Polyline.AntPath(interkloje3,options8);
        var path89= new L.Polyline.AntPath(interdau3,options9);
        var path90 =new L.Polyline.AntPath(interbat3,options10);

        var path91 =new L.Polyline.AntPath(interjabun3,options11); 
        var path92 =new L.Polyline.AntPath(interwagir3,options12);
        var path93 =new L.Polyline.AntPath(interpakji3, options13);  
        var path94 =new L.Polyline.AntPath(interjunre3,options14); 
        var path95 =new L.Polyline.AntPath(interponco3,options15); 
        var path96 =new L.Polyline.AntPath(intertumpa3,options16); 
        var path97 =new L.Polyline.AntPath(interbulul3,options17); 
        var path98 =new L.Polyline.AntPath(interpanje3,options18); 
        var path99 =new L.Polyline.AntPath(interturen3,options19); 
        var path100 =new L.Polyline.AntPath(interbumia3,options20); 

        var path101 =new L.Polyline.AntPath(interpujon3,options21); 
        var path102 =new L.Polyline.AntPath(intertajin3,options22); 
        var path103 =new L.Polyline.AntPath(interdampi3,options23); 
        var path104 =new L.Polyline.AntPath(interwajak3,options24); 
        var path105 =new L.Polyline.AntPath(intergonda3,options25); 
        var path106 =new L.Polyline.AntPath(interpagel3,options26); 
        var path107 =new L.Polyline.AntPath(interngaju3,options27); 
        var path108 =new L.Polyline.AntPath(intersumbe3,options28); 
        var path109 =new L.Polyline.AntPath(interpucun3,options29);
        var path110 =new L.Polyline.AntPath(interngant3,options30);
        var path111 =new L.Polyline.AntPath(interwonos3,options31); 
        var path112 =new L.Polyline.AntPath(interkalip3,options32);
        var path113 =new L.Polyline.AntPath(interbantu3,options33);
        var path114 =new L.Polyline.AntPath(interpagak3,options34);
        var path115 =new L.Polyline.AntPath(intertirto3,options35);
        var path116 =new L.Polyline.AntPath(interkrome3,options36);
        var path117 =new L.Polyline.AntPath(intergedan3,options37);
        var path118 =new L.Polyline.AntPath(interdonom3,options38);
        var path119 =new L.Polyline.AntPath(interampel3,options39);
        var path120 =new L.Polyline.AntPath(interkasem3,options40);
        
        path81.bindPopup("1.<br> Singosari-blimbing           <br> nilai:5788614,2").addTo(itensitasingosari);
        path82.bindPopup("2.<br> Singosari-lowokwaru          <br> nilai:3710845,499").addTo(itensitasingosari);
        path83.bindPopup("3.<br> Singosari-Lawang             <br> nilai:2669791,456").addTo(itensitasingosari);
        path84.bindPopup("4.<br> Singosari-sukun              <br> nilai:2651957,312").addTo(itensitasingosari);
        path85.bindPopup("5.<br> Singosari-kedungkandang      <br> nilai:2549183,06").addTo(itensitasingosari);
        path86.bindPopup("6.<br> Singosari-Pakis              <br> nilai:2319037,373").addTo(itensitasingosari);
        path87.bindPopup("7.<br> Singosari-Karangploso        <br> nilai:1630715,248").addTo(itensitasingosari);
        path88.bindPopup("8.<br> Singosari-klojen             <br> nilai:1219531,466").addTo(itensitasingosari);
        path89.bindPopup("9.<br> Singosari-Dau                <br> nilai:1134916,025").addTo(itensitasingosari);
        path90.bindPopup("10.<br>Singosari-Batu               <br> nilai:966606,8339").addTo(itensitasingosari);

        path91.bindPopup("11.<br> Singosari-Jabung            <br> nilai:839535,2488").addTo(itensitasingosari);
        path92.bindPopup("12.<br> Singosari-Wagir             <br> nilai:765322,5757").addTo(itensitasingosari);
        path93.bindPopup("13.<br> Singosari-Pakisaji          <br> nilai:712658,5325").addTo(itensitasingosari);
        path94.bindPopup("14.<br> Singosari-Junrejo           <br> nilai:695151,3997").addTo(itensitasingosari);
        path95.bindPopup("15.<br> Singosari-Poncokusumo       <br> nilai:656068,3857").addTo(itensitasingosari);
        path96.bindPopup("16.<br> Singosari-Tumpang           <br> nilai:613262,7642").addTo(itensitasingosari);
        path97.bindPopup("17.<br> Singosari-Bululawang        <br> nilai:606538,8899").addTo(itensitasingosari);
        path98.bindPopup("18.<br> Singosari-Kepanjen          <br> nilai:594981,5316").addTo(itensitasingosari);
        path99.bindPopup("19.<br> Singosari-Turen             <br> nilai:564556,4584").addTo(itensitasingosari);
        path100.bindPopup("20.<br>Singosari-Bumiaji           <br> nilai:535645,9327").addTo(itensitasingosari);
            
        path101.bindPopup("21.<br> Singosari-Pujon            <br> nilai:494406,8602").addTo(itensitasingosari);
        path102.bindPopup("22.<br> Singosari-Tajinan          <br> nilai:456497,9545").addTo(itensitasingosari);
        path103.bindPopup("23.<br> Singosari-Dampit           <br> nilai:445142,1947").addTo(itensitasingosari);
        path104.bindPopup("24.<br> Singosari-Wajak            <br> nilai:436774,8528").addTo(itensitasingosari);
        path105.bindPopup("25.<br> Singosari-Gondanglegi      <br> nilai:426121,3828").addTo(itensitasingosari);
        path106.bindPopup("26.<br> Singosari-Pagelaran        <br> nilai:312046,0959").addTo(itensitasingosari);
        path107.bindPopup("27.<br> Singosari-Ngajum           <br> nilai:279818,0548").addTo(itensitasingosari);
        path108.bindPopup("28.<br> Singosari-Sumbermanjing    <br> nilai:274961,7165").addTo(itensitasingosari);
        path109.bindPopup("29.<br> Singosari-Sumberpucung     <br> nilai:258931,5936").addTo(itensitasingosari);
        path110.bindPopup("30.<br> Singosari-Ngantang         <br> nilai:230448,393").addTo(itensitasingosari);
        path111.bindPopup("31.<br> Singosari-Wonosari         <br> nilai:214075,2951").addTo(itensitasingosari);
        path112.bindPopup("32.<br> Singosari-Kalipare         <br> nilai:192246,5833").addTo(itensitasingosari);
        path113.bindPopup("33.<br> Singosari-Bantur           <br> nilai:184130,299").addTo(itensitasingosari);
        path114.bindPopup("34.<br> Singosari-Pagak            <br> nilai:182855,4892").addTo(itensitasingosari);
        path115.bindPopup("35.<br> Singosari-Tirtoyudo        <br> nilai:181627,4168").addTo(itensitasingosari);
        path116.bindPopup("36.<br> Singosari-Kromengan        <br> nilai:179771,5154").addTo(itensitasingosari);
        path117.bindPopup("37.<br> Singosari-Gedangan         <br> nilai:175317,1285").addTo(itensitasingosari);
        path118.bindPopup("38.<br> Singosari-Donomulyo        <br> nilai:165119,5138").addTo(itensitasingosari);
        path119.bindPopup("39.<br> Singosari-Ampelgading      <br> nilai:137765,2851").addTo(itensitasingosari);
        path120.bindPopup("40.<br> Singosari-Kasembon         <br> nilai:98824,90583").addTo(itensitasingosari);


    //kecamatan sukun
    var interaksisukun=L.layerGroup();
        var kecsukun=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_SUKUN.geojson", {
            	    style :styleterbanyak
                    }).bindPopup("kecamatan sukun <br> jumlah penduduk : 196300 <br> jumlah kendaraan :137352").addTo(interaksisukun);
                
        var keckedungkandang=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_KEDUNGKANDANG.geojson", {
            	    style :style10besar
                    }).bindPopup("kecamatan kedungkandang <br> jumlah penduduk : 207428 <br> jumlah kendaraan :125626").addTo(interaksisukun);
        var keclowokwaru=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_LOWOKWARU.geojson", {
            	    style :style10besar
                    }).bindPopup("kecamatan lowokwaru <br> jumlah penduduk : 163639 <br> jumlah kendaraan :128001").addTo(interaksisukun);
        var kecblimbing=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_BLIMBING.geojson", {
            	    style :style10besar
                    }).bindPopup("kecamatan blimbing <br> jumlah penduduk : 182331 <br> jumlah kendaraan : 125626").addTo(interaksisukun);
        var kecklojen=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_KLOJEN.geojson", {
            	    style :style10besar
                    }).bindPopup("kecamatan klojen <br> jumlah penduduk : 94112 <br> jumlah kendaraan :75547").addTo(interaksisukun);
        var kecsingosari=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_SINGOSARI.geojson", {
            	    style :style10besar
                    }).bindPopup("kecamatan Singosari <br> jumlah penduduk : 190487 <br> jumlah kendaraan :59969").addTo(interaksisukun);
        var kecWagir=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_WAGIR.geojson", {
            	    style :style10besar
                    }).bindPopup("kecamatan Wagir <br> jumlah penduduk : 93211 <br> jumlah kendaraan :29345").addTo(interaksisukun);
        var kecPakisaji=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_PAKISAJI.geojson", {
            	    style :style10besar
                    }).bindPopup("kecamatan Pakisaji <br> jumlah penduduk : 93157 <br> jumlah kendaraan :29328").addTo(interaksisukun);
        var kecpakis=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_PAKIS.geojson", {
            	    style :style10besar
                    }).bindPopup("kecamatan Pakis <br> jumlah penduduk : 171657 <br> jumlah kendaraan :54041").addTo(interaksisukun);
        var kecBululawang=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_BULULAWANG.geojson", {
            	    style :style10besar
                    }).bindPopup("kecamatan Bululawang <br> jumlah penduduk : 72917 <br> jumlah kendaraan :22956").addTo(interaksisukun);
        var kecdau=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_DAU.geojson", {
            	    style :style10besar
                    }).bindPopup("kecamatan Dau <br> jumlah penduduk : 82220 <br> jumlah kendaraan :25885").addTo(interaksisukun);
                
        var kecKepanjen=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_KEPANJEN.geojson", {
            	    style :style20besar
                    }).bindPopup("kecamatan Kepanjen <br> jumlah penduduk : 109634 <br> jumlah kendaraan :34515").addTo(interaksisukun);
        var kecTajinan=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_TAJINAN.geojson", {
            	    style :style20besar
                    }).bindPopup("kecamatan Tajinan <br> jumlah penduduk : 55119 <br> jumlah kendaraan :17353").addTo(interaksisukun);
        var keclawang=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_LAWANG.geojson", {
            	    style :style20besar
                    }).bindPopup("kecamatan Lawang <br> jumlah penduduk : 114928 <br> jumlah kendaraan :36182").addTo(interaksisukun);
        var keckarang=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_KARANGPLOSO.geojson", {
            	    style :style20besar
                    }).bindPopup("kecamatan Karangploso <br> jumlah penduduk : 89032 <br> jumlah kendaraan :28029").addTo(interaksisukun);
        var kecTuren=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_TUREN.geojson", {
            	    style :style20besar
                    }).bindPopup("kecamatan Turen <br> jumlah penduduk : 115290 <br> jumlah kendaraan :36296").addTo(interaksisukun);
        var kecBatu=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_BATU.geojson", {
            	    style :style20besar
                    }).bindPopup("kecamatan Batu <br> jumlah penduduk : 96921 <br> jumlah kendaraan :70609").addTo(interaksisukun);
        var kecjabung=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_JABUNG.geojson", {
            	    style :style20besar
                    }).bindPopup("kecamatan Jabung <br> jumlah penduduk : 75365 <br> jumlah kendaraan :23726").addTo(interaksisukun);
        var kecPoncokusumo=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_PONCOKUSUMO.geojson", {
            	    style :style20besar
                    }).bindPopup("kecamatan Poncokusumo <br> jumlah penduduk : 92648 <br> jumlah kendaraan :29168").addTo(interaksisukun);
        var kecTumpang=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_TUMPANG.geojson", {
            	    style :style20besar
                    }).bindPopup("kecamatan Tumpang <br> jumlah penduduk : 75657 <br> jumlah kendaraan :23818").addTo(interaksisukun);
        var kecGondanglegi=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_GONDANGLEGI.geojson", {
            	    style :style20besar
                    }).bindPopup("kecamatan Gondanglegi <br> jumlah penduduk : 86796 <br> jumlah kendaraan :27325").addTo(interaksisukun);
                
        var kecWajak=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_WAJAK.geojson", {
            	    style :style30besar
                    }).bindPopup("kecamatan Wajak <br> jumlah penduduk : 81170 <br> jumlah kendaraan :25554").addTo(interaksisukun);
        var kecDampit=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_DAMPIT.geojson", {
            	    style :style30besar
                    }).bindPopup("kecamatan Dampit <br> jumlah penduduk : 118479 <br> jumlah kendaraan :37300").addTo(interaksisukun);
        var kecJunrejo=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_JUNREJO.geojson", {
            	    style :style30besar
                    }).bindPopup("kecamatan Junrejo <br> jumlah penduduk : 55105 <br> jumlah kendaraan :40145").addTo(interaksisukun);
        var kecPagelaran=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_PAGELARAN.geojson", {
            	    style :style30besar
                    }).bindPopup("kecamatan Pagelaran <br> jumlah penduduk : 68147 <br> jumlah kendaraan :21454").addTo(interaksisukun);
        var kecNgajum=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_NGAJUM.geojson", {
            	    style :style30besar
                    }).bindPopup("kecamatan Ngajum <br> jumlah penduduk : 49504 <br> jumlah kendaraan :15585").addTo(interaksisukun);
        var kecSumberpucung=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_SUMBERPUCUNG.geojson", {
            	    style :style30besar
                    }).bindPopup("kecamatan Sumberpucung <br> jumlah penduduk : 55460 <br> jumlah kendaraan :17460").addTo(interaksisukun);
        var kecBumiaji=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_BUMIAJI.geojson", {
            	    style :style30besar
                    }).bindPopup("kecamatan Bumiaji <br> jumlah penduduk : 61020 <br> jumlah kendaraan :44454").addTo(interaksisukun);
        var kecPujon=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_PUJON.geojson", {
            	    style :style30besar
                    }).bindPopup("kecamatan Pujon <br> jumlah penduduk : 69040 <br> jumlah kendaraan :21735").addTo(interaksisukun);
        var kecSumbermanjing=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_SUMBERMANJINGWETAN.geojson", {
            	    style :style30besar
                    }).bindPopup("kecamatan Sumbermanjing <br> jumlah penduduk : 89928 <br> jumlah kendaraan :28311").addTo(interaksisukun);
        var kecBantur=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_BANTUR.geojson", {
            	    style :style30besar
                    }).bindPopup("kecamatan Bantur <br> jumlah penduduk : 68824 <br> jumlah kendaraan :21667").addTo(interaksisukun);
        var kecKalipare=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_KALIPARE.geojson", {
            	    style :style30besar
                    }).bindPopup("kecamatan Kalipare <br> jumlah penduduk : 59545 <br> jumlah kendaraan :18746").addTo(interaksisukun);
        var kecKromengan=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_KROMENGAN.geojson", {
            	    style :style30besar
                    }).bindPopup("kecamatan Kromengan <br> jumlah penduduk : 38033 <br> jumlah kendaraan :11974").addTo(interaksisukun);
        var kecWonosari=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_WONOSARI.geojson", {
            	    style :style30besar
                    }).bindPopup("kecamatan Wonosari <br> jumlah penduduk : 41357 <br> jumlah kendaraan :13020").addTo(interaksisukun);
        var kecGedangan=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_GEDANGAN.geojson", {
            	    style :style30besar
                    }).bindPopup("kecamatan Gedangan <br> jumlah penduduk : 53289 <br> jumlah kendaraan :16776").addTo(interaksisukun);
        var kecPagak=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_PAGAK.geojson", {
            	    style :style30besar
                    }).bindPopup("kecamatan Pagak <br> jumlah penduduk : 45597 <br> jumlah kendaraan :14355").addTo(interaksisukun);
        var kecTirtoyudo=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_TIRTOYUDO.geojson", {
            	    style :style30besar
                    }).bindPopup("kecamatan Tirtoyudo <br> jumlah penduduk : 60928 <br> jumlah kendaraan :19181").addTo(interaksisukun);
        var kecDonomulyo=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_DONOMULYO.geojson", {
            	    style :style30besar
                    }).bindPopup("kecamatan Donomulyo <br> jumlah penduduk : 62585 <br> jumlah kendaraan :19703").addTo(interaksisukun);
        var kecNgantang=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_NGANTANG.geojson", {
            	    style :style30besar
                    }).bindPopup("kecamatan Ngantang <br> jumlah penduduk : 56376 <br> jumlah kendaraan :17748").addTo(interaksisukun);
        var kecAmpelgading=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_AMPELGADING.geojson", {
            	    style :style30besar
                    }).bindPopup("kecamatan Ampelgading <br> jumlah penduduk : 52000 <br> jumlah kendaraan :16371").addTo(interaksisukun);
        var kecKasembon=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_KASEMBON.geojson", {
            	    style :style30besar
                    }).bindPopup("kecamatan Kasembon <br> jumlah penduduk : 31595 <br> jumlah kendaraan :9947").addTo(interaksisukun);
    
    //kecamatan batu
        var interaksibatu=L.layerGroup();
        var kecbatu=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_BATU.geojson", {
        	    style :styleterbanyak
                }).bindPopup("kecamatan batu <br> jumlah penduduk : 96921 <br> jumlah kendaraan :").addTo(interaksibatu);
        var keclowokwaru=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_LOWOKWARU.geojson", {
        	    style :style10besar
                }).bindPopup("kecamatan lowokwaru <br> jumlah penduduk : 163639 <br> jumlah kendaraan :128001").addTo(interaksibatu);
        var kecdau=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_DAU.geojson", {
        	    style :style10besar
                }).bindPopup("kecamatan Dau <br> jumlah penduduk : 82220 <br> jumlah kendaraan :25885").addTo(interaksibatu);
        var kecjunrejo=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_JUNREJO.geojson", {
        	    style :style10besar
                }).bindPopup("kecamatan junrejo <br> jumlah penduduk : 55105 <br> jumlah kendaraan :").addTo(interaksibatu);          
        var kecblimbing=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_BLIMBING.geojson", {
        	    style :style10besar
                }).bindPopup("kecamatan blimbing <br> jumlah penduduk : 182331 <br> jumlah kendaraan :125626").addTo(interaksibatu);
        var kecsingosari=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_SINGOSARI.geojson", {
        	    style :style10besar
                }).bindPopup("kecamatan Singosari <br> jumlah penduduk : 190487 <br> jumlah kendaraan :59969").addTo(interaksibatu);
        var kecsukun=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_SUKUN.geojson", {
        	    style :style10besar
                }).bindPopup("kecamatan sukun <br> jumlah penduduk : 196300 <br> jumlah kendaraan :137352").addTo(interaksibatu);
        var kecpujon=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_PUJON.geojson", {
        	    style :style10besar
                }).bindPopup("kecamatan Pujon <br> jumlah penduduk : 69040 <br> jumlah kendaraan :21735").addTo(interaksibatu);
        var keckarang=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_KARANGPLOSO.geojson", {
        	    style :style10besar
                }).bindPopup("kecamatan Karangploso <br> jumlah penduduk : 89032 <br> jumlah kendaraan :28029").addTo(interaksibatu);
        var keckedungkandang=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_KEDUNGKANDANG.geojson", {
        	    style :style10besar
                }).bindPopup("kecamatan kedungkandang <br> jumlah penduduk : 207428 <br> jumlah kendaraan :125626").addTo(interaksibatu);
        var kecpakis=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_PAKIS.geojson", {
        	    style :style10besar
                }).bindPopup("kecamatan Pakis <br> jumlah penduduk : 171657 <br> jumlah kendaraan :54041").addTo(interaksibatu);

        
        var kecklojen=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_KLOJEN.geojson", {
        	    style :style20besar
                }).bindPopup("kecamatan klojen <br> jumlah penduduk : 94112 <br> jumlah kendaraan :75547").addTo(interaksibatu);
        var kecLawang=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_LAWANG.geojson", {
        	    style :style20besar
                }).bindPopup("kecamatan Lawang <br> jumlah penduduk : 114928 <br> jumlah kendaraan :36182").addTo(interaksibatu);
        var kecWagir=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_WAGIR.geojson", {
        	    style :style20besar
                }).bindPopup("kecamatan Wagir <br> jumlah penduduk : 93211 <br> jumlah kendaraan :29345").addTo(interaksibatu);          
        var kecPakisaji=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_PAKISAJI.geojson", {
        	    style :style20besar
                }).bindPopup("kecamatan Pakisaji <br> jumlah penduduk : 93157 <br> jumlah kendaraan :29328").addTo(interaksibatu);
        var kecKepanjen=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_KEPANJEN.geojson", {
        	    style :style20besar
                }).bindPopup("kecamatan Kepanjen <br> jumlah penduduk : 109634 <br> jumlah kendaraan :34515").addTo(interaksibatu);
        var kecJabung=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_JABUNG.geojson", {
        	    style :style20besar
                }).bindPopup("kecamatan Jabung <br> jumlah penduduk : 75365 <br> jumlah kendaraan :23726").addTo(interaksibatu);
        var kecTuren=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_TUREN.geojson", {
        	    style :style20besar
                }).bindPopup("kecamatan Turen <br> jumlah penduduk : 115290 <br> jumlah kendaraan :36296").addTo(interaksibatu);
        var kecPoncokusumo=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_PONCOKUSUMO.geojson", {
        	    style :style20besar
                }).bindPopup("kecamatan Poncokusumo <br> jumlah penduduk : 92648 <br> jumlah kendaraan :29168").addTo(interaksibatu);
        var kecTumpang=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_TUMPANG.geojson", {
        	    style :style20besar
                }).bindPopup("kecamatan Tumpang <br> jumlah penduduk : 75657 <br> jumlah kendaraan :23818").addTo(interaksibatu);
        var kecBululawang=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_BULULAWANG.geojson", {
        	    style :style20besar
                }).bindPopup("kecamatan Bululawang <br> jumlah penduduk : 72917 <br> jumlah kendaraan :22956").addTo(interaksibatu);

        var kecDampit=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_DAMPIT.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Dampit <br> jumlah penduduk : 118479 <br> jumlah kendaraan :37300").addTo(interaksibatu);
        var kecNgantang=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_NGANTANG.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Ngantang <br> jumlah penduduk : 56376 <br> jumlah kendaraan :17748").addTo(interaksibatu);
        var kecGondanglegi=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_GONDANGLEGI.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Gondanglegi <br> jumlah penduduk : 86796 <br> jumlah kendaraan :27325").addTo(interaksibatu);          
        var kecWajak=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_WAJAK.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Wajak <br> jumlah penduduk : 81170 <br> jumlah kendaraan :25554").addTo(interaksibatu);
        var kecTajinan=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_TAJINAN.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Tajinan <br> jumlah penduduk : 55119 <br> jumlah kendaraan :17353").addTo(interaksibatu);
        var kecPagelaran=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_PAGELARAN.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Pagelaran <br> jumlah penduduk : 68147 <br> jumlah kendaraan :21454").addTo(interaksibatu);
        var kecSumbermanjing=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_SUMBERMANJINGWETAN.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Sumbermanjing <br> jumlah penduduk : 89928 <br> jumlah kendaraan :28311").addTo(interaksibatu);
        var kecSumberpucung=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_SUMBERPUCUNG.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Sumberpucung <br> jumlah penduduk : 55460 <br> jumlah kendaraan :17460").addTo(interaksibatu);
        var kecBantur=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_BANTUR.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Bantur <br> jumlah penduduk : 68824 <br> jumlah kendaraan :21667").addTo(interaksibatu);
        var kecNgajum=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_NGAJUM.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Ngajum <br> jumlah penduduk : 49504 <br> jumlah kendaraan :15585").addTo(interaksibatu);
        var kecBumiaji=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_BUMIAJI.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Bumiaji <br> jumlah penduduk : 61020 <br> jumlah kendaraan :44454").addTo(interaksibatu);
        var kecKalipare=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_KALIPARE.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Kalipare <br> jumlah penduduk : 59545 <br> jumlah kendaraan :18746").addTo(interaksibatu);
        var kecWonosari=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_WONOSARI.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Wonosari <br> jumlah penduduk : 41357 <br> jumlah kendaraan :13020").addTo(interaksibatu);          
        var kecGedangan=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_GEDANGAN.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Gedangan <br> jumlah penduduk : 53289 <br> jumlah kendaraan :16776").addTo(interaksibatu);
        var kecTirtoyudo=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_TIRTOYUDO.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Tirtoyudo <br> jumlah penduduk :60928 <br> jumlah kendaraan :19181").addTo(interaksibatu);
        var kecPagak=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_PAGAK.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Pagak <br> jumlah penduduk : 45597 <br> jumlah kendaraan :14355").addTo(interaksibatu);
        var kecKromengan=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_KROMENGAN.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Kromengan <br> jumlah penduduk : 38033 <br> jumlah kendaraan :11974").addTo(interaksibatu);
        var kecDonomulyo=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_DONOMULYO.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Donomulyo <br> jumlah penduduk : 62585 <br> jumlah kendaraan :19703").addTo(interaksibatu);
        var kecKasembon=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_KASEMBON.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Kasembon <br> jumlah penduduk : 31595 <br> jumlah kendaraan :9947").addTo(interaksibatu);
        var kecAmpelgading=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_AMPELGADING.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Ampelgading <br> jumlah penduduk : 52000 <br> jumlah kendaraan :16371").addTo(interaksibatu);
                
                
    //kecamatan singosari
        var interaksisingo=L.layerGroup();
        var kecsingosari=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_SINGOSARI.geojson", {
        	    style :styleterbanyak
                }).bindPopup("kecamatan Singosari <br> jumlah penduduk : 190487 <br> jumlah kendaraan :59969").addTo(interaksisingo);
        var kecblimbing=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_BLIMBING.geojson", {
        	    style :style10besar
                }).bindPopup("kecamatan blimbing <br> jumlah penduduk : 182331 <br> jumlah kendaraan :125626").addTo(interaksisingo);
        var keclowokwaru=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_LOWOKWARU.geojson", {
        	    style :style10besar
                }).bindPopup("kecamatan lowokwaru <br> jumlah penduduk : 163639 <br> jumlah kendaraan :128001").addTo(interaksisingo);
        var keclawang=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_LAWANG.geojson", {
        	    style :style10besar
                }).bindPopup("kecamatan Lawang <br> jumlah penduduk : 114928 <br> jumlah kendaraan :").addTo(interaksisingo);
        var kecsukun=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_SUKUN.geojson", {
        	    style :style10besar
                }).bindPopup("kecamatan sukun <br> jumlah penduduk : 196300 <br> jumlah kendaraan :137352").addTo(interaksisingo);
        var keckedungkandang=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_KEDUNGKANDANG.geojson", {
        	    style :style10besar
                }).bindPopup("kecamatan kedungkandang <br> jumlah penduduk : 207428 <br> jumlah kendaraan :125626").addTo(interaksisingo);
        var kecpakis=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_PAKIS.geojson", {
        	    style :style10besar
                }).bindPopup("kecamatan Pakis <br> jumlah penduduk : 171657 <br> jumlah kendaraan :").addTo(interaksisingo);
        var keckarang=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_KARANGPLOSO.geojson", {
        	    style :style10besar
                }).bindPopup("kecamatan Karangploso <br> jumlah penduduk : 89032 <br> jumlah kendaraan :28029").addTo(interaksisingo);
        var kecklojen=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_KLOJEN.geojson", {
        	    style :style10besar
                }).bindPopup("kecamatan klojen <br> jumlah penduduk : 94112 <br> jumlah kendaraan :75547").addTo(interaksisingo);
        var kecdau=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_DAU.geojson", {
        	    style :style10besar
                }).bindPopup("kecamatan Dau <br> jumlah penduduk : 82220 <br> jumlah kendaraan :25885").addTo(interaksisingo);
        var kecbatu=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_BATU.geojson", {
        	    style :style10besar
                }).bindPopup("kecamatan batu <br> jumlah penduduk : 96921 <br> jumlah kendaraan :70609").addTo(interaksisingo);

        var kecJabung=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_JABUNG.geojson", {
        	    style :style20besar
                }).bindPopup("kecamatan Jabung <br> jumlah penduduk : 75365 <br> jumlah kendaraan :23726").addTo(interaksisingo);
        var kecWagir=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_WAGIR.geojson", {
        	    style :style20besar
                }).bindPopup("kecamatan Wagir <br> jumlah penduduk : 93211 <br> jumlah kendaraan :29345").addTo(interaksisingo);
        var kecPakisaji=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_PAKISAJI.geojson", {
        	    style :style20besar
                }).bindPopup("kecamatan Pakisaji <br> jumlah penduduk : 93157 <br> jumlah kendaraan :29328").addTo(interaksisingo);          
        var kecJunrejo=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_JUNREJO.geojson", {
        	    style :style20besar
                }).bindPopup("kecamatan Junrejo <br> jumlah penduduk : 55105 <br> jumlah kendaraan :40145").addTo(interaksisingo);
        var kecPoncokusumo=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_PONCOKUSUMO.geojson", {
        	    style :style20besar
                }).bindPopup("kecamatan Poncokusumo <br> jumlah penduduk : 92648 <br> jumlah kendaraan :29168").addTo(interaksisingo);
        var kecTumpang=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_TUMPANG.geojson", {
        	    style :style20besar
                }).bindPopup("kecamatan Tumpang <br> jumlah penduduk : 75657 <br> jumlah kendaraan :23818").addTo(interaksisingo);
        var kecBululawang=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_BULULAWANG.geojson", {
        	    style :style20besar
                }).bindPopup("kecamatan Bululawang <br> jumlah penduduk : 72917 <br> jumlah kendaraan :22956").addTo(interaksisingo);
        var kecKepanjen=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_KEPANJEN.geojson", {
        	    style :style20besar
                }).bindPopup("kecamatan Kepanjen <br> jumlah penduduk : 109634 <br> jumlah kendaraan :34515").addTo(interaksisingo);
        var kecTuren=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_TUREN.geojson", {
        	    style :style20besar
                }).bindPopup("kecamatan Turen <br> jumlah penduduk : 115290 <br> jumlah kendaraan :36296").addTo(interaksisingo);
        var kecBumiaji=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_BUMIAJI.geojson", {
        	    style :style20besar
                }).bindPopup("kecamatan Bumiaji <br> jumlah penduduk : 61020 <br> jumlah kendaraan :44454").addTo(interaksisingo);

        var kecPujon=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_PUJON.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Pujon <br> jumlah penduduk : 69040 <br> jumlah kendaraan :21735").addTo(interaksisingo);
        var kecTajinan=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_TAJINAN.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Tajinan <br> jumlah penduduk : 55119 <br> jumlah kendaraan :17353").addTo(interaksisingo);
        var kecDampit=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_DAMPIT.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Dampit <br> jumlah penduduk : 118479 <br> jumlah kendaraan :37300").addTo(interaksisingo);          
        var kecWajak=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_WAJAK.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Wajak <br> jumlah penduduk : 81170 <br> jumlah kendaraan :25554").addTo(interaksisingo);
        var kecGondanglegi=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_GONDANGLEGI.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Gondanglegi <br> jumlah penduduk : 86796 <br> jumlah kendaraan :27325").addTo(interaksisingo);
        var kecPagelaran=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_PAGELARAN.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Pagelaran <br> jumlah penduduk : 68147 <br> jumlah kendaraan :21454").addTo(interaksisingo);
        var kecNgajum=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_NGAJUM.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Ngajum <br> jumlah penduduk : 49504 <br> jumlah kendaraan :15585").addTo(interaksisingo);
        var kecSumbermanjing=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_SUMBERMANJINGWETAN.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Sumbermanjing <br> jumlah penduduk : 89928 <br> jumlah kendaraan :28311").addTo(interaksisingo);
        var kecSumberpucung=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_SUMBERPUCUNG.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Sumberpucung <br> jumlah penduduk : 55460 <br> jumlah kendaraan :17460").addTo(interaksisingo);
        var kecNgantang=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_NGANTANG.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Ngantang <br> jumlah penduduk : 56376 <br> jumlah kendaraan :17748").addTo(interaksisingo);
        var kecWonosari=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_WONOSARI.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Wonosari <br> jumlah penduduk : 41357 <br> jumlah kendaraan :13020").addTo(interaksisingo);
        var kecKalipare=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_KALIPARE.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Kalipare <br> jumlah penduduk : 59545 <br> jumlah kendaraan :18746").addTo(interaksisingo);
        var kecBantur=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_BANTUR.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Bantur <br> jumlah penduduk : 68824 <br> jumlah kendaraan :21667").addTo(interaksisingo);          
        var kecPagak=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_PAGAK.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Pagak <br> jumlah penduduk : 45597 <br> jumlah kendaraan :14355").addTo(interaksisingo);
        var kecTirtoyudo=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_TIRTOYUDO.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Tirtoyudo <br> jumlah penduduk : 60928 <br> jumlah kendaraan :19181").addTo(interaksisingo);
        var kecKromengan=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_KROMENGAN.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Kromengan <br> jumlah penduduk : 38033 <br> jumlah kendaraan :11974").addTo(interaksisingo);
        var kecGedangan=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_GEDANGAN.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Gedangan <br> jumlah penduduk : 53289 <br> jumlah kendaraan :16776").addTo(interaksisingo);
        var kecDonomulyo=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_DONOMULYO.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Donomulyo <br> jumlah penduduk : 62585 <br> jumlah kendaraan :19703").addTo(interaksisingo);
        var kecAmpelgading=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_AMPELGADING.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Ampelgading <br> jumlah penduduk : 52000 <br> jumlah kendaraan :16371").addTo(interaksisingo);
        var kecKasembon=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_KASEMBON.geojson", {
        	    style :style30besar
                }).bindPopup("kecamatan Kasembon <br> jumlah penduduk : 31595 <br> jumlah kendaraan :9947").addTo(interaksisingo);
//PETA KEPADATAN SPASIAL
    var kepadatan=L.layerGroup();
    

    var kecbatu=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_BATU.geojson", {
    	style :stylerendah
        }).bindPopup("kecamatan batu <br> jumlah penduduk : 96921").addTo(kepadatan);

    var kecjunrejo=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_JUNREJO.geojson", {
    	style :stylerendah
        }).bindPopup("kecamatan junrejo <br> jumlah penduduk : 55105").addTo(kepadatan);

    var kecbumiaji=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_BUMIAJI.geojson", {
    	style :stylerendah
        }).bindPopup("kecamatan bumiaji <br> jumlah penduduk : 61020").addTo(kepadatan);     

    var kecsingosari=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_SINGOSARI.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan Singosari <br> jumlah penduduk : 190487 <br> jumlah kendaraan :59969").addTo(kepadatan);
    var kecblimbing=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_BLIMBING.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan blimbing <br> jumlah penduduk : 182331 <br> jumlah kendaraan :125626").addTo(kepadatan);
    var keclowokwaru=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_LOWOKWARU.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan lowokwaru <br> jumlah penduduk : 163639 <br> jumlah kendaraan :128001").addTo(kepadatan);
    var keclawang=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_LAWANG.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan Lawang <br> jumlah penduduk : 114928 <br> jumlah kendaraan :").addTo(kepadatan);
    var kecsukun=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_SUKUN.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan sukun <br> jumlah penduduk : 196300 <br> jumlah kendaraan :137352").addTo(kepadatan);
    var keckedungkandang=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_KEDUNGKANDANG.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan kedungkandang <br> jumlah penduduk : 207428 <br> jumlah kendaraan :125626").addTo(kepadatan);
    var kecpakis=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_PAKIS.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan Pakis <br> jumlah penduduk : 171657 <br> jumlah kendaraan :").addTo(kepadatan);
    var keckarang=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_KARANGPLOSO.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan Karangploso <br> jumlah penduduk : 89032 <br> jumlah kendaraan :28029").addTo(kepadatan);
    var kecklojen=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_KLOJEN.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan klojen <br> jumlah penduduk : 94112 <br> jumlah kendaraan :75547").addTo(kepadatan);
    var kecdau=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_DAU.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan Dau <br> jumlah penduduk : 82220 <br> jumlah kendaraan :25885").addTo(kepadatan);
    var kecbatu=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_BATU.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan batu <br> jumlah penduduk : 96921 <br> jumlah kendaraan :70609").addTo(kepadatan);
    var kecJabung=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_JABUNG.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan Jabung <br> jumlah penduduk : 75365 <br> jumlah kendaraan :23726").addTo(kepadatan);
    var kecWagir=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_WAGIR.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan Wagir <br> jumlah penduduk : 93211 <br> jumlah kendaraan :29345").addTo(kepadatan);
    var kecPakisaji=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_PAKISAJI.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan Pakisaji <br> jumlah penduduk : 93157 <br> jumlah kendaraan :29328").addTo(kepadatan);          
    var kecJunrejo=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_JUNREJO.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan Junrejo <br> jumlah penduduk : 55105 <br> jumlah kendaraan :40145").addTo(kepadatan);
    var kecPoncokusumo=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_PONCOKUSUMO.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan Poncokusumo <br> jumlah penduduk : 92648 <br> jumlah kendaraan :29168").addTo(kepadatan);
    var kecTumpang=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_TUMPANG.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan Tumpang <br> jumlah penduduk : 75657 <br> jumlah kendaraan :23818").addTo(kepadatan);
    var kecBululawang=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_BULULAWANG.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan Bululawang <br> jumlah penduduk : 72917 <br> jumlah kendaraan :22956").addTo(kepadatan);
    var kecKepanjen=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_KEPANJEN.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan Kepanjen <br> jumlah penduduk : 109634 <br> jumlah kendaraan :34515").addTo(kepadatan);
    var kecTuren=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_TUREN.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan Turen <br> jumlah penduduk : 115290 <br> jumlah kendaraan :36296").addTo(kepadatan);
    var kecBumiaji=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_BUMIAJI.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan Bumiaji <br> jumlah penduduk : 61020 <br> jumlah kendaraan :44454").addTo(kepadatan);
    var kecPujon=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_PUJON.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan Pujon <br> jumlah penduduk : 69040 <br> jumlah kendaraan :21735").addTo(kepadatan);
    var kecTajinan=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_TAJINAN.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan Tajinan <br> jumlah penduduk : 55119 <br> jumlah kendaraan :17353").addTo(kepadatan);
    var kecDampit=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_DAMPIT.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan Dampit <br> jumlah penduduk : 118479 <br> jumlah kendaraan :37300").addTo(kepadatan);          
    var kecWajak=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_WAJAK.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan Wajak <br> jumlah penduduk : 81170 <br> jumlah kendaraan :25554").addTo(kepadatan);
    var kecGondanglegi=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_GONDANGLEGI.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan Gondanglegi <br> jumlah penduduk : 86796 <br> jumlah kendaraan :27325").addTo(kepadatan);
    var kecPagelaran=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_PAGELARAN.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan Pagelaran <br> jumlah penduduk : 68147 <br> jumlah kendaraan :21454").addTo(kepadatan);
    var kecNgajum=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_NGAJUM.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan Ngajum <br> jumlah penduduk : 49504 <br> jumlah kendaraan :15585").addTo(kepadatan);
    var kecSumbermanjing=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_SUMBERMANJINGWETAN.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan Sumbermanjing <br> jumlah penduduk : 89928 <br> jumlah kendaraan :28311").addTo(kepadatan);
    var kecSumberpucung=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_SUMBERPUCUNG.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan Sumberpucung <br> jumlah penduduk : 55460 <br> jumlah kendaraan :17460").addTo(kepadatan);
    var kecNgantang=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_NGANTANG.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan Ngantang <br> jumlah penduduk : 56376 <br> jumlah kendaraan :17748").addTo(kepadatan);
    var kecWonosari=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_WONOSARI.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan Wonosari <br> jumlah penduduk : 41357 <br> jumlah kendaraan :13020").addTo(kepadatan);
    var kecKalipare=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_KALIPARE.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan Kalipare <br> jumlah penduduk : 59545 <br> jumlah kendaraan :18746").addTo(kepadatan);
    var kecBantur=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_BANTUR.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan Bantur <br> jumlah penduduk : 68824 <br> jumlah kendaraan :21667").addTo(kepadatan);          
    var kecPagak=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_PAGAK.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan Pagak <br> jumlah penduduk : 45597 <br> jumlah kendaraan :14355").addTo(kepadatan);
    var kecTirtoyudo=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_TIRTOYUDO.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan Tirtoyudo <br> jumlah penduduk : 60928 <br> jumlah kendaraan :19181").addTo(kepadatan);
    var kecKromengan=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_KROMENGAN.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan Kromengan <br> jumlah penduduk : 38033 <br> jumlah kendaraan :11974").addTo(kepadatan);
    var kecGedangan=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_GEDANGAN.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan Gedangan <br> jumlah penduduk : 53289 <br> jumlah kendaraan :16776").addTo(kepadatan);
    var kecDonomulyo=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_DONOMULYO.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan Donomulyo <br> jumlah penduduk : 62585 <br> jumlah kendaraan :19703").addTo(kepadatan);
    var kecAmpelgading=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_AMPELGADING.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan Ampelgading <br> jumlah penduduk : 52000 <br> jumlah kendaraan :16371").addTo(kepadatan);
    var kecKasembon=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_KASEMBON.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan Kasembon <br> jumlah penduduk : 31595 <br> jumlah kendaraan :9947").addTo(kepadatan);

    var keckedungkandang=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_KEDUNGKANDANG.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan kedungkandang <br> jumlah penduduk : 207428").addTo(kepadatan);
    var kecsukun=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_SUKUN.geojson", {
    	    style :stylerendah
            }).bindPopup("kecamatan sukun <br> jumlah penduduk : 196300").addTo(kepadatan);
    var kecklojen=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_KLOJEN.geojson", {
    	            style :styletinggi
                    }).bindPopup("kecamatan klojen <br> jumlah penduduk : 94112").addTo(kepadatan);
    var kecblimbing=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_BLIMBING.geojson", {
    	                style :stylesedang
                        }).bindPopup("kecamatan blimbing <br> jumlah penduduk : 182331").addTo(kepadatan);
    var keclowokwaru=L.geoJSON.ajax("bahan/gskecamatan/Kecamatan_LOWOKWARU.geojson", {
    	                style :stylerendah
                        }).bindPopup("kecamatan lowokwaru <br> jumlah penduduk : 163639").addTo(kepadatan);
//PETA JALAN MALANG RAYA
    var arteriprimer=[  
    [-7.8219986042887575, 112.70600507063799],[-7.823202338075711, 112.70486513180828],[-7.8238666488236035, 112.70415702863056],
    [-7.824026084429185, 112.7036554553401],[-7.823887908024085, 112.70273277643118],[-7.8242227202231085, 112.70197102904751],
    [-7.829735200509335, 112.69766922974262],[-7.830560023304659, 112.6973529883429],[-7.831739817656924, 112.6972617932326],
    [-7.8338336786672285, 112.69725642881876],[-7.836759146481991, 112.69750328460573],[-7.838677610658274, 112.69785197176977],
    [-7.840798008110322, 112.6981362859308],[-7.84114874952984, 112.69813092151188],[-7.8426633112449124, 112.69804509082388],
    [-7.843189420883524, 112.69797535338962],[-7.844401064738339, 112.69772322573623],[-7.846808399322019, 112.69690246978207],
    [-7.84810505944455, 112.69633920590269],[-7.853152552845952, 112.6934988962041],[-7.8627254191404745, 112.68499217799955],
    [-7.868530376687946, 112.68070160319124],[-7.872058798579498, 112.67892061641703],[-7.876905766756425, 112.6767029106286],
    [-7.889649764185632, 112.66873026464772],[-7.892115387173053, 112.66731035320096],[-7.900317347486157, 112.6630318326541],
    [-7.91386012640705, 112.65588619814349],[-7.914364892293874, 112.65567698584647],[-7.917876983038961, 112.65407302484688],
    [-7.91879306001506, 112.65369401422548],[-7.921401864681444, 112.6525513931659],[-7.92358028365016, 112.65169308628603],
    [-7.92926005843019, 112.6488499447117],
        ]
    
    var jprim = L.polyline(arteriprimer, {color:'#00FFCA', weight:5}).bindPopup("jalan arteri")
    var jkol = L.geoJSON.ajax("jalangeojs/REMARK_Jalan_Kolektor.geojson", {
        style:stylekolektor
        }).bindPopup("jalan kolektor")
    var jlok =L.geoJSON.ajax("jalangeojs/REMARK_Jalan_Lokal.geojson", {
        style:stylelokal
        }).bindPopup("jalan lokal")
    var jlai =L.geoJSON.ajax("jalangeojs/REMARK_Jalan_Lain.geojson", {
        style:stylelain
        }).bindPopup("jalan lain")
    var jset =L.geoJSON.ajax("jalangeojs/REMARK_Jalan_Setapak.geojson", {
        style:stylesetapak
        }).bindPopup("jalan setapak")
    
    var jalanprimer=L.layerGroup([jprim]); 
    var kolprimer=L.layerGroup([jkol]); 
    var jlnlokal=L.layerGroup([jlok] ); 
    var jlnsetapak=L.layerGroup([jset]);
    var jlnlain=L.layerGroup([jlai]);
//PETA KESESUAIAN LAHAN
    var layermiring =L.layerGroup();
    var miring= 'bahan/useland/slope-removebg.png',
        imageBounds = [[-8.510903732691048,112.0016573700009], [-7.650012209120989,113.4559810524618]];
    var layerlongsor=L.layerGroup();
    var longsor     = 'bahan/useland/longsor-PhotoRoom.png-PhotoRoom.png',
        imageBounds = [[-8.510903732691048,112.0016573700009], [-7.650012209120989,113.4559810524618]];
    var layerbanjir =L.layerGroup();
    var banjir      = 'bahan/useland/banjir-PhotoRoom.png-PhotoRoom.png',
        imageBounds = [[-8.510903732691048,112.0016573700009], [-7.650012209120989,113.4559810524618]];
    var layerjalan=L.layerGroup();
    var road        = 'bahan/useland/jalan-PhotoRoom.png-PhotoRoom.png',
        imageBounds = [[-8.510903732691048,112.0016573700009], [-7.650012209120989,113.4559810524618]];
    var layermukim  =L.layerGroup();
    var mukim= 'bahan/useland/distancemukim-PhotoRoom.png-PhotoRoom.png',
        imageBounds = [[-8.510903732691048,112.0016573700009], [-7.650012209120989,113.4559810524618]];
    var layerantarspbu=L.layerGroup();
    var antarspbu= 'bahan/useland/distancespbu-PhotoRoom.png-PhotoRoom.png',
        imageBounds = [[-8.510903732691048,112.0016573700009], [-7.650012209120989,113.4559810524618]];
    var layerlahan  =L.layerGroup();
    var lahan= 'bahan/useland/kesesuianlokasi-PhotoRoom.png-PhotoRoom.png',
        imageBounds = [[-8.510903732691048,112.0016573700009], [-7.650012209120989,113.4559810524618]];
        
    var locatmiring =L.imageOverlay(miring,    imageBounds).addTo(layermiring);
    var locatlongsor=L.imageOverlay(longsor,   imageBounds).addTo(layerlongsor);
    var locatbanjir =L.imageOverlay(banjir,    imageBounds).addTo(layerbanjir);
    var locatjalan  =L.imageOverlay(road,      imageBounds).addTo(layerjalan);
    var locatmukim  =L.imageOverlay(mukim,     imageBounds).addTo(layermukim);
    var locatspbu   =L.imageOverlay(antarspbu, imageBounds).addTo(layerantarspbu);
    var locatlahan  =L.imageOverlay(lahan,     imageBounds).addTo(layerlahan);
    
    //bawah kiri  atas kanan kurangin dikit
//LAYER CONTROL
    var LAYERS_AND_LEGENDS = [
            {  // begin section
                'title': "Mode Peta",
                layers: [
                    {
                        title: "dark map",
                        layer: peta2,
                        opacityslider: false,
                        legend: [],
                    },
                ],
            },  // end of this section
            {  // begin section
                'title': "lokasi titik",
                layers: [
                    {
                        title: "Kantor kecamatan",
                        layer: office,
                        opacityslider: false,
                        legend: [{ 'type': 'image', 'url':'bahan/office.png', 'color': '#e99dae', 'text': "" }],
                    }
                    
                ],
            },  // end of this section
            {  // begin section
                'title': "Wilayah",
                
                layers: [
                    {
                        title: "Kota malang",
                        layer: area1,
                        opacityslider: false,
                        legend: [{ 'type':'square', 'color':'#E8F6EF', 'text':"" }],
                    },
                    
                    {
                        title: "Kota Batu",
                        layer: area2,
                        opacityslider: false,
                        legend: [{ 'type':'square', 'color':'#1B9C85', 'text':"" }],
                    },
                    {
                        title: "Kab malang",
                        layer: area3,
                        opacityslider: false,
                        legend: [{ 'type':'square', 'color':'#FFE194', 'text':"" }],
                    },
                ],
                
                
            },  // end of this section
            {  // begin section
                'title': "kecamatan",
                layers: [
                    {
                        title: "kota malang",
                        layer: camatankotmalang,
                        opacityslider: false,
                        legend: [{ 'type':'square', 'color':'#FF0000', 'text':"" }],
                    },
                    {
                        title: "kota batu",
                        layer: camatanbatu,
                        opacityslider: false,
                        legend: [{ 'type':'square', 'color':'#A8E890', 'text':"" }],
                    },
                    {
                        title: "Kabupaten malang",
                        layer: camatkabmalang,
                        opacityslider: false,
                        legend: [{ 'type':'square', 'color':'#E86A33', 'text':"" }],
                    },
                ],
            },  // end of this section
            {  // begin section
                'title': "Jalan",
                
                layers: [
                    
                    {
                        title: "Jalan kolektor primer",
                        layer: kolprimer,
                        opacityslider: false,
                        legend: [{ 'type':'line', 'color':'#FC2947', 'text':"" }],
                    },
                    {
                        title: "jalan arteri primer",
                        layer: jalanprimer,
                        opacityslider: false,
                        legend: [{ 'type':'line', 'color':'#00FFCA', 'text':"" }],
                    },
                    {
                        title: "Jalan lokal",
                        layer: jlnlokal,
                        opacityslider: false,
                        legend: [{ 'type':'line', 'color':'#54B435', 'text':"" }],
                    },
                    
                    {
                        title: "Jalan lain",
                        layer: jlnlain,
                        opacityslider: false,
                        legend: [{ 'type':'line', 'color':'#009FBD', 'text':"" }],
                    },
                    {
                        title: "Jalan setapak",
                        layer: jlnsetapak,
                        opacityslider: false,
                        legend: [{ 'type':'line', 'color':'#FEFF86', 'text':"" }],
                    },
                ],
                
            },  // end of this section
            {  // begin section
                'title': "Peta Pola sebaran",
                layers: [
                    {
                        title: "heatmap",
                        layer: heat,
                        opacityslider: false,
                        legend: [],
                    },
                ],
            },  // end of this section
            {  // begin section
                'title': "Peta Interaksi Spasial",
                
                layers: [
                    {
                        title: "Interaksi kendaraan Kota Malang",
                        layer: itensitasukun,
                        opacityslider: false,
                        legend: [],
                    },
                    {
                        title: "Interaksi kendaraan Kota Batu",
                        layer: itensitasbatu,
                        opacityslider: false,
                        legend: [],
                    },
                    {
                        title: "Interaksi kendaraan Kabupaten Malang",
                        layer: itensitasingosari,
                        opacityslider: false,
                        legend: [],
                    },
                    {
                        title: "wilayah Interaksi Kota Malang",
                        layer: interaksisukun,
                        opacityslider: false,
                        legend: [   { type: 'square', color: '#FC2947', text: "kendaraan tertinggi" },
                                    {type:  'square', color: '#EB774C', text: "10 nilai tertinggi" },
                                    {type:  'square', color: '#F5A26D', text: "20 nilai tertinggi" },
                                    {type:  'square', color: '#FFCC8F', text: ">30 nilai tertinggi" },
                            ],
                    },
                    
                    {
                        title: "wilayah Interaksi kota Batu",
                        layer: interaksibatu,
                        opacityslider: false,
                        legend: [{ type: 'square', color: '#FC2947', text: "kendaraan tertinggi" },
                                { type: 'square', color: '#EB774C', text: "10 nilai tertinggi" },
                                {type:  'square', color: '#F5A26D', text: "20 nilai tertinggi" },
                                {type:  'square', color: '#FFCC8F', text: ">30 nilai tertinggi" }],
                    },
                    {
                        title: "wilayah Interaksi Kabupaten Malang",
                        layer: interaksisingo,
                        opacityslider: false,
                        legend: [{ type: 'square', color: '#FC2947', text: "kendaraan tertinggi" },
                                { type: 'square', color: '#EB774C', text: "10 nilai tertinggi" },
                                {type:  'square', color: '#F5A26D', text: "20 nilai tertinggi" },
                                {type:  'square', color: '#FFCC8F', text: ">30 nilai tertinggi" }],
                    },
                    
                ],
                
                
            },  // end of this section
            {  // begin section
                'title': "Peta Kepadatan",
                
                layers: [
                    {
                        title: "Tingkat kepadatan SPBU per kecamatan",
                        layer: kepadatan,
                        opacityslider: false,
                        legend: [   { type: 'square', color: '#FFCC8F', text: "rendah 0-0,002" },
                                    {type:  'square', color: '#EB774C', text: "sedang 0,002-0,004" },
                                    {type:  'square', color: '#E14D2A', text: "tinggi 0,004-0,006" },
                            ],
                    }, 
                ],
                
                
            },  // end of this section
            {  // begin section
                'title': "Peta kesesuaian lahan",
                layers: [
                    {
                        title: "kemiringan lereng",
                        layer: locatmiring,
                        opacityslider: false,
                        legend: [{ type: 'square',  color: '#CE3854', text: "Sangat Curam" },
                                { type:  'square',  color: '#DF674E', text: "Curam" },
                                { type:  'square',  color: '#E89253', text: "Agak Curam" },
                                { type:  'square',  color: '#EBBB67', text: "Landai" },
                                { type:  'square',  color: '#EAE28B', text: "Datar" }],
                    },
                    {
                        title: "kerentanan banjir",
                        layer: locatbanjir,
                        opacityslider: false,
                        legend: [{ type: 'square',  color: '#CE3854', text: "Tinggi" },
                                { type:  'square',  color: '#DF674E', text: "Sedang" },
                                { type:  'square',  color: '#EBBB67', text: "Rendah" }],
                    },
                    {
                        title: "kerentanan longsor",
                        layer: locatlongsor,
                        opacityslider: false,
                        legend: [{ type: 'square',  color: '#CE3854', text: "Sangat Tinggi" },
                                { type:  'square',  color: '#DF674E', text: "Tinggi" },
                                { type:  'square',  color: '#EBBB67', text: "Rendah" },
                                { type:  'square',  color: '#EAE28B', text: "Sangat Rendah" }],
                    },
                    {
                        title: "jarak dengan pemukiman",
                        layer: locatmukim,
                        opacityslider: false,
                        legend: [{ type: 'square',  color: '#CE3854', text: "0-50 m" },
                                { type:  'square',  color: '#DF674E', text: "50-100 m" },
                                { type:  'square',  color: '#EBBB67', text: "100-150 m" },
                                { type:  'square',  color: '#EAE28B', text: "> 150 m" }],
                    },
                    {
                        title: "jarak antar spbu",
                        layer: locatspbu,
                        opacityslider: false,
                        legend: [{ type: 'square',  color: '#CE3854', text: "0-250 m" },
                                { type:  'square',  color: '#DF674E', text: "250-500 m" },
                                { type:  'square',  color: '#E89253', text: "500-750 m" },
                                { type:  'square',  color: '#EBBB67', text: "750-1.000 m" },
                                { type:  'square',  color: '#EAE28B', text: ">1000 m" }],
                    },
                    {
                        title: "peta kesesuian lahan",
                        layer: locatlahan,
                        opacityslider: false,
                        legend: [{ type: 'square',  color: '#CE3854', text: "Tidak Sesuai" },
                                { type:  'square',  color: '#DF674E', text: "Kurang Sesuai" },
                                { type:  'square',  color: '#E89253', text: "Cukup Sesuai" },
                                { type:  'square',  color: '#EBBB67', text: "Sesuai" },
                                { type:  'square',  color: '#EAE28B', text: "Sangat Sesuai" }],
                    },
                    
                ],
            },  // end of this section
            {  // begin section
                'title': "Peta Kawasan Pemukiman",
                layers: [
                    {
                        title: "pemukiman kab malang",
                        layer: mukim1,
                        opacityslider: false,
                        legend: [{ 'type':'square', 'color':'#865DFF', 'text':"" }],
                    },
                    {
                        title: "pemukiman Kota Batu",
                        layer: mukim2,
                        opacityslider: false,
                        legend: [{ 'type':'square', 'color':'#E7B10A', 'text':"" }],
                    },
                    {
                        title: "Ipemukiman kota Malang",
                        layer: mukim3,
                        opacityslider: false,
                        legend: [{ 'type':'square', 'color':'#609966', 'text':"" }],
                    },
                ],
                
                
            },  // end of this section
            
        ];

        
        new L.Control.AccordionLegend({
            position: 'topright',
            content: LAYERS_AND_LEGENDS,
        }).addTo(mymap);

    /*
    var baseMaps = {
    "dark mode" : peta2,
    "light mode": peta3
    
    };

    var groupedOverlays = {
        "WILAYAH": {
        'Kabupaten Malang'  :area3,
        'Kota Malang'       :area1,
        'Kota Batu'         :area2,
        },

        "JALAN": {
        'jalan arteri primer'       :jalanprimer,
        'jalan kolektor pirmer'     :kolprimer,
        'jalan lokal'               :jlnlokal,
        'jalan lainnya'             :jlnlain,
        'jalan setapak'             :jlnsetapak
        },

        "KECAMATAN": {
        'kecamatan batu'            :camatanbatu,
        'kecamatan kota malang'     :camatankotmalang,
        'kecamatan kabupaten malang':camatkabmalang
        },

        "PETA INTERAKSI SPASIAL": {
        'kantor kecamatan'               :office,
        'itensitas kendaraan blimbing'   :itensitasblimbing,
        'itensitas kendaraan batu'       :itensitasbatu,
        'itensitas kendaraan singosari'  :itensitassingo,
        'Wilayah Kota Malang'            :interaksiblimbing,
        'Wilayah Kota Batu'              :interaksibatu,
        'Wilayah Kabupaten Malang'       :interaksisingo,
        
        },

        "POLA SEBARAN SPBU":{
            "spbu"                      :spb,
            
        
        },
    
    
    };
    // Use the custom grouped layer control, not "L.control.layers"
    L.control.groupedLayers(baseMaps, groupedOverlays).addTo(mymap);
    */
//LEGEND
    L.control.Legend({
    title:"Legenda",
    position: "bottomleft",
    collapsed:false,
    column: 1,
    legends: [
    {
        label: "SPBU",
        type: "image",
        url: "bahan/gas-station-pertamina.png",
    },
    {
        label: "Kantor kecamatan",
        type: "image",
        url: "bahan/office.png",
    },
    ]
    }).addTo(mymap);
    
//SEARCH
    var data =[
        <?php  foreach ($spbu as $key => $value) { ?>
        {"lokasi" :[<?= $value->latitude ?>,<?= $value->longitude ?>],"nama_spbu":"<?= $value->nama_spbu?>","alamat":"<?= $value->alamat ?>","penyedia":"<?=$value->penyedia?>"},
        <?php } ?>
    ];
    //layergroup, data,
        var markersLayer = new L.LayerGroup();
        mymap.addLayer(markersLayer);
    //atribut dan prentelan plugin
        var controlSearch = new L.Control.Search({
		position:'topleft',		
		layer: markersLayer,
        textPlaceholder:"Cari SPBU",
		zoom: 17,
        initial:false,
        casesensitive:false,
        
		
	    });
    
        for(i in data) {
		    var nama_spbu =  data[i].nama_spbu //value searched
		    lokasi =	  data[i].lokasi,
            alamat =	  data[i].alamat,	//position found
            penyedia= data[i].penyedia,
	        marker = new L.Marker(new L.latLng(lokasi),{title: nama_spbu,icon: IconBensin} );//se property searched
		    marker.bindPopup('<b>Nama SPBU:</b><br>'+ nama_spbu +'<br>'+'<b>Alamat:</b><br>'+alamat +'<br>'+'<b>Penyedia:</b><br>'+penyedia);
		    markersLayer.addLayer(marker);
	        }
        mymap.addControl(controlSearch);
</script>








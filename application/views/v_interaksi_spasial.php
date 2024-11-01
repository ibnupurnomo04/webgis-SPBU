<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="bahan/qgisweb-gravity/gravity/css/leaflet.css">
        <link rel="stylesheet" href="bahan/qgisweb-gravity/gravity/css/qgis2web.css"><link rel="stylesheet" href="bahan/qgisweb-gravity/gravity/css/fontawesome-all.min.css">
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
        <title></title>
    </head>
    <body>
    <div class="row">
<div class=" container">
<div id="map" class="box" style="height: 550px;"></div>
</div>
</div>
        <script src="bahan/qgisweb-gravity/gravity/js/qgis2web_expressions.js"></script>
        <script src="bahan/qgisweb-gravity/gravity/js/leaflet.js"></script>
        <script src="bahan/qgisweb-gravity/gravity/js/leaflet.rotatedMarker.js"></script>
        <script src="bahan/qgisweb-gravity/gravity/js/leaflet.pattern.js"></script>
        <script src="bahan/qgisweb-gravity/gravity/js/leaflet-hash.js"></script>
        <script src="bahan/qgisweb-gravity/gravity/js/Autolinker.min.js"></script>
        <script src="bahan/qgisweb-gravity/gravity/js/rbush.min.js"></script>
        <script src="bahan/qgisweb-gravity/gravity/js/labelgun.min.js"></script>
        <script src="bahan/qgisweb-gravity/gravity/js/labels.js"></script>
        <script src="bahan/qgisweb-gravity/gravity/data/PetaMalangRaya_1.js"></script>
        <script src="bahan/qgisweb-gravity/gravity/data/KecamatanBATU_2.js"></script>
        <script src="bahan/qgisweb-gravity/gravity/data/KecamatanBLIMBING_3.js"></script>
        <script src="bahan/qgisweb-gravity/gravity/data/KecamatanJUNREJO_4.js"></script>
        <script src="bahan/qgisweb-gravity/gravity/data/KecamatanLAWANG_5.js"></script>
        <script src="bahan/qgisweb-gravity/gravity/data/KecamatanPAKIS_6.js"></script>
        <script src="bahan/qgisweb-gravity/gravity/data/KecamatanPUJON_7.js"></script>
        <script src="bahan/qgisweb-gravity/gravity/data/KecamatanSUKUN_8.js"></script>
        <script src="bahan/qgisweb-gravity/gravity/data/KecamatanLOWOKWARU_9.js"></script>
        <script src="bahan/qgisweb-gravity/gravity/data/KecamatanBUMIAJI_10.js"></script>
        <script src="bahan/qgisweb-gravity/gravity/data/KecamatanDAU_11.js"></script>
        <script src="bahan/qgisweb-gravity/gravity/data/KecamatanJABUNG_12.js"></script>
        <script src="bahan/qgisweb-gravity/gravity/data/KecamatanKARANGPLOSO_13.js"></script>
        <script src="bahan/qgisweb-gravity/gravity/data/KecamatanKEDUNGKANDANG_14.js"></script>
        <script src="bahan/qgisweb-gravity/gravity/data/KecamatanKLOJEN_15.js"></script>
        <script src="bahan/qgisweb-gravity/gravity/data/KecamatanSINGOSARI_16.js"></script>
        <script src="bahan/qgisweb-gravity/gravity/data/KecamatanSUKUN_17.js"></script>
        <script>
        var highlightLayer;
        function highlightFeature(e) {
            highlightLayer = e.target;

            if (e.target.feature.geometry.type === 'LineString') {
              highlightLayer.setStyle({
                color: '#ffff00',
              });
            } else {
              highlightLayer.setStyle({
                fillColor: '#ffff00',
                fillOpacity: 1
              });
            }
        }
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:1
        }).fitBounds([[-8.32427766681751,112.14650712244743],[-7.720163687504423,113.29182402042643]]);
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
        var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
        var bounds_group = new L.featureGroup([]);
        function setBounds() {
        }
        map.createPane('pane_PetaOSMStandard_0');
        map.getPane('pane_PetaOSMStandard_0').style.zIndex = 400;
        var layer_PetaOSMStandard_0 = L.tileLayer('http://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            pane: 'pane_PetaOSMStandard_0',
            opacity: 1.0,
            attribution: '<a href="https://www.openstreetmap.org/copyright">© OpenStreetMap contributors, CC-BY-SA</a>',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 19
        });
        layer_PetaOSMStandard_0;
        map.addLayer(layer_PetaOSMStandard_0);
        function pop_PetaMalangRaya_1(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['No'] !== null ? autolinker.link(feature.properties['No'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Objek'] !== null ? autolinker.link(feature.properties['Objek'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kode_Kab'] !== null ? autolinker.link(feature.properties['Kode_Kab'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kode_Kec'] !== null ? autolinker.link(feature.properties['Kode_Kec'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Provinsi'] !== null ? autolinker.link(feature.properties['Provinsi'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kab_Kota'] !== null ? autolinker.link(feature.properties['Kab_Kota'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kecamatan'] !== null ? autolinker.link(feature.properties['Kecamatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['value'] !== null ? autolinker.link(feature.properties['value'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['layer'] !== null ? autolinker.link(feature.properties['layer'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['path'] !== null ? autolinker.link(feature.properties['path'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_PetaMalangRaya_1_0() {
            return {
                pane: 'pane_PetaMalangRaya_1',
                opacity: 1,
                color: 'rgba(65,53,67,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(77,77,77,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_PetaMalangRaya_1');
        map.getPane('pane_PetaMalangRaya_1').style.zIndex = 401;
        map.getPane('pane_PetaMalangRaya_1').style['mix-blend-mode'] = 'normal';
        var layer_PetaMalangRaya_1 = new L.geoJson(json_PetaMalangRaya_1, {
            attribution: '',
            interactive: true,
            dataVar: 'json_PetaMalangRaya_1',
            layerName: 'layer_PetaMalangRaya_1',
            pane: 'pane_PetaMalangRaya_1',
            onEachFeature: pop_PetaMalangRaya_1,
            style: style_PetaMalangRaya_1_0,
        });
        bounds_group.addLayer(layer_PetaMalangRaya_1);
        map.addLayer(layer_PetaMalangRaya_1);
        function pop_KecamatanBATU_2(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['No'] !== null ? autolinker.link(feature.properties['No'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Objek'] !== null ? autolinker.link(feature.properties['Objek'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kode_Kab'] !== null ? autolinker.link(feature.properties['Kode_Kab'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kode_Kec'] !== null ? autolinker.link(feature.properties['Kode_Kec'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Provinsi'] !== null ? autolinker.link(feature.properties['Provinsi'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kab_Kota'] !== null ? autolinker.link(feature.properties['Kab_Kota'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kecamatan'] !== null ? autolinker.link(feature.properties['Kecamatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['value'] !== null ? autolinker.link(feature.properties['value'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['layer'] !== null ? autolinker.link(feature.properties['layer'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['path'] !== null ? autolinker.link(feature.properties['path'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_KecamatanBATU_2_0() {
            return {
                pane: 'pane_KecamatanBATU_2',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,191,155,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_KecamatanBATU_2');
        map.getPane('pane_KecamatanBATU_2').style.zIndex = 402;
        map.getPane('pane_KecamatanBATU_2').style['mix-blend-mode'] = 'normal';
        var layer_KecamatanBATU_2 = new L.geoJson(json_KecamatanBATU_2, {
            attribution: '',
            interactive: true,
            dataVar: 'json_KecamatanBATU_2',
            layerName: 'layer_KecamatanBATU_2',
            pane: 'pane_KecamatanBATU_2',
            onEachFeature: pop_KecamatanBATU_2,
            style: style_KecamatanBATU_2_0,
        });
        bounds_group.addLayer(layer_KecamatanBATU_2);
        map.addLayer(layer_KecamatanBATU_2);
        function pop_KecamatanBLIMBING_3(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['No'] !== null ? autolinker.link(feature.properties['No'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Objek'] !== null ? autolinker.link(feature.properties['Objek'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kode_Kab'] !== null ? autolinker.link(feature.properties['Kode_Kab'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kode_Kec'] !== null ? autolinker.link(feature.properties['Kode_Kec'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Provinsi'] !== null ? autolinker.link(feature.properties['Provinsi'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kab_Kota'] !== null ? autolinker.link(feature.properties['Kab_Kota'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kecamatan'] !== null ? autolinker.link(feature.properties['Kecamatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['value'] !== null ? autolinker.link(feature.properties['value'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['layer'] !== null ? autolinker.link(feature.properties['layer'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['path'] !== null ? autolinker.link(feature.properties['path'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_KecamatanBLIMBING_3_0() {
            return {
                pane: 'pane_KecamatanBLIMBING_3',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,191,155,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_KecamatanBLIMBING_3');
        map.getPane('pane_KecamatanBLIMBING_3').style.zIndex = 403;
        map.getPane('pane_KecamatanBLIMBING_3').style['mix-blend-mode'] = 'normal';
        var layer_KecamatanBLIMBING_3 = new L.geoJson(json_KecamatanBLIMBING_3, {
            attribution: '',
            interactive: true,
            dataVar: 'json_KecamatanBLIMBING_3',
            layerName: 'layer_KecamatanBLIMBING_3',
            pane: 'pane_KecamatanBLIMBING_3',
            onEachFeature: pop_KecamatanBLIMBING_3,
            style: style_KecamatanBLIMBING_3_0,
        });
        bounds_group.addLayer(layer_KecamatanBLIMBING_3);
        map.addLayer(layer_KecamatanBLIMBING_3);
        function pop_KecamatanJUNREJO_4(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['No'] !== null ? autolinker.link(feature.properties['No'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Objek'] !== null ? autolinker.link(feature.properties['Objek'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kode_Kab'] !== null ? autolinker.link(feature.properties['Kode_Kab'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kode_Kec'] !== null ? autolinker.link(feature.properties['Kode_Kec'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Provinsi'] !== null ? autolinker.link(feature.properties['Provinsi'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kab_Kota'] !== null ? autolinker.link(feature.properties['Kab_Kota'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kecamatan'] !== null ? autolinker.link(feature.properties['Kecamatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['value'] !== null ? autolinker.link(feature.properties['value'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['layer'] !== null ? autolinker.link(feature.properties['layer'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['path'] !== null ? autolinker.link(feature.properties['path'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_KecamatanJUNREJO_4_0() {
            return {
                pane: 'pane_KecamatanJUNREJO_4',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,244,224,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_KecamatanJUNREJO_4');
        map.getPane('pane_KecamatanJUNREJO_4').style.zIndex = 404;
        map.getPane('pane_KecamatanJUNREJO_4').style['mix-blend-mode'] = 'normal';
        var layer_KecamatanJUNREJO_4 = new L.geoJson(json_KecamatanJUNREJO_4, {
            attribution: '',
            interactive: true,
            dataVar: 'json_KecamatanJUNREJO_4',
            layerName: 'layer_KecamatanJUNREJO_4',
            pane: 'pane_KecamatanJUNREJO_4',
            onEachFeature: pop_KecamatanJUNREJO_4,
            style: style_KecamatanJUNREJO_4_0,
        });
        bounds_group.addLayer(layer_KecamatanJUNREJO_4);
        map.addLayer(layer_KecamatanJUNREJO_4);
        function pop_KecamatanLAWANG_5(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['No'] !== null ? autolinker.link(feature.properties['No'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Objek'] !== null ? autolinker.link(feature.properties['Objek'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kode_Kab'] !== null ? autolinker.link(feature.properties['Kode_Kab'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kode_Kec'] !== null ? autolinker.link(feature.properties['Kode_Kec'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Provinsi'] !== null ? autolinker.link(feature.properties['Provinsi'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kab_Kota'] !== null ? autolinker.link(feature.properties['Kab_Kota'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kecamatan'] !== null ? autolinker.link(feature.properties['Kecamatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['value'] !== null ? autolinker.link(feature.properties['value'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['layer'] !== null ? autolinker.link(feature.properties['layer'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['path'] !== null ? autolinker.link(feature.properties['path'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_KecamatanLAWANG_5_0() {
            return {
                pane: 'pane_KecamatanLAWANG_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,244,224,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_KecamatanLAWANG_5');
        map.getPane('pane_KecamatanLAWANG_5').style.zIndex = 405;
        map.getPane('pane_KecamatanLAWANG_5').style['mix-blend-mode'] = 'normal';
        var layer_KecamatanLAWANG_5 = new L.geoJson(json_KecamatanLAWANG_5, {
            attribution: '',
            interactive: true,
            dataVar: 'json_KecamatanLAWANG_5',
            layerName: 'layer_KecamatanLAWANG_5',
            pane: 'pane_KecamatanLAWANG_5',
            onEachFeature: pop_KecamatanLAWANG_5,
            style: style_KecamatanLAWANG_5_0,
        });
        bounds_group.addLayer(layer_KecamatanLAWANG_5);
        map.addLayer(layer_KecamatanLAWANG_5);
        function pop_KecamatanPAKIS_6(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['No'] !== null ? autolinker.link(feature.properties['No'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Objek'] !== null ? autolinker.link(feature.properties['Objek'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kode_Kab'] !== null ? autolinker.link(feature.properties['Kode_Kab'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kode_Kec'] !== null ? autolinker.link(feature.properties['Kode_Kec'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Provinsi'] !== null ? autolinker.link(feature.properties['Provinsi'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kab_Kota'] !== null ? autolinker.link(feature.properties['Kab_Kota'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kecamatan'] !== null ? autolinker.link(feature.properties['Kecamatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['value'] !== null ? autolinker.link(feature.properties['value'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['layer'] !== null ? autolinker.link(feature.properties['layer'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['path'] !== null ? autolinker.link(feature.properties['path'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_KecamatanPAKIS_6_0() {
            return {
                pane: 'pane_KecamatanPAKIS_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,244,224,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_KecamatanPAKIS_6');
        map.getPane('pane_KecamatanPAKIS_6').style.zIndex = 406;
        map.getPane('pane_KecamatanPAKIS_6').style['mix-blend-mode'] = 'normal';
        var layer_KecamatanPAKIS_6 = new L.geoJson(json_KecamatanPAKIS_6, {
            attribution: '',
            interactive: true,
            dataVar: 'json_KecamatanPAKIS_6',
            layerName: 'layer_KecamatanPAKIS_6',
            pane: 'pane_KecamatanPAKIS_6',
            onEachFeature: pop_KecamatanPAKIS_6,
            style: style_KecamatanPAKIS_6_0,
        });
        bounds_group.addLayer(layer_KecamatanPAKIS_6);
        map.addLayer(layer_KecamatanPAKIS_6);
        function pop_KecamatanPUJON_7(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['No'] !== null ? autolinker.link(feature.properties['No'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Objek'] !== null ? autolinker.link(feature.properties['Objek'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kode_Kab'] !== null ? autolinker.link(feature.properties['Kode_Kab'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kode_Kec'] !== null ? autolinker.link(feature.properties['Kode_Kec'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Provinsi'] !== null ? autolinker.link(feature.properties['Provinsi'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kab_Kota'] !== null ? autolinker.link(feature.properties['Kab_Kota'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kecamatan'] !== null ? autolinker.link(feature.properties['Kecamatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['value'] !== null ? autolinker.link(feature.properties['value'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['layer'] !== null ? autolinker.link(feature.properties['layer'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['path'] !== null ? autolinker.link(feature.properties['path'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_KecamatanPUJON_7_0() {
            return {
                pane: 'pane_KecamatanPUJON_7',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,244,224,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_KecamatanPUJON_7');
        map.getPane('pane_KecamatanPUJON_7').style.zIndex = 407;
        map.getPane('pane_KecamatanPUJON_7').style['mix-blend-mode'] = 'normal';
        var layer_KecamatanPUJON_7 = new L.geoJson(json_KecamatanPUJON_7, {
            attribution: '',
            interactive: true,
            dataVar: 'json_KecamatanPUJON_7',
            layerName: 'layer_KecamatanPUJON_7',
            pane: 'pane_KecamatanPUJON_7',
            onEachFeature: pop_KecamatanPUJON_7,
            style: style_KecamatanPUJON_7_0,
        });
        bounds_group.addLayer(layer_KecamatanPUJON_7);
        map.addLayer(layer_KecamatanPUJON_7);
        function pop_KecamatanSUKUN_8(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['No'] !== null ? autolinker.link(feature.properties['No'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Objek'] !== null ? autolinker.link(feature.properties['Objek'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kode_Kab'] !== null ? autolinker.link(feature.properties['Kode_Kab'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kode_Kec'] !== null ? autolinker.link(feature.properties['Kode_Kec'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Provinsi'] !== null ? autolinker.link(feature.properties['Provinsi'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kab_Kota'] !== null ? autolinker.link(feature.properties['Kab_Kota'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kecamatan'] !== null ? autolinker.link(feature.properties['Kecamatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['value'] !== null ? autolinker.link(feature.properties['value'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['layer'] !== null ? autolinker.link(feature.properties['layer'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['path'] !== null ? autolinker.link(feature.properties['path'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_KecamatanSUKUN_8_0() {
            return {
                pane: 'pane_KecamatanSUKUN_8',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,244,224,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_KecamatanSUKUN_8');
        map.getPane('pane_KecamatanSUKUN_8').style.zIndex = 408;
        map.getPane('pane_KecamatanSUKUN_8').style['mix-blend-mode'] = 'normal';
        var layer_KecamatanSUKUN_8 = new L.geoJson(json_KecamatanSUKUN_8, {
            attribution: '',
            interactive: true,
            dataVar: 'json_KecamatanSUKUN_8',
            layerName: 'layer_KecamatanSUKUN_8',
            pane: 'pane_KecamatanSUKUN_8',
            onEachFeature: pop_KecamatanSUKUN_8,
            style: style_KecamatanSUKUN_8_0,
        });
        bounds_group.addLayer(layer_KecamatanSUKUN_8);
        map.addLayer(layer_KecamatanSUKUN_8);
        function pop_KecamatanLOWOKWARU_9(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['No'] !== null ? autolinker.link(feature.properties['No'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Objek'] !== null ? autolinker.link(feature.properties['Objek'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kode_Kab'] !== null ? autolinker.link(feature.properties['Kode_Kab'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kode_Kec'] !== null ? autolinker.link(feature.properties['Kode_Kec'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Provinsi'] !== null ? autolinker.link(feature.properties['Provinsi'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kab_Kota'] !== null ? autolinker.link(feature.properties['Kab_Kota'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kecamatan'] !== null ? autolinker.link(feature.properties['Kecamatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['value'] !== null ? autolinker.link(feature.properties['value'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['layer'] !== null ? autolinker.link(feature.properties['layer'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['path'] !== null ? autolinker.link(feature.properties['path'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_KecamatanLOWOKWARU_9_0() {
            return {
                pane: 'pane_KecamatanLOWOKWARU_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,244,224,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_KecamatanLOWOKWARU_9');
        map.getPane('pane_KecamatanLOWOKWARU_9').style.zIndex = 409;
        map.getPane('pane_KecamatanLOWOKWARU_9').style['mix-blend-mode'] = 'normal';
        var layer_KecamatanLOWOKWARU_9 = new L.geoJson(json_KecamatanLOWOKWARU_9, {
            attribution: '',
            interactive: true,
            dataVar: 'json_KecamatanLOWOKWARU_9',
            layerName: 'layer_KecamatanLOWOKWARU_9',
            pane: 'pane_KecamatanLOWOKWARU_9',
            onEachFeature: pop_KecamatanLOWOKWARU_9,
            style: style_KecamatanLOWOKWARU_9_0,
        });
        bounds_group.addLayer(layer_KecamatanLOWOKWARU_9);
        map.addLayer(layer_KecamatanLOWOKWARU_9);
        function pop_KecamatanBUMIAJI_10(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['No'] !== null ? autolinker.link(feature.properties['No'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Objek'] !== null ? autolinker.link(feature.properties['Objek'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kode_Kab'] !== null ? autolinker.link(feature.properties['Kode_Kab'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kode_Kec'] !== null ? autolinker.link(feature.properties['Kode_Kec'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Provinsi'] !== null ? autolinker.link(feature.properties['Provinsi'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kab_Kota'] !== null ? autolinker.link(feature.properties['Kab_Kota'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kecamatan'] !== null ? autolinker.link(feature.properties['Kecamatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['value'] !== null ? autolinker.link(feature.properties['value'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['layer'] !== null ? autolinker.link(feature.properties['layer'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['path'] !== null ? autolinker.link(feature.properties['path'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_KecamatanBUMIAJI_10_0() {
            return {
                pane: 'pane_KecamatanBUMIAJI_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,244,224,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_KecamatanBUMIAJI_10');
        map.getPane('pane_KecamatanBUMIAJI_10').style.zIndex = 410;
        map.getPane('pane_KecamatanBUMIAJI_10').style['mix-blend-mode'] = 'normal';
        var layer_KecamatanBUMIAJI_10 = new L.geoJson(json_KecamatanBUMIAJI_10, {
            attribution: '',
            interactive: true,
            dataVar: 'json_KecamatanBUMIAJI_10',
            layerName: 'layer_KecamatanBUMIAJI_10',
            pane: 'pane_KecamatanBUMIAJI_10',
            onEachFeature: pop_KecamatanBUMIAJI_10,
            style: style_KecamatanBUMIAJI_10_0,
        });
        bounds_group.addLayer(layer_KecamatanBUMIAJI_10);
        map.addLayer(layer_KecamatanBUMIAJI_10);
        function pop_KecamatanDAU_11(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['No'] !== null ? autolinker.link(feature.properties['No'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Objek'] !== null ? autolinker.link(feature.properties['Objek'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kode_Kab'] !== null ? autolinker.link(feature.properties['Kode_Kab'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kode_Kec'] !== null ? autolinker.link(feature.properties['Kode_Kec'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Provinsi'] !== null ? autolinker.link(feature.properties['Provinsi'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kab_Kota'] !== null ? autolinker.link(feature.properties['Kab_Kota'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kecamatan'] !== null ? autolinker.link(feature.properties['Kecamatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['value'] !== null ? autolinker.link(feature.properties['value'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['layer'] !== null ? autolinker.link(feature.properties['layer'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['path'] !== null ? autolinker.link(feature.properties['path'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_KecamatanDAU_11_0() {
            return {
                pane: 'pane_KecamatanDAU_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,244,224,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_KecamatanDAU_11');
        map.getPane('pane_KecamatanDAU_11').style.zIndex = 411;
        map.getPane('pane_KecamatanDAU_11').style['mix-blend-mode'] = 'normal';
        var layer_KecamatanDAU_11 = new L.geoJson(json_KecamatanDAU_11, {
            attribution: '',
            interactive: true,
            dataVar: 'json_KecamatanDAU_11',
            layerName: 'layer_KecamatanDAU_11',
            pane: 'pane_KecamatanDAU_11',
            onEachFeature: pop_KecamatanDAU_11,
            style: style_KecamatanDAU_11_0,
        });
        bounds_group.addLayer(layer_KecamatanDAU_11);
        map.addLayer(layer_KecamatanDAU_11);
        function pop_KecamatanJABUNG_12(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['No'] !== null ? autolinker.link(feature.properties['No'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Objek'] !== null ? autolinker.link(feature.properties['Objek'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kode_Kab'] !== null ? autolinker.link(feature.properties['Kode_Kab'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kode_Kec'] !== null ? autolinker.link(feature.properties['Kode_Kec'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Provinsi'] !== null ? autolinker.link(feature.properties['Provinsi'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kab_Kota'] !== null ? autolinker.link(feature.properties['Kab_Kota'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kecamatan'] !== null ? autolinker.link(feature.properties['Kecamatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['value'] !== null ? autolinker.link(feature.properties['value'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['layer'] !== null ? autolinker.link(feature.properties['layer'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['path'] !== null ? autolinker.link(feature.properties['path'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_KecamatanJABUNG_12_0() {
            return {
                pane: 'pane_KecamatanJABUNG_12',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,244,224,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_KecamatanJABUNG_12');
        map.getPane('pane_KecamatanJABUNG_12').style.zIndex = 412;
        map.getPane('pane_KecamatanJABUNG_12').style['mix-blend-mode'] = 'normal';
        var layer_KecamatanJABUNG_12 = new L.geoJson(json_KecamatanJABUNG_12, {
            attribution: '',
            interactive: true,
            dataVar: 'json_KecamatanJABUNG_12',
            layerName: 'layer_KecamatanJABUNG_12',
            pane: 'pane_KecamatanJABUNG_12',
            onEachFeature: pop_KecamatanJABUNG_12,
            style: style_KecamatanJABUNG_12_0,
        });
        bounds_group.addLayer(layer_KecamatanJABUNG_12);
        map.addLayer(layer_KecamatanJABUNG_12);
        function pop_KecamatanKARANGPLOSO_13(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['No'] !== null ? autolinker.link(feature.properties['No'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Objek'] !== null ? autolinker.link(feature.properties['Objek'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kode_Kab'] !== null ? autolinker.link(feature.properties['Kode_Kab'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kode_Kec'] !== null ? autolinker.link(feature.properties['Kode_Kec'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Provinsi'] !== null ? autolinker.link(feature.properties['Provinsi'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kab_Kota'] !== null ? autolinker.link(feature.properties['Kab_Kota'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kecamatan'] !== null ? autolinker.link(feature.properties['Kecamatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['value'] !== null ? autolinker.link(feature.properties['value'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['layer'] !== null ? autolinker.link(feature.properties['layer'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['path'] !== null ? autolinker.link(feature.properties['path'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_KecamatanKARANGPLOSO_13_0() {
            return {
                pane: 'pane_KecamatanKARANGPLOSO_13',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,244,224,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_KecamatanKARANGPLOSO_13');
        map.getPane('pane_KecamatanKARANGPLOSO_13').style.zIndex = 413;
        map.getPane('pane_KecamatanKARANGPLOSO_13').style['mix-blend-mode'] = 'normal';
        var layer_KecamatanKARANGPLOSO_13 = new L.geoJson(json_KecamatanKARANGPLOSO_13, {
            attribution: '',
            interactive: true,
            dataVar: 'json_KecamatanKARANGPLOSO_13',
            layerName: 'layer_KecamatanKARANGPLOSO_13',
            pane: 'pane_KecamatanKARANGPLOSO_13',
            onEachFeature: pop_KecamatanKARANGPLOSO_13,
            style: style_KecamatanKARANGPLOSO_13_0,
        });
        bounds_group.addLayer(layer_KecamatanKARANGPLOSO_13);
        map.addLayer(layer_KecamatanKARANGPLOSO_13);
        function pop_KecamatanKEDUNGKANDANG_14(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['No'] !== null ? autolinker.link(feature.properties['No'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Objek'] !== null ? autolinker.link(feature.properties['Objek'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kode_Kab'] !== null ? autolinker.link(feature.properties['Kode_Kab'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kode_Kec'] !== null ? autolinker.link(feature.properties['Kode_Kec'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Provinsi'] !== null ? autolinker.link(feature.properties['Provinsi'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kab_Kota'] !== null ? autolinker.link(feature.properties['Kab_Kota'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kecamatan'] !== null ? autolinker.link(feature.properties['Kecamatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['value'] !== null ? autolinker.link(feature.properties['value'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['layer'] !== null ? autolinker.link(feature.properties['layer'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['path'] !== null ? autolinker.link(feature.properties['path'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_KecamatanKEDUNGKANDANG_14_0() {
            return {
                pane: 'pane_KecamatanKEDUNGKANDANG_14',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,244,224,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_KecamatanKEDUNGKANDANG_14');
        map.getPane('pane_KecamatanKEDUNGKANDANG_14').style.zIndex = 414;
        map.getPane('pane_KecamatanKEDUNGKANDANG_14').style['mix-blend-mode'] = 'normal';
        var layer_KecamatanKEDUNGKANDANG_14 = new L.geoJson(json_KecamatanKEDUNGKANDANG_14, {
            attribution: '',
            interactive: true,
            dataVar: 'json_KecamatanKEDUNGKANDANG_14',
            layerName: 'layer_KecamatanKEDUNGKANDANG_14',
            pane: 'pane_KecamatanKEDUNGKANDANG_14',
            onEachFeature: pop_KecamatanKEDUNGKANDANG_14,
            style: style_KecamatanKEDUNGKANDANG_14_0,
        });
        bounds_group.addLayer(layer_KecamatanKEDUNGKANDANG_14);
        map.addLayer(layer_KecamatanKEDUNGKANDANG_14);
        function pop_KecamatanKLOJEN_15(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['No'] !== null ? autolinker.link(feature.properties['No'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Objek'] !== null ? autolinker.link(feature.properties['Objek'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kode_Kab'] !== null ? autolinker.link(feature.properties['Kode_Kab'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kode_Kec'] !== null ? autolinker.link(feature.properties['Kode_Kec'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Provinsi'] !== null ? autolinker.link(feature.properties['Provinsi'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kab_Kota'] !== null ? autolinker.link(feature.properties['Kab_Kota'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kecamatan'] !== null ? autolinker.link(feature.properties['Kecamatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['value'] !== null ? autolinker.link(feature.properties['value'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['layer'] !== null ? autolinker.link(feature.properties['layer'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['path'] !== null ? autolinker.link(feature.properties['path'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_KecamatanKLOJEN_15_0() {
            return {
                pane: 'pane_KecamatanKLOJEN_15',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,244,224,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_KecamatanKLOJEN_15');
        map.getPane('pane_KecamatanKLOJEN_15').style.zIndex = 415;
        map.getPane('pane_KecamatanKLOJEN_15').style['mix-blend-mode'] = 'normal';
        var layer_KecamatanKLOJEN_15 = new L.geoJson(json_KecamatanKLOJEN_15, {
            attribution: '',
            interactive: true,
            dataVar: 'json_KecamatanKLOJEN_15',
            layerName: 'layer_KecamatanKLOJEN_15',
            pane: 'pane_KecamatanKLOJEN_15',
            onEachFeature: pop_KecamatanKLOJEN_15,
            style: style_KecamatanKLOJEN_15_0,
        });
        bounds_group.addLayer(layer_KecamatanKLOJEN_15);
        map.addLayer(layer_KecamatanKLOJEN_15);
        function pop_KecamatanSINGOSARI_16(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['No'] !== null ? autolinker.link(feature.properties['No'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Objek'] !== null ? autolinker.link(feature.properties['Objek'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kode_Kab'] !== null ? autolinker.link(feature.properties['Kode_Kab'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kode_Kec'] !== null ? autolinker.link(feature.properties['Kode_Kec'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Provinsi'] !== null ? autolinker.link(feature.properties['Provinsi'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kab_Kota'] !== null ? autolinker.link(feature.properties['Kab_Kota'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kecamatan'] !== null ? autolinker.link(feature.properties['Kecamatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['value'] !== null ? autolinker.link(feature.properties['value'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['layer'] !== null ? autolinker.link(feature.properties['layer'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['path'] !== null ? autolinker.link(feature.properties['path'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_KecamatanSINGOSARI_16_0() {
            return {
                pane: 'pane_KecamatanSINGOSARI_16',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,191,155,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_KecamatanSINGOSARI_16');
        map.getPane('pane_KecamatanSINGOSARI_16').style.zIndex = 416;
        map.getPane('pane_KecamatanSINGOSARI_16').style['mix-blend-mode'] = 'normal';
        var layer_KecamatanSINGOSARI_16 = new L.geoJson(json_KecamatanSINGOSARI_16, {
            attribution: '',
            interactive: true,
            dataVar: 'json_KecamatanSINGOSARI_16',
            layerName: 'layer_KecamatanSINGOSARI_16',
            pane: 'pane_KecamatanSINGOSARI_16',
            onEachFeature: pop_KecamatanSINGOSARI_16,
            style: style_KecamatanSINGOSARI_16_0,
        });
        bounds_group.addLayer(layer_KecamatanSINGOSARI_16);
        map.addLayer(layer_KecamatanSINGOSARI_16);
        function pop_KecamatanSUKUN_17(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['No'] !== null ? autolinker.link(feature.properties['No'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Objek'] !== null ? autolinker.link(feature.properties['Objek'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kode_Kab'] !== null ? autolinker.link(feature.properties['Kode_Kab'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kode_Kec'] !== null ? autolinker.link(feature.properties['Kode_Kec'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Provinsi'] !== null ? autolinker.link(feature.properties['Provinsi'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kab_Kota'] !== null ? autolinker.link(feature.properties['Kab_Kota'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kecamatan'] !== null ? autolinker.link(feature.properties['Kecamatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['value'] !== null ? autolinker.link(feature.properties['value'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['layer'] !== null ? autolinker.link(feature.properties['layer'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['path'] !== null ? autolinker.link(feature.properties['path'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_KecamatanSUKUN_17_0() {
            return {
                pane: 'pane_KecamatanSUKUN_17',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,244,224,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_KecamatanSUKUN_17');
        map.getPane('pane_KecamatanSUKUN_17').style.zIndex = 417;
        map.getPane('pane_KecamatanSUKUN_17').style['mix-blend-mode'] = 'normal';
        var layer_KecamatanSUKUN_17 = new L.geoJson(json_KecamatanSUKUN_17, {
            attribution: '',
            interactive: true,
            dataVar: 'json_KecamatanSUKUN_17',
            layerName: 'layer_KecamatanSUKUN_17',
            pane: 'pane_KecamatanSUKUN_17',
            onEachFeature: pop_KecamatanSUKUN_17,
            style: style_KecamatanSUKUN_17_0,
        });
        bounds_group.addLayer(layer_KecamatanSUKUN_17);
        map.addLayer(layer_KecamatanSUKUN_17);
        var baseMaps = {};
        L.control.layers(baseMaps,{'<img src="bahan/qgisweb-gravity/gravity/legend/KecamatanSUKUN_17.png" /> Kecamatan SUKUN': layer_KecamatanSUKUN_17,'<img src="bahan/qgisweb-gravity/gravity/legend/KecamatanSINGOSARI_16.png" /> Kecamatan SINGOSARI': layer_KecamatanSINGOSARI_16,'<img src="bahan/qgisweb-gravity/gravity/legend/KecamatanKLOJEN_15.png" /> Kecamatan KLOJEN': layer_KecamatanKLOJEN_15,'<img src="bahan/qgisweb-gravity/gravity/legend/KecamatanKEDUNGKANDANG_14.png" /> Kecamatan KEDUNGKANDANG': layer_KecamatanKEDUNGKANDANG_14,'<img src="bahan/qgisweb-gravity/gravity/legend/KecamatanKARANGPLOSO_13.png" /> Kecamatan KARANG PLOSO': layer_KecamatanKARANGPLOSO_13,'<img src="bahan/qgisweb-gravity/gravity/legend/KecamatanJABUNG_12.png" /> Kecamatan JABUNG': layer_KecamatanJABUNG_12,'<img src="bahan/qgisweb-gravity/gravity/legend/KecamatanDAU_11.png" /> Kecamatan DAU': layer_KecamatanDAU_11,'<img src="bahan/qgisweb-gravity/gravity/legend/KecamatanBUMIAJI_10.png" /> Kecamatan BUMIAJI': layer_KecamatanBUMIAJI_10,'<img src="bahan/qgisweb-gravity/gravity/legend/KecamatanLOWOKWARU_9.png" /> Kecamatan LOWOKWARU': layer_KecamatanLOWOKWARU_9,'<img src="bahan/qgisweb-gravity/gravity/legend/KecamatanSUKUN_8.png" /> Kecamatan SUKUN': layer_KecamatanSUKUN_8,'<img src="bahan/qgisweb-gravity/gravity/legend/KecamatanPUJON_7.png" /> Kecamatan PUJON': layer_KecamatanPUJON_7,'<img src="bahan/qgisweb-gravity/gravity/legend/KecamatanPAKIS_6.png" /> Kecamatan PAKIS': layer_KecamatanPAKIS_6,'<img src="bahan/qgisweb-gravity/gravity/legend/KecamatanLAWANG_5.png" /> Kecamatan LAWANG': layer_KecamatanLAWANG_5,'<img src="bahan/qgisweb-gravity/gravity/legend/KecamatanJUNREJO_4.png" /> Kecamatan JUNREJO': layer_KecamatanJUNREJO_4,'<img src="bahan/qgisweb-gravity/gravity/legend/KecamatanBLIMBING_3.png" /> Kecamatan BLIMBING': layer_KecamatanBLIMBING_3,'<img src="bahan/qgisweb-gravity/gravity/legend/KecamatanBATU_2.png" /> Kecamatan BATU': layer_KecamatanBATU_2,'<img src="bahan/qgisweb-gravity/gravity/legend/PetaMalangRaya_1.png" /> Peta Malang Raya': layer_PetaMalangRaya_1,"Peta OSM Standard": layer_PetaOSMStandard_0,}).addTo(map);
        setBounds();
        </script>
    </body>
</html>

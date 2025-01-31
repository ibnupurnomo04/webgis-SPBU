<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="bahan/qgisweb-bencana/bencana/css/leaflet.css">
        <link rel="stylesheet" href="bahan/qgisweb-bencana/bencana/css/qgis2web.css"><link rel="stylesheet" href="bahan/qgisweb-bencana/bencana/css/fontawesome-all.min.css">
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
        <script src="bahan/qgisweb-bencana/bencana/js/qgis2web_expressions.js"></script>
        <script src="bahan/qgisweb-bencana/bencana/js/leaflet.js"></script>
        <script src="bahan/qgisweb-bencana/bencana/js/leaflet.rotatedMarker.js"></script>
        <script src="bahan/qgisweb-bencana/bencana/js/leaflet.pattern.js"></script>
        <script src="bahan/qgisweb-bencana/bencana/js/leaflet-hash.js"></script>
        <script src="bahan/qgisweb-bencana/bencana/js/Autolinker.min.js"></script>
        <script src="bahan/qgisweb-bencana/bencana/js/rbush.min.js"></script>
        <script src="bahan/qgisweb-bencana/bencana/js/labelgun.min.js"></script>
        <script src="bahan/qgisweb-bencana/bencana/js/labels.js"></script>
        <script src="bahan/qgisweb-bencana/bencana/data/kerentananbanjir_1.js"></script>
        <script src="bahan/qgisweb-bencana/bencana/data/kerentananlongsor_2.js"></script>
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
        function pop_kerentananbanjir_1(feature, layer) {
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
                        <td colspan="2">' + (feature.properties['FID_banjir'] !== null ? autolinker.link(feature.properties['FID_banjir'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Id'] !== null ? autolinker.link(feature.properties['Id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['gridcode'] !== null ? autolinker.link(feature.properties['gridcode'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['FID_ngalam'] !== null ? autolinker.link(feature.properties['FID_ngalam'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['NAME_0'] !== null ? autolinker.link(feature.properties['NAME_0'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['NAME_1'] !== null ? autolinker.link(feature.properties['NAME_1'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['NAME_2'] !== null ? autolinker.link(feature.properties['NAME_2'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['TYPE_2'] !== null ? autolinker.link(feature.properties['TYPE_2'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['CC_2'] !== null ? autolinker.link(feature.properties['CC_2'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['HASC_2'] !== null ? autolinker.link(feature.properties['HASC_2'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['pdd'] !== null ? autolinker.link(feature.properties['pdd'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['kep'] !== null ? autolinker.link(feature.properties['kep'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['layer'] !== null ? autolinker.link(feature.properties['layer'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['path'] !== null ? autolinker.link(feature.properties['path'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['kelas'] !== null ? autolinker.link(feature.properties['kelas'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_kerentananbanjir_1_0(feature) {
            switch(String(feature.properties['kelas'])) {
                case 'sesuai':
                    return {
                pane: 'pane_kerentananbanjir_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,240,217,1.0)',
                interactive: true,
            }
                    break;
                case 'kurang sesuai':
                    return {
                pane: 'pane_kerentananbanjir_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(252,141,89,1.0)',
                interactive: true,
            }
                    break;
                case 'tidak sesuai':
                    return {
                pane: 'pane_kerentananbanjir_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(179,0,0,1.0)',
                interactive: true,
            }
                    break;
            }
        }
        map.createPane('pane_kerentananbanjir_1');
        map.getPane('pane_kerentananbanjir_1').style.zIndex = 401;
        map.getPane('pane_kerentananbanjir_1').style['mix-blend-mode'] = 'normal';
        var layer_kerentananbanjir_1 = new L.geoJson(json_kerentananbanjir_1, {
            attribution: '',
            interactive: true,
            dataVar: 'json_kerentananbanjir_1',
            layerName: 'layer_kerentananbanjir_1',
            pane: 'pane_kerentananbanjir_1',
            onEachFeature: pop_kerentananbanjir_1,
            style: style_kerentananbanjir_1_0,
        });
        bounds_group.addLayer(layer_kerentananbanjir_1);
        map.addLayer(layer_kerentananbanjir_1);
        function pop_kerentananlongsor_2(feature, layer) {
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
                        <td colspan="2">' + (feature.properties['FID_longso'] !== null ? autolinker.link(feature.properties['FID_longso'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Id'] !== null ? autolinker.link(feature.properties['Id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['gridcode'] !== null ? autolinker.link(feature.properties['gridcode'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['FID_ngalam'] !== null ? autolinker.link(feature.properties['FID_ngalam'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['NAME_0'] !== null ? autolinker.link(feature.properties['NAME_0'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['NAME_1'] !== null ? autolinker.link(feature.properties['NAME_1'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['NAME_2'] !== null ? autolinker.link(feature.properties['NAME_2'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['TYPE_2'] !== null ? autolinker.link(feature.properties['TYPE_2'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['CC_2'] !== null ? autolinker.link(feature.properties['CC_2'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['HASC_2'] !== null ? autolinker.link(feature.properties['HASC_2'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['pdd'] !== null ? autolinker.link(feature.properties['pdd'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['kep'] !== null ? autolinker.link(feature.properties['kep'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['layer'] !== null ? autolinker.link(feature.properties['layer'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['path'] !== null ? autolinker.link(feature.properties['path'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['kelas'] !== null ? autolinker.link(feature.properties['kelas'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_kerentananlongsor_2_0(feature) {
            switch(String(feature.properties['kelas'])) {
                case 'sangat sesuai':
                    return {
                pane: 'pane_kerentananlongsor_2',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,240,217,1.0)',
                interactive: true,
            }
                    break;
                case 'sesuai':
                    return {
                pane: 'pane_kerentananlongsor_2',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(253,183,122,1.0)',
                interactive: true,
            }
                    break;
                case 'kurang sesuai':
                    return {
                pane: 'pane_kerentananlongsor_2',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(235,96,64,1.0)',
                interactive: true,
            }
                    break;
                case 'tidak sesuai':
                    return {
                pane: 'pane_kerentananlongsor_2',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(179,0,0,1.0)',
                interactive: true,
            }
                    break;
            }
        }
        map.createPane('pane_kerentananlongsor_2');
        map.getPane('pane_kerentananlongsor_2').style.zIndex = 402;
        map.getPane('pane_kerentananlongsor_2').style['mix-blend-mode'] = 'normal';
        var layer_kerentananlongsor_2 = new L.geoJson(json_kerentananlongsor_2, {
            attribution: '',
            interactive: true,
            dataVar: 'json_kerentananlongsor_2',
            layerName: 'layer_kerentananlongsor_2',
            pane: 'pane_kerentananlongsor_2',
            onEachFeature: pop_kerentananlongsor_2,
            style: style_kerentananlongsor_2_0,
        });
        bounds_group.addLayer(layer_kerentananlongsor_2);
        map.addLayer(layer_kerentananlongsor_2);
        var baseMaps = {};
        L.control.layers(baseMaps,{'kerentanan longsor<br /><table><tr><td style="text-align: center;"><img src="bahan/qgisweb-bencana/bencana/legend/kerentananlongsor_2_sangatsesuai0.png" /></td><td>sangat sesuai</td></tr><tr><td style="text-align: center;"><img src="bahan/qgisweb-bencana/bencana/legend/kerentananlongsor_2_sesuai1.png" /></td><td>sesuai</td></tr><tr><td style="text-align: center;"><img src="bahan/qgisweb-bencana/bencana/legend/kerentananlongsor_2_kurangsesuai2.png" /></td><td>kurang sesuai</td></tr><tr><td style="text-align: center;"><img src="bahan/qgisweb-bencana/bencana/legend/kerentananlongsor_2_tidaksesuai3.png" /></td><td>tidak sesuai</td></tr></table>': layer_kerentananlongsor_2,'kerentanan banjir<br /><table><tr><td style="text-align: center;"><img src="bahan/qgisweb-bencana/bencana/legend/kerentananbanjir_1_sesuai0.png" /></td><td>sesuai</td></tr><tr><td style="text-align: center;"><img src="bahan/qgisweb-bencana/bencana/legend/kerentananbanjir_1_kurangsesuai1.png" /></td><td>kurang sesuai</td></tr><tr><td style="text-align: center;"><img src="bahan/qgisweb-bencana/bencana/legend/kerentananbanjir_1_tidaksesuai2.png" /></td><td>tidak sesuai</td></tr></table>': layer_kerentananbanjir_1,"Peta OSM Standard": layer_PetaOSMStandard_0,}).addTo(map);
        setBounds();
        </script>
    </body>
</html>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="bahan/qgisweb-lokasi/lokasi/css/leaflet.css">
        <link rel="stylesheet" href="bahan/qgisweb-lokasi/lokasi/css/qgis2web.css"><link rel="stylesheet" href="bahan/qgisweb-lokasi/lokasi/css/fontawesome-all.min.css">
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
        <script src="bahan/qgisweb-lokasi/lokasi/js/qgis2web_expressions.js"></script>
        <script src="bahan/qgisweb-lokasi/lokasi/js/leaflet.js"></script>
        <script src="bahan/qgisweb-lokasi/lokasi/js/leaflet.rotatedMarker.js"></script>
        <script src="bahan/qgisweb-lokasi/lokasi/js/leaflet.pattern.js"></script>
        <script src="bahan/qgisweb-lokasi/lokasi/js/leaflet-hash.js"></script>
        <script src="bahan/qgisweb-lokasi/lokasi/js/Autolinker.min.js"></script>
        <script src="bahan/qgisweb-lokasi/lokasi/js/rbush.min.js"></script>
        <script src="bahan/qgisweb-lokasi/lokasi/js/labelgun.min.js"></script>
        <script src="bahan/qgisweb-lokasi/lokasi/js/labels.js"></script>
        <script src="bahan/qgisweb-lokasi/lokasi/data/kesesuianlokasi_1.js"></script>
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
        }).fitBounds([[-8.425465129780758,112.16210482339265],[-7.821504561368925,113.30742172137164]]);
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
        function pop_kesesuianlokasi_1(feature, layer) {
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
                        <td colspan="2">' + (feature.properties['Id'] !== null ? autolinker.link(feature.properties['Id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['gridcode'] !== null ? autolinker.link(feature.properties['gridcode'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">kelas</th>\
                        <td>' + (feature.properties['kelas'] !== null ? autolinker.link(feature.properties['kelas'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_kesesuianlokasi_1_0(feature) {
            switch(String(feature.properties['kelas'])) {
                case 'sangat sesuai':
                    return {
                pane: 'pane_kesesuianlokasi_1',
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
                pane: 'pane_kesesuianlokasi_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(253,204,138,1.0)',
                interactive: true,
            }
                    break;
                case 'cukup sesuai':
                    return {
                pane: 'pane_kesesuianlokasi_1',
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
                case 'kurang sesuai':
                    return {
                pane: 'pane_kesesuianlokasi_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(227,74,51,1.0)',
                interactive: true,
            }
                    break;
                case 'tidak sesuai':
                    return {
                pane: 'pane_kesesuianlokasi_1',
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
        map.createPane('pane_kesesuianlokasi_1');
        map.getPane('pane_kesesuianlokasi_1').style.zIndex = 401;
        map.getPane('pane_kesesuianlokasi_1').style['mix-blend-mode'] = 'normal';
        var layer_kesesuianlokasi_1 = new L.geoJson(json_kesesuianlokasi_1, {
            attribution: '',
            interactive: true,
            dataVar: 'json_kesesuianlokasi_1',
            layerName: 'layer_kesesuianlokasi_1',
            pane: 'pane_kesesuianlokasi_1',
            onEachFeature: pop_kesesuianlokasi_1,
            style: style_kesesuianlokasi_1_0,
        });
        bounds_group.addLayer(layer_kesesuianlokasi_1);
        map.addLayer(layer_kesesuianlokasi_1);
        var baseMaps = {};
        L.control.layers(baseMaps,{'kesesuian lokasi<br /><table><tr><td style="text-align: center;"><img src="bahan/qgisweb-lokasi/lokasi/legend/kesesuianlokasi_1_sangatsesuai0.png" /></td><td>sangat sesuai</td></tr><tr><td style="text-align: center;"><img src="bahan/qgisweb-lokasi/lokasi/legend/kesesuianlokasi_1_sesuai1.png" /></td><td>sesuai</td></tr><tr><td style="text-align: center;"><img src="bahan/qgisweb-lokasi/lokasi/legend/kesesuianlokasi_1_cukupsesuai2.png" /></td><td>cukup sesuai</td></tr><tr><td style="text-align: center;"><img src="bahan/qgisweb-lokasi/lokasi/legend/kesesuianlokasi_1_kurangsesuai3.png" /></td><td>kurang sesuai</td></tr><tr><td style="text-align: center;"><img src="bahan/qgisweb-lokasi/lokasi/legend/kesesuianlokasi_1_tidaksesuai4.png" /></td><td>tidak sesuai</td></tr></table>': layer_kesesuianlokasi_1,"Peta OSM Standard": layer_PetaOSMStandard_0,},{collapsed:false}).addTo(map);
        setBounds();
        </script>
    </body>
</html>

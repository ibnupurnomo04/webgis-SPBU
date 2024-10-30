<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-0 shadow components-section">
            <?php
                //notif validasi tidak boleh kosong
                echo validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <span class="fas fa-bullhorn me-1"></span><button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>','</div>');

                //notif sukses
                if ($this->session->flashdata('pesan')) {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span class="fas fa-bullhorn me-1"></span><button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>';
                    echo $this->session->flashdata('pesan');
                    echo '</div>';
                }
                echo form_open('spbu/input');
                ?>
            <div class="card-body">     
                <div class="row mb-4">
                <!-- kolom form input -->
                    <div class="col-lg-5 col-sm-6">
                        <!-- Form nama SPBU -->
                        <div class="mb-4">
                            <label>Nama SPBU</label>
                            <input class="form-control" name="nama_spbu" placeholder="ex:SPBU lorem ipsum km..." value="<?= set_value('nama_spbu') ?>">
                            <small class="form-text text-muted">silahkan mengisi nama SPBU</small>
                        </div>
                        <!-- Form Alamat -->
                        <div class="mb-4">
                            <label>Alamat</label>
                            <input class="form-control" name="alamat" placeholder="ex:Jl siratal mustaqim" value="<?= set_value('alamat') ?>" >
                            <small id="emailHelp" class="form-text text-muted">Alamat SPBU dapat diisi diatas</small>
                        </div>
                        <!-- Form penyedia-->
                        <div class="mb-4">
                            <label>Penyedia</label>
                            <select class="form-control" name="penyedia">
                                <option value="">pilih penyedia</option>
                                <option value="pertamina">Pertamina</option>
                                <option value="british petrolium">British petrolium</option>
                                <option value="shell">Shell</option>
                                <option value="lainnya">lainnya</option>
                            </select>
                        </div>
                        <!-- Form lat long -->
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label>Latitude</label>
                                        <input class="form-control" name="latitude" id="latitude" placeholder="0.00000"    value="<?= set_value('latitude') ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label>Longitude</label>
                                        <input class="form-control" name="longitude" id="longitude" placeholder="0.00000"    value="<?= set_value('longitude') ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Form kecamatan-->
                        <div class="mb-4">
                            <label>Kecamatan</label>
                            <select class="form-control" name="kecamatan">
                                <option value="">pilih kecamatan</option>
                                <option value="">---KOTA MALANG---</option>
                                <option value="kedungkandang">kedungkandang</option>
                                <option value="sukun">sukun</option>
                                <option value="klojen">klojen</option>
                                <option value="blimbing">blimbing</option>
                                <option value="lowokwaru">lowokwaru</option>
                                <option value="">---KOTA BATU---</option>
                                <option value="Batu">Batu</option>
                                <option value="Junrejo">Junrejo</option>
                                <option value="Bumiaji">Bumiaji</option>
                                <option value="">---KABUPATEN MALANG---</option>
                                <option value="Donomulyo">Donomulyo</option>
                                <option value="Kalipare">Kalipare</option>
                                <option value="Pagak">Pagak</option>
                                <option value="Bantur">Bantur</option>
                                <option value="Gedangan">Gedangan</option>
                                <option value="Sumbermanjing">Sumbermanjing</option>
                                <option value="Dampit">Dampit</option>
                                <option value="Tirtoyudo">Tirtoyudo</option>
                                <option value="Ampelgading">Ampelgading</option>
                                <option value="Poncokusumo">Poncokusumo</option>
                                <option value="Wajak">Wajak</option>
                                <option value="Turen">Turen</option>
                                <option value="Bululawang">Bululawang</option>
                                <option value="Gondanglegi">Gondanglegi</option>
                                <option value="Pagelaran">Pagelaran</option>
                                <option value="Kepanjen">Kepanjen</option>
                                <option value="Sumberpucung">Sumberpucung</option>
                                <option value="Kromengan">Kromengan</option>
                                <option value="Ngajum">Ngajum</option>
                                <option value="Wonosari">Wonosari</option>
                                <option value="Wagir">Wagir</option>
                                <option value="Pakisaji">Pakisaji</option>
                                <option value="Tajinan">Tajinan</option>
                                <option value="Tumpang">Tumpang</option>
                                <option value="Pakis">Pakis</option>
                                <option value="Jabung">Jabung</option>
                                <option value="Lawang">Lawang</option>
                                <option value="Singosari">Singosari</option>
                                <option value="Karangploso">Karangploso</option>
                                <option value="Dau">Dau</option>
                                <option value="Pujon">Pujon</option>
                                <option value="Ngantang">Ngantang</option>
                                <option value="Kasembon">Kasembon</option>
                            </select>
                        </div>
                        <!-- Form Wilayah -->
                        <div class="mb-4">
                            <label>Wilayah</label>
                            <select name="wilayah" class="form-control">
                                <option value="">pilih wilayah</option>
                                <option value="kota malang">Kota Malang</option>
                                <option value="kota batu">Kota Batu</option>
                                <option value="kabupaten malang">Kabupaten Malang</option>
                            </select>
                        </div>        
                        <!-- Form keterangan-->
                        <div class="my-4">
                            <label for="textarea">keterangan tambahan</label>
                            <textarea name="keterangan" placeholder="Enter your message..." value="<?= set_value('keterangan') ?>" class="form-control" rows="4"></textarea>
                        </div>
                        <!-- tombol submit-->
                        <div class="form_control">
                            <button type="submit" class="btn btn-primary" type="button">Submit</button>  
                        </div>
                            
                        <?php echo form_close(); ?>             
                    </div> 
                <!-- kolom peta -->
                    <div class="col-lg-7 col-sm-4">
                        <div class="row"><div id="map" style="height: 800px;"></div></div>
                    </div>
                    
                    
                </div> 
            </div>
        </div>
    </div>    
</div>    

<script>
    var mymap = L.map('map').setView([-7.966909313309958, 112.63349700299008], 14);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
	maxZoom: 19,
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(mymap);

var latInput = document.querySelector("[name=latitude]");
var lngInput = document.querySelector("[name=longitude]");

var curLocation =[-7.966909313309958, 112.63349700299008];

mymap.attributionControl.setPrefix(false);

var marker = new L.marker(curLocation, {
    draggable:'true'
});

marker.on('dragend', function(event) {
    var position = marker.getLatLng();
    marker.setLatLng(position, {
        draggable: 'true'
    }).bindPopup(position).update();
    
});
mymap.addLayer(marker);

mymap.on("click",function(e) {
    var lat = e.latlng.lat;
    var lng = e.latlng.lng;
    if (!marker){
        marker = L.marker(e.latlng).addTo(mymap);
    }else{
        marker.setLatLng(e.latlng);
    }
    latInput.value=lat;
    lngInput.value=lng;
});
</script>


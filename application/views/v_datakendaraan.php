<div class="table-responsive">

    
    <table class="table table-flush table-hover">
        <thead class=" text-primary">
        <tr>
            <th>No</th>
            <th>Nama kecamatan</th>
            <th>jumlah kendaraan</th>
            <th>wilayah</th>

        </tr>
        </thead>
        <tbody>
        <?php $no=1; foreach ($kendaraan as $key => $value) { ?>
                
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $value->nama_kecamatan; ?></td>
            <td><?= $value->jumlah_kendaraan; ?></td>
            <td><?= $value->wilayah; ?></td>
        </tr>

        <?php  } ?>
        </tbody>
    </table>
</div>
<div class="table-responsive">

    
    <table class="table table-flush table-hover">
        <thead class=" text-primary">
        <tr>
            <th>No</th>
            <th>Nama kantor</th>
            <th>alamat</th>
            <th>kecamatan</th>
            <th>wilayah</th>

        </tr>
        </thead>
        <tbody>
        <?php $no=1; foreach ($kantorkec as $key => $value) { ?>
                
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $value->nama_kantor; ?></td>
            <td><?= $value->alamat; ?></td>
            <td><?= $value->kecamatan; ?></td>
            <td><?= $value->wilayah; ?></td>
        </tr>

        <?php  } ?>
        </tbody>
    </table>
</div>
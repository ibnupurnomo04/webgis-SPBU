<div class="table-responsive">
    <?php
    //notif sukses
    if ($this->session->flashdata('pesan')) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <span class="fas fa-bullhorn me-1"></span><button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>';
        echo $this->session->flashdata('pesan');
        echo '</div>';
    }
    ?>

    <table class="table table-flush table-hover table-layout:fixed "  >
        <thead class=" text-primary"  >
        <tr >
            <th>No</th>
            <th>Nama SPBU</th>
            <th>Alamat</th>
            <th>Penyedia</th>
            <th>Wilayah</th>
            <th>kecamatan</th>
            <th>Keterangan</th>
            
        </tr>
        </thead>
        <tbody >
            <?php $no=1; foreach ($spbu as $key => $value) { ?>
                
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $value->nama_spbu; ?></td>
            <td style=" white-space: -o-pre-wrap; 
                        word-wrap: break-word;
                        white-space: pre-wrap; 
                        white-space: -moz-pre-wrap; 
                        white-space: -pre-wrap; "><?= $value->alamat; ?></td>
            <td><?= $value->penyedia; ?></td>
            <td><?= $value->wilayah; ?></td>
            <td><?= $value->kecamatan; ?></td>
            <td><?= $value->keterangan; ?></td>
            <td>
            <div class="btn-group me-2">
            <a href="<?= base_url('spbu/edit/'.$value->id_spbu) ?>" class="btn btn-sm btn-warning"><i class="material-icons">edit</i></a>
            <a href="<?= base_url('spbu/delete/'.$value->id_spbu) ?>" class="btn btn-sm btn-danger" onClick="return confirm('Apakah anda ingin menghapus data ini?')"><i class="material-icons">delete</i></a>            </div>
            </td>
        </tr>
        <?php  } ?>
        </tbody>
    </table>
    </div>

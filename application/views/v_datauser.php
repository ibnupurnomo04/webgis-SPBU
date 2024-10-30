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
    
    <table class="table table-flush table-hover">
        <thead class=" text-primary">
        <tr>
            <th>No</th>
            <th>Nama user</th>
            <th>username</th>
            <th>password</th>
            <th>action</th>

        </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach ($user as $key => $value) { ?>
                
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $value->nama_user; ?></td>
            <td><?= $value->username; ?></td>
            <td><?= $value->password; ?></td>
            <td class="text-right">
                <a href="<?= base_url('user/edit/'.$value->id_user) ?>" class="btn btn-sm btn-warning"><i class="material-icons">edit</i></a>
                <a href="<?= base_url('user/delete/'.$value->id_user) ?>" class="btn btn-sm btn-danger" onClick="return confirm('Apakah anda ingin menghapus data ini?')"><i class="material-icons">delete</i></a>
            </td>
        </tr>

        <?php  } ?>
        </tbody>
    </table>
</div>
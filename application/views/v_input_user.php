
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
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
                echo form_open('user/input');
                ?>
            <form action="#" class="mt-4">
            <!-- Form nama user-->
            <div class="form-group mb-4">
                <label>Nama User</label>
                    <div class="input-group">
                        <span class="input-group-text">
                        <i class="material-icons">person</i>
                        </span>
                        <input name="nama_user" value="<?= set_value('nama_user') ?>" class="form-control" placeholder="walter white">
                    </div>  
            </div>
            <!-- End of Form -->
            <!-- Form username-->
            <div class="form-group mb-4">
                <label>Username</label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">
                        <i class="material-icons">person</i>
                        </span>
                        <input name="username" value="<?= set_value('username') ?>" class="form-control" placeholder="heisenberg" >
                    </div>  
            </div>
            <!-- End of Form -->
            <div class="form-group">
            <!-- Form password -->
            <div class="form-group mb-4">
                    <label for="password">Your Password</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path></svg>
                            </span>
                                <input name="password" value="<?= set_value('password') ?>" type="password" placeholder="Password" class="form-control" id="password">
                        </div>  
            </div>
            <!-- End of Form -->
            </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-gray-800">submit</button>
                                </div>
                                
                            </form>
            <?php echo form_close(); ?> 

                        </div>
                        
                    </div>
        
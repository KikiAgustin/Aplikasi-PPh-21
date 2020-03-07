<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- Content Row -->
    <div class="row">
        <div class="col-md-9">

            <div class="card">
                <div class="card-header">
                    Ubah Status Rekapan
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <input type="hidden" name="id_rekapan" value="<?= $rekapan['id_rekapan']; ?>">

                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" class="form-control" id="status" name="status" placeholder="Status" value="<?= $rekapan['status']; ?>">
                            <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="modal-footer">
                            <a href="<?= base_url('keuangan/hitungGaji'); ?>" class="btn btn-secondary"><i class="fas fa-caret-left"></i> Batal</a>
                            <button type="submit" name="tambah" class="btn btn-primary float-right"><i class="fas fa-edit"></i> Ubah</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
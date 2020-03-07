<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- Content Row -->
    <div class="row">
        <div class="col-md-9">

            <div class="card">
                <div class="card-header">
                    Ubah Status Gaji
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <input type="hidden" name="id_gaji" value="<?= $statusGaji['id_gaji']; ?>">


                        <div class="form-group">
                            <label for="verifikasi">Ubah Status</label>
                            <select class="form-control" name="verifikasi" id="verifikasi">
                                <option value="">Pilih</option>
                                <?php foreach ($status_terima_gaji as $status) : ?>
                                    <option value="<?= $status['id_status_gaji']; ?>"> <?= $status['status_gaji']; ?> </option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('verifikasi', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="modal-footer">
                            <a href="<?= base_url('keuangan/dataGaji'); ?>" class="btn btn-secondary"><i class="fas fa-caret-left"></i> Batal</a>
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
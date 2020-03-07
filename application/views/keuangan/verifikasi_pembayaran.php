<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- Content Row -->
    <div class="row">
        <div class="col-md-9">

            <div class="card">
                <div class="card-header">
                    Verifikasi Pembayaran
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <input type="hidden" name="id_siswa" value="<?= $siswa['id_siswa']; ?>">

                        <div class="form-group">
                            <select class="form-control" name="verifikasi" id="verifikasi">
                                <option value="">Pilih</option>
                                <?php foreach ($verifikasi as $veri) : ?>
                                    <option value="<?= $veri['id_konfirmasi'] ?>"><?= $veri['nama_konfirmasi']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('verifikasi', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="modal-footer">
                            <a href="<?= base_url('keuangan/transaksi'); ?>" class="btn btn-secondary"><i class="fas fa-caret-left"></i> Batal</a>
                            <button type="submit" name="tambah" class="btn btn-primary float-right"><i class="fas fa-edit"></i> Verifikasi</button>
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
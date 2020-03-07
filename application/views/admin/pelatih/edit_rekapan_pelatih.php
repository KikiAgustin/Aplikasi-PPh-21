<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- Content Row -->
    <div class="row">
        <div class="col-md-9">

            <div class="card">
                <div class="card-header">
                    Form Edit Data Rekapan
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <input type="hidden" name="id_rekapan" value="<?= $rekapan['id_rekapan']; ?>">

                        <div class="form-group">
                            <label for="id_pelatih">Periode</label>
                            <input name="periode" type="text" class="form-control datepicker " id="periode" value="<?= $rekapan['periode']; ?><?= set_value('periode') ?>">
                            <small class="form-text text-danger"><?= form_error('periode'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="kode_pelatih">Kode Pelatih</label>
                            <input name="kode_pelatih" type="text" class="form-control" id="kode_pelatih" value="<?= $rekapan['kode_pelatih']; ?><?= set_value('kode_pelatih') ?>">
                            <small class="form-text text-danger"><?= form_error('kode_pelatih'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama Pelatih</label>
                            <input name="nama" type="text" class="form-control " id="nama" value="<?= $rekapan['nama']; ?><?= set_value('nama') ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input name="jabatan" type="text" class="form-control" id="jabatan" value="<?= $rekapan['jabatan']; ?><?= set_value('jabatan') ?>">
                            <small class="form-text text-danger"><?= form_error('jabatan'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="jml_melatih">Jumlah Melatih</label>
                            <input name="jml_melatih" type="text" class="form-control" id="jml_melatih" value="<?= $rekapan['jumlah_melatih']; ?><?= set_value('jml_melatih') ?>">
                            <small class="form-text text-danger"><?= form_error('jml_melatih'); ?></small>
                        </div>

                        <div class="modal-footer">
                            <a href="<?= base_url('admin/rekapanPelatih'); ?>" class=" btn btn-secondary"><i class="fas fa-caret-left"></i> Batal</a>
                            <button type="submit" name="tambah" class="btn btn-primary float-right"><i class="fas fa-edit"></i> Edit Data</button>
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
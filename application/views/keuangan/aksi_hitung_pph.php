<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- Content Row -->

    <form action="" method="POST">
        <input type="hidden" name="id_pph" value="<?= $hitungPPh['id_gaji_pertahun']; ?>">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="kode_pelatih">Kode Pelatih</label>
                            <input readonly name="kode_pelatih" type="text" class="form-control " id="kode_pelatih" value="<?= $hitungPPh['kode_pelatih']; ?><?= set_value('kode_pelatih') ?>">
                            <small class="form-text text-danger"><?= form_error('kode_pelatih'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama Pelatih</label>
                            <input readonly name="nama" type="text" class="form-control " id="nama" value="<?= $hitungPPh['nama']; ?><?= set_value('nama') ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input readonly name="jabatan" type="text" class="form-control " id="jabatan" value="<?= $hitungPPh['jabatan']; ?><?= set_value('jabatan') ?>">
                            <small class="form-text text-danger"><?= form_error('jabatan'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <input readonly name="status" type="text" class="form-control " id="status" value="<?= $hitungPPh['status']; ?><?= set_value('status') ?>">
                            <small class="form-text text-danger"><?= form_error('status'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="npwp">NPWP</label>
                            <input readonly name="npwp" type="text" class="form-control " id="npwp" value="<?= $hitungPPh['npwp']; ?><?= set_value('npwp') ?>">
                            <small class="form-text text-danger"><?= form_error('npwp'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="jumlah">Gaji Netto</label>
                            <input readonly name="jumlah" type="text" class="form-control " id="jumlah" value="<?= $hitungPPh['jumlah']; ?><?= set_value('jumlah') ?>">
                            <small class="form-text text-danger"><?= form_error('jumlah'); ?></small>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="ptkp">PTKP</label>
                            <select class="form-control" name="ptkp" id="ptkp">
                                <?php foreach ($ptkp as $row) : ?>
                                    <option value="<?= $row['jumlah']; ?>"><?= $row['status']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <small class="form-text text-danger"><?= form_error('ptkp'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="statusNPWP">kepemilikan NPWP</label>
                            <select class="form-control" name="statusNPWP" id="statusNPWP">
                                <option value="0.05">Ada</option>
                                <option value="0.025">Tidak Ada</option>
                            </select>
                            <small class="form-text text-danger"><?= form_error('statusNPWP'); ?></small>
                        </div>

                        <div class="modal-footer">
                            <a href="<?= base_url('keuangan/hitungGaji'); ?>" class=" btn btn-secondary"><i class="fas fa-caret-left"></i> Batal</a>
                            <button type="submit" name="tambah" class="btn btn-primary float-right"><i class="fas fa-edit"></i> Hitung PPh 21</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
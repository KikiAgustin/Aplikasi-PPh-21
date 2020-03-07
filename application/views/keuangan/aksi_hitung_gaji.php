<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- Content Row -->

    <form action="" method="POST">
        <input type="hidden" name="id_rekapan" value="<?= $rekapan['id_rekapan']; ?>">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="periode">Periode</label>
                            <input readonly name="periode" type="text" class="form-control " id="periode" value="<?= $rekapan['periode']; ?><?= set_value('periode') ?>">
                            <small class="form-text text-danger"><?= form_error('periode'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="kode_pelatih">Kode Pelatih</label>
                            <input readonly name="kode_pelatih" type="text" class="form-control" id="kode_pelatih" value="<?= $rekapan['kode_pelatih']; ?> <?= set_value('kode_pelatih') ?>">
                            <small class="form-text text-danger"><?= form_error('kode_pelatih'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama Pelatih</label>
                            <input readonly name="nama" type="text" class="form-control " id="nama" value="<?= $rekapan['nama']; ?><?= set_value('nama') ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input readonly name="jabatan" type="text" class="form-control" id="jabatan" value="<?= $rekapan['jabatan']; ?><?= set_value('jabatan') ?>">
                            <small class="form-text text-danger"><?= form_error('jabatan'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="jml_melatih">Jumlah Melatih</label>
                            <input readonly name="jml_melatih" type="text" class="form-control" id="jml_melatih" value="<?= $rekapan['jumlah_melatih']; ?><?= set_value('jml_melatih') ?>">
                            <small class="form-text text-danger"><?= form_error('jml_melatih'); ?></small>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="gaji_melatih">Gaji Melatih</label>
                            <input readonly name="gaji_melatih" type="text" class="form-control" id="gaji_melatih" value="<?= $rekapan['gaji_melatih']; ?><?= set_value('gaji_melatih') ?>">
                            <small class="form-text text-danger"><?= form_error('gaji_melatih'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="kehadiran">Absen Kehadiran</label>
                            <select name="tunjangan" id="tunjangan" class="form-control">
                                <?php foreach ($absensi as $absen) : ?>
                                    <option value="<?= $absen['jumlah_biaya']; ?>"><?= $absen['kode_pelatih']; ?> Periode <?= $absen['periode']; ?> </option>
                                <?php endforeach; ?>
                            </select>
                            <small class="form-text text-danger"><?= form_error('tunjangan'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="gaji_pokok">Gaji Pokok</label>
                            <select name="gaji_pokok" id="gaji_pokok" class="form-control">
                                <?php foreach ($jabatan as $jabat) : ?>
                                    <option value="<?= $jabat['gaji']; ?>"><?= $jabat['nama_jabatan']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <small class="form-text text-danger"><?= form_error('gaji_pokok'); ?></small>
                        </div>



                        <div class="modal-footer">
                            <a href="<?= base_url('keuangan/hitungGaji'); ?>" class=" btn btn-secondary"><i class="fas fa-caret-left"></i> Batal</a>
                            <button type="submit" name="tambah" class="btn btn-primary float-right"><i class="fas fa-edit"></i> Hitung Gaji</button>
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
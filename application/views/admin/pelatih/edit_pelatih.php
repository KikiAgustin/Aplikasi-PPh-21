<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- Content Row -->
    <div class="row">
        <div class="col-md-9">

            <div class="card">
                <div class="card-header">
                    Form Edit Data Pelatih
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <input type="hidden" name="id_pelatih" value="<?= $status['id_pelatih']; ?>">

                        <div class="form-group">
                            <label for="kd_pelatih">Kode Pelatih</label>
                            <input name="kd_pelatih" type="text" class="form-control" id="kd_pelatih" value="<?= $status['kode_pelatih']; ?><?= set_value('kd_pelatih') ?>">
                            <small class="form-text text-danger"><?= form_error('kd_pelatih'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input name="nik" type="text" class="form-control" id="nik" value="<?= $status['nik']; ?><?= set_value('nik') ?>">
                            <small class="form-text text-danger"><?= form_error('nik'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Pelatih</label>
                            <input name="nama" type="text" class="form-control" id="nama" value="<?= $status['nama']; ?><?= set_value('nama') ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="npwp">Nomor NPWP</label>
                            <input name="npwp" type="text" class="form-control" id="npwp" value="<?= $status['npwp']; ?><?= set_value('npwp') ?>">
                            <small class="form-text text-danger"><?= form_error('npwp'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jabatan">Jenis Kelamin</label>
                            <input name="jenis_kelamin" type="text" class="form-control" id="jenis_kelamin" value="<?= $status['jenis_kelamin']; ?><?= set_value('jenis_kelamin') ?>">
                            <small class="form-text text-danger"><?= form_error('jenis_kelamin'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jabatan">jabatan</label>
                            <select class="form-control" name="jabatan" id="jabatan">
                                <option value="<?= $status['id_jabatan']; ?>"><?= $status['nama_jabatan']; ?></option>
                                <?php foreach ($jabatan as $jabat) : ?>
                                    <option value="<?= $jabat['id_jabatan']; ?>"><?= $jabat['nama_jabatan']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="ttl">Tanggal Lahir</label>
                            <input type="text" name="ttl" class="form-control datepicker" id="ttl" value="<?= $status['ttl']; ?><?= set_value('ttl') ?>">
                            <small class="form-text text-danger"><?= form_error('ttl'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kewarganegaraan">Kewarganegaraan</label>
                            <input type="text" name="kewarganegaraan" class="form-control" id="kewarganegaraan" value="<?= $status['kewarganegaraan']; ?><?= set_value('kewarganegaraan') ?>">
                            <small class="form-text text-danger"><?= form_error('kewarganegaraan'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="status">status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="<?= $status['id_status']; ?>"><?= $status['status']; ?></option>
                                <?php foreach ($editStatus as $sts) : ?>
                                    <option value="<?= $sts['id_status'] ?>"><?= $sts['status'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <small class="form-text text-danger"><?= form_error('status'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="agama">Agama</label>
                            <input type="text" name="agama" class="form-control" id="agama" value="<?= $status['agama']; ?><?= set_value('agama') ?>">
                            <small class="form-text text-danger"><?= form_error('agama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $status['alamat']; ?><?= set_value('alamat') ?>">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kabupaten">Kabupaten</label>
                            <input type="text" name="kabupaten" class="form-control" id="kabupaten" value="<?= $status['kabupaten']; ?><?= set_value('kabupaten') ?>">
                            <small class="form-text text-danger"><?= form_error('kabupaten'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="provinsi">provinsi</label>
                            <input type="text" name="provinsi" class="form-control" id="provinsi" value="<?= $status['provinsi']; ?><?= set_value('provinsi') ?>">
                            <small class="form-text text-danger"><?= form_error('provinsi'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kode_pos">Kode Pos</label>
                            <input type="text" name="kode_pos" class="form-control" id="kode_pos" value="<?= $status['kode_pos']; ?><?= set_value('kode_pos') ?>">
                            <small class="form-text text-danger"><?= form_error('kode_pos'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="telepon">Telepon</label>
                            <input type="text" name="telepon" class="form-control" id="telepon" value="<?= $status['telepon']; ?><?= set_value('telepon') ?>">
                            <small class="form-text text-danger"><?= form_error('telepon'); ?></small>
                        </div>
                        <div class="modal-footer">
                            <a href="<?= base_url('pelatih'); ?>" class="btn btn-secondary"><i class="fas fa-caret-left"></i> Batal</a>
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
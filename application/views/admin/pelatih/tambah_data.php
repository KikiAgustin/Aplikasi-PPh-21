<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-9">

            <form action="" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="kd_pelatih" name="kd_pelatih" placeholder="Kode Pelatih" value="<?= set_value('kd_pelatih') ?>">
                        <?= form_error('kd_pelatih', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" value="<?= set_value('nik') ?>">
                        <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="<?= set_value('nama') ?>">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="npwp" name="npwp" placeholder="No NPWP" value="<?= set_value('npwp') ?>">
                        <?= form_error('npwp', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                            <option hidden>Jenis Klamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <select name="jabatan" id="jabatan" class="form-control">
                            <option value="hidden">Pilih Jabatan</option>
                            <?php foreach ($jabatan as $jabat) : ?>
                                <option value="<?= $jabat['id_jabatan']; ?>"><?= $jabat['nama_jabatan']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control datepicker" id="ttl" name="ttl" placeholder="Tanggal Lahir" value="<?= set_value('ttl') ?>">
                        <?= form_error('ttl', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan" placeholder="kewarganegaraan" value="<?= set_value('kewarganegaraan') ?>">
                        <?= form_error('kewarganegaraan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <select name="status" id="status" class="form-control">
                            <option hidden>pilih Status</option>
                            <?php foreach ($status as $s) : ?>
                                <option value="<?= $s['status']; ?>"><?= $s['status']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <select name="agama" id="agama" class="form-control">
                            <option hidden>Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                        </select>
                        <?= form_error('agama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat" value="<?= set_value('alamat') ?>">
                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="kabupaten" name="kabupaten" placeholder="Kabupaten" value="<?= set_value('kabupaten') ?>">
                        <?= form_error('kabupaten', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="Provinsi" value="<?= set_value('provinsi') ?>">
                        <?= form_error('provinsi', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="kode_pos" name="kode_pos" placeholder="Kode Pos" value="<?= set_value('kode_pos') ?>">
                        <?= form_error('kode_pos', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Telepon" value="<?= set_value('telepon') ?>">
                        <?= form_error('telepon', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="<?= base_url('admin/datasiswa'); ?>" class="btn btn-secondary"><i class="fas fa-caret-left"></i> Batal</a>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</button>
                </div>
            </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
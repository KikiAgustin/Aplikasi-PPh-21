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
                        <label for="kode_pelatih">Kode pelatih</label>

                        <select name="kode_pelatih" id="kode_pelatih" class="form-control">
                            <?php foreach ($dataPelatih as $pelatih) : ?>
                                <option value="<?= $pelatih['kd_pelatih']; ?>"><?= $pelatih['kd_pelatih']; ?></option>
                            <?php endforeach; ?>
                        </select>

                        <?= form_error('kode_pelatih', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama pelatih</label>

                        <select name="nama" id="nama" class="form-control">
                            <?php foreach ($dataPelatih as $data) : ?>
                                <option value="<?= $data['nama']; ?>"><?= $data['nama']; ?></option>
                            <?php endforeach; ?>
                        </select>

                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>

                        <select name="jabatan" id="jabatan" class="form-control">
                            <?php foreach ($dataPelatih as $data) : ?>
                                <option value="<?= $data['jabatan']; ?>"><?= $data['jabatan']; ?></option>
                            <?php endforeach; ?>
                        </select>

                        <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>

                        <select name="status" id="status" class="form-control">
                            <?php foreach ($dataPelatih as $data) : ?>
                                <option value="<?= $data['id_status']; ?>"><?= $data['nama']; ?></option>
                            <?php endforeach; ?>
                        </select>

                        <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="npwp">NPWP</label>

                        <select name="npwp" id="npwp" class="form-control">
                            <?php foreach ($dataPelatih as $data) : ?>
                                <option value="<?= $data['npwp']; ?>"> <?= $data['nama']; ?></option>
                            <?php endforeach; ?>
                        </select>

                        <?= form_error('npwp', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>



                    <div class="modal-footer">
                        <a href="<?= base_url('admin/datasiswa'); ?>" class="btn btn-secondary"><i class="fas fa-caret-left"></i> Batal</a>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
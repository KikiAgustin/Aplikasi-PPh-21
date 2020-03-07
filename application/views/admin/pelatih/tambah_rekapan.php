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
                        <label for="periode">Periode</label>
                        <input type="text" class="form-control datepicker " id="periode" name="periode" placeholder="Periode" value="<?= set_value('periode') ?>">
                        <?= form_error('periode', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="kode_pelatih"> Kode Pelatih</label>
                        <select name="kode_pelatih" id="kode_pelatih" class="form-control">
                            <?php foreach ($namaPelatih as $nama) : ?>
                                <option value="<?= $nama['kd_pelatih']; ?>"> <?= $nama['kd_pelatih']; ?> <?= $nama['nama']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('kode_pelatih', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Pelatih</label>
                        <select name="nama" id="nama" class="form-control">
                            <?php foreach ($namaPelatih as $nama) : ?>
                                <option value="<?= $nama['nama']; ?>"><?= $nama['nama']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <select name="jabatan" id="jabatan" class="form-control">
                            <?php foreach ($namaPelatih as $nama) : ?>
                                <option value="<?= $nama['jabatan']; ?>"><?= $nama['nama']; ?> <?= $nama['jabatan']; ?> </option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="biaya_melatih">Fee Perlatihan</label>
                        <?php foreach ($biayaMelatih as $biaya) : ?>
                            <input readonly name="biaya_melatih" type="text" class="form-control" id="biaya_melatih" value="<?= $biaya['gaji_perjam']; ?><?= set_value('biaya_melatih') ?>">
                            <small class="form-text text-danger"><?= form_error('biaya_melatih'); ?></small>
                        <?php endforeach; ?>
                    </div>

                    <div class="form-group">
                        <label for="jml_melatih">Jumlah Melatih</label>
                        <input type="text" class="form-control" id="jml_melatih" name="jml_melatih" placeholder="jumlah Melatih" value="<?= set_value('jml_melatih') ?>">
                        <?= form_error('jml_melatih', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="modal-footer">
                        <a href="<?= base_url('admin/rekapanPelatih'); ?>" class="btn btn-secondary"><i class="fas fa-caret-left"></i> Batal</a>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</button>
                    </div>
            </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
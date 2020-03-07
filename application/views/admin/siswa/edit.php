<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- Content Row -->
    <div class="row">
        <div class="col-md-9">

            <div class="card">
                <div class="card-header">
                    Form Edit Data Siswa
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <input type="hidden" name="id_siswa" value="<?= $siswa['id_siswa']; ?>">
                        <div class="form-group">
                            <label for="nama_siswa">Nama Siswa</label>
                            <input name="nama_siswa" type="text" class="form-control" id="nama_siswa" value="<?= $siswa['nama_siswa']; ?><?= set_value('nama_siswa') ?>">
                            <small class="form-text text-danger"><?= form_error('nama_siswa'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="orang_tua">Nama Orang Tua</label>
                            <input name="orang_tua" type="text" class="form-control" id="orang_tua" value="<?= $siswa['orang_tua']; ?><?= set_value('orang_tua') ?>">
                            <small class="form-text text-danger"><?= form_error('orang_tua'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jk">Jenis Kelamin</label>
                            <input name="jk" type="text" class="form-control" id="jk" value="<?= $siswa['jenis_kelamin']; ?><?= set_value('jk') ?>">
                            <small class="form-text text-danger"><?= form_error('jk'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="text" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="<?= $siswa['tanggal_lahir']; ?><?= set_value('tanggal_lahir') ?>">
                            <small class="form-text text-danger"><?= form_error('tanggal_lahir'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="usia">Usia</label>
                            <input type="text" name="usia" class="form-control" id="usia" value="<?= $siswa['usia']; ?><?= set_value('usia') ?>">
                            <small class="form-text text-danger"><?= form_error('usia'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="pendidikan">Pendidikan</label>
                            <input type="text" name="pendidikan" class="form-control" id="pendidikan" value="<?= $siswa['pendidikan']; ?><?= set_value('pendidikan') ?>">
                            <small class="form-text text-danger"><?= form_error('pendidikan'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $siswa['alamat']; ?><?= set_value('alamat') ?>">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="telepon">Telepon</label>
                            <input type="text" name="telepon" class="form-control" id="telepon" value="<?= $siswa['telepon']; ?><?= set_value('telepon') ?>">
                            <small class="form-text text-danger"><?= form_error('telepon'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_bayar">Tanggal Bayar</label>
                            <input type="text" class="form-control datepicker" id="tanggal_bayar" name="tanggal_bayar" placeholder="Tanggal Bayar" value="<?= $siswa['tanggal_bayar'] ?>">
                            <?= form_error('tanggal_bayar', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="jumlah" value="<?= $siswa['jumlah']; ?>">
                            <?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nama_paket">Nama Paket</label>
                            <input type="text" class="form-control" id="nama_paket" name="nama_paket" placeholder="Nama Paket" value="<?= $siswa['paket']; ?>">
                            <?= form_error('nama_paket', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="modal-footer">
                            <a href="<?= base_url('admin/dataSiswa'); ?>" class="btn btn-secondary"><i class="fas fa-caret-left"></i> Batal</a>
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
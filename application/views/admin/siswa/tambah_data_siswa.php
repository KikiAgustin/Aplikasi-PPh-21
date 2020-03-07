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
                        <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="Nama Siswa" value="<?= set_value('nama_siswa') ?>">
                        <?= form_error('nama_siswa', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="orang_tua" name="orang_tua" placeholder="Nama Orang Tua" value="<?= set_value('orang_tua') ?>">
                        <?= form_error('orang_tua', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <select name="jk" id="jk" class="form-control">
                            <option>Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <?= form_error('jk', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control date tanggalLahir " id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?= set_value('tanggal_lahir') ?>">
                        <?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="usia" name="usia" placeholder="Usia" value="<?= set_value('usia') ?>">
                        <?= form_error('usia', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="pendidikan" name="pendidikan" placeholder="Pendidikan" value="<?= set_value('pendidikan') ?>">
                        <?= form_error('pendidikan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="<?= set_value('alamat') ?>">
                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Telepon" value="<?= set_value('telepon') ?>">
                        <?= form_error('telepon', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control datepicker" id="tanggal_bayar" name="tanggal_bayar" placeholder="Tanggal Bayar" value="<?= set_value('tanggal_bayar') ?>">
                        <?= form_error('tanggal_bayar', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <?php
                    $dsArray = "let dtPRODUK = new Array();";
                    ?>

                    <div class="form-group">
                        <select onChange="Value(this.value)" name="nama_paket" id="nama_paket" class="form-control">
                            <option>Pilih paket</option>
                            <?php foreach ($produk as $p) : ?>
                                <option value="<?= $p['nama_produk']; ?>"><?= $p['nama_produk'];  ?></option>
                                <?php $dsArray .= "dtPRODUK['" . $p['nama_produk'] . "']= {harga: '" . addslashes($p['harga']) . "'};\n"   ?>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('nama_paket', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <script type="text/javascript">
                        <?= $dsArray ?>

                        function Value(nama_produk) {
                            document.getElementById('harga').value = dtPRODUK[nama_produk].harga;
                        }
                    </script>

                    <div class="form-group">
                        <input readonly type="text" class="form-control" id="harga" name="harga" placeholder="harga" value="<?= set_value('harga') ?>">
                        <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
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
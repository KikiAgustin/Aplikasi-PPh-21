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
                        <input type="text" class="form-control datepicker " id="periode" name="periode" placeholder="Periode" value="<?= set_value('periode') ?>">
                        <?= form_error('periode', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <?php
                    $dsArray = "let dtADS = new Array();";
                    ?>

                    <div class="form-group">
                        <select onChange="Value(this.value)" class="form-control" name="kode_pelatih" id="kode_pelatih">
                            <option value="hidden">Pilih Kode</option>
                            <?php foreach ($namaPelatih as $nama) : ?>
                                <option value="<?= $nama['kode_pelatih'] ?>"><?= $nama['kode_pelatih'] ?></option>
                                <?php $dsArray .= "dtADS['" . $nama['kode_pelatih'] . "']= {nama_pelatih: '" . addslashes($nama['nama']) . "'};\n"   ?>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('kode_pelatih', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <script type="text/javascript">
                        <?= $dsArray ?>

                        function Value(kode_pelatih) {
                            document.getElementById('nama_pelatih').value = dtADS[kode_pelatih].nama_pelatih;
                        }
                    </script>

                    <div class="form-group">
                        <input readonly type="text" class="form-control" id="nama_pelatih" name="nama" placeholder="Nama Pelatih" value="<?= set_value('nama') ?>">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="jml_absen" name="jml_absen" placeholder="jumlah Absen" value="<?= set_value('jml_absen') ?>">
                        <?= form_error('jml_absen', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="rekapan" name="rekapan" placeholder="jumlah Melatih" value="<?= set_value('rekapan') ?>">
                        <?= form_error('rekapan', '<small class="text-danger pl-3">', '</small>'); ?>
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
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- Content Row -->
    <div class="row">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Gaji Pelatih
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Periode </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-title"><?= $detailGaji['periode']; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Kode pelatih </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-title"><?= $detailGaji['kode_pelatih']; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Nama Pelatih </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $detailGaji['nama']; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Jabatan</p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $detailGaji['nama_jabatan']; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Jumlah Melatih </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $detailGaji['jumlah_rekapan']; ?> Jam</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Gaji Melatih </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text">Rp. <?= number_format($detailGaji['gaji_melatih'], 0, ',', '.'); ?> </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Gaji Pokok</p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text">Rp. <?= number_format($detailGaji['gaji'], 0, ',', '.'); ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Tunjangan</p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text">Rp. <?= number_format($detailGaji['biaya_absen'], 0, ',', '.'); ?></p>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">gaji Bruto</p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text">Rp. <?= number_format($detailGaji['gaji_bruto'], 0, ',', '.'); ?></p>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Pajak </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text">- Rp. <?= number_format($detailGaji['pph'], 0, ',', '.'); ?></p>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Gaji Bersih</p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text">Rp. <?= number_format($detailGaji['gaji_bersih'],  0, ',', '.'); ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Status Gaji</p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $detailGaji['status_gaji']; ?></p>
                        </div>
                    </div>

                    <a href="<?= base_url('keuangan/dataGaji'); ?>" class="btn btn-primary"><i class="fas fa-caret-left"></i> Kembali</a>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
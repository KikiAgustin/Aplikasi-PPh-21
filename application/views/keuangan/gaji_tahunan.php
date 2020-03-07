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
                            <p class="font-weight-bold">Kode Pelatih </p>
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
                            <p class="card-text"><?= $detailGaji['jabatan']; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Status</p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $detailGaji['status']; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">NPWP</p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $detailGaji['npwp']; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Januari </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $detailGaji['januari']; ?> </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Februari </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $detailGaji['februari']; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Maret </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $detailGaji['maret']; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">April </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $detailGaji['april']; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Mei </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $detailGaji['mei']; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Juni </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $detailGaji['juni']; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Juli </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $detailGaji['juli']; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Agustus </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $detailGaji['agustus']; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">September </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $detailGaji['september']; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Oktober </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $detailGaji['oktober']; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">November </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $detailGaji['november']; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Desember </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $detailGaji['desember']; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Total </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= number_format($detailGaji['jumlah'], 0, '.', '.'); ?></p>
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
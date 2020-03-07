<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- Content Row -->
    <div class="row">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Siswa
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Nama </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-title"><?= $siswa['nama_siswa']; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Nama Orang Tua </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $siswa['orang_tua']; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Usia </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $siswa['jenis_kelamin']; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Tanggal Lahir </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $siswa['tanggal_lahir']; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Usia </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $siswa['usia']; ?> Tahun</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Pendidikan</p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $siswa['pendidikan']; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Alamat </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $siswa['alamat']; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Telepon </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $siswa['telepon']; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Tanggal Bayar</p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $siswa['tanggal_bayar']; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Jumlah </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text">Rp. <?= number_format($siswa['jumlah'], 0, ',', '.');  ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Nama Paket</p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $siswa['paket']; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Status Pembayaran</p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $siswa['nama_konfirmasi']; ?></p>
                        </div>
                    </div>
                    <a href="<?= base_url(); ?>admin/dataSiswa" class="btn btn-primary"><i class="fas fa-caret-left"></i> Kembali</a>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
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
                            <p class="font-weight-bold">Kode Pelatih </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $status['kode_pelatih']; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">NIK </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $status['nik']; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Nama pelatih </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $status['nama']; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">NPWP </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $status['npwp']; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">jenis Kelamin </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $status['jenis_kelamin']; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Jabatan </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $status['nama_jabatan']; ?></p>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Tanggal Lahir </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $status['ttl']; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Warga Negara </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $status['kewarganegaraan']; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Status </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $status['status']; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Agama </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $status['agama']; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Alamat </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $status['alamat']; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Kabupaten </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $status['kabupaten']; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Provinsi </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $status['provinsi']; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Kode Pos </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $status['kode_pos']; ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <p class="font-weight-bold">Nomor Telepon </p>
                        </div>
                        <div class="col-lg-8">
                            <p class="card-text"><?= $status['telepon']; ?></p>
                        </div>
                    </div>

                    <a href="<?= base_url('pelatih'); ?>" class="btn btn-primary"><i class="fas fa-caret-left"></i> Kembali</a>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
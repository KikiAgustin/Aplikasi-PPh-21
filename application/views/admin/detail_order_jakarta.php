<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- Detail order -->
    <section>
        <div class="container ">

            <div class="row">
                <div class="col col-lg-10">
                    <div class="jumbotron">
                        <h2><?= $detailOrderJakarta['nama_siswa']; ?></h2>
                        <hr class="my-4">

                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": <?= $detailOrderJakarta['jenis_kelamin']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Usia</label>
                            <div class="col-sm-9">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": <?= $detailOrderJakarta['usia']; ?> Tahun">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Nama Orang Tua</label>
                            <div class="col-sm-9">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": <?= $detailOrderJakarta['nama_ortu']; ?> ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Nama Sekolah</label>
                            <div class="col-sm-9">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": <?= $detailOrderJakarta['nama_sekolah']; ?> ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Telepon</label>
                            <div class="col-sm-9">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": <?= $detailOrderJakarta['telepon']; ?> ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Alamat Tinggal</label>
                            <div class="col-sm-9">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": <?= $detailOrderJakarta['alamat-tinggal']; ?> ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Tanggal Pesan</label>
                            <div class="col-sm-9">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= date('d F Y', $detailOrderJakarta['date_created']); ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Paket kelas</label>
                            <div class="col-sm-9">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": <?= $detailOrderJakarta['nama_kelas']; ?> ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Tempat Latihan</label>
                            <div class="col-sm-9">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": <?= $detailOrderJakarta['nama_kolam']; ?> ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Status Bayar</label>
                            <div class="col-sm-9">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": <?= $detailOrderJakarta['status']; ?> ">
                            </div>
                        </div>
                        <hr class="my-4">
                        <a class="btn btn-warning" href="<?= base_url('admin/orderjakarta') ?>"> Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Detail order -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
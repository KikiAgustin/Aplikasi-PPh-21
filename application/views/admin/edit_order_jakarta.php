<div class="container">
    <nav>
        <ol class="breadcrumb bg-transparent pl-0 cart-breadcrumb ">
            <li class="breadcrumb-item mt-2"><a href="<?= base_url('user/home') ?>">Home</a></li>
            <li class="breadcrumb-item  mt-2 active" aria-current="page"><?= $title; ?></li>
        </ol>
    </nav>


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


                    <div class="row">
                        <div class="col-lg-8">

                            <form action="" method="POST">
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 col-form-label">Nama Siswa</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="name" name="name" value="<?= $detailOrderJakarta['nama_siswa']; ?>">
                                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nama_kelas" class="col-sm-3 col-form-label">Order Kelas</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" value="<?= $detailOrderJakarta['nama_kelas']; ?>">
                                        <?= form_error('nama_kelas', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="status_bayar" class="col-sm-3 col-form-label">Status Bayar</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="status_bayar" name="status_bayar" value="<?= $detailOrderJakarta['status']; ?>">
                                        <?= form_error('status_bayar', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nama_pelatih" class="col-sm-3 col-form-label">Nama Pelatih</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="nama_pelatih" name="nama_pelatih" value="<?= $detailOrderJakarta['pelatih']; ?>">
                                        <?= form_error('nama_pelatih', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nama_orang_tua" class="col-sm-3 col-form-label">Nama Orang Tua</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="nama_orang_tua" name="nama_orang_tua" value="<?= $detailOrderJakarta['nama_ortu']; ?>">
                                        <?= form_error('nama_orang_tua', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?= $detailOrderJakarta['jenis_kelamin']; ?>">
                                        <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="usia" class="col-sm-3 col-form-label">Usia</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="usia" name="usia" value="<?= $detailOrderJakarta['usia']; ?>">
                                        <?= form_error('usia', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nama_sekolah" class="col-sm-3 col-form-label">Nama Sekolah</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" value="<?= $detailOrderJakarta['nama_sekolah']; ?>">
                                        <?= form_error('nama_sekolah', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="telepon" class="col-sm-3 col-form-label">Nomor Telepon</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="telepon" name="telepon" value="<?= $detailOrderJakarta['telepon']; ?>">
                                        <?= form_error('telepon', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="alamat" class="col-sm-3 col-form-label">Nomor alamat</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $detailOrderJakarta['alamat-tinggal']; ?>">
                                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nama_kolam" class="col-sm-3 col-form-label">Nama kolam</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="nama_kolam" name="nama_kolam" value="<?= $detailOrderJakarta['nama_kolam']; ?>">
                                        <?= form_error('nama_kolam', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>


                                <div class="row form-group justify-content-end">
                                    <div class="col-sm-9">
                                        <button type="submit" name="submit" class="btn btn-primary">Edit Order ini</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
        </div>
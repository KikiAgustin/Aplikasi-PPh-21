<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Topbar Search -->
            <form action="" method="post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" name="keyword" autofocus autocomplete="off" class="form-control bg-light border-0 small" placeholder="Cari disini..">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Charts -->
                <li class="nav-item ">
                    <a class="nav-link">
                        <span class="text-secondary"> Tanggal <?= date('d F Y'); ?></span></a>
                </li>

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name']; ?></span>
                        <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Keluar
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
            <a href="<?= base_url('pelatih/tambahDataPelatih'); ?>" class="mb-4 btn btn-primary"><i class="fas fa-plus"></i> Tambah data Pelatih</a>
            <a href="<?= base_url('pelatih/printData'); ?>" class="mb-4 btn btn-primary"><i class="fas fa-print"></i> Print Data</a>
            <a href="" class="mb-4 btn btn-primary dropdown-toggle mb-3 " role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-file-import"></i> Import Data</a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="<?= base_url('pelatih/eksportPelatihPdf/'); ?>">PDF</a>
                <a class="dropdown-item" href="<?= base_url('pelatih/exportExcel/'); ?>">MS Excel</a>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <?= $this->session->flashdata('message'); ?>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kode Pelatih</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        </thead>
                        <?php $i = 1; ?>
                        <?php foreach ($pelatih as $pel) : ?>
                            <tbody>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $pel['kode_pelatih']; ?></td>
                                    <td><?= $pel['nama']; ?></td>
                                    <td><?= $pel['nama_jabatan']; ?></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-primary btn-block dropdown-toggle" type="button" data-toggle="dropdown">
                                                pilih aksi
                                            </button>
                                            <div class="dropdown-menu">
                                                <a href="<?= base_url('pelatih/detailPelatih/') . $pel['id_pelatih']; ?>" class="btn btn-warning dropdown-item "><i class="fas fa-info-circle"></i> Detail Pelatih</a>
                                                <a href="<?= base_url('pelatih/editPelatih/') . $pel['id_pelatih']; ?>" class="btn btn-warning dropdown-item "><i class="fas fa-edit"></i> Edit</a>
                                                <a href="" class="btn btn-danger dropdown-item" data-toggle="modal" data-target="#hapusModalPelatih"><i class="fas fa-trash-alt"></i> Hapus</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>


        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- modal hapus pelatih -->
    <div class="modal fade" id="hapusModalPelatih" tabindex="-1" role="dialog" aria-labelledby="hapusModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Anda yakin mau menghapus data ini?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Menghapus data ini membuat data ini hilang selamanya!</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="<?= base_url('pelatih/hapusDataPelatih/') . $pel['id_pelatih']; ?>">Hapus</a>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir hapus modal pelatih -->
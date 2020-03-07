<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> Tambah Data Order</a>
    <a href="<?= base_url('admin/frint'); ?>" class="btn btn-primary mb-3"><i class="fas fa-print"></i> Print Data</a>
    <a href="" class="btn btn-primary dropdown-toggle mb-3" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-file-import"></i> Import Data</a>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item" href="<?= base_url('admin/pdf'); ?>">PDF</a>
        <a class="dropdown-item" href="<?= base_url('admin/cob'); ?>">MS Excel</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12">
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
                        <th scope="col">Nama Siswa</th>
                        <th scope="col">Order Kelas</th>
                        <th scope="col">Tanggal Pesan</th>
                        <th scope="col">Status</th>
                        <th scope="col">Pelatih</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($orderjakarta as $oj) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $oj['nama_siswa']; ?></td>
                            <td><?= $oj['nama_kelas']; ?></td>
                            <td><?= date('d F Y', $oj['date_created']); ?></td>
                            <td><?= $oj['status']; ?></td>
                            <td><?= $oj['pelatih']; ?></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-block dropdown-toggle" type="button" data-toggle="dropdown">
                                        pilih aksi
                                    </button>
                                    <div class="dropdown-menu">
                                        <a href="<?= base_url('admin/detail/') . $oj['id']; ?>" class="btn btn-warning dropdown-item "><i class="fas fa-info-circle"></i> Detail Siswa</a>
                                        <a href="<?= base_url('admin/edit/') . $oj['id']; ?>" class="btn btn-warning dropdown-item "><i class="fas fa-edit"></i> Edit</a>
                                        <a href="#" class="btn btn-warning dropdown-item "><i class="fas fa-share"></i> Kirim</a>
                                        <a href="#modal1" class="btn btn-danger dropdown-item" data-toggle="modal" data-target="#hapusModal"><i class="fas fa-trash-alt"></i> Hapus</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Logout Modal-->
<div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Anda yakin mau menghapus data ini?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a class="btn btn-primary" href="<?= base_url('admin/hapus/') . $oj['id']; ?>">Hapus</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Order Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/tambahOrder'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name_siswa" name="name_siswa" placeholder="Nama Siswa">
                        <?= form_error('name_siswa', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama_ortu" name="nama_ortu" placeholder="Nama Orang Tua">
                    </div>
                    <?= form_error('nama_ortu', '<small class="text-danger pl-3">', '</small>'); ?>
                    <div class="form-group">
                        <select name="jk" id="jk" class="form-control">
                            <option>Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <?= form_error('jk', '<small class="text-danger pl-3">', '</small>'); ?>
                    <div class="form-group">
                        <input type="text" class="form-control" id="usia" name="usia" placeholder="Usia">
                        <?= form_error('usia', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" placeholder="Nama Sekolah">
                        <?= form_error('nama_sekolah', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Telepon">
                        <?= form_error('telepon', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="alamat_tinggal" name="alamat_tinggal" placeholder="Alamat Tinggal">
                        <?= form_error('alamat_tinggal', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="kolam" name="kolam" placeholder="Tempat Latihan">
                        <?= form_error('kolam', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <select name="kelas" id="kelas" class="form-control">
                            <option>Pilih Paket</option>
                            <option value="Bandung 1 Siswa 4 Pertemuan">Bandung 1 Siswa 4 Pertemuan</option>
                            <option value="Bandung 1 Siswa 8 Pertemuan">Bandung 1 Siswa 8 Pertemuan</option>
                            <option value="Bandung 2 Siswa 4 Pertemuan">Bandung 2 Siswa 4 Pertemuan</option>
                            <option value="Bandung 2 Siswa 8 Pertemuan">Bandung 2 Siswa 8 Pertemuan</option>
                            <option value="Bandung 3/4 Siswa 4 Pertemuan">Bandung 3/4 Siswa 4 Pertemuan</option>
                            <option value="Bandung 3/4 Siswa 8 Pertemuan">Bandung 3/4 Siswa 8 Pertemuan</option>
                            <option value="Jakarta 1 Siswa 4 Pertemuan">Jakarta 1 Siswa 4 Pertemuan</option>
                            <option value="Jakarta 1 Siswa 8 Pertemuan">Jakarta 1 Siswa 8 Pertemuan</option>
                            <option value="Jakarta 2 Siswa 4 Pertemuan">Jakarta 2 Siswa 4 Pertemuan</option>
                            <option value="Jakarta 2 Siswa 8 Pertemuan">Jakarta 2 Siswa 8 Pertemuan</option>
                            <option value="Jakarta 3/4 Siswa 4 Pertemuan">Jakarta 3/4 Siswa 4 Pertemuan</option>
                            <option value="Jakarta 3/4 Siswa 8 Pertemuan">Jakarta 3/4 Siswa 8 Pertemuan</option>
                        </select>
                        <?= form_error('kelas', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
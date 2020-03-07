<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-11">
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
                        <th scope="col">Tanggal</th>
                        <th scope="col">Nama Pengirim</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($siswa as $s) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $s['tanggal_bayar']; ?></td>
                            <td><?= $s['nama_siswa']; ?></td>
                            <td>Rp. <?= number_format($s['jumlah'], 0, ',', '.');  ?></td>
                            <td><?= $s['paket']; ?></td>
                            <td><?= $s['nama_konfirmasi']; ?></td>

                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-block dropdown-toggle" type="button" data-toggle="dropdown">
                                        pilih aksi
                                    </button>
                                    <div class="dropdown-menu">
                                        <a href="<?= base_url('keuangan/verifikasiPembayaran/') . $s['id_siswa']; ?>" class="btn btn-warning dropdown-item "><i class="fas fa-edit"></i> Verifikasi</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                    <td colspan="3">Jumlah</td>
                    <td>Rp. <?= number_format($jumlah, 0, ',', '.');  ?></td>
                </tbody>
            </table>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css'); ?>">

    <!-- foneawesome -->
    <link rel="stylesheet" href="<?= base_url('assets/css/all.css'); ?>">

    <title><?= $title; ?></title>
</head>

<body>

    <div class="container mt-5 badge-light">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="text-center p-2 "><?= $title; ?></h4>
                <p class="text-center">Periode Tahun <?= date('Y'); ?></p>
                <hr>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-4">
                                <p>Nama Perusahaan </p>
                                <p>Alamat</p>
                            </div>
                            <div class="col-lg-8">
                                <p>: CV. Maestro Bisa</p>
                                <p>: Jl. Subang No. 34 Antapani kota Bandung Jawa Barat</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <p class="text-right">
                            <a class="btn" href="<?= base_url('keuangan/excelPPh21'); ?>">Eksport Excel</a>
                        </p>

                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Status</th>
                            <th scope="col">NPWP</th>
                            <th scope="col">Gaji Netto</th>
                            <th scope="col">PTKP</th>
                            <th scope="col">PKP</th>
                            <th scope="col">Tarif Pajak</th>
                            <th scope="col">PPh 21</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($dataGaji as $gaji) : ?>

                            <?php
                            $gaji_netto = $gaji['total'];
                            $ptkp = $gaji['ptkp'];
                            $pkp = $gaji_netto - $ptkp;
                            $pph21 = $pkp * 0.05;
                            ?>

                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $gaji['nama']; ?></td>
                                <td><?= $gaji['nama_jabatan']; ?></td>
                                <td><?= $gaji['status_kawin']; ?></td>
                                <td><?= $gaji['npwp']; ?></td>
                                <td><?= number_format($gaji['total']); ?></td>
                                <td><?= number_format($gaji['ptkp']); ?></td>
                                <td><?= number_format($pkp); ?></td>
                                <td>5%</td>
                                <td><?= number_format($pph21); ?></td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url('assets/js/jquery-3.4.1.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/popper.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.js'); ?>"></script>
    <script src="<?= base_url('assets/js/all.js'); ?>"></script>

</body>

</html>
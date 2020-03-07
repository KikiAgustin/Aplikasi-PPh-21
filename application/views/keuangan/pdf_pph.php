<?php require_once __DIR__ . '/../../../assets/vendor_mpdf_8.0.0/autoload.php'; ?>
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
                            <a class="btn " href="<?= base_url('keuangan/pdfPPh21'); ?>">Eksport Pdf</a>
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
                        <?php foreach ($laporanPPh21 as $pph) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $pph['nama']; ?></td>
                                <td><?= $pph['jabatan']; ?></td>
                                <td><?= $pph['status']; ?></td>
                                <td><?= $pph['npwp']; ?></td>
                                <td><?= number_format($pph['gaji_netto'], 0, '.', '.'); ?></td>
                                <td><?= number_format($pph['ptkp'], 0, '.', '.'); ?></td>
                                <td><?= number_format($pph['pkp'], 0, '.', '.'); ?></td>
                                <td><?= $pph['potongan']; ?></td>
                                <td><?= number_format($pph['pph21'], 0, '.', '.'); ?></td>
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


<?php

$nama_dokumen = 'Laporan PPh 21'; //Beri nama file PDF hasil.
$html = ob_get_contents();
$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);
// // Define a default page size/format by array - page will be 190mm wide x 236mm height
// $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'utf-8', [190, 236]]);
// // Define a default page using all default values except "L" for Landscape orientation
// $mpdf = new \Mpdf\Mpdf(['orientation' => 'L']);
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($nama_dokumen . ".pdf", 'I');

?>
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

    <div class="container mt-5 ">
        <div class="row">
            <div class="col-lg-8  ">
                <div class="row ">
                    <div class="col-lg-8 bg-light  ">
                        <p class="font-weight-bold mt-3 text-center "> CV. MAESTRO BISA </p>
                        <p class="font-weight-bold  mt-3 "> STRUK GAJI </p>
                        <p>Jl. Subang No. 34 Antapani Kota Bandung Jawa barat</p>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4">
                                <p>Nama : <?= $detailGaji['nama']; ?></p>
                                <p>Periode </p>
                            </div>
                            <div class="col-lg-4">
                                <p class="text-right">Jabatan : <?= $detailGaji['nama_jabatan'];  ?></p>
                                <p>: <?= $detailGaji['periode']; ?> </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-8">
                                <p class="font-weight-bold">Keterangan</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <p>Jumlah Melatih</p>
                                <p>Gaji Melatih</p>
                                <p>Gaji Pokok</p>
                                <p>Tunjangan</p>
                            </div>
                            <div class="col-lg-4">
                                <p>: <?= $detailGaji['jumlah_rekapan'];  ?> X Rp. 135.000 </p>
                                <p>: Rp. <?= number_format($detailGaji['gaji_melatih'], 0, ',', '.'); ?> </p>
                                <p>: Rp. <?= number_format($detailGaji['gaji'], 0, ',', '.'); ?> </p>
                                <p>: Rp. <?= number_format($detailGaji['biaya_absen'], 0, ',', '.'); ?> </p>
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4">
                                <p class="font-weight-bold">Jumlah</p>
                            </div>
                            <div class="col-lg-4">
                                <p class="">: Rp. <?= number_format($detailGaji['gaji_bruto'], 0, ',', '.'); ?> </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4">
                                <p class="font-weight-bold">Pajak</p>
                            </div>
                            <div class="col-lg-4">
                                <p>: - Rp. <?= number_format($detailGaji['pph'], 0, ',', '.'); ?> </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4">
                                <p class="font-weight-bold">Total</p>
                            </div>
                            <div class="col-lg-4">
                                <p>: Rp. <?= number_format($detailGaji['gaji_bersih'], 0, ',', '.'); ?> </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <p class="font-weight-bold">Penerima</p>
                                <br>
                                <br>
                                <p><?= $detailGaji['nama']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url('assets/js/jquery-3.4.1.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/popper.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.js'); ?>"></script>
    <script src="<?= base_url('assets/js/all.js'); ?>"></script>

    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>
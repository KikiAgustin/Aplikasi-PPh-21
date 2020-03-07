<?php require_once __DIR__ . '/../../../../assets/vendor_mpdf_8.0.0/autoload.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th scope="col">Id pelatih</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama Pelatih</th>
                <th scope="col">No NPWP</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Warga Negara</th>
                <th scope="col">Status</th>
                <th scope="col">Agama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Kabupaten</th>
                <th scope="col">Provinsi</th>
                <th scope="col">Kode Pos</th>
                <th scope="col">Telepon</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($pelatih as $pel) : ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $pel['id_pelatih']; ?></td>
                    <td><?= $pel['nik']; ?></td>
                    <td><?= $pel['nama']; ?></td>
                    <td><?= $pel['npwp']; ?></td>
                    <td><?= $pel['jenis_kelamin']; ?></td>
                    <td><?= $pel['jabatan']; ?></td>
                    <td><?= $pel['ttl']; ?></td>
                    <td><?= $pel['kewarganegaraan']; ?></td>
                    <td><?= $pel['status']; ?></td>
                    <td><?= $pel['agama']; ?></td>
                    <td><?= $pel['alamat']; ?></td>
                    <td><?= $pel['kabupaten']; ?></td>
                    <td><?= $pel['provinsi']; ?></td>
                    <td><?= $pel['kode_pos']; ?></td>
                    <td><?= $pel['telepon']; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

<?php
$nama_dokumen = 'Data Siswa'; //Beri nama file PDF hasil.
$html = ob_get_contents();
$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);
// // Define a default page size/format by array - page will be 190mm wide x 236mm height
// $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'utf-8', [190, 236]]);
// // Define a default page using all default values except "L" for Landscape orientation
// $mpdf = new \Mpdf\Mpdf(['orientation' => 'L']);
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($nama_dokumen . ".pdf", 'I');

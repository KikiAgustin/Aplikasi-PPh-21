<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title><?= $title; ?></title>
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
            <?php foreach ($pelatih as $fr) : ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $fr['id_pelatih']; ?></td>
                    <td><?= $fr['nik']; ?></td>
                    <td><?= $fr['nama']; ?></td>
                    <td><?= $fr['npwp']; ?></td>
                    <td><?= $fr['jenis_kelamin']; ?></td>
                    <td><?= $fr['jabatan']; ?></td>
                    <td><?= $fr['ttl']; ?></td>
                    <td><?= $fr['kewarganegaraan']; ?></td>
                    <td><?= $fr['status']; ?></td>
                    <td><?= $fr['agama']; ?></td>
                    <td><?= $fr['alamat']; ?></td>
                    <td><?= $fr['kabupaten']; ?></td>
                    <td><?= $fr['provinsi']; ?></td>
                    <td><?= $fr['kode_pos']; ?></td>
                    <td><?= $fr['telepon']; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script type="text/javascript">
        window.print();
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
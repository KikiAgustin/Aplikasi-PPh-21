<body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 2-columns  " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

    <!-- BEGIN: Page Main-->
    <div class="col s12">
        <div class="container">
            <div class="seaction">
                <!--Invoice-->
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div id="basic-tabs" class="card card card-default scrollspy">
                            <div class="card-content pt-5 pr-5 pb-5 pl-5">
                                <div id="invoice">
                                    <div class="invoice-header">
                                        <div class="row section">
                                            <div class="col s12 m6 l6">
                                                <a href="">
                                                    <h4>Data order maestro swim</h4>
                                                    <a class=" btn gradient-45deg-indigo-light-blue" href="<?= base_url('admin/tambahorder') ?>">Tambah Data Order</a>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row section">
                                            <div class="col s12 m6 l6">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="invoice-table">
                                        <div class="row">
                                            <div class="col s12 m12 l12">
                                                <table class="highlight responsive-table">
                                                    <thead>
                                                        <tr>
                                                            <th data-field="no">No</th>
                                                            <th data-field="item">Nama Siswa</th>
                                                            <th data-field="item">Order Kelas</th>
                                                            <th data-field="uprice">Tanggal pesan</th>
                                                            <th data-field="price">Status</th>
                                                            <th data-field="price">Pelatih</th>
                                                            <th data-field="price">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $i = 1; ?>
                                                        <?php foreach ($orderjakarta as $oj) : ?>
                                                            <tr>
                                                                <td><?= $i; ?></td>
                                                                <td><?= $oj['nama_siswa']; ?></td>
                                                                <td><?= $oj['nama_kelas']; ?></td>
                                                                <td><?= date('d F Y', $oj['date_created']); ?></td>
                                                                <td><?= $oj['status']; ?></td>
                                                                <td><?= $oj['pelatih']; ?></td>
                                                                <td>
                                                                    <a class='dropdown-trigger btn gradient-45deg-indigo-light-blue' href='#' data-target='dropdown1'>Pilih <i class="material-icons">arrow_drop_down</i></a>
                                                                    <ul id='dropdown1' class='dropdown-content'>
                                                                        <li><a class="" href="<?= base_url('admin/detail/') . $oj['id']; ?>">Detail </a></li>
                                                                        <li><a class="" href="<?= base_url('admin/edit/') . $oj['id']; ?>">Edit</a></li>
                                                                        <li><a class="" href="#!">Kirim</a></li>
                                                                        <li>
                                                                            <button data-target="modal1">Hapus</button>
                                                                            <div id="modal1" class="modal">
                                                                                <div class="modal-content">
                                                                                    <h4>Modal Header</h4>
                                                                                    <p>A bunch of text</p>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <?php $i++; ?>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                                <br><br><br><br><br><br><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- START RIGHT SIDEBAR NAV -->
        </div>
    </div>
    </div>
    </div>
    <!-- END: Page Main-->
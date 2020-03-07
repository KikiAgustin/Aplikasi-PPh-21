<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- Content Row -->
    <div class="row">
        <div class="col-md-9">

            <div class="card">
                <div class="card-header">
                    Form Input Data Gaji Tahunan
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <input type="hidden" name="id_gaji_pertahun" value="<?= $insertGaji['id_gaji_pertahun']; ?>">

                        <div class="form-group row">
                            <label for="kode_pelatih" class="col-sm-2 col-form-label">Kode Pelatih</label>
                            <div class="col-sm-10">
                                <input readonly name="kode_pelatih" type="text" class="form-control" id="kode_pelatih" value="<?= $insertGaji['kode_pelatih']; ?><?= set_value('kode_pelatih') ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama Pelatih</label>
                            <div class="col-sm-10">
                                <input readonly name="nama" type="text" class="form-control" id="nama" value="<?= $insertGaji['nama']; ?><?= set_value('nama') ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jabatan" class="col-sm-2 col-form-label">Jabatan </label>
                            <div class="col-sm-10">
                                <input readonly name="jabatan" type="text" class="form-control" id="jabatan" value="<?= $insertGaji['jabatan']; ?><?= set_value('jabatan') ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="januari" class="col-sm-2 col-form-label">Januari </label>
                            <div class="col-sm-10">
                                <input name="januari" type="text" class="form-control" id="januari" value="<?= $insertGaji['januari']; ?><?= set_value('januari') ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="februari" class="col-sm-2 col-form-label">Februari </label>
                            <div class="col-sm-10">
                                <input name="februari" type="text" class="form-control" id="februari" value="<?= $insertGaji['februari']; ?><?= set_value('februari') ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="maret" class="col-sm-2 col-form-label">Maret </label>
                            <div class="col-sm-10">
                                <input name="maret" type="text" class="form-control" id="maret" value="<?= $insertGaji['maret']; ?><?= set_value('maret') ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="april" class="col-sm-2 col-form-label">April </label>
                            <div class="col-sm-10">
                                <input name="april" type="text" class="form-control" id="april" value="<?= $insertGaji['april']; ?><?= set_value('april') ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mei" class="col-sm-2 col-form-label">Mei </label>
                            <div class="col-sm-10">
                                <input name="mei" type="text" class="form-control" id="mei" value="<?= $insertGaji['mei']; ?><?= set_value('mei') ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="juni" class="col-sm-2 col-form-label">Juni </label>
                            <div class="col-sm-10">
                                <input name="juni" type="text" class="form-control" id="juni" value="<?= $insertGaji['juni']; ?><?= set_value('juni') ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="juli" class="col-sm-2 col-form-label">Juli </label>
                            <div class="col-sm-10">
                                <input name="juli" type="text" class="form-control" id="juli" value="<?= $insertGaji['juli']; ?><?= set_value('juli') ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="agustus" class="col-sm-2 col-form-label">Agustus </label>
                            <div class="col-sm-10">
                                <input name="agustus" type="text" class="form-control" id="agustus" value="<?= $insertGaji['agustus']; ?><?= set_value('agustus') ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="september" class="col-sm-2 col-form-label">September </label>
                            <div class="col-sm-10">
                                <input name="september" type="text" class="form-control" id="september" value="<?= $insertGaji['september']; ?><?= set_value('september') ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="oktober" class="col-sm-2 col-form-label">Oktober </label>
                            <div class="col-sm-10">
                                <input name="oktober" type="text" class="form-control" id="oktober" value="<?= $insertGaji['oktober']; ?><?= set_value('oktober') ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="november" class="col-sm-2 col-form-label">November </label>
                            <div class="col-sm-10">
                                <input name="november" type="text" class="form-control" id="november" value="<?= $insertGaji['november']; ?><?= set_value('november') ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="desember" class="col-sm-2 col-form-label">Desember </label>
                            <div class="col-sm-10">
                                <input name="desember" type="text" class="form-control" id="desember" value="<?= $insertGaji['desember']; ?><?= set_value('desember') ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jumlah" class="col-sm-2 col-form-label">Gaji Netto </label>
                            <div class="col-sm-10">
                                <input name="jumlah" type="text" class="form-control" id="jumlah" value="<?= $insertGaji['jumlah']; ?><?= set_value('jumlah') ?>">
                            </div>
                        </div>


                        <div class="modal-footer">
                            <a href="<?= base_url('keuangan/dataGaji'); ?>" class="btn btn-secondary"><i class="fas fa-caret-left"></i> Batal</a>
                            <button type="submit" name="tambah" class="btn btn-primary float-right"><i class="fas fa-edit"></i> Tambah Data</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
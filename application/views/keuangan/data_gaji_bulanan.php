      <!-- Begin Page Content -->
      <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
          <a class="btn btn-primary mb-3" href="<?= base_url('keuangan/dataGajiTahunan'); ?>">Jumlah Gaji Tiap Pelatih</a>

          <div class="row">
              <div class="col-lg-10">

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
                              <th scope="col">Periode</th>
                              <th scope="col">Kode Pelatih</th>
                              <th scope="col">Nama Pelatih</th>
                              <th scope="col">Gaji Bruto</th>
                              <th scope="col">Status</th>
                              <th scope="col">Aksi</th>
                          </tr>
                      </thead>
                      </thead>
                      <?php $i = 1; ?>
                      <?php foreach ($dataGaji as $gaji) : ?>

                          <tbody>
                              <tr>
                                  <td><?= $i; ?></td>
                                  <td><?= $gaji['periode']; ?></td>
                                  <td><?= $gaji['kode_pelatih']; ?></td>
                                  <td><?= $gaji['nama']; ?></td>
                                  <td><?= number_format($gaji['gaji_bruto']); ?></td>
                                  <td><?= $gaji['status_gaji']; ?></td>
                                  <td>
                                      <div class="dropdown">
                                          <button class="btn btn-primary btn-block dropdown-toggle" type="button" data-toggle="dropdown">
                                              pilih aksi
                                          </button>
                                          <div class="dropdown-menu">
                                              <a href="<?= base_url('keuangan/detailGaji/') . $gaji['id_gaji']; ?>" class="btn btn-warning dropdown-item "><i class="fas fa-info-circle"></i> Detail</a>
                                              <a href="<?= base_url('keuangan/strukGaji/') . $gaji['id_gaji']; ?>" class="btn btn-warning dropdown-item "><i class="fas fa-print"></i> Cetak Struk</a>
                                              <a href="<?= base_url('keuangan/ubahStatusGaji/') . $gaji['id_gaji']; ?>" class="btn btn-warning dropdown-item "><i class="fas fa-info-circle"></i> Ubah Status</a>
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
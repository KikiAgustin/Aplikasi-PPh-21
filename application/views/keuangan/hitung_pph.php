      <!-- Begin Page Content -->
      <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

          <div class="row">
              <div class="col-lg-8">

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
                              <th scope="col">Kode Pelatih</th>
                              <th scope="col">Nama Pelatih</th>
                              <th scope="col">Jabatan</th>
                              <th scope="col">Aksi</th>
                          </tr>
                      </thead>
                      <?php $i = 1; ?>
                      <?php foreach ($gajiTahunan as $gaji) : ?>
                          <tbody>
                              <tr>
                                  <td><?= $i; ?></td>
                                  <td><?= $gaji['kode_pelatih']; ?></td>
                                  <td><?= $gaji['nama']; ?></td>
                                  <td><?= $gaji['jabatan']; ?></td>
                                  <td>
                                      <div class="dropdown">
                                          <button class="btn btn-primary btn-block dropdown-toggle" type="button" data-toggle="dropdown">
                                              pilih aksi
                                          </button>
                                          <div class="dropdown-menu">
                                              <a href="<?= base_url('keuangan/gajiTahunan/') . $gaji['id_gaji_pertahun']; ?>" class="btn btn-warning dropdown-item "><i class="fas fa-info-circle"></i> Detail</a>
                                              <a href="<?= base_url('keuangan/aksiHitungPPh/') . $gaji['id_gaji_pertahun']; ?>" class="btn btn-warning dropdown-item "><i class="fas fa-share-square"></i> Hitung PPh 21</a>
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
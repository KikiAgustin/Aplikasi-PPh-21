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
                              <th scope="col">Nama</th>
                              <th scope="col">jabatan</th>
                              <th scope="col">Gaji Netto</th>
                          </tr>
                      </thead>
                      <?php $i = 1; ?>
                      <?php foreach ($dataGaji as $gaji) : ?>

                          <tbody>
                              <tr>
                                  <td><?= $i; ?></td>
                                  <td><?= $gaji['nama']; ?></td>
                                  <td><?= $gaji['nama_jabatan']; ?></td>
                                  <td><?= number_format($gaji['total']); ?></td>
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
      <!-- Begin Page Content -->
      <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

          <div class="row">
              <div class="col-lg-12">

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
                              <th scope="col">Status</th>
                              <th scope="col">NPWP</th>
                              <th scope="col">Gaji Netto</th>
                              <th scope="col">PTKP</th>
                              <th scope="col">PKP</th>
                              <th scope="col">Tarif Pajak</th>
                              <th scope="col">PPh 21</th>
                          </tr>
                      </thead>
                      </thead>
                      <?php $i = 1; ?>
                      <?php foreach ($dataPPh as $pph) : ?>
                          <tbody>
                              <tr>
                                  <td><?= $i; ?></td>
                                  <td><?= $pph['kode_pelatih']; ?></td>
                                  <td><?= $pph['nama']; ?></td>
                                  <td><?= $pph['jabatan']; ?></td>
                                  <td><?= $pph['status']; ?></td>
                                  <td><?= $pph['npwp']; ?></td>
                                  <td><?= $pph['gaji_netto']; ?></td>
                                  <td><?= $pph['ptkp']; ?></td>
                                  <td><?= $pph['pkp']; ?></td>
                                  <td><?= $pph['potongan']; ?></td>
                                  <td><?= $pph['pph21']; ?></td>
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
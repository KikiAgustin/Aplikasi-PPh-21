   <!-- Begin Page Content -->
   <div class="container-fluid">

       <!-- Page Heading -->
       <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

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
                           <th scope="col">Nama</th>
                           <th scope="col">Jumlah Melatih</th>
                           <th scope="col">Status</th>
                           <th scope="col">Aksi</th>
                       </tr>
                   </thead>
                   </thead>
                   <?php $i = 1; ?>
                   <?php foreach ($rekapan as $rekap) : ?>
                       <tbody>
                           <tr>
                               <td><?= $i; ?></td>
                               <td><?= $rekap['periode']; ?></td>
                               <td><?= $rekap['kode_pelatih']; ?></td>
                               <td><?= $rekap['nama']; ?></td>
                               <td><?= $rekap['jumlah_melatih']; ?></td>
                               <td><?= $rekap['status']; ?></td>
                               <td>
                                   <div class="dropdown">
                                       <button class="btn btn-primary btn-block dropdown-toggle" type="button" data-toggle="dropdown">
                                           pilih aksi
                                       </button>
                                       <div class="dropdown-menu">
                                           <a href="<?= base_url('keuangan/hitungGajiPelatih/') . $rekap['id_rekapan']; ?>" class="btn btn-warning dropdown-item "><i class="fas fa-edit"></i> Hitung Gaji</a>
                                           <a href="<?= base_url('keuangan/ubahStatusRekapan/') . $rekap['id_rekapan']; ?>" class="btn btn-warning dropdown-item "><i class="fas fa-edit"></i> Ubah Status</a>
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
   <!-- Begin Page Content -->
   <div class="container-fluid">

       <!-- Page Heading -->
       <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
       <a href="<?= base_url('keuangan/tambahAbsen'); ?>" class="mb-4 btn btn-primary"><i class="fas fa-plus"></i> Tambah data Absen dan Rekapan</a>


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
                           <th scope="col">Periode</th>
                           <th scope="col">Kode Pelatih</th>
                           <th scope="col">Nama</th>
                           <th scope="col">Absensi</th>
                           <th scope="col">Uang Makan</th>
                           <th scope="col">Rekapan</th>
                           <th scope="col">Gaji Melatih</th>
                       </tr>
                   </thead>
                   </thead>
                   <?php $i = 1; ?>
                   <?php foreach ($dataAbsen as $absen) : ?>
                       <tbody>
                           <tr>
                               <td><?= $i; ?></td>
                               <td><?= $absen['periode']; ?></td>
                               <td><?= $absen['kode_pelatih']; ?></td>
                               <td><?= $absen['nama']; ?></td>
                               <td><?= $absen['kehadiran']; ?> Hari</td>
                               <td><?= number_format($absen['biaya_absen']); ?></td>
                               <td><?= $absen['jumlah_rekapan']; ?> jam </td>
                               <td><?= number_format($absen['gaji_melatih']); ?></td>

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
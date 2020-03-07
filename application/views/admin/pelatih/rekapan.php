   <!-- Begin Page Content -->
   <div class="container-fluid">

       <!-- Page Heading -->
       <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
       <a href="<?= base_url('admin/tambahRekapanPelatih'); ?>" class="mb-4 btn btn-primary"><i class="fas fa-plus"></i> Tambah data Rekapan</a>


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
                           <th scope="col">Jumlah Melatih</th>
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
                               <td><?= $rekap['jumlah_melatih']; ?></td>
                               <td>
                                   <div class="dropdown">
                                       <button class="btn btn-primary btn-block dropdown-toggle" type="button" data-toggle="dropdown">
                                           pilih aksi
                                       </button>
                                       <div class="dropdown-menu">
                                           <a href="<?= base_url('admin/editDataRekapan/') . $rekap['id_rekapan']; ?>" class="btn btn-warning dropdown-item "><i class="fas fa-edit"></i> Edit</a>
                                           <a href="" class="btn btn-danger dropdown-item" data-toggle="modal" data-target="#hapusModalPelatih"><i class="fas fa-trash-alt"></i> Hapus</a>
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

       <!-- modal hapus rekapan -->
       <div class="modal fade" id="hapusModalPelatih" tabindex="-1" role="dialog" aria-labelledby="hapusModal" aria-hidden="true">
           <div class="modal-dialog" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel">Anda yakin mau menghapus data ini?</h5>
                       <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">×</span>
                       </button>
                   </div>
                   <div class="modal-body">Menghapus data ini membuat data ini hilang selamanya!</div>
                   <div class="modal-footer">
                       <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                       <a class="btn btn-primary" href="<?= base_url('admin/hapusDataRekapan/') . $rekap['id_rekapan']; ?>">Hapus</a>
                   </div>
               </div>
           </div>
       </div>
       <!-- akhir hapus modal rekapan -->




   </div>
   <!-- /.container-fluid -->

   </div>
   <!-- End of Main Content -->
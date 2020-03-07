     <!-- Sidebar -->
     <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

         <!-- Sidebar - Brand -->
         <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin'); ?>">
             <div class="sidebar-brand-text mx-3">CV Maestro Bisa</div>
         </a>

         <!-- Divider -->
         <hr class="sidebar-divider my-0 ">

         <li class="nav-item">
             <a class="nav-link " href="<?= base_url('admin'); ?>">
                 <i class="fas fa-fw fa-home"></i>
                 <span>Dasboard</span></a>
         </li>

         <li class="nav-item">
             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#admin" aria-expanded="true" aria-controls="collapseUtilities">
                 <i class="fas fa-user-cog"></i>
                 <span>Admin</span>
             </a>
             <div id="admin" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                 <div class="bg-white py-2 collapse-inner rounded">
                     <a class="collapse-item" href="<?= base_url('admin/dataSiswa'); ?>">Data Siswa</a>
                     <a class="collapse-item" href="<?= base_url('pelatih'); ?>">Data Pelatih</a>
                     <a class="collapse-item" href="<?= base_url('admin/dataAbsen'); ?>">Rekapan dan Absensi</a>
                 </div>
             </div>
         </li>

         <li class="nav-item">
             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#keuangan" aria-expanded="true" aria-controls="collapseUtilities">
                 <i class="fas fa-file-invoice-dollar"></i>
                 <span>Keuangan</span>
             </a>
             <div id="keuangan" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                 <div class="bg-white py-2 collapse-inner rounded">
                     <a class="collapse-item" href="<?= base_url('keuangan/transaksi'); ?>">Transaksi</a>
                     <a class="collapse-item" href="<?= base_url('keuangan/dataGaji'); ?>">Data Gaji</a>
                 </div>
             </div>
         </li>

         <li class="nav-item">
             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#laporan" aria-expanded="true" aria-controls="collapseUtilities">
                 <i class="far fa-file-alt"></i>
                 <span>Laporan</span>
             </a>
             <div id="laporan" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                 <div class="bg-white py-2 collapse-inner rounded">
                     <a class="collapse-item" href="<?= base_url('keuangan/laporanGaji'); ?>">Laporan Gaji</a>
                     <a class="collapse-item" href="<?= base_url('keuangan/laporanPPh21'); ?>">Laporan PPh 21</a>
                 </div>
             </div>
         </li>

         <li class="nav-item">
             <a class="nav-link " href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                 <i class="fas fa-fw fa-sign-out-alt"></i>
                 <span>Keluar</span></a>
         </li>

         <!-- Divider -->
         <hr class="sidebar-divider d-none d-md-block">

         <!-- Sidebar Toggler (Sidebar) -->
         <div class="text-center d-none d-md-inline">
             <button class="rounded-circle border-0" id="sidebarToggle"></button>
         </div>

     </ul>
     <!-- End of Sidebar -->
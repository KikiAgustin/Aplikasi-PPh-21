<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Siswa</div>
                            <div class=" Count h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah_siswa; ?> Siswa </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah pelatih</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah_pelatih; ?> Pelatih</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-swimmer fa-2x text-gray-300 "></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">pendapatan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?= number_format($jumlah, 0, ',', '.');  ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-money-check-alt fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pengeluaran</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?= number_format($pengeluaran, 0, ',', '.');  ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="far fa-credit-card fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-lg-4">
            <img src="<?= base_url('assets/img/logo_maestro.png'); ?>" alt="Logo Maestro bisa">
        </div>
        <div class="col-lg-8">
            <h1>Perhitungan Pajak Penghasilan Pasal 21</h1>
            <h1>CV Maestro Bisa</h1>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
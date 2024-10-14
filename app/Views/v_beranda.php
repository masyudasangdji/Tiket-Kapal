<?= $this->extend('/layout/template'); ?>
<?= $this->section('isi'); ?>

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Selamat Datang <?= session()->get('nama'); ?></h3>
                </div>
            </div>
        </div>
    </div>
    <?php if (session()->get('level') == "Admin") { ?>
        <div class="row">
            <div class="col-md-12 grid-margin transparent">
                <div class="row">
                    <div class="col-md-4 mb-4 stretch-card">
                        <div class="card card-tale bg-danger">
                            <a href="<?= base_url('kapal'); ?>" class="text-decoration-none text-white">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <p class="mb-4">Data Kapal</p>
                                        <p class="fs-30 mb-2"><?= $jkpl; ?></p>
                                    </div>
                                    <i class="fas fa-ship fa-3x"></i> <!-- Icon kapal -->
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 stretch-card">
                        <div class="card card-dark-blue bg-warning">
                            <a href="<?= base_url('Pengguna'); ?>" class="text-decoration-none text-white">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <p class="mb-4">Data Pengguna</p>
                                        <p class="fs-30 mb-2"><?= $jp; ?></p>
                                    </div>
                                    <i class="fas fa-users fa-3x"></i> <!-- Icon pengguna -->
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 stretch-card">
                        <div class="card card-tale bg-success"> <!-- Menggunakan warna latar belakang hijau -->
                            <a href="<?= base_url('Pesantiket/dtiket'); ?>" class="text-decoration-none text-white">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <p class="mb-4">Data Pemesanan Tiket</p>
                                        <p class="fs-30 mb-2"><?= $jt; ?></p>
                                    </div>
                                    <i class="fas fa-ticket-alt fa-3x"></i> <!-- Icon tiket -->
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 stretch-card">
                        <div class="card card-dark-blue bg-orange">
                            <a href="<?= base_url('rekening'); ?>" class="text-decoration-none text-white">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <p class="mb-4">Rekening Pembayaran</p>
                                        <p class="fs-30 mb-2"><?= $jrek; ?></p>
                                    </div>
                                    <i class="fas fa-money-check-alt fa-3x"></i> <!-- Icon rekening -->
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 stretch-card">
                        <div class="card card-tale bg-info">
                            <a href="<?= base_url('laporan'); ?>" class="text-decoration-none text-white">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <p class="mb-4">Laporan</p>
                                        <p class="fs-30 mb-2"><?= $jt; ?></p>
                                    </div>
                                    <i class="fas fa-file-alt fa-3x"></i> <!-- Icon laporan -->
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } elseif (session()->get('level') == "Pengguna") { ?>
    <div class="row">
        <div class="col-md-4 mb-4 stretch-card">
            <div class="card card-tale bg-success"> <!-- Menggunakan warna latar belakang hijau -->
                <a href="<?= base_url('pesantiket/riwayat'); ?>" class="text-decoration-none text-white">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <p class="mb-4">Data Pemesanan Tiket</p>
                        </div>
                        <i class="fas fa-ticket-alt fa-3x"></i> <!-- Icon tiket -->
                    </div>
                </a>
            </div>
        </div>
        <!-- Tambahkan card lainnya di sini dengan struktur yang serupa -->
    </div>
<?php } ?>
</div><!-- content-wrapper ends -->

<?= $this->endSection(); ?>

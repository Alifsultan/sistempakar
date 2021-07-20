<?= $this->extend('auth/template/indextemplate'); ?>

<?= $this->section('page-content'); ?>
<!-- Services-->
<br>
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Services</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-2">
                    <i class="fa fa-question-circle fa-5x"></i>
                    <h3 class="h4 mb-2">Informasi</h3>
                    <p class="text-muted mb-0">Pengguna mendapatkan informasi singkat mengenai beberapa gangguan kesehatan mental dan informasi mengenai tips menjaga Kesehatan Mental </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-2">
                    <i class="fa fa-user fa-5x"></i>
                    <h3 class="h4 mb-2">Login</h3>
                    <p class="text-muted mb-0">Pengguna juga diberikan fasilitas Login untuk melakukan konsultasi lebih lanjut mengenai Kesehatan Mental.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-2">
                    <i class="fa fa-user-md fa-5x"></i>
                    <h3 class="h4 mb-2">Konsultasi</h3>
                    <p class="text-muted mb-0">Pengguna dapat melakukan konsultasi mengenai masalah atau gejala yang dialami dalam kesehatan Mental pasien yang mengganggu aktifitas pasien.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-2">
                    <i class="fa fa-heartbeat fa-5x"></i>
                    <h3 class="h4 mb-2">Saran</h3>
                    <p class="text-muted mb-0">Pasien akan mendapatkan saran awal atau penanganan pertama auntuk mencegah gangguan Kesehatan Mental Semakin memburuk. </p>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>
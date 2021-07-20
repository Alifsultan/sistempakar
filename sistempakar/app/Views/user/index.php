<?= $this->extend('auth/template/indextemplate'); ?>

<?= $this->section('page-content'); ?>

<!-- PENTING -->
<!-- Begin Page Content -->
<br>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">My Profile</h1>

    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">

            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= user()->username; ?></span></h5>
                    <h5 class="card-title"><span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= user()->email; ?></span></h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
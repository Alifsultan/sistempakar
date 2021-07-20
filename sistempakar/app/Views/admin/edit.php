<?= $this->extend('auth/template/indextemplate'); ?>

<?= $this->section('page-content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Data User</h1>

    <div class="row">
        <div class="col-lg">
            <form action="<?= base_url('admin/save/'); ?>" method="POST">
                <div class="col-sm-10">
                    <input type="hidden" class="form-control" id="Id" name="id" value="<?= $admin['id']; ?>" readonly>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" value="<?= $admin['email']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="username" name="username" value="<?= $admin['username']; ?>">
                        
                    </div>
                </div>
                <div class="form-group row  justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="<?= base_url('admin/index') ?>" type="submit" class="btn btn-info">Kembali</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div> <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?= $this->endSection(); ?>
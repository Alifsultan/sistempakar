<?= $this->extend('auth/template/indextemplate'); ?>

<?= $this->section('page-content'); ?>
<!-- PENTING -->
<!-- Begin Page Content -->
<br>
<div class="container">
    <div class="card-body">
    <h1 class="h3 ">User List</h1>
    <div class="row">
        <div class="col-lg-10">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $user->username; ?></td>
                            <td><?= $user->email; ?></td>
                            <td><?= $user->name; ?></td>
                            <td>
                            <a href="<?= base_url('admin/detail/' . $user->userid);?>" class="btn btn-info">detail</a>
                            
                            <!-- update -->
                            <a href="<?= base_url('admin/update/' . $user->userid);?>" class="btn btn-info">update</a>
                            
                            <!-- hapus -->
                            <a href="<?= base_url('admin/delete/' . $user->userid);?>" class="btn btn-info">delete</a>
                            
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
<?= $this->endSection(); ?>
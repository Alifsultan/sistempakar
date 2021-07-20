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

                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#free">
                                Hapus
                            </button>
                                <div class="modal fade" id="free" tabindex="-1" role="dialog" aria-labelledby="free123" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <!-- <h5 class="modal-title" id="free123">Yakin Hapus?</h5> -->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <form action="<?= base_url('admin/delete/'. $user->userid); ?>" method="POST">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <div class="modal-body bg-dark">
                                                <div class="avatar">
                                                    <i class="delicon far fa-trash-alt"></i>
                                                    <i class="book fas fa-book-open"></i>
                                                </div>
                                                <div class="modal-body">
                                                    <h5>Apakah anda yakin akan menghapus data ini ?</h5>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="button-class">
                                                    <button type="submit" name="delete" class="btn btn-primary">
                                                        <i class="fas fa-check"></i>&nbsp;&nbsp;Hapus
                                                    </button>

                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" class="button btn btn-danger">
                                                        <i class="fas fa-times"></i>&nbsp;&nbsp;Batal
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            </td>
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
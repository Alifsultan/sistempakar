<?= $this->extend('auth/template/index'); ?>

<?= $this->section('content'); ?>
<link rel="stylesheet" href="<?= base_url('css/templatestyle.css') ?>">


<br>
    <div class="row">
        <div class="col">
            <div class="login">
                <div class="avatar">
                    <i class="ico fa fa-user"></i>
                </div>
                <div class="card-body">
                                <div class="text-center">
                                    <h1 class="h4"><?= lang('Auth.register') ?></h1>
                                </div>
                                <br>
                                <?= view('Myth\Auth\Views\_message_block') ?>
                                <br>

                                <form action="<?= route_to('register') ?>" method="post" class="user">
                                    <?= csrf_field() ?>


                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control" <?php if (session('errors.firstname')) : ?>is-invalid<?php endif ?> name="firstname" placeholder="<?= lang('Auth.firstname') ?>" value="<?= old('firstname') ?>">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" <?php if (session('errors.firstname')) : ?>is-invalid<?php endif ?> name="lastname" placeholder="<?= lang('Auth.lastname') ?>" value="<?= old('lastname') ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" <?php if (session('errors.username')) : ?>is-invalid<?php endif ?> name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" <?php if (session('errors.email')) : ?>is-invalid<?php endif ?> name="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                                        <small id="emailHelp" class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small>
                                    </div>
                                    <!-- 
                                    <div class="form-group">
                                        <input type="alamat" class="form-control form-control-user" id="exampleInputAlamat" placeholder="Alamat">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="exampleFirstTempat" placeholder="Tempat Lahir">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="date" class="form-control form-control-user" id="exampleLastTanggal" placeholder="Tanggal">
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                        <label for="password"><?= lang('Auth.password') ?></label>
                                        <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <label for="pass_confirm"><?= lang('Auth.repeatPassword') ?></label>
                                        <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        <?= lang('Auth.register') ?>
                                    </button>
                                    <hr>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= route_to('login') ?>"><?= lang('Auth.alreadyRegistered') ?><?= lang('Auth.signIn') ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
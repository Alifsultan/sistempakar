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
                        <h1 class="h4"><?= lang('Auth.loginTitle') ?></h1>
                    </div>

                        <?= view('Myth\Auth\Views\_message_block') ?>

                                    <form action="<?= route_to('login') ?>" method="post">
                                        <?= csrf_field() ?>

                                        <?php if ($config->validFields === ['email']) : ?>
                                            <div class="form-group">
                                                <label for="login"><?= lang('Auth.email') ?></label>
                                                <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>">
                                                <div class="invalid-feedback">
                                                    <?= session('errors.login') ?>
                                                </div>
                                            </div>
                                        <?php else : ?>
                                            <div class="form-group">
                                                <label for="login"><?= lang('Auth.emailOrUsername') ?></label>
                                                <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                                                <div class="invalid-feedback">
                                                    <?= session('errors.login') ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <div class="form-group">
                                            <label for="password"><?= lang('Auth.password') ?></label>
                                            <input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
                                            <div class="invalid-feedback">
                                                <?= session('errors.password') ?>
                                            </div>
                                        </div>

                                        <br>

                                        <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;<?= lang('Auth.loginAction') ?></button>
                                    </form>

                                    <hr>
                                    <br>

                                    <?php if ($config->allowRegistration) : ?>
                                        <p><a href="<?= route_to('register') ?>"><?= lang('Auth.needAnAccount') ?></a></p>
                                    <?php endif; ?>
                                    <?php if ($config->activeResetter) : ?>
                                        <p><a href="<?= route_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= $this->endSection() ?>
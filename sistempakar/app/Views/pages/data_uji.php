<!-- Begin Page Content -->
<div class="container-fluid">

    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Uji<strong> berhasil </strong> <?= $this->session->flashdata('flash'); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?= form_error('pernyataan', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= form_error('id_kuesioner', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <form action="<?= base_url(); ?>data_uji_user/tambahDataUji" method="post">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Pernyataan</th>
                            <th scope="col">Tidak Sesuai</th>
                            <th scope="col">Kadang-Kadang</th>
                            <th scope="col">Lumayan Sering</th>
                            <th scope="col">Sering Sekali</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($kuesioner as $p) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <input type="hidden" name="id_kuesioner" value="<?= $p['id_kuesioner'] ?>"> </td>

                                <td><?= $p['pernyataan'] ?> </td>

                                <td>
                                    <input type="radio" id="<?= $p['id_kuesioner'] ?>" name="<?= $p['id_kuesioner'] ?>" value="0">
                                </td>
                                <td>
                                    <input type="radio" id="<?= $p['id_kuesioner'] ?>" name="<?= $p['id_kuesioner'] ?>" value="1">
                                </td>
                                <td>
                                    <input type="radio" id="<?= $p['id_kuesioner'] ?>" name="<?= $p['id_kuesioner'] ?>" value="2">
                                </td>
                                <td>
                                    <input type="radio" id="<?= $p['id_kuesioner'] ?>" name="<?= $p['id_kuesioner'] ?>" value="3">
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>


                <div class="col-sm-10">

                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
</div> <!-- /.container-fluid -->
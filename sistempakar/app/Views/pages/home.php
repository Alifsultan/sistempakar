<div class="banner">
    <div class="app-text">
        <h1>
            Website<br />
            Sistem Pakar Diagnosa Dini Gangguan Kesehatan Mental
        </h1>
        <p>
            Sistem Pakar Diagnosa Dini Gangguan Kesehatan Mental berbasis website dirancang untuk membantu pasien dalam mengetahui diagnosa dini gangguan kesehatan mental.
            <br />
            Diharapkan pasien lebih terbantu dalam penanganan galam gangguan kesehatan mental yang dialami dengan diberikannya saran awal.
        </p>
        <div class="play-btn">
            <div class="play-btn-inner">
                <a href="<?= base_url('home/diagnosa'); ?>"><i class="fa fa-play"></i></a>
            </div>
            <small><b><a style="text-decoration: none; color: #19dafa;" href="<?= base_url('home/diagnosa'); ?>">Mulai Konsultasi</a></b></small>
        </div>
    </div>
    <div class="app-picture">
        <img class="mb-4" src="/logodepan.png" class="img-thumbnail">
    </div>
</div>
<div class="social-icons">
    <ul>
        <li>
            <a href="#"><i class="fa fa-github"></i></a>
        </li>
        <li>
            <a href="#"><i class="fa fa-twitter"></i></a>
        </li>
        <li>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </li>
        <li>
            <a href="#"><i class="fa fa-whatsapp"></i></a>
        </li>
    </ul>
</div>
</body>

</html>

<form action="<?= base_url('admin/update/'.$user['id']); ?>" method="POST">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="UPDATE">
                                            <div class="modal-body bg-dark">
                                                <div class="avatar">
                                                    <i class="edicon far fa-edit"></i>
                                                    <i class="book fas fa-book-open"></i>
                                                </div>
                                                <div class="form-group">
                                                    <div class="box-registry">
                                                        <i class="fas fa-envelope-open-text"></i>
                                                        <input type="email" placeholder="Email" name="email" value="<?= $dt['email']; ?>" autofocus required>
                                                    </div>

                                                    <div class="box-registry">
                                                        <i class="fas fa-child"></i>
                                                        <input type="name" placeholder="Nama Lengkap" name="nama" value="<?= $dt['nama']; ?>" required>
                                                    </div>

                                                    <div class="box-registry">
                                                        <i class="fas fa-building"></i>
                                                        <input type="text" placeholder="Alamat" name="alamat" value="<?= $dt['alamat']; ?>" required>
                                                    </div>

                                                    <div class="box-registry">
                                                        <i class="fab fa-whatsapp"></i>
                                                        <input type="text" placeholder="No. KTP" name="noktp" value="<?= $dt['noktp']; ?>" required>
                                                    </div>

                                                    <div class="box-registry">
                                                        <i class="fab fa-whatsapp"></i>
                                                        <input type="text" placeholder="Umur" name="umur" value="<?= $dt['umur']; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="button-class">
                                                    <button type="submit" name="update" class="btn btn-primary">
                                                        <i class="fas fa-check"></i>&nbsp;&nbsp;Ubah
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
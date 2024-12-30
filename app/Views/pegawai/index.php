<?= $this->include('layout/header') ?>
<?= $this->include('layout/menu') ?>

<body>
    <div class="br-pagetitle">
        <div class="left-image">
            <img src="assets/images/welcome.png" alt="welcome">
        </div>
        <h4>Data Pegawai</h4>
        <div class="right-image">
            <img src="assets/images/img_rightchair.png" alt="meja">
        </div>
    </div>
</body>
<!-- End br-pagetitle -->
<!-- br-pageboody -->
<div class="br-pagebody custom">
    <div class="row">
        <div class="col-md-12">
            <div class="card bg-light mb-3 shadow p-0 mb-5 bg-white">
                <div class="card-body">
                    <form action="/tambah-pengguna" method="POST" enctype="multipart/form-data">
                        <div class="text-right mb-3">
                            <button type="submit" class="btn btn-primary">Tambahkan Pengguna</button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Pegawai</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Posisi</th>
                                        <th>Tanggal Mulai Kerja</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($pegawai_c as $dt_pegawai) { ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td>
                                                <input type="hidden" name="peg_code[]" class="form-control" value="<?= $dt_pegawai['peg_code']; ?>" readonly>
                                                <input type="hidden" name="peg_name[]" class="form-control" value="<?= $dt_pegawai['peg_name']; ?>" readonly>
                                                <?= $dt_pegawai['peg_code']; ?>
                                            </td>
                                            <td><?= $dt_pegawai['peg_nik']; ?></td>
                                            <td><?= $dt_pegawai['peg_name']; ?></td>
                                            <td><?= $dt_pegawai['jab_name']; ?></td>
                                            <td><?= $dt_pegawai['posi_name']; ?></td>
                                            <td><?= date('d-M-Y', strtotime($dt_pegawai['peg_sdate'])); ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- content-wrapper ends -->

<?= $this->include('layout/footer') ?>
<?= $this->include('layout/header') ?>
<?= $this->include('layout/menu') ?>

<body>
    <div class="br-pagetitle">
        <div class="left-image">
            <img src="assets/images/welcome.png" alt="welcome">
        </div>
        <h4>Data Pengguna</h4>
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
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Level</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($pengguna_c as $dt_pengguna) { ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $dt_pengguna['name']; ?></td>
                                        <td><?= $dt_pengguna['username']; ?></td>
                                        <td><?= $dt_pengguna['level']; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- content-wrapper ends -->

<?= $this->include('layout/footer') ?>
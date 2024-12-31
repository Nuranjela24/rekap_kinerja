<body>
  <div class="br-pagetitle">
    <div class="left-image">
      <img src="assets/images/welcome.png" alt="welcome">
    </div>
    <h4>Data Slip Gaji</h4>
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
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Jabatan</th>
                  <th>Periode</th>
                  <th>Tanggal Mulai Kerja</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1;
                foreach ($slipgaji_c as $dt_slipgaji) { ?>
                  <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $dt_slipgaji['peg_nik']; ?></td>
                    <td><?= $dt_slipgaji['peg_name']; ?></td>
                    <td><?= $dt_slipgaji['jab_name']; ?></td>
                    <td>
                      <?= preg_replace('/^\d+\s+\d+#GAJI BULAN\s+/', '', $dt_slipgaji['periode']); ?>
                    </td>
                    <td><?= date('d-M-Y', strtotime($dt_slipgaji['peg_sdate'])); ?></td>
                    <td>
                      <a href="/data-slip-gaji-detail/<?= $dt_slipgaji['slip_gaji_id']; ?>" class="btn btn-primary btn-sm">Detail</a>
                    </td>
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
<!-- partial:partials/_footer.html -->
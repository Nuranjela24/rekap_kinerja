<body>
  <div class="br-pagetitle">
    <div class="left-image">
      <img src="assets/images/welcome.png" alt="welcome">
    </div>
    <h4>Data Penilaian</h4>
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
          <?php
          if (session('level') != 'admin') {
          ?>
            <div class="mb-3">
              <a href="/data-penilaian/tambah" class="btn btn-primary">Tambah Penilaian</a>
            </div>
          <?php
          }
          ?>
          <?php
          if (session('level') == 'admin') {
          ?>
            <div class="mb-6">
              <form action="/data-penilaian/cetak" method="post">
                <div class="row">
                  <div class="col-md-3">
                    <label for="tanggal_penilaian">Tanggal Penilaian</label>
                    <input type="date" class="form-control input-date" id="tanggal_penilaian" name="tanggal_penilaian" required>
                  </div>
                  <div class="col-md-3">
                    <label for="id_bidang">Unit Kerja</label>
                    <select class="form-control form-control-sm search" id="id_bidang" name="id_bidang" required>
                      <option value="Semua">Semua Unit Kerja</option>
                      <?php foreach ($bidang as $row): ?>
                        <option value="<?= $row['id_bidang'] ?>"><?= $row['nama_bidang'] ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <br>
                    <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-print"></i> Cetak</button>
                  </div>
                </div>
              </form>
            </div>
          <?php
          }
          if (session('level') == 'kepala unit') {
            ?>
              <div class="mb-6">
                <form action="/data-penilaian/cetak" method="post">
                  <div class="row">
                    <div class="col-md-3">
                      <label for="tanggal_penilaian">Tanggal Penilaian</label>
                      <input type="date" class="form-control input-date" id="tanggal_penilaian" name="tanggal_penilaian" required>
                    </div>
                    <div class="col-md-2">
                      <br>
                      <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-print"></i> Cetak</button>
                    </div>
                  </div>
                </form>
              </div>
            <?php
            }
          ?>
          <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>NIK</th>
                  <th>Karyawan</th>
                  <th>Unit Kerja</th>
                  <th>Tanggal</th>
                  <th>Nilai Akhir</th>
                  <?php
                  if (session('level') == 'admin') {
                  ?>
                    <td>Point</td>
                  <?php
                  }
                  ?>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($penilaian as $row):
                  $hasil = 0;
                  if ($row['poin'] >= 1 && $row['poin'] <= 49) {
                    $hasil = 0;
                  } else if ($row['poin'] >= 50 && $row['poin'] <= 69) {
                    $hasil = 1;
                  } else if ($row['poin'] >= 70 && $row['poin'] <= 84) {
                    $hasil = 2;
                  } else if ($row['poin'] >= 85 && $row['poin'] <= 100) {
                    $hasil = 3;
                  }
                ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['nik'] ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['nama_bidang'] ?></td>
                    <td><?= $row['tanggal'] ?></td>
                    <td><?= $row['poin'] ?></td>
                    <?php
                    if (session('level') == 'admin') {
                    ?>
                      <td><?= $hasil ?></td>
                    <?php
                    }
                    ?>
                    <td>
                      <!-- <a href="/data-penilaian/edit/<?= $row['id_penilaian'] ?>" class="btn btn-warning btn-sm">Edit</a> -->
                      <a href="/data-penilaian/delete/<?= $row['id_penilaian'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
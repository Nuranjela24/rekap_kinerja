<body>
  <div class="br-pagetitle">
    <div class="left-image">
      <img src="assets/images/welcome.png" alt="welcome">
    </div>
    <h4>Data Karyawan</h4>
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
          <div class="mb-3">
            <a href="/tambah-karyawan/tambah" class="btn btn-primary">Tambah Karyawan</a>
          </div>
          <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Jabatan</th>
                  <th>Tanggal Bekerja</th>
                  <th>Unit Kerja</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($karyawan as $row): ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['nik'] ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['jabatan'] ?></td>
                    <td><?= $row['tanggal_bekerja'] ?></td>
                    <td><?= $row['nama_bidang'] ?></td>
                    <td>
                      <a href="/karyawan/edit/<?= $row['id_karyawan'] ?>" class="btn btn-warning btn-sm">Edit</a>
                      <a href="/karyawan/delete/<?= $row['id_karyawan'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
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
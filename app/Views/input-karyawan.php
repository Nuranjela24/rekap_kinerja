<body>
  <div class="br-pagetitle">
    <div class="left-image">
      <img src="/assets/images/welcome.png" alt="welcome">
    </div>
    <h4>Input Data Karyawan <?php echo strtoupper(session('username')) ?></h4>
    <div class="right-image">
      <img src="/assets/images/img_rightchair.png" alt="meja">
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
          <form id="form_karyawan" method="post" action="/tambah-karyawan/create">
            <?= csrf_field() ?>

            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">NIK</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nik" name="nik" maxlength="16" onkeypress="return hanyaAngka(event)"  required>
              </div>
            </div>

            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama" onkeypress="return hanyaHuruf(event)" required>
              </div>
            </div>

            <div class="form-group row">
              <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
              <div class="col-sm-10">
                <select class="form-control form-control-sm search" id="jabatan" name="jabatan" required>
                  <option value="">Pilih Jabatan</option>
                  <option value="Kepala Ruangan">Kepala Ruangan</option>
                  <option value="Perawat Pelaksana">Perawat Pelaksana</option>
                  <option value="Katim">Katim</option>
                  <option value="Kajaga">Kajaga</option>
                  <option value="Anggota">Anggota</option>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="tanggal_bekerja" class="col-sm-2 col-form-label">Tanggal Mulai Bekerja</label>
              <div class="col-sm-10">
                <input type="date" class="form-control" id="tanggal_bekerja" name="tanggal_bekerja" required>
              </div>
            </div>

            <div class="form-group row">
              <label for="id_bidang" class="col-sm-2 col-form-label">Unit Kerja</label>
              <div class="col-sm-10">
                <select class="form-control form-control-sm search" id="id_bidang" name="id_bidang" readonly required>
                  <option value="">Pilih Unit Kerja</option>
                  <?php foreach($bidang as $b): ?>
                    <option <?php echo $id_bidang==$b['id_bidang']?'selected':'' ?> value="<?= $b['id_bidang'] ?>"><?= $b['nama_bidang'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
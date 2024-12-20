<body>
  <div class="br-pagetitle">
    <div class="left-image">
      <img src="/assets/images/welcome.png" alt="welcome">
    </div>
    <h4>Penilaian Karyawan</h4>
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
          <form id="form_karyawan" method="post" action="/data-penilaian/create">
            <?= csrf_field() ?>
            <div class="form-group row">
              <label for="id_karyawan" class="col-sm-2 col-form-label">Pilih Nama Karyawan</label>
              <div class="col-sm-10">
                <select class="form-control form-control-sm search" id="id_karyawan" name="id_karyawan" required>
                  <option value="">Pilih Karyawan</option>
                  <?php foreach ($karyawan as $k): ?>
                    <option value="<?= $k['id_karyawan'] ?>"><?= $k['nik'].' - '.$k['nama'] ?></option>
                  <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">
                  Data wajib diisi.
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="tanggal" class="col-sm-2 col-form-label">Pilih Tanggal</label>
              <div class="col-sm-10">
                <input type="date" name="tanggal" id="nk_bukti_date"
                  class="form-control input-date" autocomplete="off" required>
              </div>
              <div class="invalid-feedback" id="nk_bukti_datecek">
                <span style="color: red;">Data wajib diisi.</span>
              </div>
            </div>
            <div id="accordion">
              <!-- Disiplin -->
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0" data-toggle="collapse"
                    data-target="#collapse00001" aria-expanded="true"
                    aria-controls="collapse00001">
                    <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseDisiplin" aria-expanded="true" aria-controls="collapseDisiplin">
                    DISIPLIN
                  </button>
                    </div>
                  </h5>
                </div>
                <br>
                <div id="collapseDisiplin" class="collapse show" aria-labelledby="headingDisiplin" data-parent="#accordion">
                <div id="collapse00001" class="collapse show"
                  aria-labelledby="heading00001" data-parent="#accordion">
                  <div class="card-body" style="border: 2px solid #ddd; border-radius: 8px; padding: 15px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); margin-bottom: 10px;">
                    <div class="form-group row border-custom">
                      <label for=""
                        class="col-sm-7 col-form-label">1. Selalu Berpenampilan Rapi</label>
                      <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                        <strong>5</strong></label>
                      <div class="col-sm-2">
                        <input type="number" name="nilai_d_1" max="5" class="form-control" placeholder="Input Nilai" autocomplete="off" required>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="collapse00001" class="collapse show"
                  aria-labelledby="heading00001" data-parent="#accordion">
                  <div class="card-body" style="border: 2px solid #ddd; border-radius: 8px; padding: 15px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); margin-bottom: 10px;">
                    <div class="form-group row border-custom">
                      <label for=""
                        class="col-sm-7 col-form-label">2. Membudayakan Cuci Tangan 6 Langkah</label>
                      <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                        <strong>5</strong></label>
                      <div class="col-sm-2">
                        <input type="number" name="nilai_d_2" max="5"
                          class="form-control" placeholder="Input Nilai"
                          autocomplete="off" required>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="collapse00001" class="collapse show"
                  aria-labelledby="heading00001" data-parent="#accordion">
                  <div class="card-body" style="border: 2px solid #ddd; border-radius: 8px; padding: 15px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); margin-bottom: 10px;">
                    <div class="form-group row border-custom">
                      <label for=""
                        class="col-sm-7 col-form-label">3. Ketaatan terhadap Peraturan Rumah Sakit</label>
                      <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                        <strong>10</strong></label>
                      <div class="col-sm-2">
                        <input type="number" name="nilai_d_3" max="10"
                          class="form-control" placeholder="Input Nilai"
                          autocomplete="off" required>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="collapse00001" class="collapse show"
                  aria-labelledby="heading00001" data-parent="#accordion">
                  <div class="card-body" style="border: 2px solid #ddd; border-radius: 8px; padding: 15px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); margin-bottom: 10px;">
                    <div class="form-group row border-custom">
                      <label for=""
                        class="col-sm-7 col-form-label">4. Hadir Di Unit Kerja Tepat Waktu</label>
                      <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                        <strong>5</strong></label>
                      <div class="col-sm-2">
                        <input type="number" name="nilai_d_4" max="5"
                          class="form-control" placeholder="Input Nilai"
                          autocomplete="off" required>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="collapse00001" class="collapse show"
                  aria-labelledby="heading00001" data-parent="#accordion">
                  <div class="card-body" style="border: 2px solid #ddd; border-radius: 8px; padding: 15px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); margin-bottom: 10px;">
                    <div class="form-group row border-custom">
                      <label for=""
                        class="col-sm-7 col-form-label">5. Memakai Seragam Dan Atribut Sesuai Ketentuan</label>
                      <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                        <strong>5</strong></label>
                      <div class="col-sm-2">
                        <input type="number" name="nilai_d_5" max="5"
                          class="form-control" placeholder="Input Nilai"
                          autocomplete="off" required>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="collapse00001" class="collapse show"
                  aria-labelledby="heading00001" data-parent="#accordion">
                  <div class="card-body" style="border: 2px solid #ddd; border-radius: 8px; padding: 15px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); margin-bottom: 10px;">
                    <div class="form-group row border-custom">
                      <label for=""
                        class="col-sm-7 col-form-label">6. Pulang Sesuai Aturan Jam Pulang</label>
                      <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                        <strong>5</strong></label>
                      <div class="col-sm-2">
                        <input type="number" name="nilai_d_6" max="5"
                          class="form-control" placeholder="Input Nilai"
                          autocomplete="off" required>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="collapse00001" class="collapse show"
                  aria-labelledby="heading00001" data-parent="#accordion">
                  <div class="card-body" style="border: 2px solid #ddd; border-radius: 8px; padding: 15px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); margin-bottom: 10px;">
                    <div class="form-group row border-custom">
                      <label for=""
                        class="col-sm-7 col-form-label">7. Tidak Pernah Membolos Pada Jam Kerja</label>
                      <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                        <strong>5</strong></label>
                      <div class="col-sm-2">
                        <input type="number" name="nilai_d_7" max="5"
                          class="form-control" placeholder="Input Nilai"
                          autocomplete="off" required>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0" data-toggle="collapse"
                    data-target="#collapse00001" aria-expanded="true"
                    aria-controls="collapse00001">
                    <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseKinerja" aria-expanded="true" aria-controls="collapseKinerja">
                      KINERJA PELAYANAN
                    </button>
                    </div>
                  </h5>
                </div>
                <br>
                <div id="collapseKinerja" class="collapse show" aria-labelledby="headingKinerja" data-parent="#accordion">
                <div id="collapse00001" class="collapse show"
                  aria-labelledby="heading00001" data-parent="#accordion">
                  <div class="card-body" style="border: 2px solid #ddd; border-radius: 8px; padding: 15px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); margin-bottom: 10px;">
                    <div class="form-group row border-custom">
                      <label for=""
                        class="col-sm-7 col-form-label">8. Bertanggung jawab terhadap pekerjaan </label>
                      <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                        <strong>10</strong></label>
                      <div class="col-sm-2">
                        <input type="number" name="nilai_d_8" max="10"
                          class="form-control" placeholder="Input Nilai"
                          autocomplete="off" required>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="collapse00001" class="collapse show"
                  aria-labelledby="heading00001" data-parent="#accordion">
                  <div class="card-body" style="border: 2px solid #ddd; border-radius: 8px; padding: 15px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); margin-bottom: 10px;">
                    <div class="form-group row border-custom">
                      <label for=""
                        class="col-sm-7 col-form-label">9. Membuat laporan pekerjaan kepada atasan</label>
                      <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                        <strong>5</strong></label>
                      <div class="col-sm-2">
                        <input type="number" name="nilai_d_9" max="5"
                          class="form-control" placeholder="Input Nilai"
                          autocomplete="off" required>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="collapse00001" class="collapse show"
                  aria-labelledby="heading00001" data-parent="#accordion">
                  <div class="card-body" style="border: 2px solid #ddd; border-radius: 8px; padding: 15px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); margin-bottom: 10px;">
                    <div class="form-group row border-custom">
                      <label for=""
                        class="col-sm-7 col-form-label">10. Menyelesaikan tugas tepat waktu</label>
                      <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                        <strong>5</strong></label>
                      <div class="col-sm-2">
                        <input type="number" name="nilai_d_10" max="5"
                          class="form-control" placeholder="Input Nilai"
                          autocomplete="off" required>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="collapse00001" class="collapse show"
                  aria-labelledby="heading00001" data-parent="#accordion">
                  <div class="card-body" style="border: 2px solid #ddd; border-radius: 8px; padding: 15px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); margin-bottom: 10px;">
                    <div class="form-group row border-custom">
                      <label for=""
                        class="col-sm-7 col-form-label">11. Mengarsipkan surat-surat penting dengan rapi</label>
                      <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                        <strong>5</strong></label>
                      <div class="col-sm-2">
                        <input type="number" name="nilai_d_11" max="5"
                          class="form-control" placeholder="Input Nilai"
                          autocomplete="off" required>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="collapse00001" class="collapse show"
                  aria-labelledby="heading00001" data-parent="#accordion">
                  <div class="card-body" style="border: 2px solid #ddd; border-radius: 8px; padding: 15px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); margin-bottom: 10px;">
                    <div class="form-group row border-custom">
                      <label for=""
                        class="col-sm-7 col-form-label">12. Tidak pernah melakukan pelanggaran tata tertib unit kerja</label>
                      <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                        <strong>5</strong></label>
                      <div class="col-sm-2">
                        <input type="number" name="nilai_d_12" max="5"
                          class="form-control" placeholder="Input Nilai"
                          autocomplete="off" required>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="collapse00001" class="collapse show"
                  aria-labelledby="heading00001" data-parent="#accordion">
                  <div class="card-body" style="border: 2px solid #ddd; border-radius: 8px; padding: 15px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); margin-bottom: 10px;">
                    <div class="form-group row border-custom">
                      <label for=""
                        class="col-sm-7 col-form-label">13. Tidak pernah konflik dengan rekan kerja satu unit</label>
                      <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                        <strong>5</strong></label>
                      <div class="col-sm-2">
                        <input type="number" name="nilai_d_13" max="5"
                          class="form-control" placeholder="Input Nilai"
                          autocomplete="off" required>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="collapse00001" class="collapse show"
                  aria-labelledby="heading00001" data-parent="#accordion">
                  <div class="card-body" style="border: 2px solid #ddd; border-radius: 8px; padding: 15px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); margin-bottom: 10px;">
                    <div class="form-group row border-custom">
                      <label for=""
                        class="col-sm-7 col-form-label">14. Bisa bergaul dengan baik </label>
                      <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                        <strong>5</strong></label>
                      <div class="col-sm-2">
                        <input type="number" name="nilai_d_14" max="5"
                          class="form-control" placeholder="Input Nilai"
                          autocomplete="off" required>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="collapse00001" class="collapse show"
                  aria-labelledby="heading00001" data-parent="#accordion">
                  <div class="card-body" style="border: 2px solid #ddd; border-radius: 8px; padding: 15px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); margin-bottom: 10px;">
                    <div class="form-group row border-custom">
                      <label for=""
                        class="col-sm-7 col-form-label">15. Kepatuhan terhadap SOP RS </label>
                      <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                        <strong>5</strong></label>
                      <div class="col-sm-2">
                        <input type="number" name="nilai_d_15" max="5"
                          class="form-control" placeholder="Input Nilai"
                          autocomplete="off" required>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
                </div>
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0" data-toggle="collapse"
                    data-target="#collapse00001" aria-expanded="true"
                    aria-controls="collapse00001">
                    <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseLoyalitas" aria-expanded="true" aria-controls="collapseLoyalitas">
                      LOYALITAS
                    </button>
                    </div>
                  </h5>
                </div>
                <br>
                <div id="collapseLoyalitas" class="collapse show" aria-labelledby="headingLoyalitas" data-parent="#accordion">
                <div id="collapse00001" class="collapse show"
                  aria-labelledby="heading00001" data-parent="#accordion">
                  <div class="card-body" style="border: 2px solid #ddd; border-radius: 8px; padding: 15px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); margin-bottom: 10px;">
                    <div class="form-group row border-custom">
                      <label for=""
                        class="col-sm-7 col-form-label">16. Kesetiaan terhadap rumah sakit</label>
                      <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                        <strong>10</strong></label>
                      <div class="col-sm-2">
                        <input type="number" name="nilai_d_16" max="10"
                          class="form-control" placeholder="Input Nilai"
                          autocomplete="off" required>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="collapse00001" class="collapse show"
                  aria-labelledby="heading00001" data-parent="#accordion">
                  <div class="card-body" style="border: 2px solid #ddd; border-radius: 8px; padding: 15px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); margin-bottom: 10px;">
                    <div class="form-group row border-custom">
                      <label for=""
                        class="col-sm-7 col-form-label">17. Bersedia menggunakan tim kerja yang berhalangan/kerelaan dalam perubahan jadwal dinas </label>
                      <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                        <strong>5</strong></label>
                      <div class="col-sm-2">
                        <input type="number" name="nilai_d_17" max="5"
                          class="form-control" placeholder="Input Nilai"
                          autocomplete="off" required>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
              <div class="form-group row mt-4">
                <div class="col-sm-12 text-right">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </div>
          </form>
        </div>
      </div>
    </div>
    <script>
    // Menambahkan event listener untuk setiap input nilai
    document.querySelectorAll('input[type="number"]').forEach(input => {
      input.addEventListener('input', function() {
        const max = parseInt(this.max);
        if (this.value > max) {
          this.value = max; // Set nilai ke nilai maksimal jika melebihi
          alert(`Nilai tidak boleh lebih dari ${max}`);
        }
      });
    });
  </script>
  <script>
  // Ensure Bootstrap Collapse works
  document.querySelectorAll('[data-toggle="collapse"]').forEach(button => {
    button.addEventListener('click', function () {
      const target = this.getAttribute('data-target');
      const content = document.querySelector(target);
      if (content.classList.contains('show')) {
        content.classList.remove('show');
      } else {
        content.classList.add('show');
      }
    });
  });
</script>
 
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
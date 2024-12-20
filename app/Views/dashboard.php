
          <body>
            <div class="br-pagetitle">
              <div class="left-image">
                <img src="assets/images/welcome.png" alt="welcome">
              </div>
              <h4>Penilaian Karyawan ICU</h4>
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
                    <form id="form_penilaian">
                      <input type="hidden" name="csrf_test_name" value="38719e7cbd09de93ae898fb0982d80b2" />
                      <div class="form-group row">
                        <label for="peg_code" class="col-sm-2 col-form-label">Pilih Nama Karyawan</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <select style="width: 100%;" class="form-control form-control-sm search"
                              name="search"></select>
                            <input type='hidden' class='form-control form-control-sm' id='search'
                              name='search'>
                            <input type="hidden" name="peg_code" id="peg_code" required>
                          </div>
                          <div class="invalid-feedback" id="peg_codecek">
                            <span style="color: red;">Data wajib diisi.</span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="tanggal" class="col-sm-2 col-form-label">Pilih Tanggal</label>
                        <div class="col-sm-10">
                          <input type="text" name="nk_bukti_date" id="nk_bukti_date"
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
                                <button class="btn btn-primary" type="button">DISIPLIN</button>
                              </div>
                            </h5>
                          </div>
                          <div id="collapse00001" class="collapse show"
                            aria-labelledby="heading00001" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">1. Selalu Berpenampilan Rapi</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00001">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000001">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000001"
                                    onchange="checkValidation('000001','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00001" class="collapse show"
                            aria-labelledby="heading00001" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">2. Membudayakan Cuci Tangan 6 Langkah</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00001">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000002">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000002"
                                    onchange="checkValidation('000002','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00001" class="collapse show"
                            aria-labelledby="heading00001" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">3. Ketaatan terhadap Peraturan Rumah Sakit</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>10</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00001">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000003">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="10">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000003"
                                    onchange="checkValidation('000003','10')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div id="collapse00001" class="collapse show"
                            aria-labelledby="heading00001" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">4. Hadir Di Unit Kerja Tepat Waktu</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00001">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000004">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000004"
                                    onchange="checkValidation('000004','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div id="collapse00001" class="collapse show"
                            aria-labelledby="heading00001" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">5. Memakai Seragam Dan Atribut Sesuai Ketentuan</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00001">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000005">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000005"
                                    onchange="checkValidation('000005','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div id="collapse00001" class="collapse show"
                            aria-labelledby="heading00001" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">6. Pulang Sesuai Aturan Jam Pulang</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00001">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000006">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000006"
                                    onchange="checkValidation('000006','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div id="collapse00001" class="collapse show"
                            aria-labelledby="heading00001" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">7. Tidak Pernah Membolos Pada Jam Kerja</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00001">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000007">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000007"
                                    onchange="checkValidation('000007','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div id="collapse00001" class="collapse show"
                            aria-labelledby="heading00001" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">18. Selalu Berpenampilan Rapi</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00001">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000001">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000001"
                                    onchange="checkValidation('000001','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div id="collapse00001" class="collapse show"
                            aria-labelledby="heading00001" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">19. Membudayakan Cuci Tangan 6 Langkah</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00001">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000002">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000002"
                                    onchange="checkValidation('000002','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div id="collapse00001" class="collapse show"
                            aria-labelledby="heading00001" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">20. Ketaatan terhadap Peraturan Rumah Sakit</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>10</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00001">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000003">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="10">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000003"
                                    onchange="checkValidation('000003','10')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div id="collapse00001" class="collapse show"
                            aria-labelledby="heading00001" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">21. Hadir Di Unit Kerja Tepat Waktu</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00001">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000004">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000004"
                                    onchange="checkValidation('000004','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div id="collapse00001" class="collapse show"
                            aria-labelledby="heading00001" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">22. Memakai Seragam Dan Atribut Sesuai Ketentuan</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00001">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000005">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000005"
                                    onchange="checkValidation('000005','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div id="collapse00001" class="collapse show"
                            aria-labelledby="heading00001" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">23. Pulang Sesuai Aturan Jam Pulang</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00001">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000006">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000006"
                                    onchange="checkValidation('000006','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div id="collapse00001" class="collapse show"
                            aria-labelledby="heading00001" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">24. Tidak Pernah Membolos Pada Jam Kerja</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00001">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000007">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000007"
                                    onchange="checkValidation('000007','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End Disiplin -->
                        <div class="card">
                          <div class="card-header" id="headingOne">
                            <h5 class="mb-0" data-toggle="collapse"
                              data-target="#collapse00001" aria-expanded="true"
                              aria-controls="collapse00001">
                              <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="button">DISIPLIN</button>
                              </div>
                            </h5>
                          </div>
                          <div id="collapse00001" class="collapse show"
                            aria-labelledby="heading00001" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">1. Selalu Berpenampilan Rapi</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00001">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000001">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000001"
                                    onchange="checkValidation('000001','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00001" class="collapse show"
                            aria-labelledby="heading00001" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">2. Membudayakan Cuci Tangan 6 Langkah</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00001">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000002">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000002"
                                    onchange="checkValidation('000002','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00001" class="collapse show"
                            aria-labelledby="heading00001" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">3. Ketaatan terhadap Peraturan Rumah Sakit</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>10</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00001">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000003">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="10">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000003"
                                    onchange="checkValidation('000003','10')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00001" class="collapse show"
                            aria-labelledby="heading00001" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">4. Hadir Di Unit Kerja Tepat Waktu</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00001">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000004">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000004"
                                    onchange="checkValidation('000004','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00001" class="collapse show"
                            aria-labelledby="heading00001" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">5. Memakai Seragam Dan Atribut Sesuai Ketentuan</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00001">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000005">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000005"
                                    onchange="checkValidation('000005','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00001" class="collapse show"
                            aria-labelledby="heading00001" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">6. Pulang Sesuai Aturan Jam Pulang</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00001">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000006">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000006"
                                    onchange="checkValidation('000006','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00001" class="collapse show"
                            aria-labelledby="heading00001" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">7. Tidak Pernah Membolos Pada Jam Kerja</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00001">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000007">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000007"
                                    onchange="checkValidation('000007','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00001" class="collapse show"
                            aria-labelledby="heading00001" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">18. Selalu Berpenampilan Rapi</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00001">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000001">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000001"
                                    onchange="checkValidation('000001','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00001" class="collapse show"
                            aria-labelledby="heading00001" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">19. Membudayakan Cuci Tangan 6 Langkah</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00001">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000002">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000002"
                                    onchange="checkValidation('000002','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00001" class="collapse show"
                            aria-labelledby="heading00001" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">20. Ketaatan terhadap Peraturan Rumah Sakit</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>10</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00001">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000003">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="10">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000003"
                                    onchange="checkValidation('000003','10')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00001" class="collapse show"
                            aria-labelledby="heading00001" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">21. Hadir Di Unit Kerja Tepat Waktu</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00001">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000004">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000004"
                                    onchange="checkValidation('000004','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00001" class="collapse show"
                            aria-labelledby="heading00001" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">22. Memakai Seragam Dan Atribut Sesuai Ketentuan</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00001">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000005">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000005"
                                    onchange="checkValidation('000005','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00001" class="collapse show"
                            aria-labelledby="heading00001" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">23. Pulang Sesuai Aturan Jam Pulang</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00001">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000006">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000006"
                                    onchange="checkValidation('000006','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00001" class="collapse show"
                            aria-labelledby="heading00001" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">24. Tidak Pernah Membolos Pada Jam Kerja</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00001">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000007">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000007"
                                    onchange="checkValidation('000007','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End Disiplin -->
                        <div class="card">
                          <div class="card-header" id="headingOne">
                            <h5 class="mb-0" data-toggle="collapse"
                              data-target="#collapse00002" aria-expanded="true"
                              aria-controls="collapse00002">
                              <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="button">KINERJA PELAYANAN</button>
                              </div>
                            </h5>
                          </div>
                          <div id="collapse00002" class="collapse show"
                            aria-labelledby="heading00002" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">8. Bertanggung jawab terhadap pekerjaan</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>10</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00002">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000008">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="10">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000008"
                                    onchange="checkValidation('000008','10')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00002" class="collapse show"
                            aria-labelledby="heading00002" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">9. Membuat laporan pekerjaan kepada atasan</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00002">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000009">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000009"
                                    onchange="checkValidation('000009','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00002" class="collapse show"
                            aria-labelledby="heading00002" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">10. Menyelesaikan tugas tepat waktu</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00002">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000010">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000010"
                                    onchange="checkValidation('000010','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00002" class="collapse show"
                            aria-labelledby="heading00002" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">11. Mengarsipkan surat-surat penting dengan rapi</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00002">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000011">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000011"
                                    onchange="checkValidation('000011','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00002" class="collapse show"
                            aria-labelledby="heading00002" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">12. Tidak pernah melakukan pelanggaran tata tertib unit kerja</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00002">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000012">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000012"
                                    onchange="checkValidation('000012','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00002" class="collapse show"
                            aria-labelledby="heading00002" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">13. Tidak pernah konflik dengan rekan kerja satu unit</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00002">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000013">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000013"
                                    onchange="checkValidation('000013','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00002" class="collapse show"
                            aria-labelledby="heading00002" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">14. Bisa bergaul dengan baik</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00002">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000014">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000014"
                                    onchange="checkValidation('000014','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00002" class="collapse show"
                            aria-labelledby="heading00002" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">15. Kepatuhan terhadap SOP RS</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00002">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000015">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000015"
                                    onchange="checkValidation('000015','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00002" class="collapse show"
                            aria-labelledby="heading00002" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">25. Bertanggung jawab terhadap pekerjaan</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>10</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00002">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000008">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="10">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000008"
                                    onchange="checkValidation('000008','10')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00002" class="collapse show"
                            aria-labelledby="heading00002" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">26. Membuat laporan pekerjaan kepada atasan</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00002">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000009">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000009"
                                    onchange="checkValidation('000009','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00002" class="collapse show"
                            aria-labelledby="heading00002" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">27. Menyelesaikan tugas tepat waktu</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00002">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000010">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000010"
                                    onchange="checkValidation('000010','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00002" class="collapse show"
                            aria-labelledby="heading00002" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">28. Mengarsipkan surat-surat penting dengan rapi</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00002">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000011">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000011"
                                    onchange="checkValidation('000011','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00002" class="collapse show"
                            aria-labelledby="heading00002" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">29. Tidak pernah melakukan pelanggaran tata tertib unit kerja</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00002">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000012">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000012"
                                    onchange="checkValidation('000012','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00002" class="collapse show"
                            aria-labelledby="heading00002" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">30. Tidak pernah konflik dengan rekan kerja satu unit</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00002">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000013">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000013"
                                    onchange="checkValidation('000013','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00002" class="collapse show"
                            aria-labelledby="heading00002" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">31. Bisa bergaul dengan baik</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00002">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000014">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000014"
                                    onchange="checkValidation('000014','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00002" class="collapse show"
                            aria-labelledby="heading00002" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">32. Kepatuhan terhadap SOP RS</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00002">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000015">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000015"
                                    onchange="checkValidation('000015','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End Disiplin -->
                        <div class="card">
                          <div class="card-header" id="headingOne">
                            <h5 class="mb-0" data-toggle="collapse"
                              data-target="#collapse00002" aria-expanded="true"
                              aria-controls="collapse00002">
                              <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="button">KINERJA PELAYANAN</button>
                              </div>
                            </h5>
                          </div>
                          <div id="collapse00002" class="collapse show"
                            aria-labelledby="heading00002" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">8. Bertanggung jawab terhadap pekerjaan</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>10</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00002">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000008">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="10">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000008"
                                    onchange="checkValidation('000008','10')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00002" class="collapse show"
                            aria-labelledby="heading00002" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">9. Membuat laporan pekerjaan kepada atasan</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00002">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000009">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000009"
                                    onchange="checkValidation('000009','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00002" class="collapse show"
                            aria-labelledby="heading00002" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">10. Menyelesaikan tugas tepat waktu</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00002">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000010">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000010"
                                    onchange="checkValidation('000010','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00002" class="collapse show"
                            aria-labelledby="heading00002" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">11. Mengarsipkan surat-surat penting dengan rapi</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00002">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000011">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000011"
                                    onchange="checkValidation('000011','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00002" class="collapse show"
                            aria-labelledby="heading00002" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">12. Tidak pernah melakukan pelanggaran tata tertib unit kerja</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00002">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000012">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000012"
                                    onchange="checkValidation('000012','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00002" class="collapse show"
                            aria-labelledby="heading00002" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">13. Tidak pernah konflik dengan rekan kerja satu unit</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00002">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000013">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000013"
                                    onchange="checkValidation('000013','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00002" class="collapse show"
                            aria-labelledby="heading00002" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">14. Bisa bergaul dengan baik</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00002">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000014">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000014"
                                    onchange="checkValidation('000014','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00002" class="collapse show"
                            aria-labelledby="heading00002" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">15. Kepatuhan terhadap SOP RS</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00002">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000015">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000015"
                                    onchange="checkValidation('000015','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00002" class="collapse show"
                            aria-labelledby="heading00002" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">25. Bertanggung jawab terhadap pekerjaan</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>10</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00002">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000008">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="10">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000008"
                                    onchange="checkValidation('000008','10')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00002" class="collapse show"
                            aria-labelledby="heading00002" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">26. Membuat laporan pekerjaan kepada atasan</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00002">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000009">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000009"
                                    onchange="checkValidation('000009','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00002" class="collapse show"
                            aria-labelledby="heading00002" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">27. Menyelesaikan tugas tepat waktu</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00002">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000010">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000010"
                                    onchange="checkValidation('000010','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00002" class="collapse show"
                            aria-labelledby="heading00002" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">28. Mengarsipkan surat-surat penting dengan rapi</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00002">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000011">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000011"
                                    onchange="checkValidation('000011','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00002" class="collapse show"
                            aria-labelledby="heading00002" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">29. Tidak pernah melakukan pelanggaran tata tertib unit kerja</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00002">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000012">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000012"
                                    onchange="checkValidation('000012','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00002" class="collapse show"
                            aria-labelledby="heading00002" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">30. Tidak pernah konflik dengan rekan kerja satu unit</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00002">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000013">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000013"
                                    onchange="checkValidation('000013','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00002" class="collapse show"
                            aria-labelledby="heading00002" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">31. Bisa bergaul dengan baik</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00002">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000014">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000014"
                                    onchange="checkValidation('000014','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00002" class="collapse show"
                            aria-labelledby="heading00002" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">32. Kepatuhan terhadap SOP RS</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00002">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000015">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000015"
                                    onchange="checkValidation('000015','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End Disiplin -->
                        <div class="card">
                          <div class="card-header" id="headingOne">
                            <h5 class="mb-0" data-toggle="collapse"
                              data-target="#collapse00003" aria-expanded="true"
                              aria-controls="collapse00003">
                              <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="button">LOYALITAS</button>
                              </div>
                            </h5>
                          </div>
                          <div id="collapse00003" class="collapse show"
                            aria-labelledby="heading00003" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">16. Kesetiaan terhadap rumah sakit</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>10</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00003">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000016">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="10">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000016"
                                    onchange="checkValidation('000016','10')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00003" class="collapse show"
                            aria-labelledby="heading00003" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">17. Bersedia menggunakan tim kerja yang berhalangan/kerelaan dalam perubahan jadwal dinas</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00003">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000017">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000017"
                                    onchange="checkValidation('000017','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00003" class="collapse show"
                            aria-labelledby="heading00003" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">33. Kesetiaan terhadap rumah sakit</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>10</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00003">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000016">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="10">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000016"
                                    onchange="checkValidation('000016','10')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00003" class="collapse show"
                            aria-labelledby="heading00003" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">34. Bersedia menggunakan tim kerja yang berhalangan/kerelaan dalam perubahan jadwal dinas</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00003">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000017">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000017"
                                    onchange="checkValidation('000017','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End Disiplin -->
                        <div class="card">
                          <div class="card-header" id="headingOne">
                            <h5 class="mb-0" data-toggle="collapse"
                              data-target="#collapse00003" aria-expanded="true"
                              aria-controls="collapse00003">
                              <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="button">LOYALITAS</button>
                              </div>
                            </h5>
                          </div>
                          <div id="collapse00003" class="collapse show"
                            aria-labelledby="heading00003" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">16. Kesetiaan terhadap rumah sakit</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>10</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00003">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000016">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="10">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000016"
                                    onchange="checkValidation('000016','10')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00003" class="collapse show"
                            aria-labelledby="heading00003" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">17. Bersedia menggunakan tim kerja yang berhalangan/kerelaan dalam perubahan jadwal dinas</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00003">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000017">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000017"
                                    onchange="checkValidation('000017','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00003" class="collapse show"
                            aria-labelledby="heading00003" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">33. Kesetiaan terhadap rumah sakit</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>10</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00003">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000016">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="10">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000016"
                                    onchange="checkValidation('000016','10')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="collapse00003" class="collapse show"
                            aria-labelledby="heading00003" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-group row border-custom">
                                <label for=""
                                  class="col-sm-7 col-form-label">34. Bersedia menggunakan tim kerja yang berhalangan/kerelaan dalam perubahan jadwal dinas</label>
                                <label for="" class="col-sm-3 col-form-label">Bobot Nilai Maksimal :
                                  <strong>5</strong></label>
                                <div class="col-sm-2">
                                  <input type="hidden" name="kat_code[]"
                                    value=" 00003">
                                  <input type="hidden" name="jns_code[]" id="jns_code"
                                    value="000017">
                                  <input type="hidden" name="jns_nilai[]" id="jns_nilai"
                                    value="5">
                                  <input type="number" name="nk_nilai[]"
                                    id="nk_nilai000017"
                                    onchange="checkValidation('000017','5')"
                                    class="form-control" placeholder="Input Nilai"
                                    autocomplete="off" required>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
       
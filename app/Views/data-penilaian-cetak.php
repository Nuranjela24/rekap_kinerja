<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penilaian</title>
    <?php
    function bulanIndo($bulan) {
        $bulanIndonesia = [
            '1' => 'Januari',
            '2' => 'Februari',
            '3' => 'Maret',
            '4' => 'April',
            '5' => 'Mei',
            '6' => 'Juni',
            '7' => 'Juli',
            '8' => 'Agustus',
            '9' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember',
        ];
        return isset($bulanIndonesia[$bulan]) ? $bulanIndonesia[$bulan] : 'Tidak diketahui';
    }
    function tanggalIndo($tanggal) {
        $tanggal = explode('-', $tanggal);
        return $tanggal[2] . ' ' . bulanIndo($tanggal[1]) . ' ' . $tanggal[0];
    }
    ?>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .br-pagetitle {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #f9f9f9;
            border-bottom: 1px solid #ddd;
        }
        .br-pagetitle .left-image img,
        .br-pagetitle .right-image img {
            width: 100px;
            height: auto;
        }
        .br-pagetitle h4 {
            margin: 0;
        }
        .br-pagebody {
            padding: 20px;
        }
        .card {
            border: none;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .card-body {
            padding: 20px;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table th,
        .table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        .table th {
            background-color: #f9f9f9;
        }
    </style>

</head>
<body>
    <!-- <div class="br-pagetitle"> -->
    <?php 
    // echo $cek=='Semua'?'SEMUA':$bdg['nama_bidang']
    ?>
       
        <center><h2 style="margin-bottom: 1px;">RS BORNEO CITRA MEDIKA</h2></center>
        <center><p style="margin-top: 1px;font-size: 12px;">Jalan A. Yani RT 7B RW. 03 Pelaihari 70814 Telepon (0512) 2021002</p></center>
        <hr style="border: 1px solid #000; margin: 20px 0;">
        <center><h4 style="margin-bottom: 1px;">REKAP NILAI KINERJA <?php echo $cek=='Semua'?'':strtoupper($bdg['nama_bidang']) ?></h4></center>
        <center><h4 style="margin-top: 1px; margin-bottom: 0;">RUMAH SAKIT BORNEO CITRA MEDIKA</h4></center>
    <!-- </div> -->
    <div class="br-pagebody">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <p style="margin-bottom: 0;">Tanggal : <?= tanggalIndo($tanggal_penilaian) ?></p>
                        <b><p style="margin-top: 0;margin-bottom: 0;">Bulan : <?= bulanindo(date('m')) ?> <?= date('Y') ?></p></b>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Unit Kerja</th>
                                        <th>Tanggal</th>
                                        <th>Nilai Akhir</th>
                                        <?php if (session('level') == 'admin'): ?>
                                            <th>Point</th>
                                        <?php endif; ?>
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
                                            <?php if (session('level') == 'admin'): ?>
                                                <td><?= $hasil ?></td>
                                            <?php endif; ?>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <table>
            <tr>
                <td>
                <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <p style="font-size: 12px;">Keterangan :</p>
                        <div class="table-responsive">
                            <table class="table">
                                
                                <tr>
                                    <td style="font-size: 12px;">Bobot Nilai</td>
                                    <td style="font-size: 12px;">:</td>
                                    <td style="font-size: 12px;">1 (Sangat Buruk)</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 12px;"></td>
                                    <td style="font-size: 12px;">:</td>
                                    <td style="font-size: 12px;">2 (Buruk)</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 12px;"></td>
                                    <td style="font-size: 12px;">:</td>
                                    <td style="font-size: 12px;">3 (Cukup)</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 12px;"></td>
                                    <td style="font-size: 12px;">:</td>
                                    <td style="font-size: 12px;">4 (Baik)</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 12px;"></td>
                                    <td style="font-size: 12px;">:</td>
                                    <td style="font-size: 12px;">5 (Sangat Baik)</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                </td>
                <td>
                <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                
                                <tr>
                                    <td style="font-size: 12px;">Nilai</td>
                                    <td style="font-size: 12px;">:</td>
                                    <td style="font-size: 12px;">50-59 (Cukup)</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 12px;"></td>
                                    <td style="font-size: 12px;">:</td>
                                    <td style="font-size: 12px;">70-84 (Baik)</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 12px;"></td>
                                    <td style="font-size: 12px;">:</td>
                                    <td style="font-size: 12px;">85-100 (Sangat Baik)</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                </td>
            </tr>
        </table>
       
        
    <div class="row" style="position: absolute; bottom: 0; right: 0;">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                       <p style="font-size: 12px;">Penilai</p>
                       <!-- <p style="font-size: 12px;">Tanda Tangan</p> -->
                        <br>
                        <br>
                        <br>
                        <br>
                       <p style="font-size: 12px;"><?php echo $bidang==''?'___________________':strtoupper($bidang['nama']) ?></p>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
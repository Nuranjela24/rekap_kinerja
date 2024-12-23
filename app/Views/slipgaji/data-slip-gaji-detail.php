<!-- End br-pagetitle -->
<!-- br-pagebody -->
<!-- Tombol Print -->
<div class="text-right mb-3">
    <button onclick="printIframeContent()" class="btn btn-primary">Print Slip Gaji</button>
</div>


<div class="br-pagebody custom">
    <div class="row">
        <div class="col-md-12">
            <div class="card bg-light mb-3 shadow p-0 mb-5 bg-white">
                <div class="card-body" style="padding: 0; margin: 0;">
                    <iframe id="slipGajiIframe"  srcdoc="
                    <!DOCTYPE html>
                    <html lang='en'>
                    <head>
                        <meta charset='UTF-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                        <title>Slip Gaji</title>
                        <style>
                            @media print {
                                @page {
                                    size: A4 portrait;
                                    margin: 0; /* Menghilangkan margin default */
                                }
                                body {
                                    margin: 0;
                                    padding: 0;
                                    height: 50%; /* Hanya gunakan setengah halaman */
                                    box-sizing: border-box;
                                    display: flex;
                                    justify-content: center;
                                    align-items: flex-start; /* Konten di bagian atas */
                                }
                            }
                            body {
                                font-family: Arial, sans-serif;
                                font-size: 10pt;
                                margin: 0;
                                padding: 15px;
                                box-sizing: border-box;
                                display: flex;
                                justify-content: center;
                                align-items: flex-start; /* Konten di bagian atas */
                                height: 50%; /* Hanya setengah halaman */
                            }
                            .content {
                                width: 100%;
                                max-width: 210mm; /* Lebar A4 portrait */
                                padding: 10mm;
                                box-sizing: border-box;
                                border: 1px solid #000; /* Tambahkan border untuk visualisasi */
                                background-color: #fff;
                            }
                            .header {
                                display: flex;
                                align-items: center;
                                <!-- justify-content: space-between; -->
                            }
                            .header img {
                                height: 60px;
                            }
                            .header-text {
                                text-align: left;
                            }
                            .header-text h1 {
                                font-size: 20px;
                                margin: 0;
                            }
                            .header-text h2 {
                                font-size: 16px;
                                margin: 0;
                                font-weight: normal;
                            }
                            .table {
                                width: 100%;
                                border-collapse: collapse;
                                margin-top: 10px;
                            }
                            .table th, .table td {
                                border: 1px solid black;
                                padding: 5px;
                                text-align: left;
                            }
                            .table2 {
                                width: 100%;
                                border-collapse: collapse;
                            }
                            .table2 th, .table2 td {
                                border: none;
                                text-align: left;
                                line-height: 1;
                            }
                            .table2 tr {
                                height: auto; /* Atur tinggi baris otomatis berdasarkan konten */
                            }
                            .table3 {
                                color: red;
                                width: 100%; 
                                border-collapse: collapse;
                                border: 1px solid red;
                            }
                        </style>
                    </head>
                    <body>
                        <table class='table'>
                            <tr>
                                <td colspan='2'>
                                    <div class='header'>
                                        <img src='/assets/images/rsbcm.png' alt='logo'>
                                        <div class='header-text'>
                                            <h1>RSIA BORNEO CITRA MEDIKA</h1>
                                            <h2>SLIP GAJI</h2>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table class='table2'>
                                        <tr>
                                            <td>Nama</td>
                                            <td>: Huzazi</td>
                                        </tr>
                                        <tr>
                                            <td>NIK</td>
                                            <td>: 1234</td>
                                        </tr>
                                        <tr>
                                            <td>Jabatan</td>
                                            <td>: Presiden</td>
                                        </tr>
                                    </table>
                                </td>
                                <td>
                                    <table class='table2'>
                                        <tr>
                                            <td>Periode</td>
                                            <td>: Desember 2024</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Mulai Kerja</td>
                                            <td>: 1 September 2024</td>
                                        </tr>
                                        <tr>
                                            <td>Absen</td>
                                            <td>: 20</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <th>Penerimaan</th>
                                <th>Potongan</th>
                            </tr>
                            <tbody>
                                <tr>
                                    <td style='text-align: left; vertical-align: top;'>
                                        <table class='table2'>
                                            <tr>
                                                <td>
                                                    <table class='table2'>
                                                        <tr>
                                                            <td>Gaji Pokok</td>
                                                            <td>: Rp 0.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tunj Jabatan</td>
                                                            <td>: Rp 0.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tunj Profesi</td>
                                                            <td>: Rp 0.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tunj T. Medis</td>
                                                            <td>: Rp 0.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tunj PIC</td>
                                                            <td>: Rp 0.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tunj LAB</td>
                                                            <td>: Rp 0.00</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td>
                                                    <table class='table2'>
                                                        <tr>
                                                            <td>Uang Makan</td>
                                                            <td>: Rp 0.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Transport</td>
                                                            <td>: Rp 0.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jasa Medis</td>
                                                            <td>: Rp 0.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bonus Tahunan</td>
                                                            <td>: Rp 0.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bonus</td>
                                                            <td>: Rp 0.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Rapel</td>
                                                            <td>: Rp 0.00</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>
                                        <table class='table2'>
                                            <td>
                                                    <table class='table2'>
                                                        <tr>
                                                            <td>BPJS Ketenagakerjaan</td>
                                                            <td>: Rp 0.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>BPJS Kesehatan</td>
                                                            <td>: Rp 0.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Pajak</td>
                                                            <td>: Rp 0.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Kasbon</td>
                                                            <td>: Rp 0.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Prorate</td>
                                                            <td>: Rp 0.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Denda</td>
                                                            <td>: Rp 0.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan='2'>
                                                                <table class='table3'>
                                                                    <tr>
                                                                        <td colspan='2'>Catatan</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Kasbon</td>
                                                                        <td>: Rp 0.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Cicilan</td>
                                                                        <td>: Rp 0.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Terbayar</td>
                                                                        <td>: Rp 0.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Sisa Kasbon</td>
                                                                        <td>: Rp 0.00</td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Total Penerimaan:</strong> Rp 0.00</td>
                                    <td><strong>Total Potongan:</strong> Rp 0.00</td>
                                </tr>
                                <tr>
                                    <td><strong>Total Dibayar: Rp 0.00</strong></td>
                                    <td>
                                        Tanah Laut
                                        </br></br>
                                        Penerima
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </body>
                    </html>" style="width: 100%; height: 100vh; border: 1px solid #ccc;">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->
<script>
    function printIframeContent() {
        const iframe = document.getElementById('slipGajiIframe');
        const iframeWindow = iframe.contentWindow || iframe;
        iframeWindow.focus();
        iframeWindow.print();
    }
</script>
<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PenggunaModel;
use App\Helpers\AuthHelper;

class PenggunaController extends BaseController
{
    public function index()
    {
        // objek PenggunaModel
        $pengguna_m = new PenggunaModel();

        $data = [
            'title' => 'Data Pengguna',
            'active_menu' => 'master',
            'active_submenu' => 'pengguna',

            'pengguna_c' => $pengguna_m->getData()
        ];

        return view('pengguna/index', $data);
    }

    public function create()
    {
        // Objek PenggunaModel
        $pengguna_mod = new PenggunaModel();

        // Ambil data dari form
        $peg_code = $this->request->getPost('peg_code');
        $peg_name = $this->request->getPost('peg_name');
        // dd($peg_code, $peg_name);


        // Siapkan array batch untuk insert
        $batchData = [];
        $uniqueCodes = [];

        $totalCodes = count($peg_code);
        for ($index = 0; $index < $totalCodes; $index++) {
            $code = $peg_code[$index];

            // Hindari duplikasi
            if (in_array($code, $uniqueCodes)) {
                continue;
            }

            $uniqueCodes[] = $code;
            $batchData[] = [
                'username' => $code,
                'password' => password_hash($code, PASSWORD_DEFAULT),
                'name' => $peg_name[$index], // Ambil elemen berdasarkan indeks
                'level' => 'pengguna_sg',
            ];
        }


        $batchSize = 50; // Jumlah per batch
        $totalData = count($batchData);

        for ($i = 0; $i < $totalData; $i += $batchSize) {
            $batchSlice = array_slice($batchData, $i, $batchSize);
            $pengguna_mod->insertBatch($batchSlice);
        }

        return redirect()->to('/data-pengguna');
    }
}

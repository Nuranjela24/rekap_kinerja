<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SlipGajiModel;
use App\Helpers\AuthHelper;

class SlipGajiController extends BaseController
{
    public function index()
    {
        $slipgaji_m = new SlipGajiModel();

        $data = [
            'slipgaji_c' => $slipgaji_m->getDataByPegawai('001')
        ];

        echo view('layout/header');
        echo view('layout/menu');
        echo view('slipgaji/index', $data);
        echo view('layout/footer');
    }

    public function detail($id)
    {
        $slipgaji_m = new SlipGajiModel();

        $data = [
            'slipgaji_detail_c' => $slipgaji_m->getDataById($id)
        ];

        echo view('layout/header');
        echo view('layout/menu');
        echo view('slipgaji/detail', $data);
        echo view('layout/footer');
    }

    public function add()
    {
        // objek SlipGajiModel
        $pengguna_mod = new SlipGajiModel();

        // Upload file
        $profile_image = $this->request->getFile('profile_image');

        if ($profile_image && $profile_image->isValid() && !$profile_image->hasMoved()) {
            // Mendapatkan ekstensi file
            $ext = $profile_image->getClientExtension();

            $newName = $this->request->getPost('username') . '.' . $ext;
            $profile_image->move(ROOTPATH . 'public/assets/avatars', $newName);
        } else {
            $newName = 'default.jpg';
        }

        session()->setFlashdata('success', 'ditambahkan');
        return redirect()->to('/pengguna');
    }

    public function edit($id)
    {
        $pengguna_mod = new SlipGajiModel();

        $data = [
            'nama_pengguna' => $this->request->getPost('nama_pengguna'),
            'level' => $this->request->getPost('level'),
            'no_telp' => $this->request->getPost('no_telp'),
        ];

        // Cek apakah file gambar baru diunggah
        $profile_image = $this->request->getFile('profile_image');
        $username = $this->request->getPost('old_username');
        if ($profile_image && $profile_image->isValid() && !$profile_image->hasMoved()) {
            // Mendapatkan ekstensi file
            $ext = $profile_image->getClientExtension();

            // Ubah nama file
            $newName = $username . '.' . $ext;
            $profile_image->move(ROOTPATH . 'public/assets/avatars', $newName);

            // Hapus gambar lama jika ada
            $pengguna = $pengguna_mod->find($id);
            $oldImage = $pengguna['profile_image'];
            if ($oldImage !== 'default.jpg' && file_exists(ROOTPATH . 'public/assets/avatars/' . $oldImage)) {
                unlink(ROOTPATH . 'public/assets/avatars/' . $oldImage);
            }

            // Gunakan nama baru
            $data['profile_image'] = $newName;
        }

        $pengguna_mod->updateData($id, $data);

        session()->setFlashdata('success', 'diedit');
        return redirect()->to('/pengguna');
    }

    public function delete($id)
    {
        $pengguna_mod = new SlipGajiModel();

        // Dapatkan data pengguna yang akan dihapus
        $pengguna = $pengguna_mod->find($id);

        if ($pengguna['id'] == session()->get('id')) {
            session()->setFlashdata('error', 'tidak bisa menghapus akun sendiri');
            return redirect()->to('/pengguna');
        } else {
            // Hapus file gambar terkait jika bukan default.jpg
            if ($pengguna['profile_image'] !== 'default.jpg') {
                $imagePath = ROOTPATH . 'public/assets/avatars/' . $pengguna['profile_image'];
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            $pengguna_mod->deleteData($id);

            session()->setFlashdata('success', 'dihapus');
            return redirect()->to('/pengguna');
        }
    }
}

<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PegawaiModel;
use App\Helpers\AuthHelper;

class PegawaiController extends BaseController
{
    public function index()
    {
        // objek PegawaiModel
        $pegawai_m = new PegawaiModel();

        $data = [
            'title' => 'Data Pengguna',
            'active_menu' => 'master',
            'active_submenu' => 'pengguna',

            'pegawai_c' => $pegawai_m->getData()
        ];

        return view('pegawai/index', $data);
    }

    public function add()
    {
        // objek PegawaiModel
        $pengguna_mod = new PegawaiModel();

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

        $data = [
            'username' => $this->request->getPost('username'),
            'nama_pengguna' => $this->request->getPost('nama_pengguna'),
            'level' => $this->request->getPost('level'),
            'no_telp' => $this->request->getPost('no_telp'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'profile_image' => $newName,
            'created_at' => date('Y-m-d H:i:s'),
        ];

        $pengguna_mod->insertData($data);

        session()->setFlashdata('success', 'ditambahkan');
        return redirect()->to('/pengguna');
    }

    public function checkUsername()
    {
        $username = $this->request->getPost('username');
        $pengguna_mod = new PegawaiModel();

        // mendapatkan username dalam database
        $result = $pengguna_mod->where('username', $username)->first();

        if ($result) {
            // Username sudah digunakan
            echo json_encode(false);
        } else {
            // Username tersedia
            echo json_encode(true);
        }
    }

    public function edit($id)
    {
        $pengguna_mod = new PegawaiModel();

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
        $pengguna_mod = new PegawaiModel();

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

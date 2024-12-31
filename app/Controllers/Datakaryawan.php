<?php

namespace App\Controllers;

use App\Models\KaryawanModel;
use App\Models\BidangModel;
use App\Models\RuanganModel;
use App\Models\AuthModel;



class DataKaryawan extends BaseController
{
    protected $karyawanModel;
    protected $bidangModel;
    protected $ruanganModel;
    protected $AuthModel;

    public function __construct()
    {
        $this->karyawanModel = new KaryawanModel();
        $this->bidangModel = new BidangModel();
        $this->ruanganModel = new RuanganModel();
        $this->AuthModel = new AuthModel();
        
    }
    public function index()
    {
        if (!session('id_login')) {
            return redirect()->to('/'); // Ganti '/login' dengan URL login Anda
        }
        // var_dump(session('level'));exit;
        $id_login = session('id_login');
        $data = $this->karyawanModel
            //   ->join('bidang','bidang.id_bidang=karyawan.id_bidang')
            ->where('id_login', $id_login)->first();
        $id_bidang = $data['id_bidang'];
        //   var_dump($data['nama_bidang']);exit;
        $data['karyawan'] = $this->karyawanModel
            ->select('karyawan.id_karyawan,karyawan.nik, karyawan.nama, karyawan.jabatan, karyawan.tanggal_bekerja, karyawan.id_bidang, bidang.nama_bidang')
            ->join('bidang', 'bidang.id_bidang = karyawan.id_bidang')
            ->where('bidang.id_bidang', $id_bidang)
            ->findAll();
        echo view('layout/header');
        echo view('layout/menu');
        echo view('data-karyawan', $data);
        echo view('layout/footer');
    }
    public function tambah()
    {
        if (!session('id_login')) {
            return redirect()->to('/'); // Ganti '/login' dengan URL login Anda
        }
        // var_dump('a');exit;
        $id_login = session('id_login');
        $data = $this->karyawanModel
            //   ->join('bidang','bidang.id_bidang=karyawan.id_bidang')
            ->where('id_login', $id_login)->first();
        $id_bidang = $data['id_bidang'];
        $data = [
            'bidang' => $this->bidangModel->where('id_bidang', $id_bidang)->findAll(),
            'id_bidang' => $id_bidang
        ];
        // var_dump($data);exit;
        echo view('layout/header');
        echo view('layout/menu');
        echo view('input-karyawan', $data);
        echo view('layout/footer');
    }
    public function create()
    {
        if (!session('id_login')) {
            return redirect()->to('/'); // Ganti '/login' dengan URL login Anda
        }
        // $data = [
        //     'username' => $this->request->getPost('username'),
        //     'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT), // Hash the password
        //     'level' => 'karyawan'
        // ];
        // $this->AuthModel->insert($data);
        // $id_login = $this->AuthModel->insertID(); // Get the id_login from the insert operation
        
        
        $data = [
            'nik' => $this->request->getPost('nik'),
            'nama' => $this->request->getPost('nama'),
            'jabatan' => $this->request->getPost('jabatan'),
            'tanggal_bekerja' => $this->request->getPost('tanggal_bekerja'),
            'id_bidang' => $this->request->getPost('id_bidang'),
            // 'id_login' => $id_login // Insert id_login into the karyawan table
        ];
        $this->karyawanModel->insert($data);
        return redirect()->to('/data-karyawan');
    }
    public function edit($id)
    {
        if (!session('id_login')) {
            return redirect()->to('/'); // Ganti '/login' dengan URL login Anda
        }
        $id_login = session('id_login');
        $data = $this->karyawanModel
            //   ->join('bidang','bidang.id_bidang=karyawan.id_bidang')
            ->where('id_login', $id_login)->first();
        $id_bidang = $data['id_bidang'];
        $data = [
            'karyawan' => $this->karyawanModel->find($id),
            'bidang' => $this->bidangModel->where('id_bidang', $id_bidang)->findAll(),
        ];
        echo view('layout/header');
        echo view('layout/menu');
        echo view('edit-karyawan', $data);
        echo view('layout/footer');
    }
    public function update($id)
    {
        if (!session('id_login')) {
            return redirect()->to('/'); // Ganti '/login' dengan URL login Anda
        }
        $data = [
            'nik' => $this->request->getPost('nik'),
            'nama' => $this->request->getPost('nama'),
            'jabatan' => $this->request->getPost('jabatan'),
            'tanggal_bekerja' => $this->request->getPost('tanggal_bekerja'),
            'id_bidang' => $this->request->getPost('id_bidang')
        ];
        // var_dump($id);exit;
        $this->karyawanModel->update($id, $data);
        return redirect()->to('/data-karyawan');
    }
    public function delete($id)
    {
        if (!session('id_login')) {
            return redirect()->to('/'); // Ganti '/login' dengan URL login Anda
        }
        $this->karyawanModel->delete($id);
        return redirect()->to('/data-karyawan');
    }
<<<<<<< HEAD

    public function slip_gaji()
    {
        if (!session('id_login')) {
            return redirect()->to('/'); // Ganti '/login' dengan URL login Anda
        }
        // var_dump(session('level'));exit;
        $id_login = session('id_login');
        // $data = $this->karyawanModel
        //     //   ->join('bidang','bidang.id_bidang=karyawan.id_bidang')
        //     ->where('id_login', $id_login)->first();
        // $id_bidang = $data['id_bidang'];
        // //   var_dump($data['nama_bidang']);exit;
        // $data['karyawan'] = $this->karyawanModel
        //     ->select('karyawan.id_karyawan,karyawan.nik, karyawan.nama, karyawan.jabatan, karyawan.tanggal_bekerja, karyawan.id_bidang, bidang.nama_bidang')
        //     ->join('bidang', 'bidang.id_bidang = karyawan.id_bidang')
        //     ->where('bidang.id_bidang', $id_bidang)
        //     ->findAll();
        echo view('layout/header');
        echo view('layout/menu');
        echo view('slipgaji/data-slip-gaji');
        echo view('layout/footer');
    }

    public function slip_gaji_detail()
    {
        if (!session('id_login')) {
            return redirect()->to('/'); // Ganti '/login' dengan URL login Anda
        }
        $id_login = session('id_login');
        var_dump(session('id_login'));
        echo view('layout/header');
        echo view('layout/menu');
        echo view('slipgaji/data-slip-gaji-detail');
        echo view('layout/footer');
    }
=======
>>>>>>> 1e54d76d58f2529b206bf90a82472ef3ef5279e4
}
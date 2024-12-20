<?php

namespace App\Controllers;

use App\Models\KaryawanModel;
use App\Models\BidangModel;
use App\Models\RuanganModel;

class Datakaryawan extends BaseController
{
    protected $karyawanModel;
    protected $bidangModel;
    protected $ruanganModel;

    public function __construct()
    {
        $this->karyawanModel = new KaryawanModel();
        $this->bidangModel = new BidangModel();
        $this->ruanganModel = new RuanganModel();
    }
    public function index()
    {
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
        $data = [
            'nik' => $this->request->getPost('nik'),
            'nama' => $this->request->getPost('nama'),
            'jabatan' => $this->request->getPost('jabatan'),
            'tanggal_bekerja' => $this->request->getPost('tanggal_bekerja'),
            'id_bidang' => $this->request->getPost('id_bidang')
        ];
        $this->karyawanModel->insert($data);
        // var_dump($data);exit;
        return redirect()->to('/data-karyawan');
    }
    public function edit($id)
    {
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
        $this->karyawanModel->delete($id);
        return redirect()->to('/data-karyawan');
    }

    public function slip_gaji()
    {
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
        echo view('data-slip-gaji');
        echo view('layout/footer');
    }
}
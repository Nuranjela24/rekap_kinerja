<?php

namespace App\Controllers;
use App\Models\KaryawanModel;
use App\Models\PenilaianModel;
use App\Models\BidangModel;
use Dompdf\Dompdf;

class DataPenilaian extends BaseController
{
    protected $karyawanModel;
    protected $penilaianModel;

    public function __construct()
    {
        $this->karyawanModel = new KaryawanModel();
        $this->penilaianModel = new PenilaianModel();
        $this->bidangModel = new BidangModel();
    }

    public function index()
    {
        $this->bidangModel = new BidangModel();

        $data['bidang'] = $this->bidangModel->findAll();
            //   var_dump(session('level'));exit;
        if (session('level')=='admin') {
            # code...
            $data['penilaian'] = $this->penilaianModel
                ->select('penilaian.*, karyawan.nama,karyawan.nik,nama_bidang')
                ->join('karyawan', 'karyawan.id_karyawan = penilaian.id_karyawan')
                ->join('bidang','bidang.id_bidang=karyawan.id_bidang')
                ->orderBy('bidang.id_bidang','DESC')
                // ->where('id_bidang',$id_bidang)
                ->findAll();
        }else{
            $id_login=session('id_login');
            $data = $this->karyawanModel
        //   ->join('bidang','bidang.id_bidang=karyawan.id_bidang')
            ->where('id_login', $id_login)->first();
            $id_bidang=$data['id_bidang'];
            $data['penilaian'] = $this->penilaianModel
                ->select('penilaian.*, karyawan.nama,karyawan.nik,nama_bidang')
                ->join('karyawan', 'karyawan.id_karyawan = penilaian.id_karyawan')
                ->join('bidang','bidang.id_bidang=karyawan.id_bidang')
                ->where('bidang.id_bidang',$id_bidang)
                ->orderBy('bidang.id_bidang','DESC')
                ->findAll();
        }
        
        // var_dump('a');exit;
        echo view('layout/header');
        echo view('layout/menu'); 
        echo view('data-penilaian', $data);
        echo view('layout/footer');
    }

    public function tambah()
    {
        $id_login=session('id_login');
      $data = $this->karyawanModel
    //   ->join('bidang','bidang.id_bidang=karyawan.id_bidang')
      ->where('id_login', $id_login)->first();
      $id_bidang=$data['id_bidang'];
        $data = [
            'karyawan' => $this->karyawanModel->where('id_bidang',$id_bidang)->findAll()
        ];
        // var_dump($data);exit;
        echo view('layout/header');
        echo view('layout/menu');
        echo view('input-penilaian', $data);
        echo view('layout/footer');
    }

    public function create()
    {
        $data = [
            'id_karyawan' => $this->request->getPost('id_karyawan'),
            'tanggal' => $this->request->getPost('tanggal'),
           'poin' => 
                    $this->request->getPost('nilai_d_1') +
                    $this->request->getPost('nilai_d_2') +
                    $this->request->getPost('nilai_d_3') +
                    $this->request->getPost('nilai_d_4') +
                    $this->request->getPost('nilai_d_5') +
                    $this->request->getPost('nilai_d_6') +
                    $this->request->getPost('nilai_d_7') +
                    $this->request->getPost('nilai_d_8') +
                    $this->request->getPost('nilai_d_9') +
                    $this->request->getPost('nilai_d_10') +
                    $this->request->getPost('nilai_d_11') +
                    $this->request->getPost('nilai_d_12') +
                    $this->request->getPost('nilai_d_13') +
                    $this->request->getPost('nilai_d_14') +
                    $this->request->getPost('nilai_d_15') +
                    $this->request->getPost('nilai_d_16') +
                    $this->request->getPost('nilai_d_17')
        ];
        // var_dump($data);exit;
        $this->penilaianModel->insert($data);
        return redirect()->to('/data-penilaian');
    }

    public function edit($id)
    {
        $data = [
            'penilaian' => $this->penilaianModel->find($id),
            'karyawan' => $this->karyawanModel->findAll()
        ];
        echo view('layout/header');
        echo view('layout/menu');
        echo view('edit-penilaian', $data);
        echo view('layout/footer');
    }

    public function update($id)
    {
        $data = [
            'id_karyawan' => $this->request->getPost('id_karyawan'),
            'tanggal' => $this->request->getPost('tanggal'),
            'poin' => $this->request->getPost('poin')
        ];
        $this->penilaianModel->update($id, $data);
        return redirect()->to('/data-penilaian');
    }

    public function delete($id)
    {
        $this->penilaianModel->delete($id);
        return redirect()->to('/data-penilaian');
    }

    public function cetak()
    {
        // $id_bidang = $this->request->getPost('id_bidang');
        $tanggal_penilaian = $this->request->getPost('tanggal_penilaian');
        $dompdf = new Dompdf();
        if (session('level') == 'admin') {
            $id_bidang = $this->request->getPost('id_bidang');
            if ($id_bidang == 'Semua') {
                // var_dump($id_bidang);exit;
                $data['penilaian'] = $this->penilaianModel
                ->select('penilaian.*, karyawan.*, bidang.nama_bidang')
                ->join('karyawan', 'karyawan.id_karyawan = penilaian.id_karyawan')
                ->join('bidang', 'bidang.id_bidang = karyawan.id_bidang')
                ->where('tanggal',$tanggal_penilaian)
                ->findAll();
                $data['bidang']='';
                // var_dump($data['penilaian']);exit;
            }else{
                $data['penilaian'] = $this->penilaianModel
                ->select('penilaian.*, karyawan.*, bidang.nama_bidang')
                ->join('karyawan', 'karyawan.id_karyawan = penilaian.id_karyawan')
                ->join('bidang', 'bidang.id_bidang = karyawan.id_bidang')
                ->where('tanggal',$tanggal_penilaian)
                ->where('karyawan.id_bidang',$id_bidang)
                ->findAll();
                $data['bidang'] = $this->karyawanModel->where('id_bidang',$id_bidang)->first();
            }
        $data['bdg']=$this->bidangModel->where('id_bidang',$id_bidang)->first();
        
    }
    if (session('level') == 'kepala unit') {
        $id_login=session('id_login');
        $data = $this->karyawanModel
        ->where('id_login', $id_login)->first();
        $id_bidang=$data['id_bidang'];
        $data['penilaian'] = $this->penilaianModel
        ->select('penilaian.*, karyawan.*, bidang.nama_bidang')
        ->join('karyawan', 'karyawan.id_karyawan = penilaian.id_karyawan')
        ->join('bidang', 'bidang.id_bidang = karyawan.id_bidang')
        ->where('tanggal',$tanggal_penilaian)
        ->where('karyawan.id_bidang',$id_bidang)
        ->findAll();
        
        $data['bidang'] = $this->karyawanModel->where('id_bidang',$id_bidang)->first();
        $data['bdg']=$this->bidangModel->where('id_bidang',$id_bidang)->first();
    }
    // var_dump($data['bidang']);exit;
        $data['cek']=$id_bidang;
        $data['tanggal_penilaian'] = $tanggal_penilaian;
        // var_dump($data['cek']);exit;
        // var_dump($data['bdg']);exit;
        $dompdf->loadHtml(view('data-penilaian-cetak', $data));
        $dompdf->render();
        $dompdf->stream('data-penilaian.pdf', array("Attachment" => false));
    }
    
}

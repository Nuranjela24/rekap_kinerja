<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\AuthModel;
use App\Models\KaryawanModel;
 
class Auth extends Controller
{
    public function __construct()
    {
        // Load session library
        $this->session = \Config\Services::session();
    }
    public function index()
    {
        return view('login');
    }
    public function login()
    {
        // Add your login logic here
        $model = new AuthModel();
        $karyawan = new KaryawanModel();
        $username = $this->request->getPost('username');
        // $password = md5($this->request->getPost('password'));
        $password = md5($this->request->getPost('password'));
        $data = $model->where('username', $username)->where('password', $password)->first();
        // var_dump('a');exit;
        // var_dump($data);exit;
        if($data){
            $_SESSION['id_login'] = $data['id_login'];
            $_SESSION['username'] = $data['username'];
            $_SESSION['level'] = $data['level'];
            $_SESSION['logged_in'] = TRUE;
            session()->set($data);
            if ($data['level']=='admin') {
                
                return redirect()->to('/data-penilaian');
            }else{
                // $id_login=$data['id_login'];
                // $data = $model->where('username', $username)->where('password', $password)->first();
                return redirect()->to('/data-karyawan');
            }
        }else{
            session()->setFlashdata('msg', 'Username atau Password salah');
            return redirect()->to('/');
        }
    }
    
    public function logout()
    {
        // Add your logout logic here
        session()->destroy();
        return redirect()->to('/');
    }

   
}
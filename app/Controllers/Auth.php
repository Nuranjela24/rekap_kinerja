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
        // var_dump(password_hash('admin', PASSWORD_DEFAULT));exit;
        $model = new AuthModel();
        $karyawan = new KaryawanModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password'); // Get the plain password
        $data = $model->where('username', $username)->first(); // Get user data by username

       
        if ($data && password_verify($password, $data['password'])) {
            $_SESSION['id_login'] = $data['id_login'];
            $_SESSION['username'] = $data['username'];
            $_SESSION['level'] = $data['level'];
            $_SESSION['logged_in'] = TRUE;
            session()->set($data);
            if ($data['level'] == 'admin') {
                return redirect()->to('/data-penilaian');
            } else {
                return redirect()->to('/data-karyawan');
            }
        } else {
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
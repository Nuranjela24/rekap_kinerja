<?php

namespace App\Controllers;

class DashboardController extends BaseController
{
    public function index()
    {
        if (!session('id_login')) {
            return redirect()->to('/'); // Ganti '/login' dengan URL login Anda
        }
        echo view('layout/header'); 
        echo view('layout/menu'); 
        echo view('dashboard'); 
        echo view('layout/footer'); 
    }
    
}

<?php

namespace App\Controllers;

class DashboardController extends BaseController
{
    public function index()
    {
        echo view('layout/header'); 
        echo view('layout/menu'); 
        echo view('dashboard'); 
        echo view('layout/footer'); 
    }
    
}

<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('layout/header'); 
        echo view('layout/menu'); 
        echo view('dashboard'); 
        echo view('layout/footer'); 
    }
}

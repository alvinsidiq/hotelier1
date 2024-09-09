<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Halaman Dashboard',
            'menu' => 'dashboard',
            'page' => 'admin/v_dashboard'
        ];
        return view('admin/v_template_admin', $data);
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelLogin;

class Login extends BaseController
{
    public function __construct() {  
        $this->ModelLogin = new ModelLogin();

    }
    public function index()
    {
        $data = [
            'judul' => 'Halaman Login',
        ];
        return view('login/v_login', $data);
    }
    public function ceklogin()
    {
        $validation = \Config\Services::validation();
        if ( $this->validate([
            'email' => [
                'label' => 'email',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} belum diisi...'
                ]
             ],
            'password' => [
                'label' => 'password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} belum diisi...'
                ]
            ],
        ])) {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $cekUser = $this->ModelLogin->CekLogin($email, $password);
            if ($cekUser) {
                session()->set('nama_user', $cekUser['nama_user'] );
                session()->set('level', $cekUser['level'] );
                return redirect()->to(base_url('Admin'));
            }else {
                session()->setFlashdata('gagal', 'Email atau Password Salah...');
                return redirect()->to(base_url('Login'))->withInput('validation', $validation);  
            }
        }else{
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('Login'))->withInput('validation', $validation);
        }
    }

    public function logout(){
        session()->remove('nama_user');
        session()->remove('level');
        session()->setFlashdata('out', 'Anda Berhasil LogOut...');
        return redirect()->to(base_url('Login'));
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelLayanan;

class Layanan extends BaseController
{
    public function __construct()
    {
        $this->ModelLayanan = new ModelLayanan();
    }
    public function index()
    {
        $data = [
            'judul' => 'Halaman Layanan',
            'menu' => 'services',
            'page' => 'admin/layanan/v_index',
            'layanan' => $this->ModelLayanan->allData(),

        ];
        return view('admin/v_template_admin', $data);
    }
    public function simpan(){
        $data = [
            'icon_layanan'=> $this->request->getPost('icon_layanan'),
            'nama_layanan'=> $this->request->getPost('nama_layanan'),
            'ket_layanan'=> $this->request->getPost('ket_layanan'),
        ];
        $this->ModelLayanan->store($data);
        session()->setFlashdata('pesan_berhasil','Data Layanan Berhasil Disimpan');
        return redirect()->to(base_url('Layanan'));
    }
    public function update()
    {
        $data = [
            'id_layanan'=> $this->request->getPost('id_layanan'),
            'icon_layanan'=> $this->request->getPost('icon_layanan'),
            'nama_layanan'=> $this->request->getPost('nama_layanan'),
            'ket_layanan'=> $this->request->getPost('ket_layanan'),
        ];
        $this->ModelLayanan->updateData($data);
        session()->setFlashdata('pesan_berhasil','Data Layanan Berhasil Diupdate');
        return redirect()->to(base_url('Layanan'));
    }
    public function delete($id)
    {
        $data = [
            'id_layanan' =>$id
        ];
        $this ->ModelLayanan->deleteData($data);
        session()->setFlashdata('pesan_hapus','Data Layanan Berhasil Dihapus');
        return redirect()->to(base_url('Layanan'));
    }
}
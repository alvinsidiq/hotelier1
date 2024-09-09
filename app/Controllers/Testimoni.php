<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelTestimoni;

class Testimoni extends BaseController
{
    public function __construct()
    {
        $this->ModelTestimoni = new ModelTestimoni();
    }
    public function index()
    {
        $data = [
            'judul' => 'Halaman Testimoni',
            'menu' => 'testimoni',
            'page' => 'admin/testimoni/v_index',
            'testimoni' => $this->ModelTestimoni->allData(),
        ];
        return view('admin/v_template_admin', $data);
    }
    public function tambah()
    {
        $data = [
            'judul' => 'Tambah Testimoni',
            'menu' => 'testimoni',
            'page' => 'admin/Testimoni/v_tambah',
        ];
        return view('admin/v_template_admin', $data);
    }
    public function simpan()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'photo_testimoni'=>'uploaded[photo_testimoni]|max_size[photo_testimoni,1024]|mime_in[photo_testimoni,image/png,image/jpeg,image/jpg]',
        ]);
        if ($validation->withRequest($this->request)->run()) {
            $photo_testimoni = $this->request->getFile('photo_testimoni');
            $newPhoto = $photo_testimoni->getRandomName();
            $data = [
                'photo_testimoni' => $newPhoto,
                'nama_testimoni' => $this->request->getPost('nama_testimoni'),
                'jabatan_testimoni' => $this->request->getPost('jabatan_testimoni'),
                'testimoni' => $this->request->getPost('testimoni'),
            ];
            $photo_testimoni->move('testimoni/' , $newPhoto);
            $this->ModelTestimoni->store($data);
            session()->setFlashdata('pesan_berhasil','Data Testimoni Berhasil disimpan');
            return redirect()->to(base_url('Testimoni/index'));
        } else {
            session()->setFlashdata('pesan_gagal','Data Tidak Disimpan');
            return redirect()->to(base_url('Testimoni/index'));
        }
    }
    public function edit($id)
    {
        $data = [
            'judul' => 'Edit Testimoni',
            'menu' => 'testimoni',
            'page' => 'admin/Testimoni/v_edit',
            'testimoni' => $this->ModelTestimoni->dataById($id),
        ];
        return view('admin/v_template_admin', $data);
    }
    public function update()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'photo_testimoni'=>'uploaded[photo_testimoni]|max_size[photo_testimoni,1024]|mime_in[photo_testimoni,image/png,image/jpeg,image/jpg]',
        ]);
        if ($validation->withRequest($this->request)->run()) {
            $photo_testimoni = $this->request->getFile('photo_testimoni');
            $newPhoto = $photo_testimoni->getRandomName();
            $data = [
                'id_testimoni'=> $this->request->getPost('id_testimoni'),
                'photo_testimoni' => $newPhoto,
                'nama_testimoni' => $this->request->getPost('nama_testimoni'),
                'jabatan_testimoni' => $this->request->getPost('jabatan_testimoni'),
                'testimoni' => $this->request->getPost('testimoni'),
            ];
            $photo_testimoni->move('testimoni/' , $newPhoto);
            $this->ModelTestimoni->updateData($data);
            session()->setFlashdata('pesan_berhasil','Data Testimoni Berhasil disimpan');
            return redirect()->to(base_url('Testimoni/index'));
        } else {
            $data = [
                'id_testimoni'=> $this->request->getPost('id_testimoni'),
                'nama_testimoni' => $this->request->getPost('nama_testimoni'),
                'jabatan_testimoni' => $this->request->getPost('jabatan_testimoni'),
                'testimoni' => $this->request->getPost('testimoni'),
            ];
            $this->ModelTestimoni->updateData($data);
            session()->setFlashdata('pesan_berhasil','Data Testimoni Berhasil Diupdate');
            return redirect()->to(base_url('Testimoni/index'));
        }
    }
    public function delete($id)
    {
        $data = [
            'id_testimoni' =>$id
        ];
        $this ->ModelTestimoni->deleteData($data);
        session()->setFlashdata('pesan_hapus','Data Testimoni Berhasil Dihapus');
        return redirect()->to(base_url('Testimoni/index'));
    }
}

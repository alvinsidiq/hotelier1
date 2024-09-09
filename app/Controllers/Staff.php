<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelStaff;

class Staff extends BaseController
{
    public function __construct()
    {
        $this->ModelStaff = new ModelStaff();
    }
    public function index()
    {
        $data = [
            'judul' => 'Halaman Staff',
            'menu' => 'staff',
            'page' => 'admin/staff/v_index',
            'staff' => $this->ModelStaff->allData(),
        ];
        return view('admin/v_template_admin', $data);
    }
    public function tambah()
    {
        $data = [
            'judul' => 'Tambah Staff',
            'menu' => 'staff',
            'page' => 'admin/Staff/v_tambah',
        ];
        return view('admin/v_template_admin', $data);
    }
    public function simpan()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'photo_staff'=>'uploaded[photo_staff]|max_size[photo_staff,1024]|mime_in[photo_staff,image/png,image/jpeg,image/jpg]',
        ]);
        if ($validation->withRequest($this->request)->run()) {
            $photo_staff = $this->request->getFile('photo_staff');
            $newPhoto = $photo_staff->getRandomName();
            $data = [
                'photo_staff' => $newPhoto,
                'nama_staff' => $this->request->getPost('nama_staff'),
                'jabatan_staff' => $this->request->getPost('jabatan_staff'),
                'fb_staff' => $this->request->getPost('fb_staff'),
                'x_staff' => $this->request->getPost('x_staff'),
                'ig_staff' => $this->request->getPost('ig_staff'),
            ];
            $photo_staff->move('staff/' , $newPhoto);
            $this->ModelStaff->store($data);
            session()->setFlashdata('pesan_berhasil','Data Staff Berhasil disimpan');
            return redirect()->to(base_url('Staff/index'));
        } else {
            session()->setFlashdata('pesan_gagal','Data Tidak Disimpan');
            return redirect()->to(base_url('Staff/index'));
        }
    }
    public function edit($id)
    {
        $data = [
            'judul' => 'Edit Staff',
            'menu' => 'staff',
            'page' => 'admin/Staff/v_edit',
            'staff' => $this->ModelStaff->dataById($id),
        ];
        return view('admin/v_template_admin', $data);
    }
    public function update()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'photo_staff'=>'uploaded[photo_staff]|max_size[photo_staff,1024]|mime_in[photo_staff,image/png,image/jpeg,image/jpg]',
        ]);
        if ($validation->withRequest($this->request)->run()) {
            $photo_staff = $this->request->getFile('photo_staff');
            $newPhoto = $photo_staff->getRandomName();
            $data = [
                'id_staff'=> $this->request->getPost('id_staff'),
                'photo_staff' => $newPhoto,
                'nama_staff' => $this->request->getPost('nama_staff'),
                'jabatan_staff' => $this->request->getPost('jabatan_staff'),
                'fb_staff' => $this->request->getPost('fb_staff'),
                'x_staff' => $this->request->getPost('x_staff'),
                'ig_staff' => $this->request->getPost('ig_staff'),
            ];
            $photo_staff->move('staff/' , $newPhoto);
            $this->ModelStaff->updateData($data);
            session()->setFlashdata('pesan_berhasil','Data Staff Berhasil disimpan');
            return redirect()->to(base_url('Staff/index'));
        } else {
            $data = [
                'id_staff'=> $this->request->getPost('id_staff'),
                'nama_staff' => $this->request->getPost('nama_staff'),
                'jabatan_staff' => $this->request->getPost('jabatan_staff'),
                'fb_staff' => $this->request->getPost('fb_staff'),
                'x_staff' => $this->request->getPost('x_staff'),
                'ig_staff' => $this->request->getPost('ig_staff'),
            ];
            $this->ModelStaff->updateData($data);
            session()->setFlashdata('pesan_berhasil','Data Staff Berhasil Diupdate');
            return redirect()->to(base_url('Staff/index'));
        }
    }
    public function delete($id)
    {
        $data = [
            'id_staff' =>$id
        ];
        $this ->ModelStaff->deleteData($data);
        session()->setFlashdata('pesan_hapus','Data Staff Berhasil Dihapus');
        return redirect()->to(base_url('Staff/index'));
    }
}

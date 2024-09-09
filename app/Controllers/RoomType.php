<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelRoomType;

class RoomType extends BaseController
{
    public function __construct()
    {
        $this->ModelRoomType = new ModelRoomType();
    }
    public function index()
    {
        $data = [
            'judul' => 'Halaman Room Type',
            'menu' => 'roomtype',
            'page' => 'admin/roomtype/v_index',
            'roomtype' => $this->ModelRoomType->allData(),

        ];
        return view('admin/v_template_admin', $data);
    }
    public function simpan(){
        $data = [
            'nama_roomtype'=> $this->request->getPost('nama_roomtype'),
            'harga'=> $this->request->getPost('harga'),
        ];
        $this->ModelRoomType->store($data);
        session()->setFlashdata('pesan_berhasil','Data Room Type Berhasil Disimpan');
        return redirect()->to(base_url('RoomType'));
    }
    public function update()
    {
        $data = [
            'id_roomtype'=> $this->request->getPost('id_roomtype'),
            'nama_roomtype'=> $this->request->getPost('nama_roomtype'),
            'harga'=> $this->request->getPost('harga'),
        ];
        $this->ModelRoomType->updateData($data);
        session()->setFlashdata('pesan_berhasil','Data Room Type Berhasil Diupdate');
        return redirect()->to(base_url('RoomType'));
    }
    public function delete($id)
    {
        $data = [
            'id_roomtype' =>$id
        ];
        $this ->ModelRoomType->deleteData($data);
        session()->setFlashdata('pesan_hapus','Data Room Type Berhasil Dihapus');
        return redirect()->to(base_url('RoomType'));
    }
}
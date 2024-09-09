<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelRoom;
use App\Models\ModelRoomType;

class Room extends BaseController
{
    public function __construct()
    {
        $this->ModelRoom = new ModelRoom();
        $this->ModelRoomType = new ModelRoomType();
    }
    public function index()
    {
        $data = [
            'judul' => 'Halaman Room',
            'menu' => 'room',
            'page' => 'admin/room/v_index',
            'room' => $this->ModelRoom->allData(),
        ];
        return view('admin/v_template_admin', $data);
    }
    public function tambah()
    {
        $data = [
            'judul' => 'Tambah Room',
            'menu' => 'room',
            'page' => 'admin/room/v_tambah',
            'roomtype' => $this->ModelRoomType->allData(),
        ];
        return view('admin/v_template_admin', $data);
    }
    public function simpan()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'photo_room'=>'uploaded[photo_room]|max_size[photo_room,2048]|mime_in[photo_room,image/png,image/jpeg,image/jpg]',
        ]);
        if ($validation->withRequest($this->request)->run()) {
            $photo_room = $this->request->getFile('photo_room');
            $newPhoto = $photo_room->getRandomName();
            $data = [
                'photo_room' => $newPhoto,
                'id_roomtype' => $this->request->getPost('id_roomtype'),
                'star' => $this->request->getPost('star'),
                'jml_bed' => $this->request->getPost('jml_bed'),
                'jml_bath' => $this->request->getPost('jml_bath'),
                'ket_room' => $this->request->getPost('ket_room'),
            ];
            $photo_room->move('rooms/' , $newPhoto);
            $this->ModelRoom->store($data);
            session()->setFlashdata('pesan_berhasil','Data Room Berhasil disimpan');
            return redirect()->to(base_url('Room'));
        } else {
            session()->setFlashdata('pesan_gagal','Data Tidak Disimpan');
            return redirect()->to(base_url('Room'));
        }
    }
    public function edit($id)
    {
        $data = [
            'judul' => 'Edit Room',
            'menu' => 'room',
            'page' => 'admin/Room/v_edit',
            'room' => $this->ModelRoom->dataById($id),
            'allroom' => $this->ModelRoom->allData(),
        ];
        return view('admin/v_template_admin', $data);
    }
    public function update()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'photo_room'=>'uploaded[photo_room]|max_size[photo_room,2048]|mime_in[photo_room,image/png,image/jpeg,image/jpg]',
        ]);
        if ($validation->withRequest($this->request)->run()) {
            $photo_room = $this->request->getFile('photo_room');
            $newPhoto = $photo_room->getRandomName();
            $data = [
                'photo_room' => $newPhoto,
                'id_room'=> $this->request->getPost('id_room'),
                'id_roomtype' => $this->request->getPost('id_roomtype'),
                'star' => $this->request->getPost('star'),
                'jml_bed' => $this->request->getPost('jml_bed'),
                'jml_bath' => $this->request->getPost('jml_bath'),
                'ket_room' => $this->request->getPost('ket_room'),
            ];
            $photo_room->move('rooms/' , $newPhoto);
            $this->ModelRoom->updateData($data);
            session()->setFlashdata('pesan_berhasil','Data Room Berhasil Diupdate');
            return redirect()->to(base_url('room'));
        } else {
            $data = [
                'id_room'=> $this->request->getPost('id_room'),
                'id_roomtype' => $this->request->getPost('id_roomtype'),
                'star' => $this->request->getPost('star'),
                'jml_bed' => $this->request->getPost('jml_bed'),
                'jml_bath' => $this->request->getPost('jml_bath'),
                'ket_room' => $this->request->getPost('ket_room'),
            ];
            $this->ModelRoom->updateData($data);
            session()->setFlashdata('pesan_berhasil','Data Room Berhasil Diupdate');
            return redirect()->to(base_url('Room'));
        }
    }
    public function delete($id)
    {
        $data = [
            'id_room' =>$id
        ];
        $this ->ModelRoom->deleteData($data);
        session()->setFlashdata('pesan_hapus','Data Room Berhasil Dihapus');
        return redirect()->to(base_url('Room'));
    }
}

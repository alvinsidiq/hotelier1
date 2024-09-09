<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelCarousel;

class Carousel extends BaseController
{
    public function __construct()
    {
        $this->ModelCarousel = new ModelCarousel();
    }
    public function index()
    {
        $data = [
            'judul' => 'Halaman Carousel',
            'menu' => 'carousel',
            'page' => 'admin/carousel/v_index',
            'carousel' => $this->ModelCarousel->allData(),
        ];
        return view('admin/v_template_admin', $data);
    }
    public function tambah()
    {
        $data = [
            'judul' => 'Tambah Carousel',
            'menu' => 'carousel',
            'page' => 'admin/Carousel/v_tambah',
        ];
        return view('admin/v_template_admin', $data);
    }
    public function simpan()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'photo'=>'uploaded[photo]|max_size[photo,2048]|mime_in[photo,image/png,image/jpeg,image/jpg]',
        ]);
        if ($validation->withRequest($this->request)->run()) {
            $photo = $this->request->getFile('photo');
            $newPhoto = $photo->getRandomName();
            $data = [
                'photo' => $newPhoto,
                'judul_carousel' => $this->request->getPost('judul_carousel'),
                'ket_carousel' => $this->request->getPost('ket_carousel'),
            ];
            $photo->move('sliders/' , $newPhoto);
            $this->ModelCarousel->store($data);
            session()->setFlashdata('pesan_berhasil','Data Carousel Berhasil disimpan');
            return redirect()->to(base_url('Carousel'));
        } else {
            session()->setFlashdata('pesan_gagal','Data Tidak Disimpan');
            return redirect()->to(base_url('Carousel'));
        }
    }
    public function edit($id)
    {
        $data = [
            'judul' => 'Edit Carousel',
            'menu' => 'carousel',
            'page' => 'admin/Carousel/v_edit',
            'carousel' => $this->ModelCarousel->dataById($id),
        ];
        return view('admin/v_template_admin', $data);
    }
    public function update()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'photo'=>'uploaded[photo]|max_size[photo,2048]|mime_in[photo,image/png,image/jpeg,image/jpg]',
        ]);
        if ($validation->withRequest($this->request)->run()) {
            $photo = $this->request->getFile('photo');
            $newPhoto = $photo->getRandomName();
            $data = [
                'photo' => $newPhoto,
                'id_carousel'=> $this->request->getPost('id_carousel'),
                'judul_carousel' => $this->request->getPost('judul_carousel'),
                'ket_carousel' => $this->request->getPost('ket_carousel'),
            ];
            $photo->move('sliders/' , $newPhoto);
            $this->ModelCarousel->updateData($data);
            session()->setFlashdata('pesan_berhasil','Data Carousel Berhasil Diupdate');
            return redirect()->to(base_url('Carousel'));
        } else {
            $data = [
                'id_carousel'=> $this->request->getPost('id_carousel'),
                'judul_carousel' => $this->request->getPost('judul_carousel'),
                'ket_carousel' => $this->request->getPost('ket_carousel'),
            ];
            $this->ModelCarousel->updateData($data);
            session()->setFlashdata('pesan_berhasil','Data Carousel Berhasil Diupdate');
            return redirect()->to(base_url('Carousel'));
        }
    }
    public function delete($id)
    {
        $data = [
            'id_carousel' =>$id
        ];
        $this ->ModelCarousel->deleteData($data);
        session()->setFlashdata('pesan_hapus','Data Carousel Berhasil Dihapus');
        return redirect()->to(base_url('Carousel'));
    }
}

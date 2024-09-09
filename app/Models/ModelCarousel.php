<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelCarousel extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_carousel')->get()->getResultArray();
    }

    public function dataById($id)
    {
        return $this->db->table('tbl_carousel')
        ->where('id_carousel', $id)->get()->getRowArray();
    }
    public function store($data)
    {
        $this->db->table('tbl_carousel')->insert($data);
    }
    public function updateData($data)
    {
        $this->db->table('tbl_carousel')
            ->where('id_carousel', $data['id_carousel'])->update($data);
    }
    public function deleteData($data)
    {
        $this->db->table('tbl_carousel')
        ->where('id_carousel', $data['id_carousel'])->delete($data);
    }
}
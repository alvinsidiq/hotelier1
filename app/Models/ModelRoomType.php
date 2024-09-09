<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelRoomType extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_roomtype')->get()->getResultArray();
    }

    public function store($data)
    {
        $this->db->table('tbl_roomtype')->insert($data);
    }
    public function updateData($data)
    {
        $this->db->table('tbl_roomtype')
            ->where('id_roomtype', $data['id_roomtype'])->update($data);
    }
    public function deleteData($data)
    {
        $this->db->table('tbl_roomtype')
        ->where('id_roomtype', $data['id_roomtype'])->delete($data);
    }
}
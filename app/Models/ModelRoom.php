<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelRoom extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_room')
        ->join('tbl_roomtype', 'tbl_roomtype.id_roomtype = tbl_room.id_roomtype', 'left')->get()->getResultArray();
    }

    public function dataById($id)
    {
        return $this->db->table('tbl_room')
        ->where('id_room', $id)->get()->getRowArray();
    }
    public function store($data)
    {
        $this->db->table('tbl_room')->insert($data);
    }
    public function updateData($data)
    {
        $this->db->table('tbl_room')
            ->where('id_room', $data['id_room'])->update($data);
    }
    public function deleteData($data)
    {
        $this->db->table('tbl_room')
        ->where('id_room', $data['id_room'])->delete($data);
    }
}
<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelStaff extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_staff')->get()->getResultArray();
    }

    public function dataById($id)
    {
        return $this->db->table('tbl_staff')
        ->where('id_staff', $id)->get()->getRowArray();
    }
    public function store($data)
    {
        $this->db->table('tbl_staff')->insert($data);
    }
    public function updateData($data)
    {
        $this->db->table('tbl_staff')
            ->where('id_staff', $data['id_staff'])->update($data);
    }
    public function deleteData($data)
    {
        $this->db->table('tbl_staff')
        ->where('id_staff', $data['id_staff'])->delete($data);
    }
}
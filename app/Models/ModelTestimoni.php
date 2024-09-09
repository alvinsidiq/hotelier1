<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelTestimoni extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_testimoni')->get()->getResultArray();
    }

    public function dataById($id)
    {
        return $this->db->table('tbl_testimoni')
        ->where('id_testimoni', $id)->get()->getRowArray();
    }
    public function store($data)
    {
        $this->db->table('tbl_testimoni')->insert($data);
    }
    public function updateData($data)
    {
        $this->db->table('tbl_testimoni')
            ->where('id_testimoni', $data['id_testimoni'])->update($data);
    }
    public function deleteData($data)
    {
        $this->db->table('tbl_testimoni')
        ->where('id_testimoni', $data['id_testimoni'])->delete($data);
    }
}
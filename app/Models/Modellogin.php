<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLogin extends Model
{
   public function CekLogin($email, $password)
   {
    return $this->db->table('tbl_user')->where(['email' => $email, 'password' => $password])->get()->getRowArray();
   }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModels extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['nama', 'alamat', 'telp', 'tempat_lahir', 'tanggal_lahir', 'email', 'password', 'level'];

    // public function update_user($data, $id)
    // {
    //     return $this->db->table($this->table)->update($data, ['id' => $id]);
    // }
    public function delete_list($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    }
}

<?php

namespace app\Models;

use CodeIgniter\Model;

class ModelUser extends Model
{
    protected $table = 'users';
    protected $userTimestamps = true;
    // protected $allowedFields = ['id_sepatu', 'tipe', 'jenis', 'warna', 'harga', 'foto1', 'foto2', 'foto3', 'foto4', 'id_brand'];

    public function getUsers()
    {
        return $this->findAll();
    }

    public function getDetail($id)
    {
        return $this->where(['id_users' => $id])->first();
    }
}

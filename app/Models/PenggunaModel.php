<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'username', 'password', 'Nama_Lengkap', 'TTL',
        'Jenis_Kelamin', 'Alamat', 'Kab_Kota', 'Provinsi', 'No_HP'
    ];
    public function getPengguna($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
    public function search($keyword)
    {
        $builder = $this->table('users');
        $builder->like('username', $keyword);
        return $builder;
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class AksesorisModel extends Model
{
    protected $table = 'aksesoris';
    protected $primaryKey = 'Id_Aksesoris';
    protected $allowedFields = ['No_Aksesoris', 'Nama_Aksesoris', 'Deskripsi', 'Harga', 'Gambar'];
    public function getAkse($Id_Aksesoris = false)
    {
        if ($Id_Aksesoris == false) {
            return $this->findAll();
        }
        return $this->where(['Id_Aksesoris' => $Id_Aksesoris])->first();
    }
    public function search($keyword)
    {
        $builder = $this->table('aksesoris');
        $builder->like('Nama_Aksesoris', $keyword);
        return $builder;
    }
    public function searchfiltermax($filtermax)
    {
        $builder = $this->table('aksesoris');
        $builder->where('Harga <=', $filtermax);
        return $builder;
    }
    public function searchfiltermin($filtermin)
    {
        $builder = $this->table('aksesoris');
        $builder->where('Harga >=', $filtermin);
        return $builder;
    }
    public function searchmerk($merk)
    {
        $builder = $this->table('aksesoris');
        $builder->like('Nama_Aksesoris', $merk);
        return $builder;
    }
}

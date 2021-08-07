<?php

namespace App\Models;

use CodeIgniter\Model;

class LaptopModel extends Model
{
    protected $table = 'laptop';
    protected $primaryKey = 'Id_Laptop';
    protected $allowedFields = [
        'No_Laptop', 'Nama_Laptop', 'Processor',
        'Display', 'Sistem_Operasi', 'RAM', 'Hard_Drive',
        'Konektivitas', 'Harga', 'Gambar'
    ];
    public function getLaptop($Id_Laptop = false)
    {
        if ($Id_Laptop == false) {
            return $this->findAll();
        }
        return $this->where(['Id_Laptop' => $Id_Laptop])->first();
    }
    public function search($keyword)
    {
        $builder = $this->table('laptop');
        $builder->like('Nama_Laptop', $keyword);
        return $builder;
    }
    public function searchfiltermax($filtermax)
    {
        $builder = $this->table('laptop');
        $builder->where('Harga <=', $filtermax);
        return $builder;
    }
    public function searchfiltermin($filtermin)
    {
        $builder = $this->table('laptop');
        $builder->where('Harga >=', $filtermin);
        return $builder;
    }
    public function searchmerk($merk)
    {
        $builder = $this->table('laptop');
        $builder->like('Nama_Laptop', $merk);
        return $builder;
    }
}

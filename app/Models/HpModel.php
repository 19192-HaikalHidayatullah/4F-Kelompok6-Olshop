<?php

namespace App\Models;

use CodeIgniter\Model;

class HpModel extends Model
{
    protected $table = 'hp';
    protected $primaryKey = 'Id_Hp';
    protected $allowedFields = [
        'No_Hp', 'Nama_Hp', 'Rilis',
        'Chipset', 'RAM', 'Memori_Internal', 'Ukuran',
        'Kamera_Depan', 'Kamera_Belakang', 'SIM',
        'Baterai', 'Harga', 'Gambar'
    ];
    public function getHp($Id_Hp = false)
    {
        if ($Id_Hp == false) {
            return $this->findAll();
        }
        return $this->where(['Id_Hp' => $Id_Hp])->first();
    }
    public function search($keyword)
    {
        $builder = $this->table('hp');
        $builder->like('Nama_Hp', $keyword);
        return $builder;
    }
    public function searchfiltermax($filtermax)
    {
        $builder = $this->table('hp');
        $builder->where('Harga <=', $filtermax);
        return $builder;
    }
    public function searchfiltermin($filtermin)
    {
        $builder = $this->table('hp');
        $builder->where('Harga >=', $filtermin);
        return $builder;
    }
    public function searchmerk($merk)
    {
        $builder = $this->table('hp');
        $builder->like('Nama_Hp', $merk);
        return $builder;
    }
}

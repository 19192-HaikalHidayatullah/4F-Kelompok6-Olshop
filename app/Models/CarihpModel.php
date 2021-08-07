<?php

namespace App\Models;

use CodeIgniter\Model;

class CarihpModel extends Model
{
    protected $table = 'hp';
    protected $allowedFields =
    [
        'No_Hp', 'Nama_Hp', 'Rilis',
        'Chipset', 'RAM', 'Memori_Internal', 'Ukuran',
        'Kamera_Depan', 'Kamera_Belakang', 'SIM',
        'Baterai', 'Harga', 'Gambar'
    ];

    public function search($keyword)
    {
        $builder = $this->table('hp');
        $builder->like('Nama_Hp', $keyword);
        return $builder;
    }
}

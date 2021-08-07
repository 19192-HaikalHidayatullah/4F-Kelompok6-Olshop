<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'Id_Transaksi';
    protected $allowedFields = ['No_Transaksi', 'No_Produk', 'Username', 'Tanggal_Transaksi', 'bukti'];
    public function getTransaksi($Id_Transaksi = false)
    {
        if ($Id_Transaksi == false) {
            return $this->findAll();
        }
        return $this->where(['Id_Transaksi' => $Id_Transaksi])->first();
    }
    public function search($keyword)
    {
        $builder = $this->table('transaksi');
        $builder->like('No_Transaksi', $keyword);
        return $builder;
    }
}

<?php

namespace App\Controllers;

use App\Models\AksesorisModel;
use App\Models\HpModel;
use App\Models\LaptopModel;
use App\Models\PenggunaModel;
use App\Models\KeranjangModel;
use App\Models\TransaksiModel;

class User extends BaseController
{
    protected $AksesorisModel;
    protected $PenggunaModel;
    protected $HpModel;
    protected $LaptopModel;
    protected $TransaksiModel;
    protected $KeranjangModel;
    protected $CariakseModel;
    protected $CarihpModel;
    protected $CarilaptopModel;

    public function __construct()
    {
        $this->AksesorisModel = new AksesorisModel();
        $this->HpModel = new HpModel();
        $this->LaptopModel = new LaptopModel();
        $this->PenggunaModel = new PenggunaModel();
        $this->KeranjangModel = new KeranjangModel();
        $this->TransaksiModel = new TransaksiModel();
    }

    public function index()
    {
        $keyword = $this->request->getVar('cari');
        if ($keyword) {
            $dataakse = $this->AksesorisModel->search($keyword);
            $datalaptop = $this->LaptopModel->search($keyword);
            $datahp = $this->HpModel->search($keyword);
        } else {
            $dataakse = $this->AksesorisModel;
            $datahp = $this->HpModel;
            $datalaptop = $this->LaptopModel;
        }
        $judul = [
            'title' => 'Online Tech Shop',
            'Aksesoris' => $dataakse->getAkse(),
            'Hp' => $datahp->getHp(),
            'Laptop' => $datalaptop->getLaptop(),
            'pengguna' => $this->PenggunaModel->getPengguna()
        ];

        return view('Pages/user/home_user', $judul);
    }
    public function hp()
    {
        $keyword = $this->request->getVar('cari');
        if ($keyword) {
            $datahp = $this->HpModel->search($keyword);
        } else {
            $datahp = $this->HpModel;
        }
        $judul = [
            'title' => 'Online Tech Shop',
            'Hp' => $datahp->getHp()
        ];
        return view('Pages/user/hp_user', $judul);
    }
    public function laptop()
    {
        $keyword = $this->request->getVar('cari');
        if ($keyword) {
            $datalaptop = $this->LaptopModel->search($keyword);
        } else {
            $datalaptop = $this->LaptopModel;
        }
        $judul = [
            'title' => 'Online Tech Shop',
            'Laptop' => $datalaptop->getLaptop()
        ];
        return view('Pages/user/laptop_user', $judul);
    }
    public function aksesoris()
    {
        $keyword = $this->request->getVar('cari');
        if ($keyword) {
            $dataakse = $this->AksesorisModel->search($keyword);
        } else {
            $dataakse = $this->AksesorisModel;
        }
        $judul = [
            'title' => 'Online Tech Shop',
            'Aksesoris' => $dataakse->getAkse()
        ];
        return view('Pages/user/aksesoris_user', $judul);
    }
    public function filter()
    {
        $merk = $this->request->getVar('merk');
        if ($merk) {
            $datalaptop = $this->LaptopModel->searchmerk($merk);
            $dataakse = $this->AksesorisModel->searchmerk($merk);
            $datahp = $this->HpModel->searchmerk($merk);
        }
        if ($merk == "all") {
            $dataakse = $this->AksesorisModel->getAkse();
            $datalaptop = $this->LaptopModel->getLaptop();
            $datahp = $this->HpModel->getHp();
        } else {
            $dataakse = $this->AksesorisModel;
            $datalaptop = $this->LaptopModel;
            $datahp = $this->HpModel;
        }
        $filtermax = $this->request->getVar('filtermax');
        if ($filtermax) {
            $dataakse = $this->AksesorisModel->searchfiltermax($filtermax);
            $datalaptop = $this->LaptopModel->searchfiltermax($filtermax);
            $datahp = $this->HpModel->searchfiltermax($filtermax);
        } else {
            $dataakse = $this->AksesorisModel;
            $datalaptop = $this->LaptopModel;
            $datahp = $this->HpModel;
        }
        $filtermin = $this->request->getVar('filtermin');
        if ($filtermin) {
            $dataakse = $this->AksesorisModel->searchfiltermin($filtermin);
            $datalaptop = $this->LaptopModel->searchfiltermin($filtermin);
            $datahp = $this->HpModel->searchfiltermin($filtermin);
        } else {
            $dataakse = $this->AksesorisModel;
            $datahp = $this->HpModel;
            $datalaptop = $this->LaptopModel;
        }
        $judul = [
            'title' => 'Online Tech Shop',
            'Aksesoris' => $dataakse->getAkse(),
            'Laptop' => $datalaptop->getLaptop(),
            'Hp' => $datahp->getHp()
        ];
        return view('Pages/user/home_user', $judul);
    }
    public function filterakse()
    {
        $filtermax = $this->request->getVar('filtermax');
        if ($filtermax) {
            $dataakse = $this->AksesorisModel->searchfiltermax($filtermax);
        } else {
            $dataakse = $this->AksesorisModel->getAkse();
        }
        $filtermin = $this->request->getVar('filtermin');
        if ($filtermin) {
            $dataakse = $this->AksesorisModel->searchfiltermin($filtermin);
        } else {
            $dataakse = $this->AksesorisModel;
        }
        $judul = [
            'title' => 'Online Tech Shop',
            'Aksesoris' => $dataakse->getAkse()
        ];
        return view('Pages/user/aksesoris_user', $judul);
    }
    public function filterhp()
    {
        $merk = $this->request->getVar('merk');
        if ($merk) {
            $datahp = $this->HpModel->searchmerk($merk);
        }
        if ($merk == "all") {
            $datahp = $this->HpModel->getHp();
        } else {
            $datahp = $this->HpModel;
        }
        $filtermax = $this->request->getVar('filtermax');
        if ($filtermax) {
            $datahp = $this->HpModel->searchfiltermax($filtermax);
        } else {
            $datahp = $this->HpModel;
        }
        $filtermin = $this->request->getVar('filtermin');
        if ($filtermin) {
            $datahp = $this->HpModel->searchfiltermin($filtermin);
        } else {
            $datahp = $this->HpModel;
        }
        $judul = [
            'title' => 'Online Tech Shop',
            'Hp' => $datahp->getHp()
        ];
        return view('Pages/user/hp_user', $judul);
    }
    public function filterlaptop()
    {
        $merk = $this->request->getVar('merk');
        if ($merk) {
            $datalaptop = $this->LaptopModel->searchmerk($merk);
        }
        if ($merk == "all") {
            $datalaptop = $this->LaptopModel->getLaptop();
        } else {
            $datalaptop = $this->LaptopModel;
        }
        $filtermax = $this->request->getVar('filtermax');
        if ($filtermax) {
            $datalaptop = $this->LaptopModel->searchfiltermax($filtermax);
        } else {
            $datalaptop = $this->LaptopModel;
        }
        $filtermin = $this->request->getVar('filtermin');
        if ($filtermin) {
            $datalaptop = $this->LaptopModel->searchfiltermin($filtermin);
        } else {
            $datalaptop = $this->LaptopModel;
        }
        $judul = [
            'title' => 'Online Tech Shop',
            'Laptop' => $datalaptop->getLaptop()
        ];
        return view('Pages/user/laptop_user', $judul);
    }

    public function login()
    {
        $judul = [
            'title' => 'Login',
        ];
        return view('Pages/user/masuk6', $judul);
    }
    public function daftar()
    {
        $judul = [
            'title' => 'Daftar',
        ];
        return view('Pages/user/daftar6', $judul);
    }

    public function cart()
    {
        $judul = [
            'title' => 'Cart',
            'keranjang' => $this->KeranjangModel->getKeranjang()
        ];
        return view('Pages/user/keranjang_user', $judul);
    }

    public function profile()
    {
        $judul = [
            'title' => 'Profile',
            'pengguna' => $this->PenggunaModel->getPengguna()
        ];
        return view('Pages/user/profil_user', $judul);
    }
    public function updateprofile($id)
    {
        $this->PenggunaModel->save([
            'id' => $id,
            'username' => $this->request->getVar('username'),
            'Nama_Lengkap' => $this->request->getVar('Nama_Lengkap'),
            'TTL' => $this->request->getVar('TTL'),
            'Alamat' => $this->request->getVar('Alamat'),
            'Jenis_Kelamin' => $this->request->getVar('Jenis_Kelamin'),
            'No_HP' => $this->request->getVar('No_HP'),
        ]);
        return redirect()->to('/home');
    }
    public function buktikirim()
    {
        $judul = [
            'title' => 'Bukti Kirim',
            'transaksi' => $this->TransaksiModel->getTransaksi()
        ];
        return view('Pages/user/home_user', $judul);
    }
    public function updatetransaksi($Id_Transaksi)
    {
        $this->TransaksiModel->save([
            'Id_Transaksi' => $Id_Transaksi,
            'No_Transaksi' => $this->request->getVar('No_Transaksi'),
            'No_Produk' => $this->request->getVar('No_Produk'),
            'Username' => $this->request->getVar('Username'),
            'Tanggal_Transaksi' => $this->request->getVar('Tanggal_Transaksi'),
            'bukti' => $this->request->getVar('bukti')

        ]);
        return redirect()->to('/home');
    }
    public function bukti()
    {
        $judul = [
            'title' => 'Bukti',
            'transaksi' => $this->TransaksiModel->getTransaksi()
        ];
        return view('Pages/user/bukti_user', $judul);
    }
    public function fakse()
    {
        $judul = [
            'title' => 'Kelola Data Aksesoris',
            'validation' => \Config\Services::validation()
        ];

        return view('Pages/user/aksesoris_user', $judul);
    }
    public function fhp()
    {
        $judul = [
            'title' => 'Kelola Data Hp',
            'validation' => \Config\Services::validation()
        ];
        return view('Pages/user/hp_user', $judul);
    }
    public function flaptop()
    {
        $judul = [
            'title' => 'Kelola Data Laptop',
            'validation' => \Config\Services::validation()
        ];
        return view('Pages/user/laptop_user', $judul);
    }
    public function detaillaptop($Id_Laptop)
    {
        $data = [
            'title' => 'Detail Produk',
            'laptop' => $this->LaptopModel->getLaptop($Id_Laptop)
        ];
        return view('Pages/user/detail_laptop', $data);
    }
    public function detailhp($Id_Hp)
    {
        $data = [
            'title' => 'Detail Produk',
            'hp' => $this->HpModel->getHp($Id_Hp)
        ];
        return view('Pages/user/detail_hp', $data);
    }
    public function detailakse($Id_Aksesoris)
    {
        $data = [
            'title' => 'Detail Produk',
            'akse' => $this->AksesorisModel->getAkse($Id_Aksesoris)
        ];
        return view('Pages/user/detail_aksesoris', $data);
    }
    public function detailhomeakse($Id_Aksesoris)
    {
        $data = [
            'title' => 'Detail Produk',
            'akse' => $this->AksesorisModel->getAkse($Id_Aksesoris),
        ];
        return view('Pages/user/detail_aksehome', $data);
    }
    public function detailhomehp($Id_Hp)
    {
        $data = [
            'title' => 'Detail Produk',
            'hp' => $this->HpModel->getHp($Id_Hp)
        ];
        return view('Pages/user/detail_hphome', $data);
    }
    public function detailhomelaptop($Id_Laptop)
    {
        $data = [
            'title' => 'Detail Produk',
            'laptop' => $this->LaptopModel->getLaptop($Id_Laptop)
        ];
        return view('Pages/user/detail_laptophome', $data);
    }
    public function transaksilaptop($Id_Laptop)
    {
        $data = [
            'laptop' => $this->LaptopModel->getLaptop($Id_Laptop)
        ];
        return view('Pages/user/buktilaptop', $data);
    }
    public function transaksiakse($Id_Aksesoris)
    {
        $data = [
            'aksesoris' => $this->AksesorisModel->getAkse($Id_Aksesoris)
        ];
        return view('Pages/user/buktiakse', $data);
    }
    public function transaksihp($Id_Hp)
    {
        $data = [
            'hp' => $this->HpModel->getHp($Id_Hp)
        ];
        return view('Pages/user/buktihp', $data);
    }
    public function transaksi()
    {
        $data = [
            'transaksi' => $this->TransaksiModel->getTransaksi()
        ];
        return view('Pages/user/bukti_user', $data);
    }
    public function kirimbuktilaptop($Id_Laptop)
    {
        $FileGambar = $this->request->getFile('gambar');
        $FileGambar->move('img/user');
        $NamaFile = $FileGambar->getName();
        $laptop = $this->LaptopModel->getLaptop($Id_Laptop);
        $tanggal = date("Y-m-d H:i:s");
        $this->TransaksiModel->save([
            'No_Produk' => $laptop['No_Laptop'],
            'Tanggal_Transaksi' => $tanggal,
            'bukti' => $NamaFile
        ]);

        return redirect()->to('/home');
    }
    public function kirimbuktiakse($Id_Aksesoris)
    {
        $FileGambar = $this->request->getFile('gambar');
        $FileGambar->move('img/user');
        $NamaFile = $FileGambar->getName();
        $akse = $this->AksesorisModel->getAkse($Id_Aksesoris);
        $tanggal = date("Y-m-d H:i:s");
        $this->TransaksiModel->save([
            'No_Produk' => $akse['No_Aksesoris'],
            'Tanggal_Transaksi' => $tanggal,
            'bukti' => $NamaFile
        ]);

        return redirect()->to('/home');
    }
    public function kirimbuktihp($Id_Hp)
    {
        $FileGambar = $this->request->getFile('gambar');
        $FileGambar->move('img/user');
        $NamaFile = $FileGambar->getName();
        $hp = $this->HpModel->getHp($Id_Hp);
        $tanggal = date("Y-m-d H:i:s");
        $this->TransaksiModel->save([
            'No_Produk' => $hp['No_Hp'],
            'Tanggal_Transaksi' => $tanggal,
            'bukti' => $NamaFile
        ]);

        return redirect()->to('/home');
    }
}

<?php

namespace App\Controllers;

use App\Models\AksesorisModel;
use App\Models\HpModel;
use App\Models\LaptopModel;
use App\Models\TransaksiModel;
use App\Models\PenggunaModel;

class Admin extends BaseController
{
	protected $AksesorisModel;
	protected $HpModel;
	protected $LaptopModel;
	protected $TransaksiModel;
	protected $PenggunaModel;

	public function __construct()
	{
		$this->AksesorisModel = new AksesorisModel();
		$this->HpModel = new HpModel();
		$this->LaptopModel = new LaptopModel();
		$this->TransaksiModel = new TransaksiModel();
		$this->PenggunaModel = new PenggunaModel();
	}

	public function index()
	{
		$keyword = $this->request->getVar('cari');
		if ($keyword) {
			$datapengguna = $this->PenggunaModel->search($keyword);
		} else {
			$datapengguna = $this->PenggunaModel;
		}
		$judul = [
			'title' => 'Kelola Data Pengguna',
			'validation' => \Config\Services::validation(),
			'Pengguna' => $datapengguna->getPengguna()

		];
		return view('Pages/Admin/lihat_admin', $judul);
	}
	public function akse()
	{
		$judul = [
			'title' => 'Kelola Data Aksesoris',
			'validation' => \Config\Services::validation()
		];

		return view('Pages/Admin/akse_admin', $judul);
	}
	public function hp()
	{
		$judul = [
			'title' => 'Kelola Data Hp',
			'validation' => \Config\Services::validation()
		];
		return view('Pages/Admin/hp_admin', $judul);
	}
	public function laptop()
	{
		$judul = [
			'title' => 'Kelola Data Laptop',
			'validation' => \Config\Services::validation()
		];
		return view('Pages/Admin/laptop_admin', $judul);
	}
	public function produk()
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
			'title' => 'Kelola Data Produk',
			'Aksesoris' => $dataakse->getAkse(),
			'Hp' => $datahp->getHp(),
			'Laptop' => $datalaptop->getLaptop()
		];
		return view('Pages/Admin/produk_admin', $judul);
	}
	public function transaksi()
	{
		$keyword = $this->request->getVar('cari');
		if ($keyword) {
			$datatransaksi = $this->TransaksiModel->search($keyword);
		} else {
			$datatransaksi = $this->TransaksiModel;
		}
		$judul = [
			'title' => 'Kelola Data Transaksi',
			'Transaksi' => $datatransaksi->getTransaksi()
		];
		return view('Pages/Admin/transaksi_admin', $judul);
	}
	public function crakse()
	{
		$judul = [
			'title' => 'Tambah Data Aksesoris'
		];
		return view('Pages/Admin/akse_admin', $judul);
	}
	public function saveakse()
	{
		if (!$this->validate([
			'No_Aksesoris' => 'required|is_unique[aksesoris.No_Aksesoris]'
		])) {
			$validation = \Config\Services::validation();
			return redirect()->to('/admin/akse')->withInput()->with('validation', $validation);
		}
		$FileGambar = $this->request->getFile('Gambar');
		$FileGambar->move('img/admin');
		$NamaFile = $FileGambar->getName();

		$this->AksesorisModel->save([
			'No_Aksesoris' => $this->request->getVar('No_Aksesoris'),
			'Nama_Aksesoris' => $this->request->getVar('Nama_Aksesoris'),
			'Deskripsi' => $this->request->getVar('Deskripsi'),
			'Harga' => $this->request->getVar('Harga'),
			'Gambar' => $NamaFile
		]);
		session()->setFlashdata('pesan', 'Data Berhasil ditambahkan');

		return redirect()->to('/admin/produk');
	}
	public function savelaptop()
	{
		if (!$this->validate([
			'No_Laptop' => 'required|is_unique[laptop.No_Laptop]'
		])) {
			$validation = \Config\Services::validation();
			return redirect()->to('/admin/laptop')->withInput()->with('validation', $validation);
		}
		$FileGambar = $this->request->getFile('Gambar');
		$FileGambar->move('img/admin');
		$NamaFile = $FileGambar->getName();

		$this->LaptopModel->save([
			'No_Laptop' => $this->request->getVar('No_Laptop'),
			'Nama_Laptop' => $this->request->getVar('Nama_Laptop'),
			'Processor' => $this->request->getVar('Processor'),
			'Display' => $this->request->getVar('Display'),
			'Sistem_Operasi' => $this->request->getVar('Sistem_Operasi'),
			'RAM' => $this->request->getVar('RAM'),
			'Hard_Drive' => $this->request->getVar('Hard_Drive'),
			'Konektivitas' => $this->request->getVar('Konektivitas'),
			'Harga' => $this->request->getVar('Harga'),
			'Gambar' => $NamaFile
		]);
		session()->setFlashdata('pesan', 'Data Berhasil ditambahkan');

		return redirect()->to('/admin/produk');
	}
	public function registrasi()
	{

		$this->PenggunaModel->save([
			'Username' => $this->request->getVar('Username'),
			'Password' => $this->request->getVar('Password'),
			'Nama_Lengkap' => $this->request->getVar('Nama_Lengkap'),
			'TTL' => $this->request->getVar('TTL'),
			'Jenis_Kelamin' => $this->request->getVar('Jenis_Kelamin'),
			'Alamat' => $this->request->getVar('Alamat'),
			'Kab_Kota' => $this->request->getVar('Kab_Kota'),
			'Provinsi' => $this->request->getVar('Provinsi'),
			'No_HP' => $this->request->getVar('No_HP'),
		]);
		session()->setFlashdata('pesan', 'Berhasil daftar akun');
		return redirect()->to('/home/login');
	}
	public function savehp()
	{
		if (!$this->validate([
			'No_Hp' => 'required|is_unique[hp.No_Hp]'
		])) {
			$validation = \Config\Services::validation();
			return redirect()->to('/admin/hp')->withInput()->with('validation', $validation);
		}
		$FileGambar = $this->request->getFile('Gambar');
		$FileGambar->move('img/admin');
		$NamaFile = $FileGambar->getName();

		$this->HpModel->save([
			'No_Hp' => $this->request->getVar('No_Hp'),
			'Nama_Hp' => $this->request->getVar('Nama_Hp'),
			'Rilis' => $this->request->getVar('Rilis'),
			'Chipset' => $this->request->getVar('Chipset'),
			'RAM' => $this->request->getVar('RAM'),
			'Memori_Internal' => $this->request->getVar('Memori_Internal'),
			'Ukuran' => $this->request->getVar('Ukuran'),
			'Kamera_Depan' => $this->request->getVar('Kamera_Depan'),
			'Kamera_Belakang' => $this->request->getVar('Kamera_Belakang'),
			'SIM' => $this->request->getVar('SIM'),
			'Baterai' => $this->request->getVar('Baterai'),
			'Harga' => $this->request->getVar('Harga'),
			'Gambar' => $NamaFile
		]);
		session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

		return redirect()->to('/admin/produk');
	}
	public function deletehp($Id_Hp)
	{
		$this->HpModel->delete($Id_Hp);
		session()->setFlashdata('pesan', 'Data berhasil dihapus');
		return redirect()->to('/admin/produk');
	}
	public function deletelaptop($Id_Laptop)
	{
		$this->LaptopModel->delete($Id_Laptop);
		session()->setFlashdata('pesan', 'Data berhasil dihapus');
		return redirect()->to('/admin/produk');
	}
	public function deleteakse($Id_Aksesoris)
	{
		$this->AksesorisModel->delete($Id_Aksesoris);
		session()->setFlashdata('pesan', 'Data berhasil dihapus');
		return redirect()->to('/admin/produk');
	}
	public function deletetransaksi($Id_Transaksi)
	{
		$this->TransaksiModel->delete($Id_Transaksi);
		return redirect()->to('/admin/transaksi');
	}
	public function edithp($Id_Hp)
	{
		$judul = [
			'title' => 'Edit Data Hp',
			'validation' => \Config\Services::validation(),
			'hp' => $this->HpModel->getHp($Id_Hp)
		];
		return view('Pages/admin/edithp_admin', $judul);
	}
	public function editlaptop($Id_Laptop)
	{
		$judul = [
			'title' => 'Edit Data Laptop',
			'validation' => \Config\Services::validation(),
			'laptop' => $this->LaptopModel->getLaptop($Id_Laptop)
		];
		return view('Pages/admin/editlaptop_admin', $judul);
	}
	public function editakse($Id_Aksesoris)
	{
		$judul = [
			'title' => 'Edit Data Aksesoris',
			'validation' => \Config\Services::validation(),
			'aksesoris' => $this->AksesorisModel->getAkse($Id_Aksesoris)
		];
		return view('Pages/admin/editakse_admin', $judul);
	}
	public function updatehp($Id_Hp)
	{
		$this->HpModel->save([
			'Id_Hp' => $Id_Hp,
			'No_Hp' => $this->request->getVar('No_Hp'),
			'Nama_Hp' => $this->request->getVar('Nama_Hp'),
			'Rilis' => $this->request->getVar('Rilis'),
			'Chipset' => $this->request->getVar('Chipset'),
			'RAM' => $this->request->getVar('RAM'),
			'Memori_Internal' => $this->request->getVar('Memori_Internal'),
			'Ukuran' => $this->request->getVar('Ukuran'),
			'Kamera_Depan' => $this->request->getVar('Kamera_Depan'),
			'Kamera_Belakang' => $this->request->getVar('Kamera_Belakang'),
			'SIM' => $this->request->getVar('SIM'),
			'Baterai' => $this->request->getVar('Baterai'),
			'Harga' => $this->request->getVar('Harga'),
			'Gambar' => $this->request->getVar('Gambar')
		]);
		session()->setFlashdata('pesan', 'Data berhasil diperbaharui');

		return redirect()->to('/admin/produk');
	}
	public function updatelaptop($Id_Laptop)
	{
		$this->LaptopModel->save([
			'Id_Laptop' => $Id_Laptop,
			'No_Laptop' => $this->request->getVar('No_Laptop'),
			'Nama_Laptop' => $this->request->getVar('Nama_Laptop'),
			'Processor' => $this->request->getVar('Processor'),
			'Display' => $this->request->getVar('Display'),
			'Sistem_Operasi' => $this->request->getVar('Sistem_Operasi'),
			'RAM' => $this->request->getVar('RAM'),
			'Hard_Drive' => $this->request->getVar('Hard_Drive'),
			'Konektivitas' => $this->request->getVar('Konektivitas'),
			'Harga' => $this->request->getVar('Harga'),
			'Gambar' => $this->request->getVar('Gambar')
		]);
		session()->setFlashdata('pesan', 'Data Berhasil diperbaharui');

		return redirect()->to('/admin/produk');
	}
	public function updateakse($Id_Aksesoris)
	{
		$this->AksesorisModel->save([
			'Id_Aksesoris' => $Id_Aksesoris,
			'No_Aksesoris' => $this->request->getVar('No_Aksesoris'),
			'Nama_Aksesoris' => $this->request->getVar('Nama_Aksesoris'),
			'Deskripsi' => $this->request->getVar('Deskripsi'),
			'Harga' => $this->request->getVar('Harga'),
			'Gambar' => $this->request->getVar('Gambar')
		]);
		session()->setFlashdata('pesan', 'Data Berhasil diperbaharui');

		return redirect()->to('/admin/produk');
	}
}

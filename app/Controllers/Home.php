<?php

namespace App\Controllers;

use App\Models\AksesorisModel;
use App\Models\HpModel;
use App\Models\LaptopModel;
use App\Models\PenggunaModel;

use function PHPUnit\Framework\equalTo;

class Home extends BaseController
{
	protected $AksesorisModel;
	protected $HpModel;
	protected $LaptopModel;
	protected $PenggunaModel;

	public function __construct()
	{
		$this->AksesorisModel = new AksesorisModel();
		$this->HpModel = new HpModel();
		$this->LaptopModel = new LaptopModel();
		$this->PenggunaModel = new PenggunaModel();
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
			'Laptop' => $datalaptop->getLaptop()
		];

		return view('Pages/pengunjung/home_pengunjung', $judul);
	}
	public function hp()
	{
		$keyword = $this->request->getVar('cari');
		if ($keyword) {
			$datahp = $this->HpModel->search($keyword);
		} else {
			$datahp = $this->HpModel->getHp();
		}
		$judul = [
			'title' => 'Online Tech Shop',
			'Hp' => $datahp
		];
		return view('Pages/pengunjung/hp_pengunjung', $judul);
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
		return view('Pages/pengunjung/laptop_pengunjung', $judul);
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
		return view('Pages/pengunjung/aksesoris_pengunjung', $judul);
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
		return view('Pages/pengunjung/home_pengunjung', $judul);
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
		return view('Pages/pengunjung/aksesoris_pengunjung', $judul);
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
		return view('Pages/pengunjung/hp_pengunjung', $judul);
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
		return view('Pages/pengunjung/laptop_pengunjung', $judul);
	}

	public function login()
	{
		$judul = [
			'title' => 'Login',
		];
		return view('Pages/auth/masuk6', $judul);
	}
	public function daftar()
	{
		$judul = [
			'title' => 'Daftar',
		];
		return view('Pages/auth/daftar6', $judul);
	}
	// public function autentikasi()
	// {
	// 	$user = $this->request->getVar('Username');
	// 	$pass = $this->request->getVar('Password');
	// 	$username = $this->PenggunaModel->user($user);
	// 	$password = $this->PenggunaModel->pass($pass);
	// 	if ($user == $username) {
	// 		if ($pass == $password) {
	// 			return view('Pages/user/home_user');
	// 		} else {
	// 			return view('Pages/user/masuk6');
	// 		}
	// 	} else {
	// 		return view('Pages/user/masuk6');
	// 	}
	// }
	public function detaillaptop($Id_Laptop)
	{
		$data = [
			'title' => 'Detail Produk',
			'laptop' => $this->LaptopModel->getLaptop($Id_Laptop)
		];
		return view('Pages/pengunjung/detail_laptop', $data);
	}
	public function detailhp($Id_Hp)
	{
		$data = [
			'title' => 'Detail Produk',
			'hp' => $this->HpModel->getHp($Id_Hp)
		];
		return view('Pages/pengunjung/detail_hp', $data);
	}
	public function detailakse($Id_Aksesoris)
	{
		$data = [
			'title' => 'Detail Produk',
			'akse' => $this->AksesorisModel->getAkse($Id_Aksesoris)
		];
		return view('Pages/pengunjung/detail_aksesoris', $data);
	}
	public function detailhomeakse($Id_Aksesoris)
	{
		$data = [
			'title' => 'Detail Produk',
			'akse' => $this->AksesorisModel->getAkse($Id_Aksesoris),
		];
		return view('Pages/pengunjung/detail_aksehome', $data);
	}
	public function detailhomehp($Id_Hp)
	{
		$data = [
			'title' => 'Detail Produk',
			'hp' => $this->HpModel->getHp($Id_Hp)
		];
		return view('Pages/pengunjung/detail_hphome', $data);
	}
	public function detailhomelaptop($Id_Laptop)
	{
		$data = [
			'title' => 'Detail Produk',
			'laptop' => $this->LaptopModel->getLaptop($Id_Laptop)
		];
		return view('Pages/pengunjung/detail_laptophome', $data);
	}
}

<?php
class ItemProduk {
	protected $ukuran;
	protected $warna;
	protected $nama;

	public function __construct($ukuran, $warna, $nama) {
		$this->ukuran = $ukuran;
		$this->warna = $warna;
		$this->nama = $nama;
	}

	public function getUkuran() {
		return $this->ukuran;
	}

	public function getWarna() {
		return $this->warna;
	}

	public function getNama() {
		return $this->nama;
	}
}

class Topi extends ItemProduk {
	private $model;

	public function __construct($ukuran, $warna, $nama, $model) {
		parent::__construct($ukuran, $warna, $nama);
		$this->model = $model;
	}

	public function getModel() {
		return $this->model;
	}
}

class Celana extends ItemProduk {
	private $tipe;
	private $model;

	public function __construct($ukuran, $warna, $nama, $tipe, $model) {
		parent::__construct($ukuran, $warna, $nama);
		$this->tipe = $tipe;
		$this->model = $model;
	}

	public function getTipe() {
		return $this->tipe;
	}

	public function getModel() {
		return $this->model;
	}
}

class Baju extends ItemProduk {
	private $tipe;

	public function __construct($ukuran, $warna, $nama, $tipe) {
		parent::__construct($ukuran, $warna, $nama);
		$this->tipe = $tipe;
	}

	public function getTipe() {
		return $this->tipe;
	}
}

// Membuat objek Topi
$topi = new Topi('L', 'Hitam', 'Topi Olahraga', 'Snapback');
// Memanggil methods pada objek Topi
echo "Topi: " . $topi->getNama() . 
", Ukuran: " . $topi->getUkuran() . 
", Warna: " . $topi->getWarna() . 
", Model: " . $topi->getModel() . "<br/>";

// Membuat objek Celana
$celana = new Celana('M', 'Biru', 'Celana Jeans', 'Panjang', 'Slim Fit');
// Memanggil methods pada objek Celana
echo "Celana: " . $celana->getNama() . 
", Ukuran: " . $celana->getUkuran() . 
", Warna: " . $celana->getWarna() . 
", Tipe: " . $celana->getTipe() . 
", Model: " . $celana->getModel() . "<br/>";

// Membuat objek Baju
$baju = new Baju('S', 'Hijau', 'Kaos Polos', 'Kaos Pendek');
// Memanggil methods pada objek Baju
echo "Baju: " . $baju->getNama() . 
", Ukuran: " . $baju->getUkuran() . 
", Warna: " . $baju->getWarna() . 
", Tipe: " . $baju->getTipe() . "<br/>";


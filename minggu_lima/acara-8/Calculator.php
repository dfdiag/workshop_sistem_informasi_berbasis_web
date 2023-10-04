<?php
class Calculator {
	public function tambah($a, $b) {
		return $a + $b;
	}

	public function kurang($a, $b) {
		return $a - $b;
	}

	public function kali($a, $b) {
		return $a * $b;
	}

	public function bagi($a, $b) {
		if ($b == 0) {
			return "Tidak bisa dibagi oleh nol";
		} else {
			return $a / $b;
		}
	}
}


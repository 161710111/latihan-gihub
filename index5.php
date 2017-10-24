<?php

class segitiga {

	public $alas;
	public $tinggi;

	function set_nilai($alas,$tinggi){
	$this ->ala = $alas;
	$this ->tin = $tinggi;
}
	function get_nilai(){
		return 1/2 *$this->ala*$this->tin;
	}
}

$segitiga1 = new segitiga;
$segitiga1 -> set_nilai (3,3);
echo "hasil segitiga :".$segitiga1->get_nilai().'<br>';

echo "<br>";

class persegi {
	public $panjang ;
	public $lebar;

	function set_nilai($panjang,$lebar){
	$this ->pan = $panjang;
	$this ->leb = $lebar;
}
	function get_nilai(){
		return $this->pan*$this->leb;
	}
}

$persegi1 = new persegi;
$persegi1 -> set_nilai (8,8);
echo "hasil persegi :".$persegi1->get_nilai().'<br>';

echo "<br>";

class persegipanjang {

	public $s ;
	public $si ;
	public $sis;
	public $sisi;

	function set_nilai($s,$si,$sis,$sisi){
	$this ->ss  = $s;
	$this ->ss2 = $si;
	$this ->ss3 = $sis;
	$this ->ss4 = $sisi;
}
	function get_nilai(){
		return $this->ss*$this->ss2*$this->ss3*$this->ss4;
	}
}

$persegipanjang1 = new persegipanjang;
$persegipanjang1 -> set_nilai (2,3,12,5);
echo "hasil persegipanjang :".$persegipanjang1->get_nilai().'<br>';
?>
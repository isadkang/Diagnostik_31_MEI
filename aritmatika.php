<?php

class Aritmatika {
    private $nilai1;
    public $nilai2;
    protected $nilai3;

    public function __construct($nilai1, $nilai2, $nilai3)
    {
        $this->nilai1 = $nilai1;
        $this->nilai2 = $nilai2;
        $this->nilai3 = $nilai3;
    }

    public function getNilai1(){
        return $this->nilai1;
    }
    public function getNilai2(){
        return $this->nilai2;
    }
    public function getNilai3(){
        return $this->nilai3;
    }

    public function tambah() {
        return $this->nilai1 + $this->nilai2 + $this->nilai3;
    }

    public function kurang() {
        return $this->nilai1 - $this->nilai2 - $this->nilai3;
    }

    public function kali() {
        return $this->nilai1 * $this->nilai2 * $this->nilai3;
    }

    public function bagi() {
    if ($this->nilai2 != 0 && $this->nilai3 != 0) {
            return $this->nilai1 / $this->nilai2 / $this->nilai3;
        } else {
            return "Pembagian dengan 0 tidak bisa";
        }
    }
}

$kalku = new Aritmatika(10, 2, 5);

echo "Nilai 1: " . $kalku->getNilai1() . "<br/>";
echo "Nilai 2: " . $kalku->getNilai2() . "<br/>";
echo "Nilai 3: " . $kalku->getNilai3() . "<br/>";
echo "<br/>";
echo "Pertambahan: " . $kalku->tambah() . "<br>";
echo "Pengurangan: " . $kalku->kurang() . "<br>";
echo "Perkalian: " . $kalku->kali() . "<br>";
echo "Pembagian: " . $kalku->bagi() . "<br>";

echo "------------------------------------------- <br/>";

$kalku2 = new Aritmatika(2, 0, 3);

echo "Nilai 1: " . $kalku2->getNilai1() . "<br/>";
echo "Nilai 2: " . $kalku2->getNilai2() . "<br/>";
echo "Nilai 3: " . $kalku2->getNilai3() . "<br/>";
echo "<br/>";
echo "Pertambahan: " . $kalku2->tambah() . "<br>";
echo "Pengurangan: " . $kalku2->kurang() . "<br>";
echo "Perkalian: " . $kalku2->kali() . "<br>";
echo "Pembagian: " . $kalku2->bagi() . "<br>";

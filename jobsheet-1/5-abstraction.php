<?php
//membuat class abstrak pengguna
abstract class Pengguna {
    //membuat abstrak method akses fitur
    abstract protected function aksesFitur();
}
//membuat class mahasiswa yg merupakan turunan dari class penngguna
class Mahasiswa extends Pengguna {
    //method akses fitur
    public function aksesFitur(){
        return "Akses fitur mahasiswa";
    }
} 
//class dosen turunan dari class pengguna
class Dosen extends Pengguna {
    public function aksesFitur(){
        return "Akses fitur dosen";
    }
}
//instansiasi objek mahasiswa
$mhs = new Mahasiswa();
echo "Akses fitur mahasiswa:".$mhs->aksesFitur()."<br>";
//instansiasi objek dosen
$dosen = new Dosen();
echo "Akses fitur dosen:".$dosen->aksesFitur()."<br>";
//output: 
//Akses fitur mahasiswa: Ini akses fitur mahasiswa
//Akses fitur dosen: Ini akses fitur dosen
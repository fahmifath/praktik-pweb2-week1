<?php
//membuat class pengguna
class Pengguna {
    //method aksesfitur
    public function aksesFitur(){
        return "Ini akses fitur pengguna";
    }
}
//membuat class mahasiswa yg merupakan child/turunan dari class pengguna
class Mahasiswa extends Pengguna {
    //method aksesfitur
    public function aksesFitur(){
        return "Ini akses fitur mahasiswa";
    }
}
//membuat class mahasiswa yg merupakan child/turunan dari class pengguna
class Dosen extends Pengguna {
    //method akses fitur
    public function aksesFitur(){
        return "Ini akses fitur dosen";
    }
}
//instansiasi objek mahasiswa
$mhs = new Mahasiswa();
echo "Akses fitur mahasiswa: ".$mhs->aksesFitur()."<br>";
//instansiasi objek dosen
$dosen = new Dosen();
echo "Akses fitur dosen: ".$dosen->aksesFitur();
//output: 
//Akses fitur mahasiswa: Ini akses fitur mahasiswa
//Akses fitur dosen: Ini akses fitur dosen
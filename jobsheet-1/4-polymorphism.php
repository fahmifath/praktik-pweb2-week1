<?php
//membuat class pengguna
class Pengguna {
    //method aksesfitur
    public function aksesFitur($akses){
        return $akses;
    }
}
//membuat class mahasiswa yg merupakan child/turunan dari class pengguna
class Mahasiswa extends Pengguna {
    //method akses fitur
    public function getAkses(){
        return $this->aksesFitur('Akses fitur mahasiswa');
    }
}
//membuat class mahasiswa yg merupakan child/turunan dari class pengguna
class Dosen extends Pengguna {
    //method akses fitur
    public function getAkses(){
        return $this->aksesFitur('Akses fitur dosen');
    }
}
//instansiasi objek mahasiswa
$mhs = new Mahasiswa();
echo "Akses fitur mahasiswa: ".$mhs->getAkses()."<br>";
//instansiasi objek dosen
$dosen = new Dosen();
echo "Akses fitur dosen: ".$dosen->getAkses();
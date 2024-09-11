<?php
//membuat class pengguna
class Pengguna {
    //membuat atribut nama di class pengguna
    protected $nama;

    //method untuk mengatur nama
    public function getNama($nama){
        return $this->nama = $nama;
    }
}
//membuat class dosen yg merupakan child/turunan dari class pengguna menggunakan perintah extends
class Dosen extends Pengguna {
    //membuat atribut matkul
    protected $matkul;
}
//instansiasi objek dosen
$dosen = new Dosen();
//menjalankan method getnama
echo $dosen->getNama('Fahmi');//output: Fahmi
<?php
//membuat class mahasiswa
class Mahasiswa {
    public $nama = "Zahran";
    public $nim = "232323";
    public $jurusan = "Akuntansi";

    //method untuk mnampilkan data
    public function tampilkanData(){
        echo $this->nama.", ".$this->nim.", ".$this->jurusan;
    }
}
//instansiasi objek
$mahasiswa = new Mahasiswa();
//memanggil method menampilkan data
$mahasiswa->tampilkanData();//output: Zahran, 232323, Akuntansi
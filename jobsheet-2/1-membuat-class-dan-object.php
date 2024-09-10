<?php
class Mahasiswa {
    public $nama = "Zahran";
    public $nim = "232323";
    public $jurusan = "Akuntansi";

    public function tampilkanData(){
        echo $this->nama.", ".$this->nim.", ".$this->jurusan;
    }
}
$mahasiswa = new Mahasiswa();
$mahasiswa->tampilkanData();//output: Zahran, 232323, Akuntansi
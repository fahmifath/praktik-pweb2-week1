<?php
//membuat class mahasiswa
class Mahasiswa {
    //membuat atribut nama, nim, dan jurusan
    public $nama;
    public $nim;
    public $jurusan;

    //method construk untuk mengeset nilai awal nama, nim, dan jurusan
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    
    //method untuk mengubah nilai nim dari nilai awal
    public function setNim($nimBaru){
        $this->nim = $nimBaru;
    }

    //method untuk mengubah nilai jurusan dari nilai awal
    public function updateJurusan($jurusanBaru){
        $this->jurusan = $jurusanBaru;
    }

    //method untuk menampilkan data
    public function tampilkanData(){
        echo $this->nama.", ".$this->nim.", ".$this->jurusan."<br>";
    }
}
//instansiasi objek mahasiswa
$mahasiswa = new Mahasiswa("Zahran", "232323", "Akuntansi");
$mahasiswa->tampilkanData();//output: Zahran, 232323, Akuntansi
//method untuk mengubah nilai nim
$mahasiswa->setNim('123');
$mahasiswa->tampilkanData();//output: Zahran, 123, Akuntansi
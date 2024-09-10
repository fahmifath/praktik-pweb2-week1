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
    //method untuk mnampilkan data
    public function tampilkanData(){
        echo $this->nama.", ".$this->nim.", ".$this->jurusan;
    }
}
//instansiasi objek
$mahasiswa = new Mahasiswa("Zahran", "232323", "Akuntansi");
//menjalankan method utk menampilkan data
$mahasiswa->tampilkanData();//output: Zahran, 232323, Akuntansi
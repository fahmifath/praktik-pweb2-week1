<?php
//membuat class mahasiswa
class Mahasiswa {
    //membuat atribut/properti nama, nim, dan jurusan pd class mahasiswa
    public $nama;
    public $nim;
    public $jurusan;

    //fungsi untuk menampilkan data
    public function tampilkanData(){
        echo $this->nama.", " .$this->nim.", ".$this->jurusan;
    }
}

//instansiasi objek mahasiswa 
$mhs = new Mahasiswa();
$mhs->nama = "Fahmi";
$mhs->nim = "123123";
$mhs->jurusan = "Komputer";
//menjalankan method menampilkan data
$mhs->tampilkanData(); //output: Fahmi, 123123, Komputer
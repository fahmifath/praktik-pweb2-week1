<?php
//membuat class mahasiswa
class Mahasiswa {
    //membuat atribut/properti nama, nim, dan jurusan pd class mahasiswa
    public $nama;
    public $nim;
    public $jurusan;
    
    //membuat fungsi menginisialisasikan class mahasiswa
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //fungsi untuk menampilkan data
    public function tampilkanData(){
        echo $this->nama.", " .$this->nim.", ".$this->jurusan;
    }
}

//instansiasi objek mahasiswa 
$mhs = new Mahasiswa('Zahran', '123123', 'Akuntansi');
//menjalankan method menampilkan data
$mhs->tampilkanData(); //output: Zahran, 123123, Akuntansi
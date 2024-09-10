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

    //method untuk mengubah nilai jurusan
    public function updateJurusan($jurusanBaru){
        $this->jurusan = $jurusanBaru;
    }
}
//instansiasi objek mahasiswa
$mahasiswa = new Mahasiswa("Zahran", "232323", "Akuntansi");
$mahasiswa->tampilkanData();//output: Zahran, 232323, Akuntansi
//menjalankan method utk mengubah jurusan, berdasarkan perintah ini maka yg 
//tadinya jurusan "Akuntansi" menjadi "Komputer"
$mahasiswa->updateJurusan("Komputer");
$mahasiswa->tampilkanData();//output: Zahran, 232323, Akuntansi
<?php
//membuat kelas mahasiswa
class Mahasiswa
{
    //membuat atribut/properti nama, nim, dan jurusan pd class mahasiswa menjadi private, 
    //artinya hanya bisa diakses oleh class yg membuatnya
    private $nama;
    private $nim;
    private $jurusan;

    //fungsi untuk menampilkan data nama, nim, dan jurusan
    public function tampilkanData()
    {
        echo $this->nama . ", " . $this->nim . ", " . $this->jurusan;
    }
}

//iinstansiasi objek mahsiswa
$mhs = new Mahasiswa();
//tidak bisa mengubah value dari atribut nama, nim dan jurusan karena emiliki hak akses private
$mhs->nama = "Fahmi";
$mhs->nim = "123123";
$mhs->jurusan = "Komputer";
$mhs->tampilkanData();//output: tidak ada, karena tidak bisa mengakses private property

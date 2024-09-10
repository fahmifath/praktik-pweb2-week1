<?php
//membuat kelas mahasiswa
class Mahasiswa
{
    //membuat atribut/properti nama, nim, dan jurusan pd class mahasiswa menjadi private, 
    //artinya hanya bisa diakses oleh class yg membuatnya
    private $nama;
    private $nim;
    private $jurusan;

    //fungsi untuk menginisialisasikan class mahasiswa
    public function __construct()
    {
        $this->nama = null;
        $this->nim = null;
        $this->jurusan = null;
    }
    //metode setter
    //fungsi untuk mengatur value dari atribut nama 
    public function setNama($nama)
    {
        $this->nama = $nama;
    }
    //fungsi untuk mengatur value dari inputan nim
    public function setNim($nim)
    {
        $this->nim = $nim;
    }
    //fungsi untuk mengatur value dari inputan jurusan
    public function setJurusan($jurusan)
    {
        $this->jurusan = $jurusan;
    }
    //metode getter
    //fungsi untuk mengambil value nama 
    public function getNama()
    {
        return $this->nama;
    }
    //fungsi untuk mengambil value nim
    public function getNim()
    {
        return $this->nim;
    }
    //fungsi untuk mengambil value jurusan
    public function getJurusan()
    {
        return $this->jurusan;
    }

    //fungsi untuk menampilkan data nama, nim, dan jurusan
    public function tampilkanData()
    {
        echo $this->nama . ", " . $this->nim . ", " . $this->jurusan;
    }
}

//iinstansiasi objek mahsiswa
$mhs = new Mahasiswa();
//menjalankan method setnama, setnim, setjurusan, dan menampilkan data
$mhs->setNama('Zahran');
$mhs->setNim('123123');
$mhs->setJurusan('TI');
$mhs->tampilkanData();//output: Zahran, 123123, TI

# Jobsheet 1
## 1. Class dan Object pada PHP OOP
### 1.1. Class
```sh
class Mahasiswa
```
Class adalah blueprint atau template untuk menciptakan sebuah objek, suatu class berisi atribut dan method
#### 1.1.1. Atribut dan Method
```sh
public $nama
```
Atribut adalah variable yang ada di dalam sebuah class
```sh
public function tampilkanData()
```
Method adalah blok kode yang terkait dengan class dan digunakan untuk mendefinisikan perilaku atau aksi dari sebuah class
### 1.2. Object
```sh
$mahasiswa = new Mahasiswa()
```
Object adalah inisialisasi dari sebuah class
### 1.3. Contoh project
```sh
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
```
## 2. Prinsip OOP
### 2.1. Enkapsulasi (Encapsulation)
```sh
private $nama
public $nama
protected $nama
```
Tujuan utama encapsulation adalah untuk menyembunyikan detail internal implementasi objek dari dunia luar dan menyediakan interface yang dapat berinteraksi dengan objek tersebut.
#### 2.1.1. Macam-macam Enkapsulasi
- Private
Private artinya kita hanya memberikan akses pada property dan method pada kelas yang membuat property dan method tersebut.
- Public
Public artinya kita memberikan akses pada property dan method agar bisa di akses dari luar atau dalam class.
- Protected
Protected artinya kita memberikan akses pada property dan method agar bisa diakses oleh class turunannya.
#### 2.1.2. Contoh project
```sh
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

```
### 2.2. Inheritance
```sh
class Pengguna{}
class Mahasiswa exstends Pengguna{}
```
Inheritance atau pewarisan sifat merupakan class turunan dari class yang lainnya. Inheritance di buat dengan membuat class baru dengan tujuan di hubungkan dengan class yang lain yang di inginkan, dengan tujuan untuk mendapatkan informasi atau data dari class yang di hubungkan tersebut.
Untuk membuat class turunan, kita bisa menggunakan syntax “extends” pada class. Seperti pada contoh diatas.
#### 2.2.1. Contoh project
```sh
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
echo $dosen->getNama('Zahran');//output: Zahran
    
```
### 2.3. Polymorphism
```sh
class Mahasiswa exstends Pengguna {
    public function aksesFitur(){
        echo "ini akses fitur mahasiswa";
    }
}
class Dosen exstends Pengguna {
    public function aksesFitur(){
        echo "ini akses fitur dosen";
    }
}
```
Polymorphism adalah kemampuan fungsi untuk memproses objek dari kelas yang berbeda-beda yang memiliki interface yang sama. Ini sering terjadi melalui proses yang disebut ‘method overriding’, di mana kelas anak menulis ulang sebuah metode dari kelas induknya.
#### 2.3.1. Contoh project
```sh
<?php
//membuat class pengguna
class Pengguna {
    //method aksesfitur
    public function aksesFitur($akses){
        return $akses;
    }
}
//membuat class mahasiswa yg merupakan child/turunan dari class pengguna
class Mahasiswa extends Pengguna {
    //method akses fitur
    public function getAkses(){
        return $this->aksesFitur('Akses fitur mahasiswa');
    }
}
//membuat class mahasiswa yg merupakan child/turunan dari class pengguna
class Dosen extends Pengguna {
    //method akses fitur
    public function getAkses(){
        return $this->aksesFitur('Akses fitur dosen');
    }
}
//instansiasi objek mahasiswa
$mhs = new Mahasiswa();
echo "Akses fitur mahasiswa: ".$mhs->getAkses()."<br>";
//instansiasi objek dosen
$dosen = new Dosen();
echo "Akses fitur dosen: ".$dosen->getAkses();
```
### 2.4. Abstraction
```sh
abstract class Pengguna{
    abstract protected function aksesFitur()
}
class Mahasiswa extends Pengguna {
    public function aksesFitur(){
        echo "";
    }
}
```
Sebuah kelas abstrak adalah kelas yang tidak lengkap dan memerlukan kelas lain untuk memberikan implementasi yang spesifik. Kelas abstrak digunakan sebagai dasar bagi kelas lain. Ini membantu untuk mendefinisikan metode abstrak yang harus diimplementasikan oleh semua turunan kelas tersebut.
Sebuah kelas abstrak bisa mengandung properti dan metode seperti kelas biasa. Namun, metode abstrak yang didefinisikan di kelas abstrak harus dideklarasikan tanpa tubuh dan harus diimplementasikan di kelas turunan.
#### 2.4.1. Contoh project
```sh
<?php
//membuat class abstrak pengguna
abstract class Pengguna {
    //membuat abstrak method akses fitur
    abstract protected function aksesFitur();
}
//membuat class mahasiswa yg merupakan turunan dari class penngguna
class Mahasiswa extends Pengguna {
    //method akses fitur
    public function aksesFitur(){
        return "Akses fitur mahasiswa";
    }
} 
//class dosen turunan dari class pengguna
class Dosen extends Pengguna {
    public function aksesFitur(){
        return "Akses fitur dosen";
    }
}
//instansiasi objek mahasiswa
$mhs = new Mahasiswa();
echo "Akses fitur mahasiswa:".$mhs->aksesFitur()."<br>";
//instansiasi objek dosen
$dosen = new Dosen();
echo "Akses fitur dosen:".$dosen->aksesFitur()."<br>";
```
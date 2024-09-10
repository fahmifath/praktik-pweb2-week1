# Jobsheet 2
### 1. Membuat Class dan Object
Membuat class mahasiswa dengan atribut nama, nim, dan jurusan.
```sh
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;
}
```
Membuat metode tampilkanData() dalam class Mahasiswa.
```sh
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;
    
    //method untuk menampilkan data
    public function tampilkanData(){
        echo $this->nama.", ".$this->nim.", ".$this->jurusan;
    }
}
```
Menginstansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.
```sh
//instansiasi objek
$mahasiswa = new Mahasiswa();
//memanggil method menampilkan data
$mahasiswa->tampilkanData();
```
### 2. Implementasi Constructor
Menambahkan constructor pada kelas Mahasiswa yang akan menginisialisasi
atribut nama, nim, dan jurusan.
```sh
//method construct untuk mengeset nilai awal nama, nim, dan jurusan
public function __construct($nama, $nim, $jurusan){
    $this->nama = $nama;
    $this->nim = $nim;
    $this->jurusan = $jurusan;
}
```
Constructor ini digunakan untuk mengatur nilai awal dari atribut saat objek dibuat.</br>
Perubahan untuk instansiasi objek Mahasiswa mejadi seperti
```sh
//instansiasi objek
$mahasiswa = new Mahasiswa("Zahran", "232323", "Akuntansi");
```
### 3. Membuat Metode Tambahan
Membuat metode updateJurusan() dalam kelas Mahasiswa yang memungkinkan
perubahan jurusan.
```sh
//method untuk mengubah nilai jurusan
public function updateJurusan($jurusanBaru){
    $this->jurusan = $jurusanBaru;
}
```
Cara menggunakan metode ini untuk mengubah jurusan dari objek yang sudah dibuat.
```sh
$mahasiswa->updateJurusan("Komputer");
```
Contoh hasil ubah
```sh
//instansiasi objek mahasiswa
$mahasiswa = new Mahasiswa("Zahran", "232323", "Akuntansi");
$mahasiswa->tampilkanData();//output: Zahran, 232323, Akuntansi
$mahasiswa->updateJurusan("Komputer");
$mahasiswa->tampilkanData();//output: Zahran, 232323, Komputer
```
### 4. Penggunaan Atribut dan Metode
Mengubah nilai atribut nim dari objek Mahasiswa menggunakan metode setter.
```sh
//method untuk mengubah nilai nim dari nilai awal
public function setNim($nimBaru){
    $this->nim = $nimBaru;
}
```
Menampilkan data mahasiswa yang sudah diperbarui dengan memanggil metode
tampilkanData().
```sh
//instansiasi objek mahasiswa
$mahasiswa = new Mahasiswa("Zahran", "232323", "Akuntansi");
$mahasiswa->tampilkanData();//output: Zahran, 232323, Akuntansi
//method untuk mengubah nilai nim
$mahasiswa->setNim('123');
$mahasiswa->tampilkanData();//output: Zahran, 123, Akuntansi
```
## Tugas
 Implementasikan kelas Dosen dengan atribut nama, nip, dan mataKuliah.
```sh
class Dosen {
    public $nama;
    public $nip;
    public $mataKuliah;
}
```
Membuat metode tampilkanDosen() untuk menampilkan informasi dosen.
```sh
class Dosen {
    public $nama;
    public $nip;
    public $mataKuliah;
    
    //method untuk menampikan data
    public function tampilkanDosen(){
        echo $this->nama.", ".$this->nip.", ".$this->mataKuliah;
    }
}
```
Membuat objek dari kelas Dosen, dan gunakan metode tampilkanDosen() untuk
menampilkan informasi tersebut.
```sh
//instansiasi objek dosen
$dosen = new Dosen();
//memanggil method untuk menampilkan data
$dosen->tampilkanDosen();
```


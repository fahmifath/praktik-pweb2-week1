<?php
// class Mahasiswa {
//     public $nama;
//     public $nim;
//     public $jurusan;
    
//     public function __construct($nama, $nim, $jurusan){
//         $this->nama = $nama;
//         $this->nim = $nim;
//         $this->jurusan = $jurusan;
//     }

//     public function tampilkanData(){
//         echo $this->nama;
//         echo $this->nim;
//         echo $this->jurusan;
//     }
// }

// $mhs = new Mahasiswa('Jahran', '123', 'TI');
// $mhs->tampilkanData();

// class Mahasiswa {
//         private $nama;
//         private $nim;
//         private $jurusan;
        
//         public function __construct(){
//             $this->nama = null;
//             $this->nim = null;
//             $this->jurusan = null;
//         }

//         public function setNama($nama){
//             $this->nama = $nama;
//         }

//         public function setNim($nim){
//             $this->nim = $nim;
//         }

//         public function setJurusan($jurusan){
//             $this->jurusan = $jurusan;
//         }

//         public function getNama(){
//             return $this->nama;
//         }
    
//         public function getNim(){
//             return $this->nim;
//         }
    
//         public function getJurusan(){
//             return $this->jurusan;
//         }
    
//         public function tampilkanData(){
//             echo $this->nama;
//             echo $this->nim;
//             echo $this->jurusan;
//         }
//     }
    
//     $mhs = new Mahasiswa();
//     $mhs->setNama('Zahran');
//     $mhs->setNim('123123');
//     $mhs->setJurusan('TI');
//     $mhs->tampilkanData();

// class Pengguna {
//     protected $nama;

//     public function __construct(){
//         $this->nama = null;
//     }

//     public function setNama($nama){
//         return $this->nama = $nama;
//     }
// }

// class Dosen extends Pengguna {
//     protected $matkul;

//     public function setMatkul($matkul){
//         return $this->matkul = $matkul;
//     }
// }

// $dosen = new Dosen();
// echo $dosen->setNama('Zahran');
// echo $dosen->setMatkul('Jarkom');

// class Pengguna {
//     public $akses;

//     public function aksesFitur($akses){
//         return $this->akses = $akses;
//     }
// }

// class Mahasiswa extends Pengguna {
//     public function getAkses(){
//         return $this->aksesFitur('Melihat nilai');
//     }
// }
// class Dosen extends Pengguna {
//     public function getAkses(){
//         return $this->aksesFitur('Menginputkan nilai');
//     }
// }

// $mhs = new Mahasiswa();
// echo "Akses fitur mahasiswa: ".$mhs->getAkses()."<br>";
// $dosen = new Dosen();
// echo "Akses fitur dosen: ".$dosen->getAkses();

abstract class Pengguna {
    abstract protected function aksesFitur();
}

class Mahasiswa extends Pengguna {
    public function aksesFitur(){
        return "Melihat nilai";
    }
} 
class Dosen extends Pengguna {
    public function aksesFitur(){
        return "Menginputkan nilai";
    }
}

$mhs = new Mahasiswa();
echo "Akses fitur mahasiswa:".$mhs->aksesFitur()."<br>";
$dosen = new Dosen();
echo "Akses fitur dosen:".$dosen->aksesFitur()."<br>";
?>
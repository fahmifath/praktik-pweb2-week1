<?php
//membuat kelas dosen
class Dosen {
    //mengeset nilai dari variable nama, nim, dan jurusan
    public $nama = "Zahran";
    public $nip = "12345";
    public $mataKuliah = "Jarkom";
    
    //method untuk menampikan data
    public function tampilkanDosen(){
        echo $this->nama.", ".$this->nip.", ".$this->mataKuliah;
    }
}

//instansiasi objek dosen
$dosen = new Dosen();
//memanggil method untuk menampilkan data
$dosen->tampilkanDosen();//output: Zahran, 12345, Jarkom
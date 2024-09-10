<?php
//membuat class person
class Person {
    //atribut name
    public $name;

    //method construct utk mengeset nilai awal dari name
    public function __construct($name){
        $this->name = $name;
    }

    //method pembeda
    public function getRole(){
        return "Ini merupaan role person";
    }
}

//class dosen turunan dari class person
class Dosen extends Person {
    //atribut nidn
    private $nidn;

    //method utk mengeset nilai awal nama dan nidn dari object dosen
    public function __construct($dosenName, $nidn){
        parent::__construct($dosenName);
        $this->nidn = $nidn;
    }  

    //method pembeda
    public function getRole(){
        return "Ini merupaan role dosen";
    }
}

//class mahasiswa turunan dari class person
class Mahasiswa extends Person {
    //atribut nim
    private $nim;

    //method construct utk mengeset nilai awal nama dan nim dari objek mahasiswa
    public function __construct($mhsName, $nim){
        parent::__construct($mhsName);
        $this->nim = $nim;
    }

    //method pembeda
    public function getRole(){
        return "Ini merupaan role mahasiswa";
    }  
}

//kelas abstrak jurnal
abstract class Jurnal {
    //method abstrak
    abstract function pengelolaan();
}

//turunan dari class jurnal
class JurnalMahasiswa extends Jurnal {
    //method turunan 
    public function pengelolaan(){
        return "ini pengeloaan mahasiswa";
    }
}
//turunan dari class jurnal
class JurnalDosen  extends Jurnal {
    //method turunan
    public function pengelolaan(){
        return "ini pengeloaan dosen";
    }
}
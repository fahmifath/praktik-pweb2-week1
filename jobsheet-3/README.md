# Jobsheet 3
##### Menerapkan Konsep Inheritance, Polymorphism, Encapsulation, dan Abstraction dalam PHP
### 1. Inheritance
Inheritance atau pewarisan sifat merupakan class turunan dari class yang lainnya. inheritance di buat dengan membuat class baru dengan tujuan di hubungkan dengan class yang lain yang di inginkan. dengan tujuan untuk mendapatkan informasi atau data dari class yang di hubungkan tersebut. class yang baru ini di sebut juga dengan sub class atau child class. jadi subclass dan childclass adalah class turunan. dan class utama atau class yang di hubungkan di sebut juga parent class.</br>
Contoh penerapan:</br>
Buat kelas Person dengan atribut name dan metode getName().
```sh
class Person {
    //membuat atribut name
    public $name;

    //method untuk mengambil nilai dari atribut name
    public function getName(){
        $this->name = "Person name";
    }
}
```
Buat kelas Student yang mewarisi dari Person dan tambahkan atribut studentID serta metode getStudentID().
```sh
class Student extends Person {
    //atribut student id
    public $studentId;

    //method utk mengambil nilai student id
    public function getStudentId(){
        return $this->studentId;
    }
}
```
### 2. Polymorphism
Polymorphism adalah gambaran pola dalam object-oriented programming di mana banyak class memiliki fungsi yang berbeda ketika menggunakan turunan class yang sama.</br>
Contoh penerapan:</br>
Buat kelas Teacher yang juga mewarisi dari Person dan tambahkan atribut teacherID.
```sh
class Teacher extends Person {
    //atribut teacherid
    public $teacherId;
}
```
 Override metode getName() di kelas Student dan Teacher untuk menampilkan format berbeda.
 ```sh
 class Student extends Person {
    //atribut student id
    public $studentId;

    //method utk mengambil nilai student id
    public function getStudentId(){
        return $this->studentId;
    }
    
    //method utk mengambil nilai name
    public function getName(){
        $this->name = "Student name";
    }
}
 class Teacher extends Person {
    //atribut teacherid
    public $teacherId;

    //method utk mengambil nilai name
    public function getName(){
        $this->name = "Teacher name";
    }
}
 ```
 ### 3. Encapsulation
 Enkapsulasi adalah salah satu yang paling terpenting di dalam pemrograman berorientasi objek(OOP). karena tahap enkapsulasi lah yang menentukan pemberian hak akses pada setiap property atau method.  enkapsulasi atau encapsulation pada OOP terdiri dari 3. yaitu : Public, Private dan Protected.</br>
 Contoh penerapan:</br>
 Ubah atribut name dan studentID dalam kelas Student menjadi private.
 ```sh
 class Student extends Person {
   //atribut student id
   private $studentId;

   //method utk mengambil nilai student id
   public function getStudentId(){
       return $this->studentId;
   }
   
   //method utk mengambil nilai name
   public function getName(){
       $this->name = "Student name";
   }
}
 ```
 Tambahkan metode setter dan getter untuk mengakses dan mengubah nilai atribut name dan studentID.
 ```sh
 class Student extends Person {
    //atribut student id
    private $studentId;

    //method utk mengatur student id
    public function setStudentId($studentId){
        $this->studentId = $studentId;
    }

    //method utk mengambil nilai student id
    public function getStudentId(){
        return $this->studentId;
    }

    //method utk mengatur nilai name
    public function setName($name){
        $this->name = $name;
    }

    //method utk mengambil nilai name
    public function getName(){
        return $this->name;
    }
}
 ```
 ### 4. Abstraction  
 Sebuah kelas abstrak adalah kelas yang tidak lengkap dan memerlukan kelas lain untuk memberikan implementasi yang spesifik. Kelas abstrak digunakan sebagai dasar bagi kelas lain. Ini membantu untuk mendefinisikan metode abstrak yang harus diimplementasikan oleh semua turunan kelas tersebut.</br>
 Sebuah kelas abstrak bisa mengandung properti dan metode seperti kelas biasa. Namun, metode abstrak yang didefinisikan di kelas abstrak harus dideklarasikan tanpa tubuh dan harus diimplementasikan di kelas turunan.</br>
 Contoh penerapan:</br>
 Buat kelas abstrak Course dengan metode abstrak getCourseDetails().
 ```sh
//class abstrak course
abstract class Course {
    //membuat method abstrak 
    abstract function getCourseDetails();
}
 ```
 Buat kelas OnlineCourse dan OfflineCourse yang mengimplementasikan  getCourseDetails() untuk memberikan detail yang berbeda. 
 ```sh
//class turunan dari class course
class OnlineCourse extends Course {
    //method turunan dari class parent
    public function getCourseDetails(){
        return "Ini detail online course";
    }
}

//class turunan dari class course
class OfflineCourse extends Course {
    //method turunan dari class parent
    public function getCourseDetails(){
        return "Ini detail offline course";
    }
}
 ```
## Tugas
Implementasikan kelas Person sebagai induk dari Dosen dan Mahasiswa
```sh
class Person {}
class Dosen extends Person {}
class Mahasiswa extends Person {}
```
Gunakan konsep Inheritance untuk membuat hierarki kelas yang memungkinkan  Dosen dan Mahasiswa memiliki atribut dan metode yang sesuai dengan perannya
```sh
class Person {
    public $nama;
  
    public function getNama(){
        return $this->nama;
    }
}
class Dosen extends Person {}
class Mahasiswa extends Person {}
```
Terapkan Polymorphism dengan membuat metode getRole() di kelas Person dan override metode ini di kelas Dosen dan Mahasiswa untuk menampilkan peran yang berbeda
```sh
class Person {
    public $nama;
  
    public function getNama(){
        return $this->nama;
    }
  
    //method pembeda
    public function getRole(){
        return "Ini merupaan role person";
    }  
}
class Dosen extends Person {
    //method pembeda
    public function getRole(){
        return "Ini merupaan role dosen";
    }  
}
class Mahasiswa extends Person {
    //method pembeda
    public function getRole(){
        return "Ini merupaan role mahasiswa";
    }  
}
```
Gunakan Encapsulation untuk melindungi atribut nidn di kelas Dosen dan nim di  kelas Mahasiswa
```sh
class Dosen extends Person {
    private $nidn;
    
    //method pembeda
    public function getRole(){
        return "Ini merupaan role dosen";
    }  
}
class Mahasiswa extends Person {
    private $nip;
    
    //method pembeda
    public function getRole(){
        return "Ini merupaan role mahasiswa";
    }  
}
```
Buat kelas abstrak Jurnal dan implementasikan konsep Abstraction dengan  membuat kelas turunan JurnalDosen dan JurnalMahasiswa yang masing-masing  memiliki cara tersendiri untuk mengelola pengajuan jurnal. 
```sh
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
```
 
 
 
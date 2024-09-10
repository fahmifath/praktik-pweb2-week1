# Jobsheet 3
Menerapkan Konsep Inheritance, Polymorphism, Encapsulation, dan Abstraction dalam PHP
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
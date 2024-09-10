<?php
//membuat class persom
class Person {
    //membuat atribut name
    public $name;

    //method untuk mengambil nilai dari atribut name
    public function getName(){
        $this->name = "Person name";
    }
}
//membuat class student yg merupakan turunan dr class person
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
//class teacher turunan dari class person
class Teacher extends Person {
    //atribut teacherid
    public $teacherId;

    //method utk mengambil nilai name
    public function getName(){
        $this->name = "Teacher name";
    }
}
//class abstrak course
abstract class Course {
    //membuat method abstrak 
    abstract function getCourseDetails();
}

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
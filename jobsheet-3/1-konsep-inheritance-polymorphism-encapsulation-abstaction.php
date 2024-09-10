<?php
class Person {
    public $name;

    public function getName(){
        $this->name = "Person name";
    }
}
class Student extends Person {
    private $studentId;

    public function setStudentId($studentId){
        $this->studentId = $studentId;
    }

    public function getStudentId(){
        return $this->studentId;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}
class Teacher extends Person {
    public $teacherId;

    public function getName(){
        $this->name = "Teacher name";
    }
}
abstract class Course {
    abstract function getCourseDetails();
}

class OnlineCourse extends Course {
    public function getCourseDetails(){
        return "Ini detail online course";
    }
}

class OfflineCourse extends Course {
    public function getCourseDetails(){
        return "Ini detail offline course";
    }
}
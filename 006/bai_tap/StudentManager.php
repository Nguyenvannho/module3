<?php
class StudentManager
{
    private $students;

    public function __construct()
    {
        $this->students =[];
    }

    public function insertFirst($data)
    {
        array_unshift($this->students,$data);
    }

    public function insertLast($data)
    {
        array_push($this->students,$data);
    }

    public function getStudents()
    {
        return $this->students;
    }

    public function showList()
    {
        foreach ($this->students as $student) {
            echo "Name : ". $student->getName()." ; ";
            echo "Score : ".$student->getScore()."<br>";
        }
    }

    public function totalStudentsFail()
    {
        $count = 0;
        foreach ($this->students as $student) {
            if ($student->getScore() <= 5){
                $count++;
            }
        }
        return $count;
    }

    public function listStudentMaxScore($score)
    {
        $arr=[];
        foreach ($this->students as $student) {
            if ($student->getScore() >= $score){
                $arr[]=$student;
            }
        }
        return $arr;
    }

    public function findByName($name)
    {
        $arr=[];
        foreach ($this->students as $student) {
            if ($student->getName() == $name){
                $arr[]=$student;
            }
        }
        return $arr;
    }
}
<?php 
include_once "Student.php";
include_once "StudentManager.php";
include_once "Student.php";
include_once "StudentManager.php";
$student1 = new Student("Hung",8);
$student6 = new Student("Hung",10);
$student2 = new Student("Nhung",9);
$student3 = new Student("Minh",7);
$student4 = new Student("Duc",4);
$student5 = new Student("Tri",5);
$studentManager = new StudentManager();
$studentManager->insertFirst($student1);
$studentManager->insertFirst($student2);
$studentManager->insertFirst($student3);
$studentManager->insertLast($student4);
$studentManager->insertLast($student5);
$studentManager->insertLast($student6);
$students = $studentManager->getStudents();

$studentManager->showList();
echo "<br>";
echo $studentManager ->totalStudentsFail();
echo "<br>";
$listStudent = $studentManager->listStudentMaxScore(8);
echo "<pre>";
print_r($listStudent);
$listFindByName = $studentManager->findByName("Hung");
print_r($listFindByName);




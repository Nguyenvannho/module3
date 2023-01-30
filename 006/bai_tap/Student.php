<?php 
class Student
{
    private $name;
    private $score;

    /**
     * @param $name
     * @param $score
     */
    public function __construct($name, $score)
    {
        $this->name = $name;
        $this->score = $score;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param mixed $score
     */
    public function setScore($score): void
    {
        $this->score = $score;
    }
}
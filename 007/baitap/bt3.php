<?php
class Node{
    public $name;
    public $code;
    public function __construct($name, $code){
        $this->name = $name;
        $this->code = $code;
    }
}

class Patient {
    public $kham = [];
    public function push($name,$code){
        $node = new Node($name,$code);
        array_push($this->kham,$node);
    }
    public function sort(){
        function sapxep($code1,$name1)
            {
                if ($code1->code == $name1->code) return 1;
                return ($code1->code > $name1->code) ? 1 : -1;
            }
         
            usort($this->kham, "sapxep");
        }
    
    public function toString(){
       return $this->kham;
    }
}

$benhnhan = new Patient();
$benhnhan->push("Smith",5);
$benhnhan->push("Jones",4);
$benhnhan->push("Fehrenbach",6);
$benhnhan->push("Brown",1);
$benhnhan->push("Ingram",1);
echo "<pre>";
print_r($benhnhan->kham);
$benhnhan->sort();
echo "<pre>";
print_r($benhnhan->toString());


?>
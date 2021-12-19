<?php
// parent class
class Human {
        
    // public function walk
    public function walk($name) {
        echo $name. " is walking....\n";
    }
        
    // public function see
    public function see($name) {
        echo $name. " is seeing....\n";
    }
}
    
// child class
class Male extends Human {
    private $name;
        
    public function setName($name) {
        $this->name = $name;
    }

    public function male() {
        $this->walk($this->name);
        $this->see($this->name);
    }
}
    
// child class
class Female extends Human {
    private $femaleName;
        
    public function setName($femaleName) {
        $this->femaleName = $femaleName;
    }

    public function female() {
        $this->walk($this->femaleName);
        $this->see($this->femaleName);
    }
}
    
$male = new Male();
$male->setName("Adam");
$male->male();
    
$female = new Female();
$female->setName("Afroj");
$female->female();
    
    
?>
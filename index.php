<?php include './inc/header.php'; ?>
   <?php 
    class Person
    {
        public $name;
        public $age;

        public function personName(){
            echo 'My name is'. $this->name . "<br/>";
        }

        public function age($ageValue){
            echo 'My age is '. $this->age = $ageValue;
        }


    }
    
    $personClassObj = new Person;
    $personClassObj->name = 'John Doe';
    $personClassObj->personName();
    $personClassObj->age('40');


   ?> 
<?php include './inc/footer.php';  ?> 
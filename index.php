<?php include './inc/header.php'; ?>
   <?php 
    class Person
    {
        public $name;
        public $age;

        function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        public function personInformation(){
            echo 'My name is: '. $this->name . "<br/>";
            echo 'My age is: '. $this->age . "<br/>";
        }

       
    }
    
    $personClassObj = new Person('John Doe', '30');
    $personClassObj->personInformation(); 
   
   ?> 
<?php include './inc/footer.php';  ?> 
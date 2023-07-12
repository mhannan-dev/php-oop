<?php include './inc/header.php'; ?>
   <?php 
    class Person
    {
        public $name;
        public $age;
        public $id;

        function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function __destruct() {
            if (!empty($this->id)) {
                echo "Destroying ";
            }
        }

       
    }
    
    $personClassObj = new Person('John Doe', '30');
    $personClassObj->setId(12);
    unset($personClassObj);

   
   ?> 
<?php include './inc/footer.php';  ?> 
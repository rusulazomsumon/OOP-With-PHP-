<?php 
    class Person{
       public $fName = "Rusul";
       public $lName = "Azom";
       protected $age = "24";
    }

    class Information{
        private function personalInfo(){
            $info = "Rusul is a programmer but have a girlfriend";
            return $info;
        }
    }

    //Acess Modifiers: %%%%%public%%%%% , anyone can access 
    //calling outside from the person class , print sucessfully
   $name = new Person();
    echo $name->fName." ".$name->lName;

    //Acess Modifiers: %%%%%private%%%%% ,only inside the class
    // calling personalInfo function using $rusulInfo objects 
    // after running the code 
    // Fatal error: Uncaught Error: Call to private method Information::personalInfo() from context ''

    // $rusulInfo = new Information();
    // echo $rusulInfo->personalInfo();

    //Acess Modifiers: %%%%%protected%%%%% , inside the class and childs class
    //creating inheritance 
    class Sumon extends Person {
        public function boyos(){
            $ag = $this->age;
            return $ag;
        }
    }
    $ageInfo = new Sumon();
    echo $ageInfo->boyos();
    /*
    ###############Inheritance####################
    ############### Childs extends Parents ####################
    Inheritance in OOP = When a class derives from another class.
     The child class will inherit all the public and protected properties and 
     methods from the parent class. In addition, it can have its own properties and methods. 
     An inherited class is defined by using the extends keyword.
    */

    /* 
    ********************* PHP - Access Modifiers *****************
    Properties and methods can have access modifiers which control where they can be accessed.
    There are three access modifiers:
    #public - the property or method can be accessed from everywhere. This is default
    #protected - the property or method can be accessed within the class and by classes derived from that class (childs)
    #private - the property or method can ONLY be accessed within the class
    */
    /*
     ************** $this **********************
     $this is reference to a PHP Object that was created by the interpreter for you, that contains an array of variables.
      If you call $this inside a normal method in a normal class, $this returns the Object (the class) to which that
       method belongs. It's possible for $this to be undefined if the context has no parent Object.
    */
?>
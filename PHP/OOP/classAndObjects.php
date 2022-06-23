<?php 
    class myClass {
        // method and propertics 
        public $info = "Welcome in Object Oriented Programing With PHP";
    }
    // creating objects 
    $obj = new myClass;
    /* 
        The var_dump () function is a built-in function of PHP that dumps the information about the variables. 
        This information includes the data type and value of the variable. 
        In case of string, it also includes the size of the string passed inside the function. 
        The array and object are explored recursively with values to show their structure.
    */
    var_dump($obj);
    // printing a veriable using objects
    ?>
    <!-- html inside php  -->
    <br>
    <?php 
    echo $obj->info;
?>
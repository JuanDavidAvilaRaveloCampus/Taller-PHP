<?php
    include 'classes.php';  

    $person = new Person();

    $person->set_Name($_POST['name_1']);
    $person->set_Age($_POST['age_1']);
    
    $person->set_Name($_POST['name_2']);
    $person->set_Age($_POST['age_2']);
    
    $person->set_Name($_POST['name_3']);
    $person->set_Age($_POST['age_3']);
    
    print "Nombre :".$person->get_Name()."<br>";
    print "Edad:".$person->get_Age()."<br>"; 

    print "Nombre :".$person->get_Name()."<br>";
    print "Edad:".$person->get_Age()."<br>"; 

    print "Nombre :".$person->get_Name()."<br>";
    print "Edad:".$person->get_Age()."<br>"; 

?>
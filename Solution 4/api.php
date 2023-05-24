<?php
    include 'classes.php';  

    $person = new Person(); 
    $person_2 = new Person(); 
    $person_3 = new Person(); 

    $person->set_Name($_POST['name_1']);
    $person->set_Age($_POST['age_1']);
    
    $person_2->set_Name($_POST['name_2']);
    $person_2->set_Age($_POST['age_2']);

    $person_3->set_Name($_POST['name_3']);
    $person_3->set_Age($_POST['age_3']);

    $names = [
        $person->get_Name(),
        $person_2->get_Name(),
        $person_3->get_Name(),
    ];
    
    $ages = [
        $person->get_Age(),
        $person_2->get_Age(),
        $person_3->get_Age()

    ];

    if  (
        (is_numeric($person->get_Age())) and
        (is_numeric($person_2->get_Age())) and
        (is_numeric($person_3->get_Age()))
    ){
        if (
            (is_string($person->get_Name())) and
            (is_string($person_2->get_Name())) and
            (is_string($person_3->get_Name()))
        ){
            $max_age = max($ages);
            echo "La persona con más edad es ".$names[array_search($max_age, $ages)]." y su edad es: ".$max_age;
        } else {
            echo "eda, siguen jugando a ser haker:^";
        }
    }
    else {
        echo "deja de jugar a ser haker";
    }
?>
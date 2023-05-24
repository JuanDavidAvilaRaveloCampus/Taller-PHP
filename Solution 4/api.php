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

    $array_1 = [
        $person->get_Age() => $person->get_Name(),
        $person_2->get_Age()=> $person_2->get_Name(),
        $person_3->get_Age() => $person_3->get_Name()
    ];

    
    // if ()

    // foreach ($array_1 as $key => $value) {
    //     if ((is_numeric($value)) && ($key <= 3)){
    //         foreach ($array_2 as $key => $value_2) {
    //             if ((is_string($value_2)) && ($key < 1)){
    //                 echo "soy ".$value_2." y tengo ".$value." de edad<br><br>";
    //             }
    //         }
    //     }

    //     // echo "key: ".$key."<br>";
    //     // echo "value: ".$value."<br>" ;
    // }

?>
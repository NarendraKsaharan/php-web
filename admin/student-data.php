<?php
include_once('config-user.php');

$countArray = array();

$selQuery = "SELECT * FROM `students`";
$selStudent = $con->query($selQuery);


    
    while ($student = $selStudent->fetch_assoc()) {
        $class = $student['class'];

        if (!array_key_exists($class, $countArray)) {
            $countArray[$class] = 1;
            
 
        } else {
            $countArray[$class]++;
        }
    }



foreach ($countArray as $key => $value) {
    echo "Class ".$key." - Count:".$value."<br>";
}








// $countArray = array("A"=>0, "B"=>0, "C"=>0, "D"=>0);

// $selQuery = "SELECT * FROM `students`";
// $selStudent = $con->query($selQuery);

// if ($selStudent->num_rows >0) {
    
//     while ($student = $selStudent->fetch_assoc()) {
//         $class = $student['class'];
//         $countArray[$class]++;
//     }

// } else {
//     echo "No Data Found";
// }

// foreach ($countArray as $key => $value) {
//     echo "Class ".$key." -> Count:".$value."<br>";
// }

?>
<?php
    //fetching the data from the form
    $name = $_POST["fname"];
    $email = $_POST["email"];
    $date_of_birth = $_POST["date"];
    $gender = $_POST["gender"];
    $country = $_POST["country"];
    

    $output = "{$name} ,";
    $output .= "{$email} ,";
    $output .= "{$date_of_birth} , ";
    $output .= "{$gender} ,";
    $output .= "{$country} ";
    $output .= "\n";

$filename ="userdata.csv";
$fhandle = fopen($filename, "a"); 
fwrite($fhandle,  $output);  // fwrite($fhandle,  $email);  
// fwrite($fhandle,  $date_of_birth);  
// fwrite($fhandle,  $gender);  
// fwrite($fhandle,  $country);  

fclose ($fhandle); // close file



    echo  "Name:  {$name}"; 
    echo "<br>";
    echo  "Email:  {$email}";
    echo "<br>";
    echo  "Date of birth:  {$date_of_birth}";
    echo "<br>";
    echo  "Gender:  {$gender}";
    echo "<br>";
    echo  "Country:  {$country}";
?>
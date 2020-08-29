<?php
$link = mysqli_connect("localhost","root","","vs_code_mid");
if($link === false){
    die("ERROR:Could not connect.".mysqli_connect_errno());
}

$sql ="CREATE TABLE student(
    snum DECIMAL(9,0) NOT NULL PRIMARY KEY,
    sname VARCHAR(30),
    major VARCHAR(25),
    level VARCHAR(2),
    age DECIMAL(3,0)

    
)";

if(mysqli_query($link, $sql)){
    echo "Table created successfully"; 
}
else {
    echo "Error: Could not able to execute $sql." .mysqli_error($link);
}

mysqli_close($link);

?>
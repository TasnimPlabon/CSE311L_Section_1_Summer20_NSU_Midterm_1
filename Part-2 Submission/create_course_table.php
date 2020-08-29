<?php
$link = mysqli_connect("localhost","root","","vs_code_mid");
if($link === false){
    die("ERROR:Could not connect.".mysqli_connect_errno());
}

$sql ="CREATE TABLE course(
    snum DECIMAL(9,0) NOT NULL PRIMARY KEY  UNIQUE,
    cname VARCHAR(30) NOT NULL 
    
    
)";

if(mysqli_query($link, $sql)){
    echo "Table created successfully";
}
else {
    echo "Error: Could not able to execute $sql." .mysqli_error($link);
}

mysqli_close($link);

?>
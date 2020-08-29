<?php
$link = mysqli_connect("localhost","root","","vs_code_mid");
if($link === false){
    die("ERROR:Could not connect.".mysqli_connect_errno());
}

$sql ="CREATE TABLE class(
    name VARCHAR(40) NOT NULL PRIMARY KEY ,
    meets_at VARCHAR(20) ,
    room VARCHAR(10),
    fid DECIMAL(9,0)
    
    
)";

if(mysqli_query($link, $sql)){
    echo "Table created successfully";
}
else {
    echo "Error: Could not able to execute $sql." .mysqli_error($link);
}

mysqli_close($link);

?>
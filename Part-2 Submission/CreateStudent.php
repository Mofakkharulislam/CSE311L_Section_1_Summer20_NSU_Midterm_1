<?php

$link = mysqli_connect('localhost','root','','Midtermsu');

if($link == false)
{
    die("Error: Could not connect. " .mysqli_connect_error());
}


$sql = "CREATE TABLE Student_table(
    snum decimal(9,0) NOT NULL,
    sname VARCHAR(30) NULL,
    major VARCHAR(25)  NULL,
    level VARCHAR(2)  NULL,
    age decimal(3,0) NULL)";


if(mysqli_query($link, $sql)){
    echo "Table Created";
}
else{
    echo "Error: Could not create Table" .mysqli_error($link);
}

mysqli_close($link);

?>
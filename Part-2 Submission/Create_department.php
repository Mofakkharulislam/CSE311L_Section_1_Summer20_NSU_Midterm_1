<?php

$link = mysqli_connect('localhost','root','','Midtermsu');

if($link == false)
{
    die("Error: Could not connect. " .mysqli_connect_error());
}


$sql = "CREATE TABLE Department_table(
    fid decimal(9,0) NOT NULL,
    fname VARCHAR(30) NULL,
    deptid decimal(3,0) NULL)";


if(mysqli_query($link, $sql)){
    echo "Table Created";
}
else{
    echo "Error: Could not create Table" .mysqli_error($link);
}

mysqli_close($link);

?>
<?php

$link = mysqli_connect('localhost','root','','Midtermsu');

if($link == false)
{
    die("Error: Could not connect. " .mysqli_connect_error());
}


$sql = "CREATE TABLE Course_table(
    snum decimal(9,0) NOT NULL,
    cnum VARCHAR(40) NOT NULL)";


if(mysqli_query($link, $sql)){
    echo "Table Created";
}
else{
    echo "Error: Could not create Table" .mysqli_error($link);
}

mysqli_close($link);

?>
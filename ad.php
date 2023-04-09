<?php
$server='localhost';
$userName='root';
$password='';
$database='ob_db';
$conn=new mysqli($server,$userName,$password,$database);
if($conn->connect_error){
    die("Connection failed");
} else{
    $sql=" FROM movies WHERE id=1";
    $res=$conn->query($sql);
    if($res===TRUE){
        echo "deleted successfully";
    }
    else{
        echo "cannot delete";
    }
}
?>
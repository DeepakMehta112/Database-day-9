<?php
$server='localhost';
$userName='root';
$password='';
$database='ob_db';
$conn=new mysqli($server,$userName,$password,$database);

$id=$_GET['id'];


if($conn->connect_error){
    die("Connection failed");
} 
else{
    $sql="DELETE FROM movies WHERE id=$id";
    $res=$conn->query($sql);
    if($res===TRUE){
        // echo "deleted successfully";
        header("Location:update.php");
    }
    else{
        echo "cannot delete";
      }
}
?>
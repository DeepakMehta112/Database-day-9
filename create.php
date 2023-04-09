<?php
$server='localhost';
$userName='root';
$password='';
$database='ob_db';
$conn=new mysqli($server,$userName,$password,$database);
if($conn->connect_error){
    die("Connection failed");
} else{
    $title=$_GET['title'];
    $rating=$_GET['rating'];
    $Desc=$_GET['Desc'];
    $sql="INSERT INTO movies (id,title,rating,description) VALUES(null,'$title',$rating,'$Desc') ";
    $res=$conn->query($sql);
    if($res===TRUE){
        // echo "Added successfully";
        header("Location:update.php");
    }
    else{
        echo "cannot add";
        
    }
}
?>
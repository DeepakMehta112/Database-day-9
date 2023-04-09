<?php
$servername="localhost";
$username="root";
$password="";
$database="ob_db";
$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error){

    die ("Connection failed");

}
else{
    echo ("Connection established");
    $sql="INSERT INTO news_db (id,user,	ctext,cred_at) VALUES(null,'hello','hi','2020-02-02')";
    $result=$conn->query($sql);
    if($result===TRUE){
        echo "Successfully added a recoed";
    }
    else{
        echo "No not added";
    }
    $conn->close();
}


?>
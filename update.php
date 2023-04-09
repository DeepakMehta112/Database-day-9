<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="form.php"><h1>Add new Movies. </h1></a>
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
    // echo ("Connection established<br>");
    $sql="SELECT * FROM movies";
    $res= $conn->query($sql);
    if($res->num_rows>0){
        // echo "there are datas";
      while  ($row=$res->fetch_assoc()){
        // if($row){/
            // echo $row['title'];
?>
    <table border="1px solid black">
     <div class="container">
        <div class="title">
            <?php echo $row['id'];
            ?>
        </div>
        <div class="title1">
            <?php echo $row['title'];
            ?>
        </div>
        <div class="title2">
            <?php echo $row['rating'];
            ?>
    </table>
        </div>
     </div> 
     <a href="edit.php"><h3>Edit</h3></a><br>
     <a href="delete.php?id=<?php echo $row ['id'] ?>"><h3>Delete</a></h3>
     <?php     
        }
    }
    else{
        echo "there are no datas";
    }
    
    }    $conn->close();


?>
</body>
</html>
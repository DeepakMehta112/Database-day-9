<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="create.php" method="get">
        <label for="Title">Title:</label>
        <input type="text" name="title" value="" required><br><br>
        <label for="rating">Rating:</label>
        <input type="number" name="rating" min="1" max="5" required><br><br>
        <label for="Desc">Desc:</label>
        <!-- <input type="text" name="Desc" required><br><br> -->
        <textarea name="Desc" id="" cols="30" rows="10" required></textarea><br><br>
        <!-- <input type="submit" value="Add"> -->
        <button type="submit">ADD   
            
        </button>
    </form>
</body>
</html>
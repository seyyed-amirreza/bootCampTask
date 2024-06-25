<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
</head>
<body>
    <form method="post" action="dataBase.php">
        <label for="name">Product name:</label><br>
        <input type="text" id="name" name="name">
        
        <br>
        <label for="price">Price:</label><br>
        <input type="number" id="price" name="price">

        <br>
        <label for="quantity">Quantity:</label><br>
        <input type="number" id ="quantity" name="quantity">
        <br>
        <label for="producer">Producer:</label>
        <input type="text" id="producer" name="producer">
        <br><br>
        <input type="submit">
    </form>
</body>
</html>
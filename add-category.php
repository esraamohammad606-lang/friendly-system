<?php

include "db.php";

if(isset($_POST['add'])){

    $name = $_POST['name'];

    $query = "INSERT INTO categories(name)
              VALUES('$name')";

    mysqli_query($conn,$query);

    echo "Category Added Successfully";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Category</title>
</head>
<body>

<h2>Add Category</h2>

<form method="POST">

    <input type="text" name="name" placeholder="Category Name">

    <button type="submit" name="add">Add</button>

</form>

</body>
</html>

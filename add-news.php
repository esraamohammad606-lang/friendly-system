<?php

session_start();

include "db.php";

$categories = mysqli_query($conn,"SELECT * FROM categories");

if(isset($_POST['add'])){

    $title = $_POST['title'];
    $category_id = $_POST['category_id'];
    $details = $_POST['details'];

    $image = $_FILES['image']['name'];

    $tmp_name = $_FILES['image']['tmp_name'];

    move_uploaded_file($tmp_name,"uploads/".$image);

    $user_id = $_SESSION['user_id'];

    $query = "INSERT INTO news(title,category_id,details,image,user_id)
              VALUES('$title','$category_id','$details','$image','$user_id')";

    mysqli_query($conn,$query);

    echo "News Added Successfully";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Add News</title>
</head>
<body>

<h2>Add News</h2>

<form method="POST" enctype="multipart/form-data">

    <input type="text" name="title" placeholder="News Title"><br><br>

    <select name="category_id">

        <?php while($cat = mysqli_fetch_assoc($categories)){ ?>

        <option value="<?php echo $cat['id']; ?>">
            <?php echo $cat['name']; ?>
        </option>

        <?php } ?>

    </select>

    <br><br>

    <textarea name="details" placeholder="News Details"></textarea>

    <br><br>

    <input type="file" name="image">

    <br><br>

    <button type="submit" name="add">Add News</button>

</form>

</body>
</html>

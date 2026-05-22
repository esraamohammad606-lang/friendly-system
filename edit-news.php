<?php

include "db.php";

$id = $_GET['id'];

$categories = mysqli_query($conn,"SELECT * FROM categories");

$query = "SELECT * FROM news WHERE id='$id'";

$result = mysqli_query($conn,$query);

$row = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){

    $title = $_POST['title'];
    $category_id = $_POST['category_id'];
    $details = $_POST['details'];

    $update = "UPDATE news
               SET title='$title',
               category_id='$category_id',
               details='$details'
               WHERE id='$id'";

    mysqli_query($conn,$update);

    header("Location: all-news.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit News</title>
</head>
<body>

<h2>Edit News</h2>

<form method="POST">

    <input type="text"
           name="title"
           value="<?php echo $row['title']; ?>">

    <br><br>

    <select name="category_id">

        <?php while($cat = mysqli_fetch_assoc($categories)){ ?>

        <option value="<?php echo $cat['id']; ?>">

            <?php echo $cat['name']; ?>

        </option>

        <?php } ?>

    </select>

    <br><br>

    <textarea name="details"><?php echo $row['details']; ?></textarea>

    <br><br>

    <button type="submit" name="update">
        Update
    </button>

</form>

</body>
</html>

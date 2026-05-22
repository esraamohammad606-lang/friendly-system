<?php

session_start();

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h2>Welcome <?php echo $_SESSION['user_name']; ?></h2>

<ul>

    <li><a href="add-category.php">Add Category</a></li>

    <li><a href="categories.php">View Categories</a></li>

    <li><a href="add-news.php">Add News</a></li>

    <li><a href="all-news.php">All News</a></li>

    <li><a href="deleted-news.php">Deleted News</a></li>

    <li><a href="logout.php">Logout</a></li>

</ul>

</body>
</html>

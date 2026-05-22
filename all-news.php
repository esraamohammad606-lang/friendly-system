<?php

include "db.php";

$query = "SELECT news.*, categories.name AS category_name
          FROM news
          INNER JOIN categories
          ON news.category_id = categories.id
          WHERE status='active'";

$result = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html>
<head>
    <title>All News</title>
</head>
<body>

<h2>All News</h2>

<table border="1">

<tr>

    <th>Title</th>
    <th>Category</th>
    <th>Details</th>
    <th>Image</th>
    <th>Actions</th>

</tr>

<?php while($row = mysqli_fetch_assoc($result)){ ?>

<tr>

    <td><?php echo $row['title']; ?></td>

    <td><?php echo $row['category_name']; ?></td>

    <td><?php echo $row['details']; ?></td>

    <td>
        <img src="uploads/<?php echo $row['image']; ?>" width="100">
    </td>

    <td>

        <a href="edit-news.php?id=<?php echo $row['id']; ?>">
            Edit
        </a>

        |

        <a href="delete-news.php?id=<?php echo $row['id']; ?>">
            Delete
        </a>

    </td>

</tr>

<?php } ?>

</table>

</body>
</html>

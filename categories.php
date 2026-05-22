<?php

include "db.php";

$query = "SELECT * FROM categories";

$result = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Categories</title>
</head>
<body>

<h2>All Categories</h2>

<table border="1">

<tr>
    <th>ID</th>
    <th>Name</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)){ ?>

<tr>

    <td><?php echo $row['id']; ?></td>

    <td><?php echo $row['name']; ?></td>

</tr>

<?php } ?>

</table>

</body>
</html>

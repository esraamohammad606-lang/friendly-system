<?php

include "db.php";

$query = "SELECT * FROM news
          WHERE status='deleted'";

$result = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Deleted News</title>
</head>
<body>

<h2>Deleted News</h2>

<table border="1">

<tr>
    <th>Title</th>
    <th>Details</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)){ ?>

<tr>

    <td><?php echo $row['title']; ?></td>

    <td><?php echo $row['details']; ?></td>

</tr>

<?php } ?>

</table>

</body>
</html>

<?php
mysqli_real_connect($conn, 'labit.mysql.database.azure.com', 'aphatsara836@labit', 'Po0926245419', 'ITFLab', 3306);
$id=$_GET['id'];
$sql="DELETE FROM guestbook WHERE id='$id'";
if (mysqli_query($conn, $sql)) {
    echo "Delete successfully";
    echo "<a href="index.php">back to home page</a>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

?>

<?php
$conn = mysqli_connect('labit.mysql.database.azure.com', 'aphatsara836@labit', 'Po0926245419', 'ITFlab');
$sql = 'DELETE FROM guestbook WHERE ID = ' . $_GET['ID'] . '';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5 text-center">

        <h3>
            <?php
            if (mysqli_query($conn, $sql)) {
                echo "Delete Completed";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
            ?>
        </h3>
        <a href="index.php" class="btn btn-light mt-3">BACK</a>

    </div>
</body>

</html>

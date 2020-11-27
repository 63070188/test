<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITF Lab</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'labit.mysql.database.azure.com', 'aphatsara836@labit', 'Po0926245419', 'ITFlab', 3306);
if (!$conn)
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$ID = $_POST['ID'];
$sql = "SELECT * FROM guestbook WHERE ID='$ID'";
$res = mysqli_query($conn, $sql);
$comment = mysqli_fetch_array($res);
?>
    <div class="container">
        <h1>Edit</h1>
        <form action="update.php" method="post" class="mt-4">
            <input type="hidden" name="ID" value=<?php echo $comment['ID'];?>>
            <div class="form-group">
                <label for="inputProduct">ชื่อสินค้า</label>
                <?php
                    echo '<input type="text" name="product" id="inputProduct" class="form-control" placeholder="Enter Product" value="'.$comment["Product"].'">'
                ?>
            </div>
            <div class="form-group">
                <label for="inputPrice">ราคาต่อหน่อย</label>
                <textarea name="price" class="form-control" id="inputPrice" rows="3" placeholder="Enter price"><?php echo $comment['Price'];?></textarea>
            </div>
            <div class="form-group">
                <label for="inputDiscount">Link</label>
                <?php
                    echo '<input type="text" name="discount" id="inputDiscount" class="form-control" placeholder="Enter Discount" value="'.$comment["Discount"].'">'
                ?>
            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-primary mr-1">Save</button>
                <a role="button" class="btn btn-secondary" href="index.php">Back</a>
            </div>
        </form>
    </div>
<?php
mysqli_close($conn);
?>
</body>
</html>

<?php
require('connect.php');
if (isset($_POST['submit'])) {
    $product = $_POST['product'];
    $price = $_POST['price'];
    $amount = $_POST['amount'];
    $total = $price * $amount;

    $sql = "INSERT INTO guestbook (product , price, amount, total) VALUES ('$product', '$price', '$amount', '$total')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        echo "<a href='index.php'>back to home page</a>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form page</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="product">product</label>
        <input type="text" name="product">
        <label for="price">price</label>
        <input type="text" name="price">
        <label for="amount">amount</label>
        <input type="text" name="amount">
        <input type="submit" value="ยืนยัน" name="submit">
    </form>
</body>

</html>
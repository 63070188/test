<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <?php
    require('connect.php');
    $res = mysqli_query($conn, 'SELECT * FROM guestbook');
    ?>
    <br>
    <div class="container">
        <table class="table table-bordered table-hover" width="1200" align="center" border="1">
            <thead class="thead-dark">
                <tr>
                    <th width="300">
                        <div align="center">ชื่อสินค้า</div>
                    </th>
                    <th width="300">
                        <div align="center">ราคาต่อหน่วย</div>
                    </th>
                    <th width="300">
                        <div align="center">จำนวน</div>
                    </th>
                    <th width="300">
                        <div align="center">ราคาทั้งหมด</div>
                    </th>
                    <th width="300">
                        <div align="center">การจัดการ</div>
                    </th>
                </tr>
            </thead>
            <?php
            while ($Result = mysqli_fetch_array($res)) {
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $Result['product']; ?></td>
                        <td><?php echo $Result['price']; ?></td>
                        <td><?php echo $Result['amount']; ?></td>
                        <td><?php echo $Result['total']; ?></td>
                        <td>
                            <a href="delete.php?id=<?php echo $Result['id'];?>" class="btn btn-outline-danger">DELETE</a>
                        </td>
                    </tr>
                </tbody>
            <?php
            }
            ?>
        </table>
        <button type="button" class="btn btn-outline-warning" onclick="window.location.href='form.php'">เพืิ่มข้อมูล</button>
</body>

</html>
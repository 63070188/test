<?php
    $conn = mysqli_init();
    mysqli_real_connect($conn, 'labit.mysql.database.azure.com', 'aphatsara836@labit', 'Po0926245419', 'ITFLab', 3306);
    if(mysqli_connect_errno($conn)){
        echo "connect fail".mysqli_connect_error();
    }

?>

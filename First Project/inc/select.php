<?php
$sql_select = 'SELECT * FROM users ORDER BY RAND() LIMIT 1 '; //RANDOM CHOSE FROM USERS AND LIMIT ONE PERSOIN 
$result = mysqli_query($conn, $sql_select);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<?php

require('db.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Homepage</title>
    <link rel="stylesheet" href="style.css">
    <script src=" https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css">
</head>
<body>
<div class="sidebar">
    <ul>
        <li><a href="person.php" class="icon ion-md-person"></a>Staff</li>
        <li><a href="social.php" class="ion ion-md-person-add"></a>Room</li>
        <li><a href="assemblyline.php" class="ion ion-md-hammer"></a>Build</li>
        <li><a href="inventory.php" class="ion ion-md-build"></a>Inventory</li>
        <li><a href="finance.php" class="ion ion-md-cash"></a>Finance</li>
        <li><a href="help.php" class="icon ion-md-help-circle"></a>Help</li>
        <li><a href="logout.php" class="icon ion-md-exit"></a>Logout</li>
    </ul>
</div>
<a class="btn"></a>
<script type="text/javascript">
    $('.btn').on('click',function(){
        $('.btn').toggleClass('btnc');
        $('.sidebar').toggleClass('side');
    })
</script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AL-store</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>    
    <?php

        include('home_navigation_bar.php');
        include('functions/db.php'); 

        if(isset($_GET['dashboard']))
            include('dashboard.php');
        if(isset($_GET['show']))
            include('show_product.php');
        
    ?>

    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
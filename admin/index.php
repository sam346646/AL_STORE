<?php
    include("includes/db.php");
    session_start();
    if(!isset($_SESSION['a_email']))
    {
        echo "<script>window.open('login.php','_self')</script>";
    }
    else
    {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AL-store</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
</head>
<body>
    <div id="full-area">
    <?php include("includes/sidebar.php"); ?>
        <div id="content-area">
            <div class="container-fluid">
            <?php 
            if(isset($_GET['dashboard']))
                include("dashboard.php");

            if(isset($_GET['view_product']))
                include("view_product.php");
            if(isset($_GET['insert_product']))
                include("insert_product.php");
            if(isset($_GET['edit_product']))
            {
                $id=$_GET['edit_product'];
                include("edit_product.php");
            }

            if(isset($_GET['view_category']))
                include("view_category.php");
            if(isset($_GET['insert_category']))
                include("insert_category.php");
            if(isset($_GET['edit_category']))
            {
                $id=$_GET['edit_category'];
                include("edit_category.php");
            }

            if(isset($_GET['view_customer']))
                include("view_customer.php");

            if(isset($_GET['view_admin']))
                include("view_admin.php");

            if(isset($_GET['logout']))
                include("logout.php");
            
            ?>
            </div>
        </div>
    </div>
    <?php
        
        
        
    ?>

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
</body>
</html>
<?php } ?>
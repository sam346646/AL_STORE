<?php 
    if(isset($_GET['delete_category']))
    {
        $con=mysqli_connect("localhost","root","","alstore");
        $id=$_GET['delete_category'];
        $delete_qry="delete from product_categories where p_cat_id=$id";
        $run_qry=mysqli_query($con,$delete_qry);
        if($run_qry)
        {
            echo "<script>alert('One of your product category has been Deleted')</script>";
            echo "<script>window.open('index.php?view_category','_self')</script>"; 
        }
        
    }

?>
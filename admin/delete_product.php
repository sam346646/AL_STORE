<?php 
    if(isset($_GET['delete_product']))
    {
        $con=mysqli_connect("localhost","root","","alstore");
        $id=$_GET['delete_product'];
        $delete_qry="delete from product where product_id=$id";
        $run_qry=mysqli_query($con,$delete_qry);
        if($run_qry)
        {
            echo "<script>alert('One of your product has been Deleted')</script>";
            echo "<script>window.open('index.php?view_product','_self')</script>"; 
        }
        
    }

?>
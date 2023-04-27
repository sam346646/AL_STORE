<?php
    $id=$_GET['show_product'];
    $qry="select * from product where product_id=$id";
    $run_qry=mysqli_query($con,$qry);
    $fetch_row=mysqli_fetch_array($run_qry);
    $title=$fetch_row['product_title'];
    $img=$fetch_row['product_img1'];
    $price=$fetch_row['product_price'];

    $qry1="select * from product_categories";
    $run_qry1=mysqli_query($con,$qry1);
?>

<div class="container-fluid bg_sam_container pt-2">
    <div class="col-lg-12 pt-2" style="color:#555;background-color:white;border-radius:5px;">
        <ol class="breadcrumb">
            <li>
                <h4><b>&emsp;<i class="fa fa-tags"></i> Product</b></h4>
            </li>
        </ol>
    </div>
    <div class="card col-sm-3 ">
        <div class="card-header ">Product categories</div>
        <ul class="list-group list-group-flush">
            <?php
                while($fetch_row=mysqli_fetch_array($run_qry1))
                {
            ?>
            <a href="index.php?show=product&id=<?php echo $fetch_row['p_cat_id']; ?>" class="btn btn-success list-group-item"><?php echo $fetch_row['p_cat_title'] ?></a>
            <?php } ?>
        </ul>
    </div>
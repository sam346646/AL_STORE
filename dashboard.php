<div class="container-fluid bg_sam_container pt-2">
    <div class="col-lg-12 pt-2" style="color:#555;background-color:white;border-radius:5px;">
        <ol class="breadcrumb">
            <li>
                <h4><b>&emsp;<i class="fa-solid fa-leaf"></i> Products</b></h4>
            </li>
        </ol>
    </div>
    <div class="row">
        <?php
            $qry="select * from product order by 1 desc limit 0,8";
            $run_qry=mysqli_query($con,$qry);
            while($fetch_row=mysqli_fetch_array($run_qry))
            {
                $title=$fetch_row['product_title'];
                $img=$fetch_row['product_img1'];
                $price=$fetch_row['product_price'];
                $id=$fetch_row['product_id'];
        ?>
        <div class="col-md-3 mb-3">
            <div class="card text-center">
                <img src="admin/product_images/<?php echo $img; ?>" width=250 height=300 class="card-img-top" alt="not found">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $title; ?></h4>
                    <p class="card-text font_num"><i class='fa fa-inr'></i> <?php echo $price; ?></p>
                    <a href="index.php?show=product&id=<?php echo $id; ?>" class="btn text-success border border-success-subtle">View details</a>
                    <a href="#" class="btn btn-success">Add to cart</a>
                </div>
            </div>
        </div>
        <?php
            }
        ?>  
    </div>
</div>
<?php
    $qry="select * from product_categories";
    $run_qry=mysqli_query($con,$qry);
?>

<div class="container-fluid bg_sam_container py-3">
    <div class="col-lg-12 pt-2" style="color:#555;background-color:white;border-radius:5px;">
        <ol class="breadcrumb">
            <li>
                <h4><b>&emsp;<i class="fa fa-tags"></i> Product</b></h4>
            </li>
        </ol>
    </div>
    <div class="row g-2">
        <div class="col-md-3">
            <div class="card mx-4">
                <div class="card-title text-center fw-bold fs-5">Product categories</div>
                <ul class="list-group list-group-flush">
                    <?php
                        while($fetch_row=mysqli_fetch_array($run_qry))
                        {
                    ?>
                    <a href="index.php?show=category&id=<?php echo $fetch_row['p_cat_id']; ?>" class="btn btn-success list-group-item text-start"><?php echo $fetch_row['p_cat_title'] ?></a>
                    <?php } ?>
                </ul>
            </div>
        </div>

        <?php 

            if($_GET['show']=="product")
            {
                $id=$_GET['id'];
                $qry="select * from product where product_id=$id";
                $run_qry=mysqli_query($con,$qry);
                $fetch_row=mysqli_fetch_array($run_qry);
                $title=$fetch_row['product_title'];
                $img1=$fetch_row['product_img1'];
                $img2=$fetch_row['product_img2'];
                $price=$fetch_row['product_price'];
                $desc=$fetch_row['product_desc'];
        ?>
        <div class="col-md-9">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-5 mb-2">
                    <div id="carousel_img" class="carousel slide carousel-dark" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carousel_img" data-bs-slide-to="0" class="active bg-success" ></li>
                            <li data-bs-target="#carousel_img" data-bs-slide-to="1" class="bg-success"></li>
                            <li data-bs-target="#carousel_img" data-bs-slide-to="2" class="bg-success"></li>
                        </ol>
                        
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <center><img class="img-responsive" width=350 height=350 src="admin/product_images/<?php echo $img1; ?>" alt="img1 not found"></center>
                            </div>
                            <div class="carousel-item">
                                <center><img class="img-responsive" width=350 height=350 src="admin/product_images/<?php echo $img2; ?>" alt="img2 not found"></center>
                            </div> 
                        </div>
                        
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel_img" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon text-danger"></span> 
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel_img" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>   
                        </button>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="card">
                        <div class="card-body px-4">
                            <h4 class="card-title fw-bold"><?php echo $title; ?></h4><br>
                            <h3 class="card-text font_num text-success">Rs.&nbsp;<span class="fs-1"><?php echo $price; ?><span></h3>
                            <span class="card-text font_num text-decoration-line-through px-5">Rs.&nbsp;<?php echo $price+50; ?></span><br>
                            <span class="card-text text-danger">You can save Rs.<span class="font_num">50</span> on this order</span><br>
                            <br><h5 class="card-text fw-bold text_sam_menu">Benefits:</h5>
                            <h6 class="card-text px-3"><?php echo $desc; ?></h6>

                            <script type="text/javascript">
                                function qty_change(qty) 
                                {
                                    document.getElementById('qty').value=qty.value;
                                    document.getElementById('total_price').innerHTML=qty.value*<?php echo $price; ?>;
                                }
                            </script>

                            Quantity: <select style="width:40px;" name="qty" onchange="qty_change(this)">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <h5 class="font_num">Total: <?php echo $price; ?>*<input type="text" id="qty" size="1" maxlength="1" onkeyup="qty_change(this)"/> = <span class="text-success">Rs. <span class="fw-bold fs-2 text-success" id="total_price"></span></span></h5><br>
                            <div class="text-center"><a href="#" class="btn btn-success fw-bold">Add to cart</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 
        }


        if($_GET['show']=="category")
        {
            $id=$_GET['id'];
            if($id=="all")
                $qry="select * from product";
            else
                $qry="select * from product where p_cat_id=$id";
            $run_qry=mysqli_query($con,$qry);

            echo "<div class='col-md-9'><div class='row'>";

            while($fetch_row=mysqli_fetch_array($run_qry))
            {
                $title=$fetch_row['product_title'];
                $img=$fetch_row['product_img1'];
                $price=$fetch_row['product_price'];
                $id=$fetch_row['product_id'];
    ?>
                <div class="col-md-4 text-center mb-3">
                    <div class="card mx-2">
                        <img src="admin/product_images/<?php echo $img; ?>" width=200 height=200 class="card-img-top" alt="not found">
                        <div class="card-body">
                            <h4 class="card-title fs-5 fw-bold"><?php echo $title; ?></h4>
                            <p class="card-text font_num"><i class='fa fa-inr'></i> <?php echo $price; ?></p>
                            <a href="index.php?show=product&id=<?php echo $id; ?>" class="btn text-success border border-success-subtle">View details</a>
                            <a href="#" class="btn btn-success">Add to cart</a>
                        </div>
                    </div>
                </div> 
    <?php
            }
            echo "</div></div></div>";
        }
    ?>
</div>
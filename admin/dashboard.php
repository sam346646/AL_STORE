<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li>
                <h4><b><i class="fa fa-fw fa-dashboard"></i> Dashboard</b></h4>
            </li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3"><i class="fa fa-tag fa-5x"></i></div>
                    <div class="col-xs-9  text-right"><b>Products</b></div>
                </div>
            </div>
            <a href="index.php?view_product">
            <div class="panel-footer text-info">
                <span class="pull-left">View details</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
            </div>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3"><i class="fa fa-gear fa-5x"></i></div>
                    <div class="col-xs-9  text-right"><b>Categories</b></div>
                </div>
            </div>
            <a href="index.php?view_category">
            <div class="panel-footer text-success">
                <span class="pull-left">View details</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
            </div>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3"><i class="fa fa-users fa-5x"></i></div>
                    <div class="col-xs-9  text-right"><b>Customer</b></div>
                </div>
            </div>
            <a href="index.php?view_customer">
            <div class="panel-footer text-warning">
                <span class="pull-left">View details</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
            </div>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-danger">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3"><i class="fa fa-user fa-5x"></i></div>
                    <div class="col-xs-9  text-right"><b>Admin</b></div>
                </div>
            </div>
            <a href="index.php?view_admin">
            <div class="panel-footer text-danger">
                <span class="pull-left">View details</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
            </div>
            </a>
        </div>
    </div>

    
<div class="col-md-12">
    <ol class="breadcrumb">
        <li><h4><b><i class="fa fa-fw fa-tag"></i> Products</b></h4></li>
    </ol>
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Image</th>
        </tr>
            <?php
                $qry="select * from product limit 1,5";
                $run_qry=mysqli_query($con,$qry);
                while($fetch_row=mysqli_fetch_array($run_qry))
                {
            ?>
                <tr>
                    <td><?php echo $fetch_row['product_title']; ?></td>
                    <td><?php echo $fetch_row['product_price']; ?></td>
                    <td><img src="product_images/<?php echo $fetch_row['product_img1']; ?>" width=60 height=60></td>
                </tr>
            <?php } ?>
    </table>
</div>
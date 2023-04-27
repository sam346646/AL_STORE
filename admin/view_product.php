<div class="row">
<div class="col-lg-12">
    <ol class="breadcrumb">
        <li><h4><b><i class="fa fa-fw fa-tag"></i> View Products</b></h4></li>
    </ol>
    <table class="table table-striped table-bordered table-hover prod-table">
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Image</th>
            <th>Keywords</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
            <?php
                $qry="select * from product";
                $run_qry=mysqli_query($con,$qry);
                while($fetch_row=mysqli_fetch_array($run_qry))
                {
            ?>
                <tr>
                    <td><?php echo $fetch_row['product_title']; ?></td>
                    <td><?php echo $fetch_row['product_price']; ?></td>
                    <td><img src="product_images/<?php echo $fetch_row['product_img1']; ?>" width=60 height=60></td>
                    <td><?php echo $fetch_row['product_keywords']; ?></td>
                    <td>
                        <?php $id=$fetch_row['product_id']; ?>
                        <a style="text-decoration:none;" href="index.php?edit_product=<?php echo $id; ?>"><i class="fa fa-pencil"></i> Edit</a>
                    </td>
                    <td>
                        <a style="text-decoration:none;" href="delete_product.php?delete_product='<?php echo $id; ?>'"><i class="fa fa-trash-o"></i> Delete</a>
                    </td>
                    <td></td>
                </tr>
            <?php } ?>
    </table>
</div>
</div>
<div class="row">
<div class="col-lg-12">
    <ol class="breadcrumb">
        <li><h4><b><i class="fa fa-fw fa-tag"></i> View product categories </b></h4></li>
    </ol>
    <table class="table table-striped table-bordered table-hover prod-table">
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
            <?php
                $qry="select * from product_categories";
                $run_qry=mysqli_query($con,$qry);
                while($fetch_row=mysqli_fetch_array($run_qry))
                {
            ?>
                <tr>
                    <td><?php echo $fetch_row['p_cat_title']; ?></td>
                    <td><?php echo $fetch_row['p_cat_desc']; ?></td>
                    <td>
                        <?php $id=$fetch_row['p_cat_id']; ?>
                        <a style="text-decoration:none;" href="index.php?edit_category=<?php echo $id; ?>"><i class="fa fa-pencil"></i> Edit</a>
                    </td>
                    <td>
                        <a style="text-decoration:none;" href="delete_category.php?delete_category='<?php echo $id; ?>'"><i class="fa fa-trash-o"></i> Delete</a>
                    </td>
                    <td></td>
                </tr>
            <?php } ?>
    </table>
</div>
</div>
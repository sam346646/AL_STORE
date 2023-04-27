<div class="row">
<div class="col-lg-12">
    <ol class="breadcrumb">
        <li><h4><b><i class="fa fa-fw fa-tag"></i> View Products</b></h4></li>
    </ol>
    <table class="table table-striped table-bordered table-hover prod-table">
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Contact</th>
        </tr>
            <?php
                $qry="select * from customers";
                $run_qry=mysqli_query($con,$qry);
                while($fetch_row=mysqli_fetch_array($run_qry))
                {
            ?>
                <tr>
                    <td><?php echo $fetch_row['customer_name']; ?></td>
                    <td><?php echo $fetch_row['customer_address'].",".$fetch_row['customer_city']; ?></td>
                    <td><?php echo $fetch_row['customer_email']; ?></td>
                    <td><?php echo $fetch_row['customer_contact']; ?></td>
                </tr>
            <?php } ?>
    </table>
</div>
</div>
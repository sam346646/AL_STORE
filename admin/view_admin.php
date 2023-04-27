<div class="row">
<div class="col-lg-12">
    <ol class="breadcrumb">
        <li><h4><b><i class="fa fa-fw fa-tag"></i> View Products</b></h4></li>
    </ol>
    <table class="table table-striped table-bordered table-hover prod-table">
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
            <?php
                $qry="select * from admins";
                $run_qry=mysqli_query($con,$qry);
                while($fetch_row=mysqli_fetch_array($run_qry))
                {
            ?>
                <tr>
                    <td><?php echo $fetch_row['a_name']; ?></td>
                    <td><?php echo $fetch_row['admin_email']; ?></td>
                </tr>
            <?php } ?>
    </table>
</div>
</div>
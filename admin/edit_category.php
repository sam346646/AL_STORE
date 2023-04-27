<?php
    $id=$_GET['edit_category'];
    $con=mysqli_connect("localhost","root","","alstore");
    $qry="select * from product_categories where p_cat_id=$id";
    $run_qry=mysqli_query($con,$qry);
    $fetch_row=mysqli_fetch_array($run_qry);
    
    $title=$fetch_row['p_cat_title'];    
    $description=$fetch_row['p_cat_desc'];
?>
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><h4><b><i class="fa fa-pencil"></i> Edit product category</b></h4></li>
        </ol>

        <form class="form-vertical" method="POST">
            <div class="form-group">
                <label class="control-label">Product category title</label>
                <input type="text" name="title" class="form-control" value="<?php echo $title; ?>" required>
            </div>

            <div class="form-group">
                <label class="control-label">Product category description</label>
                <input type="text" name="description" class="form-control" value="<?php echo $description; ?>"required>
            </div>

            <div class="form-group">
                <label class="control-label"></label>
                <input type="submit" name="submit" value="Update product category" class="form-control btn btn-primary">
            </div>
        </form>

    </div>
</div>    

<?php
    if(isset($_POST['submit']))
    {
        $title=$_POST['title'];
        $description=$_POST['description'];

        $update_qry="update product_categories set p_cat_title='$title',p_cat_desc='$description' where p_cat_id='$id'";
        $run_qry=mysqli_query($con,$update_qry);

        if($run_qry)
        {
            echo "<script>alert('Your product category has been updated Successfully')</script>"; 
            echo "<script>window.open('index.php?view_category','_self')</script>"; 
        }
    }
?>
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><h4><b><i class="fa fa-money"></i> Insert product category</b></h4></li>
        </ol>

        <form class="form-vertical" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label class="control-label">Product category title</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label class="control-label">Product description</label>
                <input type="text" name="description" class="form-control" required>
            </div>

            <div class="form-group">
                <label class="control-label"></label>
                <input type="submit" name="submit"value="Insert product category" class="form-control btn btn-primary">
            </div>
        </form>

    </div>
</div>    

<?php
    if(isset($_POST['submit']))
    {
        $title=$_POST['title'];
        $description=$_POST['description'];

        $insert_qry="insert into product_categories (p_cat_title,p_cat_desc) values ('$title','$description')";
        $run_qry= mysqli_query($con,$insert_qry);
    
        if($run_qry)
        {
            echo "<script>alert('Product category has been inserted sucessfully')</script>";
            echo "<script>window.open('index.php?view_category','_self')</script>";
        }
    }
?>

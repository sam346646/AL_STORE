<?php
    $id=$_GET['edit_product'];
    $con=mysqli_connect("localhost","root","","alstore");
    $qry="select * from product where product_id=$id";
    $run_qry=mysqli_query($con,$qry);
    $fetch_row=mysqli_fetch_array($run_qry);
    
    $title=$fetch_row['product_title'];    
    $category=$fetch_row['p_cat_id'];
    $img1=$fetch_row['product_img1'];
    $img2=$fetch_row['product_img2'];  
    $price=$fetch_row['product_price'];   
    $keyword=$fetch_row['product_keywords'];   
    $description=$fetch_row['product_desc'];
?>
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><h4><b><i class="fa fa-pencil"></i> Edit product</b></h4></li>
        </ol>

        <form class="form-vertical" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label class="control-label">Product title</label>
                <input type="text" name="title" class="form-control" value="<?php echo $title; ?>" required>
            </div>

            <div class="form-group">
                <label class="control-label">Product category</label>
                <select name="category" class="form-control" required>
                <?php
                    $qry="select * from product_categories where p_cat_id=$category";
                    $run_qry=mysqli_query($con,$qry);
                    $fetch_row=mysqli_fetch_array($run_qry)
                ?>
                <option value="<?php echo $fetch_row['p_cat_id']; ?>"><?php echo $fetch_row['p_cat_title'];?></option>
                <?php
                    $qry="select * from product_categories";
                    $run_qry=mysqli_query($con,$qry);
                    while($fetch_row=mysqli_fetch_array($run_qry))
                    {
                ?>
                        <option value="<?php echo $fetch_row['p_cat_id']; ?>"><?php echo $fetch_row['p_cat_title'];?></option>
                <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label class="control-label">Product Image1</label>
                <input type="file" name="img1" class="form-control" required><br>
                <img src="product_images/<?php echo $img1; ?>" width="100" height="80">
            </div>

            <div class="form-group">
                <label class="control-label">Product Image2</label>
                <input type="file" name="img2" class="form-control" required><br>
                <img src="product_images/<?php echo $img2; ?>" width="100" height="80">
            </div>

            <div class="form-group">
                <label class="control-label">Product price</label>
                <input type="text" name="price" class="form-control" value="<?php echo $price; ?>"required>
            </div>

            <div class="form-group">
                <label class="control-label">Product keyword</label>
                <input type="text" name="keyword" class="form-control" value="<?php echo $keyword; ?>"required>
            </div>

            <div class="form-group">
                <label class="control-label">Product description</label>
                <textarea name="description" cols="19" rows="6" class="form-control"><?php echo $description; ?></textarea>
            </div>

            <div class="form-group">
                <label class="control-label"></label>
                <input type="submit" name="submit" value="Update product" class="form-control btn btn-primary">
            </div>
        </form>

        <script src="js/tinymce/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'textarea'});</script>
    </div>
</div>    

<?php
    if(isset($_POST['submit']))
    {
        $title=$_POST['title'];
        $category=$_POST['category'];

        $img1=$_FILES['img1']['name'];
        $img2=$_FILES['img2']['name'];

        $temp_name1=$_FILES['img1']['tmp_name'];
        $temp_name2=$_FILES['img2']['tmp_name'];
   
        move_uploaded_file($temp_name1,"product_images/$img1");
        move_uploaded_file($temp_name2,"product_images/$img2");

        $price=$_POST['price'];
        $keyword=$_POST['keyword'];
        $description=$_POST['description'];

        $update_qry="update product set p_cat_id='$category',date=NOW(),product_title='$title',product_img1='$img1',product_img2='$img2',product_keywords='$keyword',product_desc='$description',product_price='$price' where product_id='$id'";
        $run_qry=mysqli_query($con,$update_qry);

        if($run_qry)
        {
            echo "<script>alert('Your product has been updated Successfully')</script>"; 
            echo "<script>window.open('index.php?view_product','_self')</script>"; 
        }
    }
?>
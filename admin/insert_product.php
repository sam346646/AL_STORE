<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><h4><b><i class="fa fa-money"></i> Insert product</b></h4></li>
        </ol>

        <form class="form-vertical" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label class="control-label">Product title</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label class="control-label">Product category</label>
                <select name="category" class="form-control" required>
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
                <input type="file" name="img1" class="form-control" required>
            </div>

            <div class="form-group">
                <label class="control-label">Product Image2</label>
                <input type="file" name="img2" class="form-control" required>
            </div>

            <div class="form-group">
                <label class="control-label">Product price</label>
                <input type="text" name="price" class="form-control" required>
            </div>

            <div class="form-group">
                <label class="control-label">Product keyword</label>
                <input type="text" name="keyword" class="form-control" required>
            </div>

            <div class="form-group">
                <label class="control-label">Product description</label>
                <textarea name="description" cols="19" rows="6" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label class="control-label"></label>
                <input type="submit" name="submit"value="Insert product" class="form-control btn btn-primary">
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

        $insert_qry="insert into product (p_cat_id,date,product_title,product_img1,product_img2,product_price,product_keywords,product_desc) values ('$category',NOW(),'$title','$img1','$img2','$price','$keyword','$description')";
        $run_qry= mysqli_query($con,$insert_qry);
    
        if($run_qry)
        {
            echo "<script>alert('Product has been inserted sucessfully')</script>";
            echo "<script>window.open('index.php?view_product','_self')</script>";
        }
    }
?>

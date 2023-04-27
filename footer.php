<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-3">

            <h4>Pages</h4>
            <ul>
                <li><a href="#">Shopping Cart</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">My Account</a></li>
            </ul>
            <hr>

            <h4>User Section</h4>
            <ul>
                <li><a href="#">Login</a></li>
                <li><a href="#">Register</a></li>
            </ul>
            <hr class="hidden-md hidden-lg hidden-sm">

        </div>
        
        <div class="com-sm-6 col-md-3">
            
            <h4>Products Categories</h4>
            <ul>
                <?php 
                    $qry="select * from product_categories";
                    $run_qry=mysqli_query($con,$get_p_cats);
                    while($fetch_row=mysqli_fetch_array($run_qry))
                    {    
                        $id=$fetch_row['p_cat_id'];
                        $title=$fetch_row['p_cat_title'];
                        echo "
                        
                            <li>
                            
                                <a href='shop.php?p_cat=$p_cat_id'>
                                
                                    $p_cat_title
                                
                                </a>
                            
                            </li>
                        
                        ";
                        
                    }
                
                ?>
            
            </ul><!-- ul Finish -->
            
            <hr class="hidden-md hidden-lg">
            
        </div><!-- col-sm-6 col-md-3 Finish -->
        
        <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
            
            <h4>Find Us</h4>
            
            <p><!-- p Start -->
                
                <strong>Advata life style.</strong>
                <br/>+91 733 7878 707
                <br/>business@advaitalifstyle.in
                <br/><strong>Alstore</strong>
                
            </p><!-- p Finish -->
            
            <a href="contact.php">Check Our Contact Page</a>
            
            <hr class="hidden-md hidden-lg">
            
        </div><!-- col-sm-6 col-md-3 Finish -->
        
        <div class="col-sm-6 col-md-3">
            
            <h4>Get The News</h4>
            
            <p class="text-muted">
                Dont miss our latest update products.
            </p>
            
            <form action="https://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('https://feedburner.google.com/fb/a/mailverify?uri=M-devMedia', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true" method="post"><!-- form begin -->
                <div class="input-group"><!-- input-group begin -->
                    
                    <input type="text" class="form-control" name="email">
                    
                    <input type="hidden" value="M-devMedia" name="uri"/><input type="hidden" name="loc" value="en_US"/>
                    
                    <span class="input-group-btn"><!-- input-group-btn begin -->
                        
                        <input type="submit" value="subscribe" class="btn btn-default">
                        
                    </span><!-- input-group-btn Finish -->
                    
                </div><!-- input-group Finish -->
            </form><!-- form Finish -->
            
            <hr>
            
            <h4>Keep In Touch</h4>
            
            <p class="social">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-google-plus"></a>
                <a href="#" class="fa fa-envelope"></a>
            </p>
            
        </div>
    </div><!-- row Finish -->
</div><!-- container Finish -->
</div><!-- #footer Finish -->


<div id="copyright"><!-- #copyright Begin -->
<div class="container"><!-- container Begin -->
    <div class="col-md-6"><!-- col-md-6 Begin -->
        
        <p class="pull-left">@Copy Advaita Lifestyle 2019 All Rights Reserved</p>
        
    </div><!-- col-md-6 Finish -->
    <div class="col-md-6"><!-- col-md-6 Begin -->
        
        
        
    </div><!-- col-md-6 Finish -->
</div><!-- container Finish -->
</div><!-- #copyright Finish -->
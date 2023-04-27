<?php 
    $data=$_REQUEST["s"];
    $hint="";
    $con=mysqli_connect("localhost","root","","alstore");
    $qry="select product_id,product_title from product where product_title like '%$data%'";
    $run_qry=mysqli_query($con,$qry);
    $hint.="<br>";
    while($fetch_row=mysqli_fetch_array($run_qry))
    {
        $id=$fetch_row['product_id'];
        $hint.="&ensp;<a class='search' href='index.php?show=product&id=$id'>".$fetch_row['product_title']."</a><br>";
    }
    echo $hint==="<br>"?"<br>&ensp;<span style='color:#969696'>no suggestion</span>":$hint;
?>
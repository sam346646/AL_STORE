<div class="navbar navbar-dark navbar-expand-lg bg_sam_menu">
    <div class="container">

        <img src="images/AL_logo.png" alt="" width="125" height="49">

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#main_menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="main_menu">

            <ul class="navbar-nav menu_option_right_align">

                <li class="nav-item"><a href="#" class="nav-link">My account</a></li>
                <li class="nav-item"><a href="#" class="nav-link">My cart</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Register</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Login</a></li>

            </ul>

        </div>
    </div>
</div>


<ul class="nav main_menu container p-2">
    <li class="nav-item main_menu_active"><a href="index.php?dashboard" class="nav-link">Home</a></li>
    <li class="nav-item"><a href="index.php?show=category&id=all" class="nav-link">Shop</a></li>
    <li class="nav-item"><a href="#" class="nav-link">Cart</a></li>
    <li class="nav-item"><a href="#" class="nav-link">Order</a></li>
    <li class="nav-item"><a href="#" class="nav-link">Contact us</a></li>
    <div id="my_dropdown" class="mt-1" style="z-index:2">
        <input type="text" size="35" placeholder="Search product" id="myInput" onkeyup="show_product(this.value)">
        <span id="suggestion"></span>
    </div>
</ul>
<script src="functions/functions.js"></script>
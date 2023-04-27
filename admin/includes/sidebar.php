<form>  <!-- For right align see css -->
                <div class="input-group">
                    <input type="text" class="form-control" onkeyup="show_product(this.value)" placeholder="Search">
                    <span class="input-group-btn">
				        <button class="btn btn-success" type="submit" name="search" value="search">
			          	    <i class="fa fa-magnifying-glass"></i><br>
				        </button>
                        <span id="suggestion"></span>
				    </span>
                </div>
            </form>


<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-header">

            <button class="navbar-toggle pull-left" data-toggle="collapse" data-target="#navbarNav">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div><a href="index.php?dashboard" class="navbar-brand">AL STORE</a></div>
        </div>

        <ul class="nav navbar-right top-nav">
            <li><a href="#" style="background-color: #222222;"><i class="fa fa-fw fa-user"></i>Sam<i class="fa fa-fw fa-caret-down"></i></a></li>
        </ul>

        <div class="collapse navbar-collapse navbar-ex1-collapse" id="navbarNav">
        
        <ul class="nav navbar-nav side-nav">

            <li class="active">
                <a href="index.php?dashboard"><i class="fa fa-fw fa-dashboard"></i>Dashboard</a>
            </li>

            <li>
                <a href="#" data-toggle="collapse" data-target="#products"><i class="fa fa-fw fa-tag"></i>Products<i class="fa fa-fw fa-caret-down"></i></a>
            
                <ul class="collapse" id="products">
                    <li onclick="window.location.href='index.php?insert_product'">Insert product</li>
                    <li onclick="window.location.href='index.php?view_product'">View product</li>
                </ul>
            </li>

            <li>
                <a href="#" data-toggle="collapse" data-target="#categories"><i class="fa fa-fw fa-gear"></i>Categories<i class="fa fa-fw fa-caret-down"></i></a>
            
                <ul class="collapse" id="categories">
                    <li onclick="window.location.href='index.php?insert_category'">Insert category</li>
                    <li onclick="window.location.href='index.php?view_category'">View category</li>
                </ul>
            </li>

            <li>
                <a href="index.php?view_customer"><i class="fa fa-fw fa-users"></i>View customer</a>
            </li>

            <li>
                <a href="index.php?view_admin"><i class="fa fa-fw fa-user"></i>View admin</a>
            </li>

            <li>
                <a href="index.php?logout"><i class="fa fa-fw fa-power-off"></i>Log out</a>
            </li>

        </ul>

        </div>
    </nav>
<div class="header-nav animate-dropdown">
    <div class="container">
        <div class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="nav-bg-class">
                <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                    <div class="nav-outer">
                        <ul class="nav navbar-nav">
                            <li class="active dropdown">
                                <a href="index.php" class="dropdown-toggle home-link">Home</a>
                            </li>
                            <?php 
                            $sql=mysqli_query($con,"select id,categoryName from category limit 6");
                            while($row=mysqli_fetch_array($sql)) { ?>
                            <li class="dropdown">
                                <a href="category.php?cid=<?php echo $row['id'];?>"><?php echo $row['categoryName'];?></a>
                            </li>
                            <?php } ?>
                        </ul>
                        <div class="clearfix"></div>                
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Header Nav Styling */
    .header-nav {
        background-color: #1E3A8A !important; /* Deep Blue Background */
        padding: 15px 0;
    }

    /* Navbar Container */
    .navbar {
        border: none;
    }

    /* Nav Links */
    .nav.navbar-nav {
        display: flex;
        justify-content: center;
        list-style: none;
        margin: 0;
        padding: 0;
    }
    .nav.navbar-nav li {
        margin: 0 10px;
    }
    .nav.navbar-nav li a {
        color: #FFFFFF;
        font-weight: 600;
        text-transform: capitalize;
        text-decoration: none;
        padding: 10px 18px;  /* Reduced padding */
        border-radius: 20px;  /* Slightly smaller border radius */
        background-color: #3B82F6; /* Light Blue for Links */
        font-size: 14px; /* Reduced font size */
        transition: background-color 0.3s ease, opacity 0.3s ease;
    }
    .nav.navbar-nav li a:hover, 
    .nav.navbar-nav li.active a {
        background-color: #2563EB; /* Darker Blue on Hover */
        opacity: 0.8; /* Fade Effect on Hover */
    }

    /* Ensure Home button doesn't stay red permanently */
    .home-link.active {
        background-color: #3B82F6; /* Set to normal blue */
        opacity: 1;
    }

    /* Mobile Toggle Button */
    .navbar-toggle {
        background-color: #2563EB;
        border: none;
        outline: none;
    }
    .icon-bar {
        background-color: #FFFFFF;
    }
</style>

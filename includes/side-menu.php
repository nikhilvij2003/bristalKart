<style>
    .side-menu {
        background-color: #f0f8ff;
        border: 1px solid #d1e0e0;
        border-radius: 5px;
        padding: 15px;
        font-family: Arial, sans-serif;
    }

    .side-menu .head {
        font-size: 18px;
        color: #0073e6 ;
        font-weight: bold;
        padding-bottom: 10px;
        border-bottom: 2px solid #0073e6;
        margin-bottom: 15px;
    }

    .side-menu .nav {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .side-menu .menu-item {
        margin-bottom: 10px;
    }

    .side-menu .menu-item a {
        text-decoration: none;
        font-size: 16px;
        color: #333;
        display: flex;
        align-items: center;
        transition: color 0.3s;
    }

    .side-menu .menu-item a:hover {
        color: #0073e6;
    }

    .side-menu .menu-item i {
        color: #0073e6;
        margin-right: 8px;
    }
</style>

<div class="side-menu animate-dropdown outer-bottom-xs">
    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>        
    <nav class="yamm megamenu-horizontal" role="navigation">
        <ul class="nav">
            <li class="dropdown menu-item">
                <?php 
                    $sql = mysqli_query($con, "select id,categoryName from category");
                    while($row = mysqli_fetch_array($sql)) {
                ?>
                    <a href="category.php?cid=<?php echo $row['id']; ?>" class="dropdown-toggle">
                        <i class="icon fa fa-desktop fa-fw"></i> <?php echo $row['categoryName']; ?>
                    </a>
                <?php } ?>
            </li>
        </ul>
    </nav>
</div>

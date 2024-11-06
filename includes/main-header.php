<?php 
if(isset($_GET['action'])){
    if(!empty($_SESSION['cart'])){
        foreach($_POST['quantity'] as $key => $val){
            if($val == 0){
                unset($_SESSION['cart'][$key]);
            } else {
                $_SESSION['cart'][$key]['quantity'] = $val;
            }
        }
    }
}
?>

<style>
    /* Header and Cart Styles */
    .main-header {
        background-color: #1E3A8A;
        padding: 10px 0;
    }

    .logo h2 {
        color: #FFFFFF;
        font-weight: bold;
        margin: 0;
        font-size: 20px;
    }

    .header-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .search-area {
        display: flex;
        justify-content: center;
        margin-top: 10px;
    }

    .search-field {
        width: 70%;
        padding: 10px;
        border-radius: 30px 0 0 30px;
        border: 1px solid #ccc;
        font-size: 16px;
    }

    .search-button {
        background-color: #FFD700;
        border: none;
        padding: 10px 20px;
        border-radius: 0 30px 30px 0;
        cursor: pointer;
        color: #1E3A8A;
        font-size: 16px;
    }

    .dropdown-cart {
        position: relative;
        margin-top: 0;
    }

    .items-cart-inner {
        display: flex;
        align-items: center;
        color: #FFD700;
        cursor: pointer;
    }

    .total-price-basket {
        font-weight: bold;
        margin-right: 10px;
    }

    .basket-item-count {
        background-color: #FFD700;
        color: #1E3A8A;
        border-radius: 50%;
        padding: 5px 10px;
        font-size: 14px;
        margin-left: 10px;
    }

    .cart-item {
        padding: 15px;
        border-bottom: 1px solid #f1f1f1;
        background-color: #f8f9fa;
    }

    .cart-total {
        padding: 15px;
        font-size: 18px;
        background-color: #f1f1f1;
        text-align: center;
    }

    .btn-primary {
        background-color: #1E3A8A;
        color: #fff;
        border: none;
        padding: 12px 20px;
        border-radius: 30px;
        width: 100%;
        cursor: pointer;
        font-size: 16px;
    }

    .btn-primary:hover {
        background-color: #FFD700;
        color: #1E3A8A;
    }
</style>

<div class="main-header">
    <div class="container">
        <div class="header-content">
            <div class="logo-holder">
                <div class="logo">
                    <a href="index.php">
                        <h2>Bristal-Kart</h2>
                    </a>
                </div>
            </div>

            <div class="animate-dropdown top-cart-row">
                <?php if(!empty($_SESSION['cart'])){ ?>
                    <div class="dropdown dropdown-cart">
                        <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                            <div class="items-cart-inner">
                                <div class="total-price-basket">
                                    <span class="lbl">Cart -</span>
                                    <span class="total-price">
                                        <span class="sign">Rs.</span>
                                        <span class="value"><?php echo $_SESSION['tp']; ?></span>
                                    </span>
                                </div>
                                <div class="basket">
                                    <i class="glyphicon glyphicon-shopping-cart"></i>
                                </div>
                                <div class="basket-item-count">
                                    <span class="count"><?php echo $_SESSION['qnty']; ?></span>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- Cart Items will display here (as per existing logic) -->
                        </ul>
                    </div>
                <?php } else { ?>
                    <div class="dropdown dropdown-cart">
                        <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                            <div class="items-cart-inner">
                                <div class="total-price-basket">
                                    <span class="lbl">Cart -</span>
                                    <span class="total-price">
                                        <span class="sign">Rs.</span>
                                        <span class="value">00.00</span>
                                    </span>
                                </div>
                                <div class="basket">
                                    <i class="glyphicon glyphicon-shopping-cart"></i>
                                </div>
                                <div class="basket-item-count">
                                    <span class="count">0</span>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="cart-item product-summary">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            Your Shopping Cart is Empty.
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix cart-total">
                                    <a href="index.php" class="btn btn-primary btn-block m-t-20">Continue Shopping</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

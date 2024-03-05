
<!DOCTYPE html>
<html lang="en">

    <?php
        require('product-head.php');
        require('product-header.php');

        if(isset($_GET['msg'])){
            echo $_GET['msg']; 
        }

    ?>
<body>

    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Shop</a>
                    <span class="breadcrumb-item active">Shopping Cart</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Cart Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
            
                 <!-- Table Start -->
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Serial_no</th>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                    <tbody class="align-middle">
                        <?php
                       
                            $serial_no = 1;
                            $Totall = 0;
                            if(isset($_SESSION['cart'])){
                                foreach($_SESSION['cart'] as $single_cart){
                                    
                                    $Totall += $single_cart['price']*$single_cart['qty'];
                                ?>
                        <form action="update-cart.php" method="post" enctype="multipart/form-data">
                        <tr>
                            <th scope="$single_cart" class="align-middle">
                            <?php
                                echo $serial_no ++;
                            ?>
                            </th>
                            <td class="align-middle"><img src="<?php echo $single_cart['image'];?>" alt="" style="width: 50px;">
                                <?php
                                    echo $single_cart['product_name'];
                                ?>
                                <input type="hidden" name="productId" value="<?php echo $single_cart['productId'];?>" class="product-Id">
                            </td>
                            <td class="align-middle">
                                <?php
                                    echo $single_cart['price'];
                            
                                ?>
                            </td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto qtyBox" style="width:    100px;">
                               
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus dicrement updateQty" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center qtyInput" name="qty" value="<?php echo $single_cart['qty'];?>">

                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus increment updateQty">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>

                                </div>
                            </td>
                            <td class="align-middle">
                                <?php
                                    $_Totall = $single_cart['price']*$single_cart['qty'];
                                    echo $_Totall;
                                ?>
                            </td>
                            <td class="align-middle">
                                <a href="remove-item.php?id=<?php echo $single_cart['productId'];?>" class="btn btn-sm btn-danger">
                                    <i class="fa fa-times"></i>
                                </a>
                            </td>

                            <td class="align-middle">
                                <button type="submit" class="btn btn-sm btn-primary ">
                                    Update     
                                </button>
                                <a href="?remove">remove</a>
                    
                            </td>
                        </tr>
                        </form>
                        
                        <?php
                            }
                        }
                        
                        ?>
                    </tbody>
                   
                </table>
                <!-- Table End -->
                

            </div>
            <div class="col-lg-4">
                <form class="mb-30" action="">
                    <div class="input-group">
                        <input type="text" class="form-control border-0 p-4" placeholder="Coupon Code">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Apply Coupon</button>
                        </div>
                    </div>
                </form>
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart Summary</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <h6>$<?php echo $Totall;?></h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">$10</h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>$<?php echo $Totall + 10;?></h5>
                        </div>
                        <a href="Checkout.php">
                            <button class="btn btn-block btn-primary font-weight-bold my-3 py-3">Proceed To Checkout</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->


    <!-- Footer Start -->
    <?php
        require('All-script.php');
        require('product-footer.php');
    ?>
    <!-- Footer End -->
</body>

</html>


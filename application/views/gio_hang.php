
    
    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/24.jpg);">
            <h2>GIỎ HÀNG</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i>Trang chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Cart Area Start ##### -->
    <div class="cart-area section-padding-0-100 clearfix">
        
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class=" breadcrumb justify-content-center " style="background: #ffffff">
                            <?php $cart_check = $this->cart->contents();
                            if(empty($cart_check)) {
                            echo '<h4>Giỏ hàng của bạn chưa có sản phẩm nào ! </h4>';
                            } 
                            else {}?> 
                        </div>
                    <div class="cart-table clearfix">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Họ tên</th>
                                    <th>Giờ</th>
                                    <th>Giá</th>
                                    <th>Thành tiền</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <?php
                                    echo form_open(base_url().'gio_hang/update_cart'); 
                                    $cart = $this->cart->contents();
                                    $grand_total = 0;
                                    $i = 1;
                                    foreach ($cart as $item):
                                        echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                                        echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                                        echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                                        echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                                        echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
                                ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td class="name">
                                        <h5><?php echo $item['name']; ?></h5>
                                    </td>
                                    <td class="qty">
                                        <div class="quantity">
                                           
                                            <?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="2" size="1" style="text-align: center"'); ?>
                                           
                                        </div>
                                    </td>
                                    <td class="price"><span><?php echo number_format($item['price']); ?> VNĐ</span></td>
                                     <?php $grand_total = $grand_total + $item['subtotal']; ?>
                                    <td class="total_price"><span><?php echo number_format($item['subtotal']) ?></span>VNĐ</td>
                                    <td class="action"><a href="<?php echo base_url('gio_hang/remove/' . $item['rowid']); ?>"><i class="icon_close"></i></a></td>
                                    <?php endforeach; ?>
                                </tr>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-12 col-lg-8">
                </div>
                <div class="col-12 col-lg-2">
                    <div class="action">
                            <a href="<?php echo base_url('gio_hang/remove/all'); ?>"><input type="button" value="Xóa Đơn Hàng" class="btn alazea-btn w-100"></a>
                        </div>
                    
                </div>
                <div class="col-12 col-lg-2">
                </div>
                
            </div>

            <div class="row">
                <!-- Coupon Discount -->
               <div class="col-12 col-lg-6">
                    <div class="coupon-discount mt-70">
                        <h5>Khuyến mãi</h5>
                        <p>Hiện tại chúng tôi chưa có chương trình khuyến mãi. Chúng tôi sẽ cập nhật sau.</p> 
                        <p>Cảm ơn quý khách.</p>
                    </div>
                </div>

                <!-- Cart Totals -->
                <div class="col-12 col-lg-6">
                    <div class="cart-totals-area mt-70">
                        <h5 class="title--">GIỎ HÀNG</h5>
                        <div class="total d-flex justify-content-between">
                            <h5>Tổng tiền</h5>
                            <h5><?php echo number_format($grand_total); ?> VNĐ</h5>
                        </div>
                        <div class="checkout-btn">
                            <a href="<?php echo base_url('thanh_toan') ?>" class="btn alazea-btn w-100">THUÊ</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- ##### Cart Area End ##### -->

    
    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>
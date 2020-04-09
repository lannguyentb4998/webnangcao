

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/24.jpg);">
            <h2>Đăng ký</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Trang chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Đăng ký</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Checkout Area Start ##### -->
    <div class="checkout_area mb-100">
        <div class="container" >
            <div class="row justify-content-between" >
                    <div class="checkout_details_area clearfix, col-md-12">
                        <h4 style="text-align: center;">THÔNG TIN LIÊN HỆ</h4>
                        <form name="billing" method="post" action="<?php echo base_url('gio_hang/save_order'); ?>">
                            <div class="row" >
                                <div class="col-12 col-lg-2">
                                </div>
                                <div class="col-12 col-lg-4">
                                    <label for="first_name">Họ tên *</label>
                                    <input type="text" class="form-control" name="ten_kh" value="" required>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <label for="email_address">Email *</label>
                                    <input type="email" class="form-control" name="email" value="">
                                </div>
                                <div class="col-12 col-lg-2">
                                </div>
                                <div class="col-12 col-lg-2">
                                </div>
                                <div class="col-12 col-lg-4">
                                    <label for="phone_number">Số điện thoại *</label>
                                    <input type="text" class="form-control" name="SDT" min="0" value="">
                                </div>
                                <div class="col-12 col-lg-4">
                                    <label for="company">Quận *</label>
                                    <input type="text" class="form-control" name="quan" value="">
                                </div>
                                <div class="col-12 col-lg-2">
                                </div>
                            </div>
                            <div class="row">
                            <div class="checkout-btn mt-30 col-12 col-lg-4" style="b" >
                            </div>
                            <div class="checkout-btn mt-30 col-12 col-lg-4" style="b" >
                                <a><input type="submit"  class="btn alazea-btn w-100 " style="color: #0c290d;" name="action" value="Gửi"></a>
                            </div>
                            <div class="checkout-btn mt-30 col-12 col-lg-4" style="b" >
                            </div>
                            </div>
                        </form>
                    </div>

            </div>
        </div>
    </div>
    <!-- ##### Checkout Area End ##### -->

   
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

</html>
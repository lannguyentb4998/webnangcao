<!-- ##### Footer Area Start ##### -->
    <footer class="footer-area bg-img" style="background-image: url(../adorablegarden/img/bg-img/3.jpg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="footer-logo mb-30">
                                <a href="#"><img src="../adorablegarden/img/core-img/logo.jpg" alt=""></a>
                            </div>
                            <p>Hãy cùng tô xanh cuộc sống của bạn và gia đình.</p>
                            <div class="social-info">
                                <a href="https://www.facebook.com/laconceptvn/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>TRUY CẬP NHANH</h5>
                            </div>
                            <nav class="widget-nav">
                                <ul>
                                    <li><a href="lien_he">Liên hệ</a></li>
                                    <li><a href="admin/dang_ky">Đăng ký</a></li>
                                    <li><a href="tin_tuc">Tin tức</a></li>
                                    <li><a href="doi_ngu">Đội ngũ</a></li>
                                    <li><a href="gioi_thieu">Giới thiệu</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>NHÂN VIÊN XUẤT SẮC</h5>
                            </div>

                            <?php foreach ($nhan_vien_moi as $row) {
                            ;?>
                            
                            <!-- Single Best Seller Products -->
                            <div class="single-best-seller-product d-flex align-items-center">
                                <div class="product-thumbnail">
                                    <a href="shop-details"><img src="<?=base_url();?>/img/bg-img/<?=$row->anh_minh_hoa;?>" alt=""></a>
                                </div>
                                <div class="product-info">
                                    <a href="shop-details"><?=$row->ten_nv?></a>
                                    <p><?=$row->so_nam_kinh_nghiem?> năm kinh nghiệm</p>
                                </div>
                            </div>

                            <?php
                            }
                            ;?>
                            
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>LIÊN HỆ</h5>
                            </div>

                            <div class="contact-information">
                                <p><span>Địa chỉ:</span> Tầng 6 Tòa nhà Phương Đông, <br>324 Tây Sơn, Đống Đa, Hà Nội </p>
                                <p><span>Số điện thoại:</span> +84 93 171 8229</p>
                                <p><span>Email:</span> adorablegarden@gmail.com</p>
                                <p><span>Giờ làm việc:</span> Mon - Sun: 8 AM to 9 PM</p>
                                <p><span>Happy hours:</span> Sat: 2 PM to 4 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="border-line"></div>
                    </div>
                    <!-- Copywrite Text -->
                    <div class="col-12 col-md-6">
                        <div class="copywrite-text">
                        </div>
                    </div>
                    <!-- Footer Nav -->
                    <div class="col-12 col-md-6">
                        <div class="footer-nav">
                            <nav>
                                <ul>
                                    <li><a href="welcome">Trang chủ</a></li>
                                    <li><a href="gioi_thieu">Giới thiệu</a></li>
                                    <li><a href="doi_ngu">Đội ngũ</a></li>
                                    <li><a href="tin_tuc">Tin tức</a></li>
                                    <li><a href="lien_he">Liên hệ</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->
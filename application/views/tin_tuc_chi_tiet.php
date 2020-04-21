
    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/24.jpg);">
            <h2>TIN TỨC</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i>Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="#">Tin tức</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tin tức</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Blog Content Area Start ##### -->
    <section class="blog-content-area section-padding-0-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Blog Posts Area -->
                <div class="col-12 col-md-8">
                    <div class="blog-posts-area">

                        <!-- Post Details Area -->
                        <div class="single-post-details-area">
                            <div class="post-content">
                                <h4 class="post-title"><?=$tin_tuc_chi_tiet->tieu_de;?></h4>
                                <div class="post-meta mb-30">
                                    <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i><?=$tin_tuc_chi_tiet->ngay_tao;?></a>
                                    <a href="#"><i class="fa fa-user" aria-hidden="true"></i><?=$tin_tuc_chi_tiet->tac_gia;?></a>
                                </div>
                                <div class="post-thumbnail mb-30" style="text-align: center;">
                                    <img src="<?=base_url();?>/img/bg-img/<?=$tin_tuc_chi_tiet->anh_minh_hoa_1;?>" alt="" >
                                </div>
                                <p style="text-align: justify;"><?=$tin_tuc_chi_tiet->noi_dung;?></p>

                                
                                    <div class="col-lg-5">
                                        <img src="<?=base_url();?>/img/bg-img/<?=$tin_tuc_chi_tiet->anh_minh_hoa_2;?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Post Tags & Share -->
                        <div class="post-tags-share d-flex justify-content-between align-items-center">
                            <!-- Tags -->
                            <!--ol class="popular-tags d-flex align-items-center flex-wrap">
                                <li><span>Tag:</span></li>
                                <li><a href="#">PLANTS</a></li>
                                <li><a href="#">CACTUS</a></li>
                            </ol>-->
                            <!-- Share -->
                            <div class="post-share">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <!-- Comment Area Start -->
                        <div class="comment_area clearfix">
                            <h4 class="headline">2 Comments</h4>

                            <ol>
                                <!-- Single Comment Area -->
                                <li class="single_comment_area">
                                    <div class="comment-wrapper d-flex">
                                        <!-- Comment Meta -->
                                        <div class="comment-author">
                                            <img src="img/bg-img/37.jpg" alt="">
                                        </div>
                                        <!-- Comment Content -->
                                        <div class="comment-content">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h5>Simona Halep</h5>
                                                <span class="comment-date">09:00 AM,  20 Jun 2018</span>
                                            </div>
                                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit, sed quia non numquam eius modi</p>
                                            <a class="active" href="#">Reply</a>
                                        </div>
                                    </div>
                                    <ol class="children">
                                        <li class="single_comment_area">
                                            <div class="comment-wrapper d-flex">
                                                <!-- Comment Meta -->
                                                <div class="comment-author">
                                                    <img src="img/bg-img/38.jpg" alt="">
                                                </div>
                                                <!-- Comment Content -->
                                                <div class="comment-content">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h5>Rafael Nadal</h5>
                                                        <span class="comment-date">09:30 AM,  20 Jun 2018</span>
                                                    </div>
                                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit, sed quia non numquam eius modi</p>
                                                    <a class="active" href="#">Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                                <li class="single_comment_area">
                                    <div class="comment-wrapper d-flex">
                                        <!-- Comment Meta -->
                                        <div class="comment-author">
                                            <img src="img/bg-img/39.jpg" alt="">
                                        </div>
                                        <!-- Comment Content -->
                                        <div class="comment-content">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h5>Maria Sharapova</h5>
                                                <span class="comment-date">02:20 PM,  20 Jun 2018</span>
                                            </div>
                                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit, sed quia non numquam eius modi</p>
                                            <a class="active" href="#">Reply</a>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>

                        <!-- Leave A Comment -->
                        <div class="leave-comment-area clearfix">
                            <div class="comment-form">
                                <h4 class="headline">Bình luận</h4>

                                <div class="contact-form-area">
                                    <!-- Comment Form -->
                                    <form action="#" method="post">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="contact-name" placeholder="Tên">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" id="contact-email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Nội dung"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn alazea-btn">Bình luận</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Blog Sidebar Area -->
                <div class="col-12 col-sm-9 col-md-4">
                    <div class="post-sidebar-area">

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <form action="#" method="get" class="search-form">
                                <input type="search" name="search" id="widgetSearch" placeholder="Search...">
                                <button type="submit"><i class="icon_search"></i></button>
                            </form>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Author Widget -->
                            <div class="author-widget">
                                <div class="author-thumb-name d-flex align-items-center">
                                    <div class="author-thumb">
                                        <img src="img/bg-img/29.jpg" alt="">
                                    </div>
                                    <div class="author-name">
                                        <h5>Nắng</h5>
                                    </div>
                                </div>
                                <p style="text-align: justify;">Bạn đã sẵn sàng để sở hữu một chậu thẻ bài hồng cho bàn làm việc của riêng mình? Hãy liên hệ với tôi để được tư vấn, hỗ trợ tốt nhất về giá cũng như các thông tin khác về loài cây độc đáo này.</p>
                                <div class="social-info">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h4>Bài viết gần đây</h4>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post d-flex align-items-center">
                                <div class="post-thumb">
                                    <img src="img/bg-img/cay-canh-tuong-trung-cho-tinh-yeu.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="#" class="post-title">
                                        <h6>Bật mí top 5 cây cảnh tượng trưng cho tình yêu</h6>
                                    </a>
                                    <a href="#" class="post-date">20 Jun 2018</a>
                                </div>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post d-flex align-items-center">
                                <div class="post-thumb">
                                    <img src="img/bg-img/bach_ma_hoang_tu.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="#" class="post-title">
                                        <h6>Ý nghĩa của cây Bạch Mã Hoàng Tử và những điều ít người biết</h6>
                                    </a>
                                    <a href="#" class="post-date">20 Jun 2018</a>
                                </div>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post d-flex align-items-center">
                                <div class="post-thumb">
                                    <img src="img/bg-img/cay_xuong_rong.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="#" class="post-title">
                                        <h6>Cây xương rồng: Biểu tượng của ý chí mạnh mẽ, bền bỉ trong cuộc sống</h6>
                                    </a>
                                    <a href="#" class="post-date">20 Jun 2018</a>
                                </div>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post d-flex align-items-center">
                                <div class="post-thumb">
                                    <img src="img/bg-img/hoa_cam_chuong.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="#" class="post-title">
                                        <h6>Cẩm chướng - loài hoa tặng mẹ</h6>
                                    </a>
                                    <a href="#" class="post-date">20 Jun 2018</a>
                                </div>
                            </div>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h4>Tag Cloud</h4>
                            </div>
                            <!-- Tags -->
                            <ol class="popular-tags d-flex flex-wrap">
                                <li><a href="#">PLANTS</a></li>
                                <li><a href="#">NEW PRODUCTS</a></li>
                                <li><a href="#">CACTUS</a></li>
                                <li><a href="#">DESIGN</a></li>
                                <li><a href="#">NEWS</a></li>
                                <li><a href="#">TRENDING</a></li>
                                <li><a href="#">VIDEO</a></li>
                                <li><a href="#">GARDEN DESIGN</a></li>
                            </ol>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h4>NHÂN VIÊN XUẤT SẮC</h4>
                            </div>

                            <!-- Single Best Seller Products -->
                            <div class="single-best-seller-product d-flex align-items-center">
                                <div class="product-thumbnail">
                                    <a href="shop-details.html"><img src="img/bg-img/nv1.jpg" alt=""></a>
                                </div>
                                <div class="product-info">
                                    <a href="shop-details.html">Nguyễn Văn Anh</a>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Best Seller Products -->
                            <div class="single-best-seller-product d-flex align-items-center">
                                <div class="product-thumbnail">
                                    <a href="shop-details.html"><img src="img/bg-img/nv2.jpg" alt=""></a>
                                </div>
                                <div class="product-info">
                                    <a href="shop-details.html">Trần Trung Hiếu</a>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Best Seller Products -->
                            <div class="single-best-seller-product d-flex align-items-center">
                                <div class="product-thumbnail">
                                    <a href="shop-details.html"><img src="img/bg-img/nv3.jpg" alt=""></a>
                                </div>
                                <div class="product-info">
                                    <a href="shop-details.html">Nguyễn Trà My</a>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Blog Content Area End ##### -->

   

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
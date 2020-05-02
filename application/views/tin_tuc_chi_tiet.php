bài<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Adorable Garden</title>

  
    <link rel="icon" href="<?=base_url();?>img/core-img/favicon.jpg">

    <!--mới sửa-->
    <link rel="stylesheet" href="<?=base_url();?>style.css">

</head>

<body>
    
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="<?=base_url();?>img/core-img/leaf.png" alt="">
        </div>
    </div>

  
    <header class="header-area">
        
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            
                            <div class="top-header-meta">
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="infodeercreative@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: adorablegarden@gmail.com</span></a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="+1 234 122 122"><i class="fa fa-phone" aria-hidden="true"></i> <span>Liên hệ: 093.171.8229</span></a>
                            </div>

                            
                            <div class="top-header-meta d-flex">
                                
                                <div class="language-dropdown">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle mr-30" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ngôn ngữ</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Tiếng Việt</a>
                                            <a class="dropdown-item" href="#">English</a>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="login">
                                    <a href="<?=base_url();?>admin/dang_nhap"><i class="fa fa-user" aria-hidden="true"></i> <span>Đăng nhập</span></a>
                                </div>
                                
                                <div class="cart">
                                    <a href="<?=base_url();?>gio_hang"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>Giỏ hàng <span class="cart-quantity"></span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
        <div class="alazea-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                   
                    <nav class="classy-navbar justify-content-between" id="alazeaNav">

                        
                        <a href="<?=base_url();?>welcome" class="nav-brand"><img src="<?=base_url();?>img/core-img/logo.jpg" alt=""></a>

                        
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        
                        <div class="classy-menu">

                            
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            
                            <div class="classynav">
                                <ul>
                                    <li><a href="<?=base_url();?>welcome">TRANG CHỦ</a></li>
                                    <li><a href="<?=base_url();?>gioi_thieu">GIỚI THIỆU</a></li>
                                    <li><a href="<?=base_url();?>doi_ngu">ĐỘI NGŨ</a></li>
                                    <li><a href="<?=base_url();?>tin_tuc">TIN TỨC</a></li>
                                    <li><a href="<?=base_url();?>lien_he">LIÊN HỆ</a></li>
                                </ul>

                             
                                <div id="searchIcon">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>

                            </div>
                           
                        </div>
                    </nav>

                    
                    <div class="search-form">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
                            <button type="submit" class="d-none"></button>
                        </form>
                       
                        <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area (mới sửa) -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(<?=base_url();?>img/bg-img/24.jpg);">
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
                                    <img src="<?=base_url();?>/img/bg-img/<?=$tin_tuc_chi_tiet->anh_minh_hoa_2;?>" alt="" >
                                </div>
                                <p style="text-align: justify;"><?=$tin_tuc_chi_tiet->noi_dung;?></p>
                                <div class="row mb-30">
                                    <div class="col-lg-7">
                                        <p style="text-align: justify;"><?=$tin_tuc_chi_tiet->noi_dung_2;?></p>
                                    </div>
                                    <div class="col-lg-5">
                                        <img src="<?=base_url();?>/img/bg-img/<?=$tin_tuc_chi_tiet->anh_minh_hoa_1;?>" alt="">
                                    </div>
                                </div>
                                <p style="text-align: justify;"><?=$tin_tuc_chi_tiet->noi_dung_3;?></p>
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
                            <?php foreach ($so_luong as $row) {
                         ;?>
                            <h4 class="headline"><?=$row->so_luong;?> Bình luận</h4>
                            <?php };?>
                            <ol>
                                <!-- Single Comment Area -->
                                <?php foreach ($binh_luan as $row) {
                         ;?>
                                <li class="single_comment_area">
                                    <div class="comment-wrapper d-flex">
                                        <!-- Comment Meta -->
                                        <div class="comment-author">
                                            <img src="<?=base_url();?>/img/bg-img/<?=$row->anh_minh_hoa;?>" alt="">
                                        </div>
                                        <!-- Comment Content -->
                                        <div class="comment-content">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h5><?=$row->ho_ten;?></h5>
                                                <span class="comment-date"><?=$row->ngay_tao;?></span>
                                            </div>
                                            <p><?=$row->noi_dung;?></p>
                                        </div>
                                    </div>
                                </li>
                                 <?php
                            }
                            ;?>
                            </ol>
                        </div>

                        <!-- Leave A Comment -->
                        <div class="leave-comment-area clearfix">
                            <div class="comment-form">
                                <h4 class="headline">Bình luận</h4>

                                <div class="contact-form-area">
                                    <!-- Comment Form -->
                                    <form method="POST" action="<?=base_url().'tin_tuc/thuc_hien_them_moi_binh_luan';?>">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"  placeholder="Tên" name="txtHoTen">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <input type="email" class="form-control"  placeholder="Email" name="txtEmail">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea class="form-control"   cols="30" rows="10" placeholder="Nội dung" name="txtNoiDung"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn alazea-btn">Bình luận</button>
                                                <input name="txtID" type="hidden" value="<?=$tin_tuc_chi_tiet->id;?>">
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
                                        <img src="<?=base_url();?>img/bg-img/29.jpg" alt="">
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

                            <?php foreach ($bai_viet_gan_day as $row) {
                         ;?>
                            <!-- Single Latest Posts -->
                            <div class="single-latest-post d-flex align-items-center">
                                <div class="post-thumb">
                                    <img src="<?=base_url();?>/img/bg-img/<?=$row->anh_minh_hoa_1;?>" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="#" class="post-title">
                                        <h6><?=$row->tieu_de?></h6>
                                    </a>
                                    <a href="#" class="post-date"><?=$row->ngay_tao?></a>
                                </div>
                            </div>

                            <?php
                            }
                            ;?>
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
                            <?php foreach ($nhan_vien_moi as $row) {
                         ;?>
                            <!-- Single Best Seller Products -->
                            <div class="single-best-seller-product d-flex align-items-center">
                                <div class="product-thumbnail">
                                    <a href="shop-details.html"> <img src="<?=base_url();?>/img/bg-img/<?=$row->anh_minh_hoa;?>" alt=""></a>
                                </div>
                                <div class="product-info">
                                    <a href="shop-details.html"><?=$row->name?></a>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ;?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Blog Content Area End ##### -->

   

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="<?=base_url();?>js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?=base_url();?>js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?=base_url();?>js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="<?=base_url();?>js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="<?=base_url();?>js/active.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Adorable Garden</title>

  
    <link rel="icon" href="<?=base_url();?>img/core-img/favicon.jpg">


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

                        
                        <a href="index" class="nav-brand"><img src="<?=base_url();?>img/core-img/logo.jpg" alt=""></a>

                        
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


    <div class="breadcrumb-area">
       
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(<?=base_url();?>img/bg-img/24.jpg);">
            <h2>ĐỘI NGŨ</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="#">Đội ngũ</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    
    <section class="single_product_details_area mb-50">
        <div class="produts-details--content mb-50">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-12 col-md-6 col-lg-5">
                        <div class="single_product_thumb">
                            <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a class="product-img" href="img/bg-img/nv1.jpg" title="Product Image">
                                        <img class="d-block w-100" src="<?=base_url();?>/img/bg-img/<?=$doi_ngu_chi_tiet->anh_minh_hoa;?>" alt="1">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="single_product_desc">
                            <h4 class="title"><?=$doi_ngu_chi_tiet->name;?></h4>
                            <h4 class="price"><?=$doi_ngu_chi_tiet->price;?> VNĐ</h4>
                            <div class="short_overview">
                                <p><?=$doi_ngu_chi_tiet->gioi_thieu;?>
                                </p>
                                <p>Số năm kinh nghiệm: <?=$doi_ngu_chi_tiet->so_nam_kinh_nghiem;?> </p>
                            </div>

                            <div class="cart--area d-flex flex-wrap align-items-center">
                                <!-- Add to Cart Form -->
                                
                                    
                                    <form action="<?php echo base_url('doi_ngu/add') ?>" method="post" accept-charset="utf-8">
                                    <a><input type="submit" name="action"  class="btn alazea-btn w-30" value="Thuê"> </a>
                                    <input type="hidden" name="id" value="<?php echo $doi_ngu_chi_tiet->id; ?>"/>
    <input type="hidden" name="name" value="<?php echo $doi_ngu_chi_tiet->name; ?>"/>
    <input type="hidden" name="price" value="<?php echo $doi_ngu_chi_tiet->price; ?>"/>  </form>
                                
                                <!-- Wishlist & Compare -->
                                <div class="wishlist-compare d-flex flex-wrap align-items-center">
                                    <a href="#" class="wishlist-btn ml-15"><i class="icon_heart_alt"></i></a>
                                    <a href="#" class="compare-btn ml-15"><i class="arrow_left-right_alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_details_tab clearfix">
                        
                        <ul class="nav nav-tabs" role="tablist" id="product-details-tab">
                            <li class="nav-item">
                                <a href="#description" class="nav-link active" data-toggle="tab" role="tab">Mô tả</a>
                            </li>
                            <li class="nav-item">
                                <a href="#reviews" class="nav-link" data-toggle="tab" role="tab">Đánh giá <span class="text-muted"></span></a>
                            </li>
                        </ul>
                        
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active" id="description">
                                <div class="description_area">
                                    <p>Dịch vụ chăm sóc, cắt tỉa cây xanh, cây cảnh cho sân vườn</p>
 
                                    <p>Cắt tỉa cây xanh, uốn sửa, tạo dáng cây cảnh.</p>

                                    <p>Cắt cỏ, làm sạch cỏ, tưới nước, bón phân, phun thuốc trừ sâu cho cây được tươi tốt.</p>

                                    <p>Lọc và phân tích mẫu đất, kiểm tra tình hình khi sâu bệnh xâm hại đến cây kịp thời chữa trị.</p>

                                    <p>Tư vấn trực tuyến về cách chăm sóc cây.</p>
                                </div>
                            </div>
                            
                            <div role="tabpanel" class="tab-pane fade" id="reviews">
                                <div class="reviews_area">
                                    <?php foreach ($danh_gia as $row) {
                         ;?>
                                    <div class="review-rating">
                                        <i><?=$row->diem;?></i> <i class="fa fa-star" ></i>
                                        <i>về <?=$row->loai_danh_gia;?></i>
                                    </div>
                                    <div class="review-details">
                                        <a>Khách hàng: </a><a><?=$row->ho_ten;?></a>
                                        <p><?=$row->noi_dung;?></p>
                                    </div>
                                            
                                 <?php
                            }
                            ;?>
                                       
                                </div>

                                <div class="submit_a_review_area mt-50">
                                    <h4>Đánh giá </h4>
                                    <form method="POST" action="<?=base_url().'doi_ngu/thuc_hien_them_moi_danh_gia';?>">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group d-flex align-items-center">
                                                    <span class="mr-15">Đánh giá của bạn:</span>
                                                </div>
                                            </div>
                                            
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Họ tên</label>
                                                    <input type="text" class="form-control"  placeholder="Họ tên" name="txtHoTen">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <div class="form-group">
                                                    <label for="options">Đánh giá về</label>
                                                    <select class="form-control" id="txtLoaiDanhGia" name="txtLoaiDanhGia">
                                                          <?php 
                                                // Hiển thị ra được loại tin tức (thông qua câu lệnh lặp)

                                                foreach ($loai_danh_gia as $danh_gia) {
                                            ;?>
                                                <option value="<?=$danh_gia->id;?>"><?=$danh_gia->ten_loai_danh_gia;?></option>
                                            <?php
                                                }
                                            ;?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <div class="form-group">
                                                    <label for="comments">Điểm</label>
                                                    <input class="form-control" name="txtDiem" rows="5" data-max-length="150" placeholder="0/10"></input>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="comments">Nội dung</label>
                                                    <textarea class="form-control" name="txtNoiDung" rows="5" data-max-length="150"></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="col-12">
                                                <button type="submit" class="btn alazea-btn">Bình luận</button>
                                                <input name="txtID" type="hidden" value="<?=$doi_ngu_chi_tiet->id;?>">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script src="<?=base_url();?>js/jquery/jquery-2.2.4.min.js"></script>
    
    <script src="<?=base_url();?>js/bootstrap/popper.min.js"></script>
    
    <script src="<?=base_url();?>js/bootstrap/bootstrap.min.js"></script>
    
    <script src="<?=base_url();?>js/plugins/plugins.js"></script>
    
    <script src="<?=base_url();?>js/active.js"></script>


</body>


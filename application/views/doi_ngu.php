
    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(<?=base_url();?>img/bg-img/24.jpg);">
            <h2>ĐỘI NGŨ</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i>Trang chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Đội ngũ</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Shop Area Start ##### -->
    <section class="shop-page section-padding-0-100">
        <div class="container">
            <div class="row">
                <!-- Shop Sorting Data -->
                <div class="col-12">
                    <div class="shop-sorting-data d-flex flex-wrap align-items-center justify-content-between">
                        <!-- Shop Page Count -->
                        <div class="shop-page-count">
                            <p>Hiển thị 1-9 trên 72 kết quả</p>
                        </div>
                        <!-- Search by Terms -->
                        <div class="search_by_terms">
                            <form action="#" method="post" class="form-inline">
                                
                                <select class="custom-select widget-title">
                                  <option selected>Số lượng: 9</option>
                                  <option value="1">12</option>
                                  <option value="2">18</option>
                                  <option value="3">24</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Sidebar Area -->
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="shop-sidebar-area">


                        <!-- Shop Widget -->
                        <div class="shop-widget sort-by mb-50">
                            <h4 class="widget-title">Lọc theo</h4>
                            <div class="widget-desc">
                                <!-- Single Checkbox -->
                                <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                  
                                   <a href="<?=base_url();?>doi_ngu/moi_nhat" class="custom-control-label">Mới nhất</a>
                                </div>
                                <!-- Single Checkbox -->
                                <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                    <a href="<?=base_url();?>doi_ngu/a_z" class="custom-control-label">Bảng chữ cái A-Z</a>
                                </div>
                                <!-- Single Checkbox -->
                                <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                    <a href="<?=base_url();?>doi_ngu/z_a" class="custom-control-label">Bảng chữ cái Z-A</a>
                                </div>
                                <!-- Single Checkbox -->
                                <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                    <a href="<?=base_url();?>doi_ngu/thap_cao" class="custom-control-label">Giá: từ thấp đến cao</a>
                                </div>
                                <!-- Single Checkbox -->
                                <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                    <a href="<?=base_url();?>doi_ngu/cao_thap" class="custom-control-label">Giá: từ cao đến thấp</a>
                                </div>
                                <!-- Single Checkbox -->
                                <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                    <a href="<?=base_url();?>doi_ngu/kinh_nghiem_thap_cao" class="custom-control-label">Kinh nghiệm: từ ít đến nhiều</a>
                                </div>
                                <!-- Single Checkbox -->
                                <div class="custom-control custom-checkbox d-flex align-items-center">
                                    <a href="<?=base_url();?>doi_ngu/kinh_nghiem_cao_thap" class="custom-control-label">Kinh nghiệm: từ nhiều đến ít</a>
                                </div>
                            </div>
                        </div>

                        <!-- Shop Widget -->
                        <div class="shop-widget best-seller mb-50">
                            <h4 class="widget-title">NHÂN VIÊN XUẤT SẮC</h4>
                            <div class="widget-desc">

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

                <!-- All Products Area -->
                <div class="col-12 col-md-8 col-lg-9">
                    <div class="shop-products-area">
                        <div class="row">
                        <?php foreach ($doi_ngu as $row) {
                         ;?>
                                             
 
                            <!-- Single Product Area -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-area mb-50">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <a href="shop-details.html"> <img style="height: 250px; width: 250px" src="<?=base_url();?>/img/bg-img/<?=$row->anh_minh_hoa;?>" alt=""></a>
                                        <!-- Product Tag -->
                                        <div class="product-tag">
                                            <a href="#">Hot</a>
                                        </div>
                                    </div>
                                    <!-- Product Info -->
                                    <div class="product-info mt-15 text-center">
                                        <a href="<?=base_url();?>doi_ngu/hien_thi_doi_ngu_chi_tiet/<?=$row->id;?>">
                                            <p><?=$row->name?></p>
                                        </a>
                                        <h6><?=$row->price?>VNĐ</h6>
                                        <form action="<?php echo base_url('doi_ngu/add') ?>" method="post" accept-charset="utf-8">
                                        <a><input type="submit" name="action"  class="btn alazea-btn w-30" value="Thuê"> </a>
                                        <input type="hidden" name="id" value="<?php echo $row->id; ?>"/>
    <input type="hidden" name="name" value="<?php echo $row->name; ?>"/>
    <input type="hidden" name="price" value="<?php echo $row->price; ?>"/>  </form>
                                    </div>
                                </div>
                            </div>
                            </form> 
                             <?php
                            }
                            ;?>
                    </div> 
                </div>          
                
                        <!-- Pagination -->
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </nav>
                    
                
        </div>
    </section>
    <!-- ##### Shop Area End ##### -->

    

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
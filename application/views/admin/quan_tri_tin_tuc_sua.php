<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta content="" name="author"/>
<meta content="atlas is Bootstrap 4 based admin panel.It comes with 100's widgets,charts and icons" name="description"/>
<meta property="og:locale" content="en_US"/>
<meta property="og:type" content="website"/>
<meta property="og:title"
      content="atlas is Bootstrap 4 based admin panel.It comes with 100's widgets,charts and icons"/>
<meta property="og:description"
      content="atlas is Bootstrap 4 based admin panel.It comes with 100's widgets,charts and icons"/>
<meta property="og:image"
      content="https://cdn.dribbble.com/users/180706/screenshots/5424805/the_sceens_-_mobile_perspective_mockup_3_-_by_tranmautritam.jpg"/>
<meta property="og:site_name" content="atlas "/>
<title>Quản trị tin tức</title>
<link rel="icon" type="image/x-icon" href="assets/img/logo.png"/>
<link rel="icon" href="assets/img/logo.png" type="image/png" sizes="16x16">
<link rel='stylesheet' href='https://d33wubrfki0l68.cloudfront.net/css/478ccdc1892151837f9e7163badb055b8a1833a5/crisp/assets/vendor/pace/pace.css'/>
<script src='https://d33wubrfki0l68.cloudfront.net/js/3d1965f9e8e63c62b671967aafcad6603deec90c/theme/html/assets/js/pace.min.js'></script>
<!--vendors-->
<link rel='stylesheet' type='text/css' href='https://d33wubrfki0l68.cloudfront.net/bundles/291bbeead57f19651f311362abe809b67adc3fb5.css'/>

<link rel='stylesheet' href='https://d33wubrfki0l68.cloudfront.net/bundles/30bc673ce76f73ecf02568498f6b139269f6e4c7.css'/>



<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,600" rel="stylesheet">
<!--Material Icons-->
<link rel='stylesheet' type='text/css' href='https://d33wubrfki0l68.cloudfront.net/css/548117a22d5d22545a0ab2dddf8940a2e32c04ed/default/assets/fonts/materialdesignicons/materialdesignicons.min.css'/>
<!--Material Icons-->
<link rel='stylesheet' type='text/css' href='https://d33wubrfki0l68.cloudfront.net/css/0940f25997c8e50e65e95510b30245d116f639f0/light/assets/fonts/feather/feather-icons.css'/>
<!--Bootstrap + atmos Admin CSS-->
<link rel='stylesheet' type='text/css' href='<?=base_url();?>atmos.min.css'/>
<!-- Additional library for page -->

</head>
<body class="page-home">
    <aside class="admin-sidebar">
        <div class="admin-sidebar-brand">
            <!-- begin sidebar branding-->
            <img class="admin-brand-logo" src="<?=base_url();?>assets/img/logo.jpg" width="100" alt="atmos Logo">
            <p></p>
            <!-- end sidebar branding-->
            <div class="ml-auto">
                <!-- sidebar pin-->
                <a href="#" class="admin-pin-sidebar btn-ghost btn btn-rounded-circle"></a>
                <!-- sidebar close for mobile device-->
                <a href="#" class="admin-close-sidebar"></a>
            </div>
        </div>
        <div class="admin-sidebar-wrapper js-scrollbar">
            <ul class="menu">
                    <ul class="sub-menu">
                        <li class="menu-item ">
                            <a href='trang_quan_tri.html' class=' menu-link'>
                                                <span class="menu-label">
                                                    <span class="menu-name">Quản trị hệ thống</span>
                                                </span>
                                <span class="menu-icon">
                                                    <i class="mdi mdi-account  mdi-24px ">
    
                                                    </i>
                                                </span>
                            </a>
                        </li>   
                        <li class="menu-item ">
                            <a href='quan_tri_tin_tuc.html' class=' menu-link'>
                                                <span class="menu-label">
                                                    <span class="menu-name">Quản trị tin tức</span>
                                                </span>
                                <span class="menu-icon">
                                                    <i class="mdi mdi-pencil mdi-24px ">
    
                                                    </i>
                                                </span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href='quan_tri_doi_ngu.html' class=' menu-link'>
                                                <span class="menu-label">
                                                    <span class="menu-name">Quản trị đội ngũ</span>
                                                </span>
                                <span class="menu-icon">
                                                    <i class="mdi mdi-face  mdi-24px" >
    
                                                    </i>
                                                </span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href='quan_tri_phan_hoi.html' class=' menu-link'>
                                                <span class="menu-label">
                                                    <span class="menu-name">Quản trị phản hồi</span>
                                                </span>
                                <span class="menu-icon">
                                                    <i class="mdi mdi-wechat  mdi-36px">
    
                                                    </i>
                                                </span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href='quan_tri_don_hang.html' class=' menu-link'>
                                                <span class="menu-label">
                                                    <span class="menu-name">Quản trị đơn hàng</span>
                                                </span>
                                <span class="menu-icon">
                                                    <i class="mdi mdi-cart  mdi-24px">
    
                                                    </i>
                                                </span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href='quan_tri_khach_hang.html' class=' menu-link'>
                                                <span class="menu-label">
                                                    <span class="menu-name">Quản trị khách hàng</span>
                                                </span>
                                <span class="menu-icon">
                                                    <i class="mdi mdi-account-group  mdi-24px">
    
                                                    </i>
                                                </span>
                            </a>
                        </li>
                    </ul>
            </ul>
        </div>
    
    </aside>
<main class="admin-main">
    <!--site header begins-->
<header class="admin-header">

    <a href="#" class="sidebar-toggle" data-toggleclass="sidebar-open" data-target="body"> </a>

    <nav class=" mr-auto my-auto">
        <ul class="nav align-items-center">

            <li class="nav-item">
                <a class="nav-link" data-target="#siteSearchModal" data-toggle="modal" href="#">
                    <i class=" mdi mdi-magnify mdi-24px align-middle"></i>
                </a>
            </li>
        </ul>
    </nav>
    <nav class=" ml-auto">
        <ul class="nav align-items-center">
            <li class="nav-item">
                <div class="dropdown">
                    <a href="#" class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-24px mdi-bell-outline"></i>
                        <span class="notification-counter"></span>
                    </a>

                    <div class="dropdown-menu notification-container dropdown-menu-right">
                        <div class="d-flex p-all-15 bg-white justify-content-between border-bottom ">
                            <a href="#!" class="mdi mdi-18px mdi-settings text-muted"></a>
                            <span class="h5 m-0">Notifications</span>
                            <a href="#!" class="mdi mdi-18px mdi-notification-clear-all text-muted"></a>
                        </div>
                        <div class="notification-events bg-gray-300">
                            <div class="text-overline m-b-5">today</div>
                            <a href="#" class="d-block m-b-10">
                                <div class="card">
                                    <div class="card-body"> <i class="mdi mdi-circle text-success"></i> Tất cả hoạt động</div>
                                </div>
                            </a>
                            <a href="#" class="d-block m-b-10">
                                <div class="card">
                                    <div class="card-body"> <i class="mdi mdi-upload-multiple "></i> Tệp đã tải thành công</div>
                                </div>
                            </a>
                            <a href="#" class="d-block m-b-10">
                                <div class="card">
                                    <div class="card-body">
                                        <i class="mdi mdi-cancel text-danger"></i> Ngày nghỉ của bạn
                                    </div>
                                </div>
                            </a>


                        </div>

                    </div>
                </div>
            </li>
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#"   role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-sm avatar-online">
                        <span class="avatar-title rounded-circle bg-dark">V</span>

                    </div>
                </a>
                <div class="dropdown-menu  dropdown-menu-right"   >
                    <a class="dropdown-item" href="#">  Thêm tài khoản
                    </a>
                    <a class="dropdown-item" href="#">  Đổi mật khẩu</a>
                    <a class="dropdown-item" href="#">  Trợ giúp </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"> Đăng xuất</a>
                </div>
            </li>

        </ul>

    </nav>
</header>
<!-- Modal -->
<div class="modal fade modal-slide-right" id="demoModal" tabindex="-1" role="dialog"
     aria-labelledby="demoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="demoLabel">Demos</h5>
                <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe src="/demos.html" height="100%" width="100%" frameborder="0"></iframe>
            </div>
            <div class="modal-footer">
               <div class="text-muted"><i class="mdi mdi-information"></i>Demos will open in new tab</div>
            </div>
        </div>
    </div>
</div>
<!--site header ends -->    <section class="admin-content">
        <div class="bg-dark m-b-30">
            <div class="container">
                <div class="row p-b-60 p-t-60">
                    <div class="col-md-12 m-auto text-white p-b-30">
                        <h4>SỬA BÀI VIẾT</h4>
                    </div>
                    <div class="card m-b-30 col-lg-6">
                        <div class="card-header">
                                <h5 class="m-b-0">
                                     Nội dung
                                </h5>
                        </div>
                        <form method="POST" action="<?=base_url().'admin/quan_tri_tin_tuc/thuc_hien_sua_tin_tuc';?>">
                        <div class="card-body ">
                            <div class="form-group">
                                <label for="txtTieuDe">Tên bài viết</label>
                                <input type="text" class="form-control" name="txtTieuDe" value="<?=$tin_tuc->tieu_de;?>">
                            </div>
                            <div class="form-group">
                                <label for="txtTacGia">Tác giả</label>
                                <input type="text" class="form-control" name="txtTacGia" value="<?=$tin_tuc->tac_gia;?>" >
                            </div>
                            <div class="form-group">
                                <label for="txtNoiDungDocThu">Nội dung đọc thử</label>
                                <input type="text" class="form-control" name="txtNoiDungDocThu" value="<?=$tin_tuc->noi_dung_doc_thu;?>">
                            </div>
                            <div class="form-group" >
                                <label for="txtNoiDung">Nội dung bài viết</label>
                                <input type="text" class="form-control" name="txtNoiDung" value="<?=$tin_tuc->noi_dung;?>">
                            </div>
                            
                            <div class="form-group" >
                                <label for="txtNgayTao">Ngày tạo</label>
                                <input type="Date" class="form-control" name="txtNgayTao" value="<?=$tin_tuc->ngay_tao;?>">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-warning">Sửa bài viết</button>
                                <input name="txtID" type="hidden" value="<?=$tin_tuc->id;?>">
                            </div>
                        </div>
                    </div>
                  
                    <!--widget card ends-->
                    
                    <div class="col-lg-6">
                        <!--widget card begin-->
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="m-b-0">
                                     Thư viện
                                </h5>
    
                            </div>
                            
                            <div class="card-body ">
                                
                                <div class="form-group" >
                                    <label for="txtAnhMinhHoa1">Ảnh minh họa 1</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="txtAnhMinhHoa1" value="<?=$tin_tuc->anh_minh_hoa_1;?>">
                                        <label class="custom-file-label" for="txtAnhMinhHoa1"></label>
                                    </div>
                                </div>
                                <div class="form-group" >
                                    <label for="txtAnhMinhHoa2">Ảnh minh họa 2</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="txtAnhMinhHoa2" value="<?=$tin_tuc->anh_minh_hoa_2;?>">
                                        <label class="custom-file-label" for="txtAnhMinhHoa2"></label>
                                    </div>
                                </div>      
                            </div>
                            
                        </div>
                        <!--widget card ends-->
                    </div>
                    </form>
                
    </section>
</main>

<div class="modal modal-slide-left  fade" id="siteSearchModal" tabindex="-1" role="dialog" aria-labelledby="siteSearchModal"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-body p-all-0" id="site-search">
                <button type="button" class="close light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="form-dark bg-dark text-white p-t-60 p-b-20 bg-dots" >
                    <h3 class="text-uppercase    text-center  fw-300 "> Search</h3>

                    <div class="container-fluid">
                        <div class="col-md-10 p-t-10 m-auto">
                            <input type="search" placeholder="Search Something"
                                   class=" search form-control form-control-lg">

                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="bg-dark text-muted container-fluid p-b-10 text-center text-overline">
                        results
                    </div>
                    <div class="list-group list  ">


                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm "><img class="avatar-img rounded-circle"   src="assets/img/users/user-3.jpg" alt="user-image"></div>
                            </div>
                            <div class="">
                                <div class="name">Eric Chen</div>
                                <div class="text-muted">Developer</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm "><img class="avatar-img rounded-circle"
                                                                    src="assets/img/users/user-4.jpg" alt="user-image"></div>
                            </div>
                            <div class="">
                                <div class="name">Sean Valdez</div>
                                <div class="text-muted">Marketing</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm "><img class="avatar-img rounded-circle"
                                                                    src="assets/img/users/user-8.jpg" alt="user-image"></div>
                            </div>
                            <div class="">
                                <div class="name">Marie Arnold</div>
                                <div class="text-muted">Developer</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar-title bg-dark rounded"><i class="mdi mdi-24px mdi-file-pdf"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">SRS Document</div>
                                <div class="text-muted">25.5 Mb</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar-title bg-dark rounded"><i
                                                class="mdi mdi-24px mdi-file-document-box"></i></div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">Design Guide.pdf</div>
                                <div class="text-muted">9 Mb</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar avatar-sm  ">
                                        <div class="avatar-title bg-primary rounded"><i
                                                    class="mdi mdi-24px mdi-code-braces"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">response.json</div>
                                <div class="text-muted">15 Kb</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar avatar-sm ">
                                        <div class="avatar-title bg-info rounded"><i
                                                    class="mdi mdi-24px mdi-file-excel"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">June Accounts.xls</div>
                                <div class="text-muted">6 Mb</div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


<script src='https://d33wubrfki0l68.cloudfront.net/bundles/9556cd6744b0b19628598270bd385082cda6a269.js'></script>
<!--page specific scripts for demo-->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-66116118-3"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'UA-66116118-3'); </script>

</body>
</html>
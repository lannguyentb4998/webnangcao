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
<title><?=$tieu_de;?></title>
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
<link rel='stylesheet' type='text/css' href='../atmos.min.css'/>
<!-- Additional library for page -->


</head>
<body class="page-home">
<aside class="admin-sidebar">
    <div class="admin-sidebar-brand">
        <!-- begin sidebar branding-->
        <img class="admin-brand-logo" src="../assets/img/logo.jpg" width="100" alt="atmos Logo">
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
                        <a href='trang_quan_tri' class=' menu-link'>
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
                        <a href='quan_tri_tin_tuc' class=' menu-link'>
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
                        <a href='quan_tri_doi_ngu' class=' menu-link'>
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
                        <a href='quan_tri_phan_hoi' class=' menu-link'>
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
                        <a href='quan_tri_don_hang' class=' menu-link'>
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
                        <a href='quan_tri_khach_hang' class=' menu-link'>
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
                            <span class="h5 m-0">Thông báo</span>
                            <a href="#!" class="mdi mdi-18px mdi-notification-clear-all text-muted"></a>
                        </div>
                        <div class="notification-events bg-gray-300">
                            <div class="text-overline m-b-5">Hôm nay</div>
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
                                        <i class="mdi mdi-cancel text-danger"></i> Your holiday has been denied
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
                    <a class="dropdown-item" href="dang_ky">  Tạo tài khoản mới
                    </a>
                    <a class="dropdown-item" href="quen_mk">  Đặt lại mật khẩu</a>
                    <a class="dropdown-item" href="#">  Trợ giúp </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?=base_url();?>admin/dang_nhap/dang_xuat"> Đăng xuất</a>
                </div>
            </li>

        </ul>

    </nav>
</header>
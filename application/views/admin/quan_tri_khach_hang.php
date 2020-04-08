<!--site header ends -->    <section class="admin-content">
        <div class="bg-dark m-b-30">
            <div class="container">
                <div class="row p-b-60 p-t-60">

                    <div class="col-md-8 m-auto text-white p-b-30">

                        <h1> QUẢN TRỊ KHÁCH HÀNG</h1>
                        <p class="opacity-75">
                            Khách hàng là thượng đế
                        </p>

                        <div class="row">
                            <div class="col-lg-4">
                                <form action="#" class="form-dark">
                                    <input type="text" class="form-control" placeholder="Tìm kiếm">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 m-auto text-white p-b-30">
                        <div class="text-md-right">
                            <a href="<?=base_url();?>admin/quan_tri_khach_hang/them_moi_khach_hang" class="btn btn-warning"> <i class="mdi mdi-plus"></i> Thêm khách hàng</a>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container pull-up">
            <div class="row">

                <div class="col-md-12 m-b-30">
                    <div class="card mb-3">
                        <div class="card-header border-bottom">
                            <div class="row no-gutters align-items-center">
                                <div class="col font-weight-bold">Danh sách khách hàng</div>
                                <div class="d-none d-md-block col-8 text-muted">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-1 font-weight-bold">Tuổi</div>
                                        <div class="col-2 font-weight-bold">SĐT</div>
                                        <div class="col-7 font-weight-bold">Email</div>
                                        <div class="col-2 font-weight-bold">Tùy chọn</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <?php foreach ($khach_hang as $row) {
                         ;?>
                        <div class="card-body py-3">

                            <div class="row no-gutters align-items-center">
                                <div class="col"><a href='khach_hang_sua' class='text-big font-weight-semibold'> <i class="mdi mdi-pin"></i> <?=$row->ten_kh;?> <span class="badge badge-soft-primary">Nổi bật</span> <span class="badge badge-info">VIP</span></a></div>
                                <div class="d-none d-md-block col-8">

                                    <div class="row no-gutters align-items-center">
                                        <div class="col-1"><?=$row->tuoi;?></div>
                                        <div class="col-2"><?=$row->SDT;?></div>
                                        <div class="media col-7 align-items-center">
                                            <div class="avatar">
                                                <div class="avatar avatar-title rounded-circle">
                                                    <img src="<?=base_url();?>/img/bg-img/<?=$row->anh_minh_hoa;?>" alt="" class="avatar-img rounded-circle">
                                                </div>
                                            </div>
                                            <div class="media-body  ml-2">
                                                <a  class='d-block '><?=$row->email?></a>
                                                <div class="text-muted small "> <a class='text-muted'></a></div>
                                                </div>
                                            </div>                                        
                                            <div class = "col-2">
                                                <a href="<?=base_url();?>admin/quan_tri_khach_hang/sua_khach_hang/<?=$row->id;?>" class="btn btn-warning"> <i class="mdi mdi-pencil"></i></a>
                                                <a href="<?=base_url();?>admin/quan_tri_khach_hang/xoa_khach_hang/<?=$row->id;?>" class="btn btn-warning"> <i class="mdi mdi-delete"></i></a>
                                            </div>    
                                        </div>                                    
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
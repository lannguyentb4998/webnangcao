<!--site header ends -->    <section class="admin-content">
        <div class="bg-dark m-b-30">
            <div class="container">
                <div class="row p-b-60 p-t-60">

                    <div class="col-md-8 m-auto text-white p-b-30">

                        <h1>QUẢN TRỊ TIN TỨC</h1>
                        <p class="opacity-75">
                            Tin tức luôn mới nhất, bổ ích và đáng tin cậy.
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
                            <a href="<?=base_url();?>admin/quan_tri_tin_tuc/them_moi_tin_tuc" class="btn btn-warning"> <i class="mdi mdi-plus"></i> Thêm bài viết</a>

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
                                <div class="col font-weight-bold">Ảnh Minh Họa</div>
                                <div class="col font-weight-bold" style="padding-left: 15px">Tên bài viết</div>
                                <div class="d-none d-md-block col-8 text-muted">
                                    <div class="row no-gutters align-items-center col font-weight-bold">
                                        <div class="col-2">Tác giả</div>
                                        <div class="col-2">Thời gian gửi</div>
                                        <div class="col-6">Nội dung bài viết</div>
                                        <div class="col-2">Tùy chọn</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php foreach ($tin_tuc as $row) {
                         ;?>
                            
                        <div class="card-body py-3">

                            <div class="row no-gutters align-items-center">
                                <img class="avatar avatar-xxl avatar-img rounded-circle col-2" src="<?=base_url();?>/img/bg-img/<?=$row->anh_minh_hoa_1;?>" alt="">
                                <div class="col-2" style="padding-left: 5px" style="text-align: justify;"><a href='/light/forum-thread' class='text-big font-weight-semibold'><?=$row->tieu_de;?></a></div>
                                <div class="d-none d-md-block col-8">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-2" style="padding-left: 20px"><?=$row->tac_gia;?></div>
                                        <div class="col-2" style="padding-left: 15px"><?=$row->ngay_tao;?></div>
                                        <div class="media col-6 align-items-center">
                                            <div class="media-body  ml-2">
                                                <a href='/light/forum-thread' class='d-block ' style="text-align: justify;"><?=$row->noi_dung_doc_thu;?></a>
                                            </div>
                                        </div>
                                        <div class="col-1" class="text-md-right" style="padding-left: 10px">
                                            <a href="<?=base_url();?>admin/quan_tri_tin_tuc/sua_tin_tuc/<?=$row->id;?>" style="margin-bottom:10px;" class="mdi mdi-pencil-box mdi-24px" ></a>
                                            <a  href="<?=base_url();?>admin/quan_tri_tin_tuc/xoa_tin_tuc/<?=$row->id;?>" style="margin-bottom:10px;" class="mdi mdi-delete mdi-24px"></a>
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
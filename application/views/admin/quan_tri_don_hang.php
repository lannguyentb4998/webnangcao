
<!--site header ends -->    <section class="admin-content ">
        <div class="bg-dark m-b-30">
            <div class="container">
                <div class="row p-b-60 p-t-60">

                    <div class="col-md-6 text-white p-b-30">
                        <div class="media">
                            <div class="avatar avatar mr-3">
                                <div class="avatar-title bg-success rounded-circle mdi mdi-currency-usd  ">

                                </div>
                            </div>
                            <div class="media-body">
                                <h1>QUẢN TRỊ ĐƠN HÀNG </h1>
                                <p class="opacity-75">
                                    
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-5 text-center m-b-30 ml-auto">
                        <div class="rounded text-white bg-white-translucent">
                            <div class="p-all-15">
                                <div class="row">
                                <?php foreach ($da_thanh_toan as $row) {
                                                ;?>
                                    <div class="col-md-6 my-2 m-md-0">
                                        <div class="text-overline    opacity-75">Đã thanh toán</div>
                                        <h3 class="m-0 text-success"><?=$row->tong_tien?> VNĐ</h3>
                                    </div>
                                     <?php
                            }
                            ;?>
                                 <?php foreach ($chua_thanh_toan as $row) {
                                                ;?>
                                    <div class="col-md-6 my-2 m-md-0">

                                        <div class="text-overline    opacity-75">Chưa thanh toán</div>
                                        <h3 class="m-0 text-danger"><?=$row->tong_tien?> VNĐ</h3>
                                    </div>
                                    <?php
                            }
                            ;?>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="pull-up">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row m-b-20">
                                    <div class="col-md-6 my-auto">
                                        <h4 class="m-0">Danh sách đơn hàng</h4>
                                    </div>

                                    <div class="col-md-6 text-right my-auto">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <form action="<?php echo base_url('admin/quan_tri_don_hang/index') ?>" method="POST">
                                            <button type="submit" class="btn btn-white shadow-none" >Tất cả</button>
                                            </form>

                                            <form action="<?php echo base_url('admin/quan_tri_don_hang/da_thanh_toan') ?>" method="POST">
                                            <button type="submit" class="btn btn-white shadow-none" >Đã thanh toán</button>
                                            </form>
                                            
                                            <form action="<?php echo base_url('admin/quan_tri_don_hang/chua_thanh_toan') ?>" method="POST">
                                            <button type="submit" class="btn btn-white shadow-none" >Chưa thanh toán</button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-12 p-0">

                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead class="">
                                                <tr>
                                                    <th scope="col">Ngày đặt</th>
                                                    <th scope="col">Mã hóa đơn</th>
                                                    <th scope="col">Người đặt</th>
                                                    <th scope="col">Trạng thái</th>
                                                    <th scope="col"></th>
                                                    <th scope="col">Tổng tiền</th>
                                                    <th scope="col">Hoạt động</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                 <?php foreach ($don_hang as $row) {
                                                ;?> 
                                                <tr>
                                                  
                                                    <td class="align-middle"><?=$row->ngay_tao;?></td>
                                                    <td class="align-middle"><?=$row->id;?></td>
                                                    <td class="align-middle"><?=$row->email;?></td>
                                                    <?php $trang_thai = $row->trang_thai;
                                                        if($trang_thai == "Đã thanh toán") {
                                                        echo '<td class="align-middle"><span class=" text-success"><i
                                                                class="mdi mdi-check-circle "></i> Đã thanh toán</span></td>';
                                                    } 
                                                    else {
                                                    echo '<td class="align-middle"><span class=" text-danger"><i
                                                                class="mdi mdi-check-circle "></i> Chưa thanh toán</span></td>';
                                                    }?> 
                                                    <td class="align-middle" class="btn btn-white"> 
                                                        <div class="input-group ">
                                                            <div class="input-group-prepend">
                                                                <a href='<?=base_url();?>admin/quan_tri_don_hang/sua_trang_thai/<?=$row->id;?>'> <i class="mdi mdi-pencil"></i></a>
                                                            </div>
                                                        </div>
                                                    <td class="align-middle"><h6 class=" m-0"><?=$row->tong_tien;?> VNĐ</h6></td>
                                                    <td class="align-middle">
                                                        <div class="input-group ">
                                                            <div class="input-group-prepend">
                                                                <a href='<?=base_url();?>admin/quan_tri_don_hang/hien_thi_don_hang_chi_tiet/<?=$row->id;?>' class='btn btn-white'>Xem hóa đơn</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php
                            }
                            ;?>
                                                
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                    <div class="col-auto ml-auto">
                                        <div>
                                            <nav class="">
                                                <ul class="pagination">
                                                    
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="#" tabindex="-1"></a>
                                                    </li>
                                                    <li class="page-item active"><a class="page-link" href="#">1</a>
                                                    </li>
                                                    <li class="page-item ">
                                                        <a class="page-link" href="#">2 <span
                                                                    class="sr-only">(current)</span></a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#"></a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>


                            </div>
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
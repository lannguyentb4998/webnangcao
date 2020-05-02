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
                <iframe src="/demos" height="100%" width="100%" frameborder="0"></iframe>
            </div>
            <div class="modal-footer">
               <div class="text-muted"><i class="mdi mdi-information"></i>Demos will open in new tab</div>
            </div>
        </div>
    </div>
</div>
<!--site header ends -->
    <section class="admin-content ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 m-b-10 p-t-20">
                    <h3 class="">Số người truy cập hệ thống</h3>
                </div>
                <div class="col-md-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                           <div class="row m-t-20 ">
                               <div class="col-sm-3 m-b-20">
                                  <div class="media">
                                      <div class="avatar avatar-lg mr-2">
                                          <div class="avatar-title bg-soft-dark rounded-circle"> <i class="icon mdi mdi-amazon"></i>  </div>
                                      </div>
                                      <div class="media-body my-auto">
                                          <h5 class="m-0">Amazon</h5>
                                          <p class="m-0">2,698</p>
                                      </div>
                                  </div>
                               </div>

                               <div class="col-sm-3 m-b-20">
                                   <div class="media">
                                       <div class="avatar avatar-lg mr-2">
                                           <div class="avatar-title bg-soft-danger rounded-circle"> <i class="icon mdi mdi-google-adwords"></i>  </div>
                                       </div>
                                       <div class="media-body my-auto">
                                           <h5 class="m-0">Google</h5>
                                           <p class="m-0">5,829</p>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-sm-3 m-b-20">
                                   <div class="media">
                                       <div class="avatar avatar-lg mr-2">
                                           <div class="avatar-title bg-soft-info rounded-circle"> <i class="icon mdi mdi-facebook"></i>  </div>
                                       </div>
                                       <div class="media-body my-auto">
                                           <h5 class="m-0">Facebook</h5>
                                           <p class="m-0">1,233</p>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-sm-3 m-b-20">
                                   <div class="media">
                                       <div class="avatar avatar-lg mr-2">
                                           <div class="avatar-title bg-soft-primary rounded-circle"> <i class="icon mdi mdi-instagram"></i>  </div>
                                       </div>
                                       <div class="media-body my-auto">
                                           <h5 class="m-0">Instagram</h5>
                                           <p class="m-0">1,456</p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                            <hr>
                            <h5 class="">Kênh quảng cáo</h5>
                            <div id="chart-10"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 m-b-10">
                            <h3>Nhân viên mới</h3>
                        </div>
                        <?php foreach ($nhan_vien_moi as $row) { ;?>
                         
                        <div class="col-md-6 col-lg-3 h-100 m-b-30">
                            <div class="card ">

                                <div class="card-body">
                                    <div class="text-center">
                                        <h3><?=$row->name;?></h3>
                                        <p class="text-overline text-muted"><?=$row->so_nam_kinh_nghiem;?> năm kinh nghiệm</p>
                                        <div class="m-b-10">
                                            <img src="<?=base_url();?>/img/bg-img/<?=$row->anh_minh_hoa;?>" alt="" style="height: 100px; width: auto">
                                        </div>
                                        <div class="font-weight-bold">
                                                <div class="text-muted">  <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i>
                                                <i class="mdi mdi-star text-warning"></i></div>
                                                
                                        </div>
                                        <div class="bg-gray-200 m-t-10 p-all-10 text-overline">  </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        
                        </div>

                    </div>

                </div>
                
            <div class="container">
                <div class="row">
                <div class="col-12 m-b-10">
                    <h5> <i class="fe fe-users"></i> Khách hàng</h5>
                    <div class="table-responsive">
                        <table class="table align-td-middle table-card">
                            <thead>
                            <tr>
                                <th>Ảnh</th>
                                <th>Tên</th>
                                <th>Tài khoản</th>
                                <th>Địa chỉ</th>
                                <th>Tuổi</th>
                                <th>Ngày tạo</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($khach_hang_moi as $row) { ;?>
                             
                            <tr>
                                <td>
                                    <div class="avatar avatar-sm "><img src="<?=base_url();?>/img/bg-img/<?=$row->anh_minh_hoa;?>"
                                     class="avatar-img avatar-sm rounded-circle"
                                                                        alt=""></div>
                                </td>
                                <td><?=$row->ten_kh;?></td>
                                <td><?=$row->email;?></td>
                                <td><?=$row->quan;?></td>
                                <td><?=$row->tuoi;?></td>
                                <td><?=$row->ngay_tao;?></td>
                            </tr>

                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<script src='https://d33wubrfki0l68.cloudfront.net/bundles/9556cd6744b0b19628598270bd385082cda6a269.js'></script>
<!--page specific scripts for demo-->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-66116118-3"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'UA-66116118-3'); </script>
<!--Additional Page includes-->
<script src='https://d33wubrfki0l68.cloudfront.net/js/c36248babf70a3c7ad1dcd98d4250fa60842eea9/crisp/assets/vendor/apexchart/apexcharts.min.js'></script>
<!--chart data for current dashboard-->
<script src='https://d33wubrfki0l68.cloudfront.net/js/aab3246a99584f6fd8c65ca5df93251c686ec232/light/assets/js/dashboard-04.js'></script>
</body>
</html>
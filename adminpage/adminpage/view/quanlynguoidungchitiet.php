
<?php
 include_once "../controller/nguoidungchitietController.php";
 ?>
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Quản lý người dùng</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Quản lý người dùng</a></li>
                                    <li class="active">Chi tiết người dùng</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-lg-12">
                        <div class="card">
                            
                            <div class="card-body card-block">
                                <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                   
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tên khách hàng</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="ten_user" name="ten_user" value="<?php echo $row['ten_user']; ?>"placeholder="" class="form-control" readonly="readonly"></div>
                                    </div>
                        
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Số điện thoại</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="sdt" name="so_dien_thoai"value="<?php echo $row['so_dien_thoai']; ?>" placeholder="" class="form-control"readonly="readonly"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email</label></div>
                                        <div class="col-12 col-md-9"><input type="email" id="email" name="email"value="<?php echo $row['email']; ?>"  placeholder="" class="form-control"readonly="readonly"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Địa chỉ</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="dia_chi" name="dia_chi"value="<?php echo $row['dia_chi']; ?>" placeholder="" class="form-control"readonly="readonly"></div>
                                    </div>
    
                                    <div  style="float:right;">
                                <button type="submit" class="btn btn-primary" name="submit" value="submit">
                                    <i class="fa ti-plus"></i> Cập nhật
                                </button>
                                <button type="reset" class="btn btn-warning" name="bnt_xuly" value="reset">
                                    <i class="fa ti-reload"></i> Reset
                                </button>
                            </div>
                                </form>
                            </div>
                          
                        </div>
                   
                    </div>



                </div>
                <?php include "layout/buttonbackpage.php"; ?>
            </div><!-- .animated -->
        </div><!-- .content -->

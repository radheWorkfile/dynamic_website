<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $this->session->userdata('company_name') ?> | <?php echo $title; ?></title>
    <?php $this->load->view('admin/include/css') ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed ">
    <div class="wrapper">
        <!-- Navbar -->
        <?php $this->load->view('admin/include/header') ?>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <?php $this->load->view('admin/include/left') ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><?php echo $title; ?></h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active"><?php echo $breadcrums; ?></li>
                            </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <!-- page layout started -->
                    <div class="row">



                        <!-- Summernote section start -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <span class="h3n card-title" style="">Summernote Section:</span>

                                    <div style="float:right;">
                                        <span class="button" style="text-align: center;"><a href="javascript:void(0);" class="btn btn-success" id="see_hide" data-toggle="modal" data-target="#edit_summernote" onclick="see_summernote(<?php echo $child_submenu['id'] ?>,<?php echo $child_submenu['submenu_id'] ?>)">See</a></span>

                                        <span class="button" style="text-align:right; font-size:30px;">
                                            <?php if ($child_submenu['sumernote'] == 1) : ?>
                                                <a href="javascript:void(0)" onclick="summernote_off(<?php echo $child_submenu['id']; ?>,<?php echo $child_submenu['submenu_id'] ?>)" title="Summernote on"><i class="fa fa-toggle-on" aria-hidden="true"></i></a>
                                            <?php else : ?>
                                                <a href="javascript:void(0)" onclick="summernote_on(<?php echo $child_submenu['id']; ?>,<?php echo $child_submenu['submenu_id'] ?>)" title="Summernote off"><i class="fa fa-toggle-off" aria-hidden="true"></i></a>
                                            <?php endif; ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="banner"></div>
                                </div>

                            </div>
                        </div>
                        <!-- Summernote section end -->

                        <!-- Seo section start -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <span class="h3n card-title" style="">Seo Section:</span>

                                    <div style="float:right;">
                                        <span class="button" style="text-align: center;"><a href="javascript:void(0);" class="btn btn-success" id="see_hide" data-toggle="modal" data-target="#edit_seo" onclick="see_seo(<?php echo $child_submenu['id'] ?>,<?php echo $child_submenu['submenu_id'] ?>)">See</a></span>

                                        <span class="button" style="text-align:right; font-size:30px;">
                                            <?php if ($child_submenu['seo'] == 1) : ?>
                                                <a href="javascript:void(0)" onclick="seo_off(<?php echo $child_submenu['id']; ?>,<?php echo $child_submenu['submenu_id'] ?>)" title="seo on"><i class="fa fa-toggle-on" aria-hidden="true"></i></a>
                                            <?php else : ?>
                                                <a href="javascript:void(0)" onclick="seo_on(<?php echo $child_submenu['id']; ?>,<?php echo $child_submenu['submenu_id'] ?>)" title="seo off"><i class="fa fa-toggle-off" aria-hidden="true"></i></a>
                                            <?php endif; ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="banner"></div>
                                </div>

                            </div>
                        </div>
                        <!-- Seo section end -->





                    </div>







                    <!-- page layout end -->



                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>


    <!-- Add User Modal Start -->
    <div class="modal fade" id="add_modal">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Banner </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="add_Banner" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                    <div class="modal-body text-md" style="z-index: 56385852 !important;">
                        <div class="row">
                            <?php
                            $child_submenu_id = $this->uri->segment(5);
                            $submenu_id = $this->uri->segment(6);

                            ?>
                            <div class="col-md-12 col-sm-12">
                                <label>Banner <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="hidden" name="submenu_id" value="<?php echo $submenu_id; ?>">
                                    <input type="hidden" name="child_submenu_id" value="<?php echo $child_submenu_id; ?>">

                                    <input type="file" name="banner" id="name" class="form-control"><br>
                                </div>
                                <span class="text-danger" style="font-size: 10px;">maximum width <?php echo $banner_p['width'] . "px"; ?>, Height <?php echo $banner_p['width'] . "px"; ?> and Size <?php echo $banner_p['width'] . "KB"; ?> </span>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <label>Banner Text <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">

                                    <textarea name="banner_text" maxlength="50" id="" cols="90%" rows="5"></textarea><br>
                                </div>
                                <span class="text-danger" style="font-size: 10px;">maximum 50 charechter only</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal-dialog -->
    <!-- Add User Modal End-->


    <!-- User Update Modal Start -->
    <div class="modal fade" id="edit_modal">
        <div class="modal-dialog modal-sm">
            <div class="modal-content text-sm" style="z-index:1100;">
                <div class="modal-header">
                    <h5 class="modal-title">Update User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="update_user" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div id="edit_user"></div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    <!-- User Update Modal End-->

    <!-- User View Modal Start -->
    <div class="modal fade" id="view_modal">
        <div class="modal-dialog modal-sm">
            <div class="modal-content text-sm" style="width: 250%;">
                <div class="modal-header">
                    <h5 class="modal-title">Banner view</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="view_banner"></div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    <!-- User View Modal End-->
    <?php $this->load->view("admin/page/child_submenu_page/summernote_section/summernote_model"); ?>
    <?php $this->load->view("admin/page/child_submenu_page/seo_section/seo_model"); ?>

    <?php $this->load->view('admin/include/footer') ?>
    </div>
    <!-- ./wrapper -->
    <?php $this->load->view('admin/include/js') ?>
    <script src="<?php echo  base_url() ?>media/js/admin.js"></script>
    <script src="<?php echo  base_url() ?>media/js/admin/page/child_submenu_page.js"></script>


</body>

</html>
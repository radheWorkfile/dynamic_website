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
                    <?php  if($navbar['navbar_limit']>count($menu)):?>
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#add_modal" title='Click Menu User' class="btn btn-outline-primary float-right"> <i class="fas fa-plus"></i> Add Menu</a><br><br>

                    <?php endif;?>

                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Menu</th>
                                <th>Child</th>
                                <th>Page Url</th>
                                <th>Status</th>                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($menu as $us => $menu) { ?>
                                <tr>
                                    <td><?php echo $us + 1; ?></td>
                                    <td><?php echo $menu['menu'] ?></td>
                                    <td><?php echo ($menu['child']>0)?"Yes":"No"; ?></td>
                                    <td><?php echo ($menu['child']>0)?"http://":base_url()."Website/page/{$menu['id']}"; ?></td>

                                    <td><?php echo ($menu['status']>0)?"Active":"Deactive"; ?></td>                                    
                                    <td>
                                       
                                     

                                        <a href="javascript:void(0);" onclick="deleted(<?php echo $menu['id'] ?>)" title='Click to Delete <?php echo $menu['menu'] ?> '><i class="fas fa-trash text-danger"></i></a>&emsp;
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#edit_modal" onclick="edit_navbar(<?php echo $menu['id'] ?>)" title='Click to edit <?php echo $menu['menu'] ?> '><i class="fas fa-edit text-primary"></i></a>&emsp;

                                        
                                        <?php if ($menu['status'] == 1) : ?>
                                            <a href="javascript:void(0);" class="text-success" title="Deactivate";  onclick="deactive(<?php echo $menu['id']; ?>)"><span class="fa fa-check"></span></a>&emsp;
                                        <?php else : ?>
                                            <a href="javascript:void(0);" class="text-danger" title="Activate";  onclick="active(<?php echo $menu['id']; ?>)"><span class="fa fa-times"></span></a>&emsp;
                                        <?php endif; ?>

                                        <?php if($menu['child']==0):?><a href="<?php echo base_url("admin/page/manage_page/{$menu['id']}")?>" title="Add <?php echo $menu['menu']; ?> page"> <i class="fa fa-file"></i></a>&emsp;<?php endif;?>

                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>S.No.</th>
                                <th>Menu</th>
                                <th>Child</th>
                                <th>Page Url</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
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
                    <h4 class="modal-title">Add New Menu </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="add_menu" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                    <div class="modal-body text-md">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <label>Menu Name <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-use"></i></span>
                                    </div>
                                    <input type="text" name="name" id="name" maxlength="100" placeholder="Enter Menu Name" class="form-control" required><br>
                                </div>
                                <!-- <span class="text-danger" style="font-size: 10px;">maximum 10 charechter only</span> -->
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
            <div class="modal-content text-sm">
                <div class="modal-header">
                    <h5 class="modal-title">Update Navbar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="update_navbar" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div id="edit_navbar"></div>
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
            <div class="modal-content text-sm">
                <div class="modal-header">
                    <h5 class="modal-title">User View</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="view_user"></div>
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


    <?php $this->load->view('admin/include/footer') ?>
    </div>
    <!-- ./wrapper -->
    <?php $this->load->view('admin/include/js') ?>
    <script src="<?php echo  base_url() ?>media/js/admin.js"></script>
    <script src="<?php echo  base_url() ?>media/js/admin/navbar.js"></script>


</body>

</html>
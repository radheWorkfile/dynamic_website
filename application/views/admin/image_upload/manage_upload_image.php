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


            <!-- Main content  test_1 for dispay-->
            <section class="content">
                <div class="container-fluid">
                  
                   
                <a href="javascript:void(0);" data-toggle="modal" data-target="#add_modal" title='Click Add User' class="btn btn-outline-primary float-right"> <i class="fas fa-plus"></i> Add Image</a><br><br>
                    <table  class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Image Url</th>
                                <th>Local Url</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                            <?php foreach ($img_upload as $i => $img) { ?>
                                <tr>
                                    <td><?php echo $i + 1; ?></td>
                                    <td><img src="<?php echo base_url().'uploads/'.$img['file'];?>" alt="" style="max-width:15%;"></td>
                                    <td><?php echo base_url().'uploads/'.$img['file'];?></td>
                                   
                                    <td>
                                        <a href="javascript:void(0);" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#view_modal" onclick="get_data_user(<?php echo $usr['id'] ?>)" title='Click to View <?php echo $usr['name'] ?> Data'><i class="fas fa-eye text-success"></i></a>&emsp;
                                        <a href="javascript:void(0);" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#edit_modal" onclick="get_data_edit_user(<?php echo $usr['id'] ?>)" title='Click to View <?php echo $usr['name'] ?> Data'><i class="fas fa-edit text-primary"></i></a>&emsp;
                                        <?php $status = ($usr['status'] == 1) ?
                                            "<a style='color:green' href='javascript:void()' onClick='return changeStatus(\"" . $usr['id'] . "\",\"0\",\"Users\",\"admin/common/chageStatus\")' title='Click to Di-Active User'><b><i class='fa fa-check'></i> </b></a>"
                                            :
                                            "<a style='color:red'  href='javascript:void()'  onClick='return changeStatus(\"" . $usr['id'] . "\",\"1\",\"Users\",\"admin/common/chageStatus\")' title='Click to Active User'><b><i class='fa fa-times'></i> </b></a>";
                                        echo "<span id=" . $usr['id'] . ">" . $status . "</span>";
                                        ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                  
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
                <form action="<?php echo base_url();?>admin/navbar/do_upload" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                    <div class="modal-body text-md">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <label>Image Upload <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-use"></i></span>
                                    </div>
                                    <input type="file" name="file" id="file"  placeholder="Choose File" class="form-control"><br>
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





    <?php $this->load->view('admin/include/footer') ?>
    </div>
    <!-- ./wrapper -->
    <?php $this->load->view('admin/include/js') ?>
    <script src="<?php echo  base_url() ?>media/js/admin.js"></script>

</body>

</html>


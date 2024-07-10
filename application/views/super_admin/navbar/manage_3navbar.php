<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $this->session->userdata('company_name') ?> | <?php echo $title; ?></title>
    <?php $this->load->view('super_admin/include/css') ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed ">
    <div class="wrapper">
        <!-- Navbar -->
        <?php $this->load->view('super_admin/include/header') ?>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <?php $this->load->view('super_admin/include/left') ?>
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

                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Name</th>
                                <th>Limit</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($navbar as $us => $nav) { ?>
                                <tr>
                                    <td><?php echo $us + 1; ?></td>
                                    <td>Maximum Navbar</td>
                                    <td><?php echo $nav['3rd_navbar_limit'] ?></td>
                                    <td>
                                        <?php echo ($nav['3rd_navbar_permission']) == 1 ? "Active" : "Deactive"; ?>
                                    </td>


                                    <td>
                                        


                                        <a href="javascript:void(0);" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#edit_modal" onclick="get_data_edit_3navbar(<?php echo $nav['id'] ?>)" title='Click to View Data'><i class="fas fa-edit text-primary"></i></a>&emsp;


                                        <?php if ($nav['3rd_navbar_permission'] == 0) : ?>
                                            <a href="javascript:void(0);" onclick="activate('<?php echo $nav['id']?>');"  class="text-success" title="click here to activate "><i class="fa fa-check"></i></a>
                                        <?php else : ?>
                                            <a href="javascript:void(0);" onclick="deactivate('<?php echo $nav['id']?>');" class="text-danger" title="click here to Deactivate "><i class="fa fa-times"></i></a>
                                        <?php endif; ?>


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
    <div class="modal fade" id="add_user_modal">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New User </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="add_user" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                    <div class="modal-body text-md">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <label>User Name <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" name="name" id="name" placeholder="Enter User Name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label>Email <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-at"></i></span>
                                    </div>
                                    <input type="email" name="email" id="email" placeholder="Enter Email" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label>Mobile <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                                    </div>
                                    <input type="number" name="mobile" id="mobile" placeholder="Enter Mobile Number" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label>Password <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" name="password" id="password" placeholder="Enter Password" class="form-control">
                                </div>
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
                    <h5 class="modal-title">Update User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="update_3navbar" method="post" accept-charset="utf-8" enctype="multipart/form-data">
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


    <?php $this->load->view('super_admin/include/footer') ?>
    </div>
    <!-- ./wrapper -->
    <?php $this->load->view('super_admin/include/js') ?>
    <script src="<?php echo  base_url() ?>media/js/admin.js"></script>
    <script>
        function get_data_edit_3navbar(id) {

            $.ajax({
                url: "<?php echo base_url() . "super_admin/navbar/get_3navbar_data"; ?>",
                type: "POST",
                data: {
                    'id': id
                },
                success: function(data) {
                    $("#edit_navbar").html(data);
                }
            });
        }



        $('#update_3navbar').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: base_url + "super_admin/navbar/update_3navbar",
                type: "POST",
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                success: function(data) {
                    //$('#empmsg').html(data);
                    console.log(data);
                    var obj = JSON.parse(data);
                    //console.log(obj.icon);
                    //return false;
                    if (obj.icon == "error") {
                        var valid = '';
                        $.each(obj.text, function(i, item) {
                            valid += item;
                        });
                        Toast.fire({
                            icon: obj.icon,
                            html: valid,
                        })

                    } else {
                        Toast.fire({
                            icon: obj.icon,
                            text: obj.text
                        })
                        //setTimeout(location.reload.bind(location), 3000);
                        window.location.reload(true);
                    }
                }
            });
        });

        

        function activate(id)
        {
           $.ajax({
            url: base_url +"super_admin/navbar/activate_3navbar",
            type:"post",
            data:{"id":id},
            success: function(data) {
                    //$('#empmsg').html(data);
                    console.log(data);
                    var obj = JSON.parse(data);
                    //console.log(obj.icon);
                    //return false;
                    if (obj.icon == "error") {
                        var valid = '';
                        $.each(obj.text, function(i, item) {
                            valid += item;
                        });
                        Toast.fire({
                            icon: obj.icon,
                            html: valid,
                        })

                    } else {
                        Toast.fire({
                            icon: obj.icon,
                            text: obj.text
                        })
                        //setTimeout(location.reload.bind(location), 3000);
                        window.location.reload(true);
                    }
                }

           });
        }



        function deactivate(id)
        {
            $.ajax({
            url: base_url +"super_admin/navbar/deactivate_3navbar",
            type:"post",
            data:{"id":id},
            success: function(data) {
                    //$('#empmsg').html(data);
                    console.log(data);
                    var obj = JSON.parse(data);
                    //console.log(obj.icon);
                    //return false;
                    if (obj.icon == "error") {
                        var valid = '';
                        $.each(obj.text, function(i, item) {
                            valid += item;
                        });
                        Toast.fire({
                            icon: obj.icon,
                            html: valid,
                        })

                    } else {
                        Toast.fire({
                            icon: obj.icon,
                            text: obj.text
                        })
                        //setTimeout(location.reload.bind(location), 3000);
                        window.location.reload(true);
                    }
                }
           });
        }



    </script>

</body>

</html>
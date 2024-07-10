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

                        <!-- Logo start -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <span class="h3n card-title">Logo<span class="text-danger">*</span></span>
                                    <div style="float:right;">
                                    </div>
                                </div>
                                <div class="card-body">

                                    <form id="logo">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <input type="file" name="logo" class="form-control" required>
                                                <span style="font-size:10px; color:red;"> Maximum Size&nbsp;<?php echo $logo_p['logo_size'] . "KB&nbsp;width&nbsp;" . $logo_p['logo_width'] . "px&nbsp;Height&nbsp;" . $logo_p['logo_height'] . "px&nbsp;only"; ?></span>
                                            </div>

                                            <div class="col-md-4">
                                                <input type="submit" class=" btn btn-block btn-primary" value="Update">
                                            </div>
                                            <div class="col-md-4">
                                                <img src="<?php echo base_url() . "uploads/logo/" . $logo['logo']; ?>" alt="logo" style="height:50px;">
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Logo End -->

                        <!-- favicon start -->

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <span class="h3n card-title" style="">Favicon<span class="text-danger">*</span></span>
                                    <div style="float:right;">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="" id="favicon">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <input type="file" name="favicon" class="form-control" required>
                                                <span style="font-size:10px; color:red;"> Maximum Size&nbsp;<?php echo $favicon_p['favicon_size'] . "KB&nbsp;width&nbsp;" . $favicon_p['favicon_width'] . "px&nbsp;Height&nbsp;" . $favicon_p['favicon_height'] . "px&nbsp;only"; ?></span>

                                            </div>

                                            <div class="col-md-4">
                                                <input type="submit" class=" btn btn-block btn-primary" value="Update">
                                            </div>
                                            <div class="col-md-4">
                                                <img src="<?php echo base_url() . "uploads/logo/" . $favicon['favicon']; ?>" alt="Favicon" style="height:50px;">
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- favicon end -->
                        <!-- Google analytics console and live chat section end -->

                         <?php if($links['status']==1):?>
                        <div class="col-md-12 ">
                            <div class="card">
                                <div class="card-header">
                                    <span class="h3n card-title" >Analytics section</span>
                                    <div style="float:right;"></div>
                                </div>
                                <div class="card-body">
                                    <form id="gol" method="POST">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="">Google Analytics:</label>
                                                <textarea name="google_analytics"  cols="30" class="form-control" rows="4" required><?php echo $links['google_analytics']?></textarea>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="">Google Console:</label>
                                                <textarea name="google_console"  cols="30" class="form-control" rows="4" required><?php echo $links['google_console']?></textarea>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="">Live Chat:</label><br>
                                                <textarea name="livechat"  cols="30" class="form-control" rows="4" required><?php echo $links['livechat']?></textarea>
                                            </div>

                                            <div class="col-md-3"></div>
                                            <div class="col-md-6 my-2">
                                                <input type="submit" class=" btn btn-block btn-primary" value="Update">
                                            </div>
                                            <div class="col-md-3"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php endif;?>

                        <!-- Google analytics console and live chat section end -->


                        <!-- profile or general settings start -->
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <span class="h3n card-title" >Profile Settings</span>
                                    <div style="float:right;">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="" id="web_pro">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="">Site Name<span class="text-danger">*</span></label>
                                                <input type="text" name="company_name" class="form-control" value="<?php echo $profile['company_name'] ?>" required>
                                            </div>
                                            <div class="col-md-6">
                                            </div>


                                            <div class="col-md-2">
                                                <label for="">Facebook Id</label>
                                                <input type="text" name="facebook" class="form-control" value="<?php echo $profile['facebook'] ?>" >
                                            </div>
                                            <div class="col-md-2">
                                                <label for="">Twitter Id</label>
                                                <input type="text" name="tweeter" class="form-control" value="<?php echo $profile['instagram'] ?>">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="">Instagram Id</label>
                                                <input type="text" name="instagram" class="form-control" value="<?php echo $profile['instagram'] ?>">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="">Linkedin Id</label>
                                                <input type="text" name="linkedln" class="form-control" value="<?php echo $profile['linkedln'] ?>">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="">Youtube Link</label>
                                                <input type="text" name="youtube" class="form-control" value="<?php echo $profile['youtube'] ?>">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="">Whatsapp Number</label>
                                                <input type="text" name="whatsapp" class="form-control" value="<?php echo $profile['whatsapp'] ?>">
                                            </div>


                                            <div class="col-md-6">
                                                <label for="">Address<span class="text-danger">*</span></label><br>
                                                <textarea name="company_address"  class="form-control" cols="30" rows="4" required><?php echo $profile['company_address'] ?></textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">About Company<span class="text-danger">*</span></label><br>
                                                <textarea name="about_company"  class="form-control" cols="30" rows="4" required><?php echo $profile['about_company'] ?></textarea>
                                            </div>
                                            <div class="col-md-8"></div>
                                            <div class="col-md-4 my-3">
                                                <input type="submit" class=" btn btn-block btn-primary" value="Update">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- profile   or general settings End -->

                        <!-- profile or general settings start -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <span class="h3n card-title">Contact Settings</span>
                                    <div style="float:right;">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="" id="contact_details">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="">Contact Number<span class="text-danger">*</span></label>
                                                <textarea name="contact_number"  class="form-control" cols="30" rows="3" required><?php echo $contact['contact_number']; ?></textarea>
                                                <p class="text-danger" style="font-size: 10px;">Add multiple data with , (comma) separated</p>


                                            </div>

                                            <div class="col-md-6">
                                                <label for="">Email<span class="text-danger">*</span></label><br>
                                                <textarea name="email"  class="form-control" cols="30" rows="3" required><?php echo $contact['email']; ?></textarea>
                                                <p class="text-danger" style="font-size: 10px;">Add multiple data with , (comma) separated</p>
                                            </div>
                                            <div class="col-md-8"></div>
                                            <div class="col-md-4">
                                                <input type="submit" class=" btn btn-block btn-primary" value="Update">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- profile   or general settings End -->

                        <!-- home page selection start -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <span class="h3n card-title">Make Home Page</span>
                                    <div style="float:right;">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="" id="home_pag">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="">Select Home Page<span class="text-danger">*</span></label>
                                                <select name="menu_id"  class="form-control" required>
                                                    <?php foreach ($menu as $m) : ?>
                                                        <option value="<?php echo $m['id']; ?>"><?php echo $m['menu']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>

                                            </div>
                                            <div class="col-md-8"></div>
                                            <div class="col-md-4">
                                                <input type="submit" class=" btn btn-block btn-primary" value="Update">
                                            </div>
                                        </div>
                                    </form>
                                    <p>Home Page:<?php foreach ($menu as $m) : if ($m['home_page'] == 1) :  $home = $m['menu'];
                                                            break;
                                                        else : $home = "Not Selected Yet" ?><?php endif;
                                                                                                                                                        endforeach; ?><span class="text-danger">&nbsp;&nbsp;&nbsp;<?php echo $home; ?></span></p>
                                </div>
                            </div>
                        </div>

                        <!-- home page selection end -->






                    </div>
                    <!-- page layout started -->
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
    <script src="<?php echo  base_url() ?>media/js/admin/profile_setting.js"></script>


</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $this->session->userdata('company_name') ?> | Dashboard</title>
    <?php $this->load->view('admin/include/css') ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
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
                                <li class="breadcrumb-item active"><?php echo $breadcrumb; ?></li>
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

                    <!-- content section start -->
                    <section class="content">
                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-md-12 text-center py-3">
                                    <?php
                                    date_default_timezone_set("Asia/Calcutta");

                                    echo date("l jS M Y");
                                    //   date calculation
                                    $te = 0;
                                    $ye = 0;
                                    $total_unread = 0;
                                    foreach ($enquiry as $enq) {
                                        $d1 = date("Y-m-d", strtotime($enq['created_at']));
                                        $d2 = date('Y-m-d');
                                        $diff = abs(strtotime($d2) - strtotime($d1)); // it giving second difference between date
                                        $days = $diff / 3600 / 24;
                                        if ($days == 0) {
                                            $te++;
                                        } elseif ($days == 1) {
                                            $ye++;
                                        }
                                        // countinng Unread enquiry
                                        if ($enq['status'] == 0) {
                                            $total_unread++;
                                        }
                                    }
                                    ?>

                                </div>
                                <div class="col-lg-3 col-6">

                                    <div class="small-box bg-info">
                                        <div class="inner">
                                            <h3><?php echo $te; ?></h3>
                                            <p>Today Enquiry</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fas fa-comments"></i>
                                        </div>
                                        <a href="<?php echo base_url() . "admin/Enquiry/manage_enquiry"; ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-6">

                                    <div class="small-box bg-success">
                                        <div class="inner">
                                            <h3><?php echo $ye; ?></h3>
                                            <p>Yesterday Enquiry</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fas fa-comments"></i>
                                        </div>
                                        <a href="<?php echo base_url() . "admin/Enquiry/manage_enquiry"; ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-6">

                                    <div class="small-box bg-warning">
                                        <div class="inner">
                                            <h3><?php echo count($enquiry); ?></h3>
                                            <p>Total Enquiry</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fas fa-comments"></i>
                                        </div>
                                        <a href="<?php echo base_url() . "admin/Enquiry/manage_enquiry"; ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-6">

                                    <div class="small-box bg-danger">
                                        <div class="inner">
                                            <h3><?php echo $total_unread; ?></h3>
                                            <p>Unseen Message</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <a href="<?php echo base_url() . "admin/Enquiry/manage_enquiry"; ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-6">

                                    <div class="small-box bg-danger">
                                        <div class="inner">
                                            <h3><?php echo count($enquiry)-$total_unread; ?></h3>
                                            <p>Seen Message</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-envelope-open"></i>
                                        </div>
                                        <a href="<?php echo base_url() . "admin/Enquiry/manage_enquiry"; ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>


                            </div>



                        </div>
                    </section>

                    <!-- content section end -->




                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php $this->load->view('admin/include/footer') ?>
    </div>
    <!-- ./wrapper -->
    <?php $this->load->view('admin/include/js') ?>
</body>

</html>
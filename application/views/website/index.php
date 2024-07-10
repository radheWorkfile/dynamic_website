<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $seo['page_title']; ?></title>
    <link rel="icon" href="<?php echo base_url() . "uploads/logo/" . $logo['favicon']; ?>" type="image/x-icon" />
    <?php include_once("include/css.php") ?>
    <meta name="description" content="<?php echo $seo['meta_description']; ?>">
    <meta name="keywords" content="<?php echo $seo['meta_keywords']; ?>">

    <script>
        <?php echo $links['google_analytics']; ?>
    </script>
    <script>
        <?php echo $links['google_console']; ?>
    </script>
</head>

<body>
    <?php include_once("include/header.php") ?>

    <!--====================banner section  started==================================================== -->
    <?php if ($menu_p['banner'] != 0 && $banner) : ?>

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php $a = 0;
                if (Count($banner)) : ?>
                    <?php foreach ($banner as $b => $ban) : ?>
                        <?php if ($a == 0) : ?>
                            <div class="carousel-item active">
                                <img src="<?php echo base_url() . "uploads/banner/" . $ban['banner'] ?>" class="d-block w-100" alt="...">

                                <?php if ($ban['banner_text']) : ?>
                                    <div class="carousel-caption d-none d-md-block  " style="text-align: left; top:30% ">
                                        <p style="margin-top: 10%;">
                                            <?php echo $ban['banner_text'] ?>
                                            <span>
                                                <a class="btn btn-danger" href="<?php echo $ban['button_url'] ?>" style="background-color:'<?php echo $ban['button_color']; ?>' !important; z-index:5000000000000;">
                                                    <?php echo $ban['button_text']; ?>
                                                </a>
                                            </span>
                                        </p>
                                    </div>
                                <?php endif; ?>

                            </div>
                        <?php $a++;
                        else : ?>
                            <div class="carousel-item">
                                <img src="<?php echo base_url() . "uploads/banner/" . $ban['banner'] ?>" class="d-block w-100" alt="...">

                                <?php if ($ban['banner_text']) : ?>
                                    <div class="carousel-caption d-none d-md-block " style="text-align: left;top:30%">
                                        <p style="margin-top: 10%;">
                                            <?php echo $ban['banner_text'] ?>
                                            <span>
                                                <a class="btn btn-danger" href="<?php echo $ban['button_url'] ?>" style="background-color:'<?php echo $ban['button_color']; ?>' !important; z-index:5000000000000;">
                                                    <?php echo $ban['button_text']; ?></a>
                                            </span>
                                        </p>
                                    </div>
                                <?php endif; ?>

                            </div>

                        <?php $a++;
                        endif; ?>

                    <?php endforeach; ?>

                <?php endif; ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


    <?php endif; ?>
    <!--====================banner section  end==================================================== -->











    <!--====================news section start==================================================== -->
    <?php if ($menu_p['news'] != 0 && !empty($news)) : ?>
        <div class="container my-5">
            <h2 class="text-center">Today News</h2>
            <marquee behavior="slow" direction="ltr">
                <?php foreach ($news as $news) : ?>

                    <p><?php echo $news['news']; ?></p>
                <?php endforeach; ?>
            </marquee>
        </div>
    <?php endif; ?>
    <!--====================news section end==================================================== -->


    <!--====================about us section start==================================================== -->
    <?php if ($menu_p['about'] != 0 && !empty($about)) : ?>
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="<?php echo base_url() . "uploads/image/" . $about['about_image']; ?>" class="d-block mx-lg-auto img-fluid" alt="<?php echo base_url() . "uploads/image/" . $about['about_image']; ?>" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3"><?php echo $about['about_header']; ?></h1>
                    <p class="lead"><?php echo $about['about_text']; ?></p>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <?php if ($about['button_url'] != 0) : ?>
                            <a href="<?php echo $about['button_url'] ?>">
                                <button style="background-color:<?php echo $about['button_color']; ?> !important;">
                                    <?php echo $about['button_text']; ?>

                                </button>
                            </a>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
    <?php endif; ?>

    <!--====================about us section end==================================================== -->


    <!--====================hero section start==================================================== -->
    <?php if ($menu_p['hero_section'] != 0 && !empty($hero)) : ?>
        <div class="container my-5">
            <?php foreach ($hero as $hero) : ?>

                <div class="row bg bg-light my-2 py-2">
                    <?php if ($hero['header']) : ?>
                        <div class="col-md-12">
                            <h3 class="text-center"><?php echo $hero['header']; ?></h3>
                        </div>
                    <?php endif; ?>

                    <?php if ($hero['text'] != '' && $hero['image'] != '') : ?>
                        <div class="col-md-6">
                            <?php echo $hero['text'] ?>
                        </div>
                        <div class="col-md-6">
                            <img src="<?php echo base_url() . $hero['image']; ?>" alt="<?php echo base_url() . $hero['image']; ?>" style="width: 100%;">
                        </div>
                    <?php endif; ?>

                    <?php if ($hero['text'] != '' && $hero['image'] == '') : ?>
                        <div class="col-md-12">
                            <?php echo $hero['text'] ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($hero['text'] == '' && $hero['image'] != '') : ?>
                        <div class="col-md-12">
                            <img src="<?php echo base_url() . $hero['image']; ?>" alt="<?php echo base_url() . $hero['image']; ?>" style="width: 100%;">

                        </div>
                    <?php endif; ?>


                </div>
            <?php endforeach; ?>



        </div>
    <?php endif; ?>
    <!--=================== Hero section end==================================================== -->



    <!--====================services section start==================================================== -->
    <?php if ($menu_p['services'] != 0 && !empty($service)) : ?>
        <div class="container">

            <div class="row">
                <h1 class="text-center">Our Services</h1>
                <?php foreach ($service as $s => $ser) : ?>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo base_url() . "uploads/image/" . $ser['image'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3 class="card-text"><?php echo $ser['heading']; ?></h3>

                                <p class="card-text"><?php echo $ser['content']; ?></p>
                                <?php if ($ser['button_url'] != 0) : ?>
                                    <a href="<?php echo $ser['button_url'] ?>">
                                        <button style="background-color:<?php echo $ser['button_color']; ?> !important;">
                                            <?php echo $ser['button_text']; ?>

                                        </button>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>






            </div>



        </div>
    <?php endif; ?>

    <!--====================services section end==================================================== -->

    <!--====================testimonial section start==================================================== -->
    <?php if ($menu_p['testimonial'] != 0 && !empty($testimonial)) : ?>
        <div class="container">
            <div class="row">
                <h1 class="text-center">Testimonial</h1>
                <?php foreach ($testimonial as $s => $tes) : ?>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo base_url() . "uploads/image/" . $tes['image'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3>title</h3>
                                <p class="card-text"><?php echo $tes['content']; ?></p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>

    <!--====================testimonial section end==================================================== -->

    <!--====================Gallery Section start==================================================== -->
    <?php if ($menu_p['gallery'] != 0) : ?>
        <div class="container">
            <div class="row">
                <h1 class="text-center">Gallery</h1>

                <?php foreach ($gallery as $gallery) : ?>
                    <div class="col-md-3">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo base_url() . "uploads/gallery/" . $gallery['image'] ?>" class="card-img-top" alt="...">
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>

        </div>
    <?php endif; ?>

    <!--====================Gallery Section end==================================================== -->




    <!--====================contact section start==================================================== -->
    <?php

    $contact1 = explode(",", $contact['contact_number']);
    $email1 = explode(",", $contact['email']);

    ?>
    <?php if ($menu_p['contact'] != 0 && !empty($company)) : ?>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Our Address</h3>
                    <h3><?php echo $company['company_name']; ?></h3>
                    <p><?php echo $company['company_address']; ?></p>


                    <?php foreach ($contact1 as  $contact1) : ?>
                        <p class="mb-2"> <i class="fa fa-phone"></i>&nbsp;<?php echo $contact1; ?></p>
                    <?php endforeach; ?>

                    <?php foreach ($email1 as  $email1) : ?>
                        <p class="mb-2"> <i class="fa fa-envelope"></i>&nbsp;<?php echo $email1; ?></p>
                    <?php endforeach; ?>


                </div>
                <div class="col-md-6">
                    <h3> Contact Us</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis, culpa?</p>
                    <form class="contact_form" method="post">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="write name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Mobile</label>
                            <input type="text" name="mobile" class="form-control" placeholder="mobile number">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Address</label><br>
                            <textarea name="address" class="form-control" id="" cols="70" rows="5"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Subject</label>
                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Message</label><br>
                            <textarea name="message" class="form-control" id="" cols="70" rows="5"></textarea>
                        </div>
                        <div class="mb-3">

                            <input type="submit" name="submit" class="form-control btn btn-danger">
                        </div>


                    </form>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!--====================contact section end==================================================== -->


    <!--====================career  section start==================================================== -->
    <?php

    $contact1 = explode(",", $contact['contact_number']);
    $email1 = explode(",", $contact['email']);

    ?>
    <?php if ($menu_p['career'] != 0 && !empty($company)) : ?>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Our Address</h3>
                    <h3><?php echo $company['company_name']; ?></h3>
                    <p><?php echo $company['company_address']; ?></p>


                    <?php foreach ($contact1 as  $contact1) : ?>
                        <p class="mb-2"> <i class="fa fa-phone"></i>&nbsp;<?php echo $contact1; ?></p>
                    <?php endforeach; ?>

                    <?php foreach ($email1 as  $email1) : ?>
                        <p class="mb-2"> <i class="fa fa-envelope"></i>&nbsp;<?php echo $email1; ?></p>
                    <?php endforeach; ?>


                </div>
                <div class="col-md-6">
                    <h3> Career</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis, culpa?</p>
                    <form class="contact_form" method="post">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="write name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Mobile</label>
                            <input type="text" name="mobile" class="form-control" placeholder="mobile number">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="email">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Hiegest Education</label>
                            <select name="education" class="form-control" required>
                                <option value="Select One">Select One</option>
                                <option value="Matric">Matric</option>
                                <option value="Intermediate">Intermediate</option>
                                <option value="Graduate">Graduate</option>
                                <option value="Post Graduate">Post Graduate</option>
                                <option value="B.Tech">B.Tech</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Passing Years</label>
                            <input type="text" name="Passing_year" class="form-control" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Experianced</label>
                            <select name="experienced" class="form-control" required>
                                <option value="Select One">Select One</option>
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>

                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Experianced Year</label>
                            <input type="text" name="experience_no_of_year" class="form-control" placeholder=" no of years">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Job Profile</label>
                            <select name="jop_profile" class="form-control" required>
                                <option value="Matric">Select One</option>
                                <option value="Devloper">Devloper</option>
                                <option value="Marketing Executive">Marketing Executive</option>
                                <option value="Seo Executive">Seo Executive</option>
                                <option value="Technical Support">Technical Support</option>
                                <option value="Hr">Hr</option>
                            </select>
                        </div>
                        <div class="mb-3">

                            <input type="submit" name="submit" class="form-control btn btn-danger">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!--====================career section end==================================================== -->


    <!--====================summernote section start==================================================== -->
    <?php if ($menu_p['sumernote'] != 0 && !empty($summernote)) : ?>
        <div class="container">
            <div class="text-justify"><?php echo $summernote['content']; ?></div>
        </div>
    <?php endif; ?>
    <!--====================summernote section end==================================================== -->

    <!--====================summernote1 section start==================================================== -->
    <?php if ($menu_p['sumernote1'] != 0 && !empty($summernote1)) : ?>
        <div class="container">
            <div class="text-justify"><?php echo $summernote1['content']; ?></div>
        </div>
    <?php endif; ?>
    <!--====================summernote1 section end==================================================== -->

    <!--====================summernote2 section start==================================================== -->
    <?php if ($menu_p['sumernote2'] != 0 && !empty($summernote2)) : ?>
        <div class="container">
            <div class="text-justify"><?php echo $summernote2['content']; ?></div>
        </div>
    <?php endif; ?>
    <!--====================summernote2 section end==================================================== -->


    <!--====================map section start==================================================== -->
    <?php if ($menu_p['map'] != 0 && !empty($company)) : ?>
        <div class="container">
            <iframe src="https://www.google.com/maps?q=<?php echo $company['company_address']; ?>&amp;output=embed" width="100%" height="200px;"></iframe>
        </div>
    <?php endif; ?>

    <!--====================map section end==================================================== -->










    <?php include_once("include/footer.php") ?>
    <?php include_once("include/js.php") ?>
    <script>
        <?php echo $links['livechat']; ?>
    </script>

    <script src="<?php echo base_url() . 'media/js/website/index.js' ?>"> </script>

</body>

</html>
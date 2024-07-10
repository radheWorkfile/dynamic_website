<footer class="bd-footer py-5 mt-5 bg-light">
  <div class="container py-5">
    <div class="row">

      <div class="col-lg-3 mb-3">
        <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none" href="/" aria-label="Bootstrap">
          <img src="<?php echo base_url() . "uploads/logo/" . $logo['logo']; ?>">
        </a>

        <ul class="list-unstyled small text-muted">
          <li class="mb-2"><?php echo $company['about_company']; ?></li>
          <?php if (!empty($company['facebook'])) : ?>
            <span class="mb-2"> <a href="<?php echo $company['facebook']; ?>" target="_blank"><i class="fa fa-facebook-f"></i></a></span>
          <?php endif; ?>

          <?php if (!empty($company['instagram'])) : ?>
            <span class="mb-2"> <a href="<?php echo $company['instagram']; ?>" target="_blank"><i class="fa fa-instagram"></i></a></span>
          <?php endif; ?>

          <?php if (!empty($company['tweeter'])) : ?>
            <span class="mb-2"> <a href="<?php echo $company['tweeter']; ?>" target="_blank"><i class="fa fa-twitter"></i></a></span>
          <?php endif; ?>

          <?php if (!empty($company['linkedln'])) : ?>
            <span class="mb-2"> <a href="<?php echo $company['linkedln']; ?>" target="_blank"><i class="fa fa-linkedin"></i></a></span>
          <?php endif; ?>

          <?php if (!empty($company['youtube'])) : ?>
            <span class="mb-2"> <a href="<?php echo $company['youtube']; ?>" target="_blank"><i class="fa fa-youtube"></i></a></span>
          <?php endif; ?>

          <?php if (!empty($company['whatsapp'])) : ?>
            <span class="mb-2"> <a href="https://wa.me/<?php echo $company['whatsapp']; ?>" target="_blank"><i class="fa fa-whatsapp"></i></a></span>
          <?php endif; ?>


        </ul>
      </div>


      <div class="col-6 col-lg-2 offset-lg-1 mb-3">
        <h5>Quick Links</h5>
        <ul class="list-unstyled">
          <?php foreach ($menu as $m) : if ($m['child'] == 0) : ?>
              <li class="mb-2"><a href="<?php echo base_url() . "Website/page/{$m['id']}" ?>"><?php echo $m['menu']; ?></a></li>
          <?php endif;
          endforeach; ?>
        </ul>
      </div>



      <div class="col-6 col-lg-2 mb-3">
        <h5>Projects</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="https://github.com/twbs/bootstrap">Bootstrap 5</a></li>
          <li class="mb-2"><a href="https://github.com/twbs/bootstrap/tree/v4-dev">Bootstrap 4</a></li>
          <li class="mb-2"><a href="https://github.com/twbs/icons">Icons</a></li>
          <li class="mb-2"><a href="https://github.com/twbs/rfs">RFS</a></li>
          <li class="mb-2"><a href="https://github.com/twbs/bootstrap-npm-starter">npm starter</a></li>
        </ul>
      </div>

      <div class="col-lg-3 mb-3">

        <?php
        $contact1 = explode(",", $contact['contact_number']);
        $email1 = explode(",", $contact['email']);
        ?>
        <ul class="list-unstyled small text-muted">
          <li class="mb-2">
            <h2><?php echo $company['company_name']; ?></h2>
          </li>

          <li class="mb-2"><?php echo $company['company_address']; ?></li>
          <?php foreach ($contact1 as  $contact1) : ?>
            <li class="mb-2"> <i class="fa fa-phone"></i>&nbsp;<?php echo $contact1; ?></li>
          <?php endforeach; ?>
          <?php foreach ($email1 as  $email1) : ?>
            <li class="mb-2"> <i class="fa fa-envelope"></i>&nbsp;<?php echo $email1; ?></li>
          <?php endforeach; ?>
        </ul>
      </div>

    </div>
  </div>
</footer>



<div class="row">
    <div class="col-md-12">
    <h3 class="text-center">
        <?php  echo (!empty($seo['id']))?"Edit Seo":" Add Seo ";?>
    </h3>  
    </div>
    <div class="col-md-6">
        <div class="form-group">
          
            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $seo['id'] ?>">
            <input type="hidden" class="form-control" id="id" name="child_submenu_id" value="<?php echo $seo['child_submenu_id'] ?>">
            <input type="hidden" class="form-control" id="id" name="submenu_id" value="<?php echo $seo['submenu_id'] ?>">


        </div>
  </div>
 
    
    <div class="col-md-12">
        <div class="form-group">
            <label for="Content">Page Title</label> <br>
            <textarea name="title"  cols="80%" rows="3" maxlength="<?php echo $seo_p['page_title_limit'];?>" class="form-control" placeholder="Enter Page title"><?php echo $seo['page_title'] ?></textarea>
            <span class="text-danger" style="font-size: 10px;"> Maximum <?php echo $seo_p['page_title_limit'];?> characters only.</span>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="Content">Description</label> <br>
            <textarea name="description"  cols="80%" rows="3" maxlength="<?php echo $seo_p['description_limit'];?>" class="form-control" placeholder="Enter page Description"><?php echo $seo['meta_description'] ?></textarea>
            <span class="text-danger" style="font-size: 10px;"> Maximum <?php echo $seo_p['description_limit'];?> characters only.</span>

        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="Content">Keywords</label> <br>
            <textarea name="keywords"  cols="80%" rows="3" maxlength="<?php echo $seo_p['keyword_limit'];?>" class="form-control" placeholder="Enter page Keywords"><?php echo $seo['meta_keywords'] ?></textarea>
            <span class="text-danger" style="font-size: 10px;"> Maximum <?php echo $seo_p['keyword_limit'];?> characters only.</span>

        </div>
    </div>

</div>
<div class="modal fade" id="add_hero_data">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Hero section Data </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
               
                <form id="add_form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                    <div class="modal-body text-md" style="z-index: 56385852 !important;">
                        <div class="row">

                            <?php  $menu_id = $this->uri->segment(4); ?>
                            <input type="hidden" name="menu_id" value="<?php echo $menu_id; ?>">


                            <div class="col-md-6 col-sm-6">
                                <label>Hero Image <span class="text-danger"></span></label>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" name="image">
                                </div>
                                <span class="text-danger" style="font-size: 10px;">Image Size: <?php echo $hero_section['image_size']."&nbsp;KB";?> Image MAX width:<?php echo $hero_section['image_width']."&nbsp;px";?> Image MAX Height:<?php echo $hero_section['image_height']."&nbsp;px";?></span>
                            </div>
                            <div class="col-md-6 col-sm-6">
                               <div id="image_preview"></div>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <label>Hero Text Header <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                   <input type="text" name="header" class="form-control" maxlength="50">
                                </div>
                                <span class="text-danger" style="font-size: 10px;">maximum <?php echo  "50";?> charechter only</span>
                            </div>

                           
                            <div class="col-md-12 col-sm-12">
                                <label>Hero Text <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <textarea name="text" class="summernote form-control" maxlength="<?php echo $hero_section['content'];?>" id="" cols="90%" rows="5"></textarea><br>
                                </div>
                                <span class="text-danger" style="font-size: 10px;">maximum <?php echo $hero_section['content'];?> charechter only</span>
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

  
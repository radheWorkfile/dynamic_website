<div class="modal fade" id="add_gallery">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Gallery Image </h4>
                 
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="add_gallery_image" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                    <div class="modal-body text-md" style="z-index: 56385852 !important;">
                        <div class="row">

                            <?php   $menu_id = $this->uri->segment(4); ?>
                            <input type="hidden" name="menu_id" value="<?php echo $menu_id; ?>">
                            <div class="col-md-12 col-sm-12">
                                <label>Gallery Image <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <input type="file" name="image" class="form-control" required>
                                </div>
                                <span class="text-danger" style="font-size: 10px;">maximum <?php  echo "width ". $gallery_p['image_width']."px&nbsp;Height ".$gallery_p['image_height']."px&nbsp;Size ".$gallery_p['image_size']."KB";?> </span>
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
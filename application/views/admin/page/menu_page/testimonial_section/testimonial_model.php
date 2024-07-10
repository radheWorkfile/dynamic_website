<div class="modal fade" id="add_testimonial">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Testimonial </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="add_testimonials" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                    <div class="modal-body text-md" style="z-index: 56385852 !important;">
                        <div class="row">

                            <?php   $menu_id = $this->uri->segment(4); ?>
                            <input type="hidden" name="menu_id" value="<?php echo $menu_id; ?>">
                            <div class="col-md-12 col-sm-12">
                                <label> Image <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <span class="text-danger" style="font-size: 10px;">maximum <?php  echo "width ". $testimonial_p['icon_width']."px&nbsp;Height ".$testimonial_p['icon_height']."px&nbsp;Size ".$testimonial_p['icon_size']."KB";?> </span>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <label> Content <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <textarea name="content" maxlength="<?php echo $testimonial_p['content'];?>" class="form-control" cols="90%" rows="5"></textarea><br>
                                </div>
                                <span class="text-danger" style="font-size: 10px;">maximum <?php echo $testimonial_p['content'];?> charechter only</span>
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
<div class="modal fade" id="add_service">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Service </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="add_servicess" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                    <div class="modal-body text-md" style="z-index: 56385852 !important;">
                        <div class="row">

                            <?php   $menu_id = $this->uri->segment(4); ?>
                            <input type="hidden" name="menu_id" value="<?php echo $menu_id; ?>">
                            <div class="col-md-12 col-sm-12">
                                <label>Service Image <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <span class="text-danger" style="font-size: 10px;">maximum <?php  echo "width ". $service_p['icon_width']."px&nbsp;Height ".$service_p['icon_height']."px&nbsp;Size ".$service_p['icon_size']."KB";?> </span>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <label>Service Header <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <input type="text" name="heading" class="form-control" required>
                                </div>
                                <span class="text-danger" style="font-size: 10px;">maximum <?php echo $service_p['content'];?> charechter only</span>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <label>Service Content <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <textarea name="content" maxlength="<?php echo $service_p['content'];?>" class="form-control summernote" cols="90%" rows="5"></textarea><br>
                                </div>
                                <span class="text-danger" style="font-size: 10px;">maximum <?php echo $service_p['content'];?> charechter only</span>
                            </div>

                            <div class="col-md-12 col-sm-12 bg-gray">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Button Url <span class="text-danger"></span></label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="button_url" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Button Text <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="button_text" value="Read More" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Button Color <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="button_color" value="red" required>
                                        </div>
                                    </div>
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


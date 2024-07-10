<div class="modal fade" id="add_news">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add News </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="add_newss" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                    <div class="modal-body text-md" style="z-index: 56385852 !important;">
                        <div class="row">

                            <?php  $menu_id = $this->uri->segment(4); ?>
                            <input type="hidden" name="menu_id" value="<?php echo $menu_id; ?>">
                           
                            <div class="col-md-12 col-sm-12">
                                <label>News Text <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <textarea name="news" class="summernote form-control" maxlength="<?php echo $news_p['news_size'];?>" id="" cols="90%" rows="5"></textarea><br>
                                </div>
                                <span class="text-danger" style="font-size: 10px;">maximum <?php echo $news_p['news_size'];?> charechter only</span>
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

  
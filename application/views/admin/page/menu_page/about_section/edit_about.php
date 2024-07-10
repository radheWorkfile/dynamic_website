<div class="row">
    <div class="col-md-12">
        <h2 class="text-center">
            <?php echo (!empty($about['id'])) ? "Edit About Section" : " Add About Section"; ?>
        </h2>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="Name">Image</label>
            <input type="file" class="form-control" id="name" name="image">
            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $about['id'] ?>">

            <input type="hidden" class="form-control" id="id" name="menu_id" value="<?php echo $about['menu_id'] ?>">
        </div>
    </div>
    <div class="col-md-6 text-center">
        <?php if (!empty($about['about_image'])) : ?>
            <h5>Old Image</h5>
            <img src="<?php echo base_url() . 'uploads/image/' . $about['about_image']; ?>" alt="image" style="height:100px;">
        <?php endif; ?>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="email">About Header</label>
            <input type="text" class="form-control" id="mail" name="header" placeholder="Enter header" value="<?php echo $about['about_header'] ?>">
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="Content">Content</label> <br>

            <textarea name="header_text" class="form-control summernote" id="summernote" cols="100%" rows="10" placeholder="Enter Content"><?php echo $about['about_text'] ?></textarea>


        </div>
    </div>

    <div class="col-md-12 col-sm-12 bg-gray">
        <div class="row">
            <div class="col-md-4">
                <label>Button Url <span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="button_url" value="<?php echo (!empty($about['button_url']))?$about['button_url']:"0";?>">
                </div>
            </div>
            <div class="col-md-4">
                <label>Button Text <span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="button_text" value="<?php echo (!empty($about['button_url']))?$about['button_text']:"Read More";?>" required>
                </div>
            </div>
            <div class="col-md-4">
                <label>Button Color <span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="button_color" value="<?php echo (!empty($about['button_url']))?$about['button_color']:"red";?>" required>
                </div>
            </div>
        </div>
    </div>



</div>

<script>
      $(document).ready(function() {
          $('.summernote').summernote({
              width: 1100, //don't use px
          });
      });
  </script>


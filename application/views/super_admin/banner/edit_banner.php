

<div class="row">

    <div class="col-md-8">
        <div class="form-group">
            <label for="Name"> Banner  limit<span class="text-danger">*</span></label>
            <input type="number" class="form-control" id="name" name="banner_limit" placeholder="Enter Name" value="<?php echo $banner['banner_limit'] ?>" required>
            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $banner['id'] ?>">
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="Name">Size <span class="text-danger"> in KB</span><span class="text-danger">*</span></label>
            <input type="number" class="form-control" id="name" name="size" placeholder="Enter Name" value="<?php echo $banner['size'] ?>" required>
            
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="Name">Width <span class="text-danger"> in pixels</span><span class="text-danger">*</span></label>
            <input type="number" class="form-control" id="name" name="width" placeholder="Enter Name" value="<?php echo $banner['width'] ?>" required>
            
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="Name">Height <span class="text-danger"> in pixels</span><span class="text-danger">*</span></label>
            <input type="number" class="form-control" id="name" name="height" placeholder="Enter Name" value="<?php echo $banner['height'] ?>" required>
            
        </div>
    </div>


    
</div>
   
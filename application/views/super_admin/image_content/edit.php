

<div class="row">
    <div class="col-md-12">
        <h3 class="text-center text-danger"><?php echo $section['section_name'] ?></h3>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="Name"> Max limit<span class="text-danger">*</span></label>
            <input type="number" class="form-control" id="name" name="max_limit" placeholder="Enter Name" value="<?php echo $section['max_limit'] ?>" required>
            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $section['id'] ?>">
            <span class="text-danger " style="font-size: 10px;"> maximum </span>

        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="Name">Image Size <span class="text-danger"> in KB</span><span class="text-danger">*</span></label>
            <input type="number" class="form-control" id="name" name="size" placeholder="Enter Name" value="<?php echo $section['image_size'] ?>" required>
            <span class="text-danger " style="font-size: 10px;"> icon size in KB</span>

            
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="Name">Image Width <span class="text-danger"> in pixels</span><span class="text-danger">*</span></label>
            <input type="number" class="form-control" id="name" name="width" placeholder="Enter Name" value="<?php echo $section['image_width'] ?>" required>
            <span class="text-danger " style="font-size: 10px;"> icon width in pixel</span>

            
            
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="Name">Image Height <span class="text-danger"> in pixels</span><span class="text-danger">*</span></label>
            <input type="number" class="form-control" id="name" name="height" placeholder="Enter Name" value="<?php echo $section['image_height'] ?>" required>
            <span class="text-danger " style="font-size: 10px;"> icon Height in pixel</span>

            
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="Name">Service content<span class="text-danger">*</span> </label>
            <input type="number" class="form-control" id="name" name="content" placeholder="Enter Name" value="<?php echo $section['content'] ?>" required>
            <span class="text-danger " style="font-size: 10px;"> maximum in charcters</span>
            
        </div>
    </div>


    
</div>
   
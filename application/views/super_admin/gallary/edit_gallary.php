

<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label for="Name"> Gallary Limit<span class="text-danger">*</span></label>
            <input type="number" class="form-control" id="name" name="limit" placeholder="Enter Name" value="<?php echo $gallary['gallary_limit'] ?>" required>
            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $gallary['id'] ?>">
            <span class="text-danger " style="font-size: 10px;"> maximum </span>

        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="Name">Image Size<span class="text-danger">*</span> </label>
            <input type="number" class="form-control" id="name" name="size" placeholder="Enter Name" value="<?php echo $gallary['image_size'] ?>" required>
            <span class="text-danger " style="font-size: 10px;">Image size in KB</span>

            
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="Name">Image Width <span class="text-danger">*</span></label>
            <input type="number" class="form-control" id="name" name="width" placeholder="Enter Name" value="<?php echo $gallary['image_width'] ?>" required>
            <span class="text-danger " style="font-size: 10px;">Image width in pixel</span>

            
            
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="Name">Image Height<span class="text-danger">*</span> </label>
            <input type="number" class="form-control" id="name" name="height" placeholder="Enter Name" value="<?php echo $gallary['image_height'] ?>" required>
            <span class="text-danger " style="font-size: 10px;">Image Height in pixel</span>

            
        </div>
    </div>

   


    
</div>
   
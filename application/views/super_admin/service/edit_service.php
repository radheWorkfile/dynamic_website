

<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label for="Name"> service_card limit<span class="text-danger">*</span></label>
            <input type="number" class="form-control" id="name" name="Service_limit" placeholder="Enter Name" value="<?php echo $service['service_limit'] ?>" required>
            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $service['id'] ?>">
            <span class="text-danger " style="font-size: 10px;"> maximum </span>

        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="Name">Icon Size <span class="text-danger"> in KB</span><span class="text-danger">*</span></label>
            <input type="number" class="form-control" id="name" name="size" placeholder="Enter Name" value="<?php echo $service['icon_size'] ?>" required>
            <span class="text-danger " style="font-size: 10px;"> icon size in KB</span>

            
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="Name">Icon Width <span class="text-danger"> in pixels</span><span class="text-danger">*</span></label>
            <input type="number" class="form-control" id="name" name="width" placeholder="Enter Name" value="<?php echo $service['icon_width'] ?>" required>
            <span class="text-danger " style="font-size: 10px;"> icon width in pixel</span>

            
            
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="Name">Icon Height <span class="text-danger"> in pixels</span><span class="text-danger">*</span></label>
            <input type="number" class="form-control" id="name" name="height" placeholder="Enter Name" value="<?php echo $service['icon_height'] ?>" required>
            <span class="text-danger " style="font-size: 10px;"> icon Height in pixel</span>

            
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="Name">Service content<span class="text-danger">*</span> </label>
            <input type="number" class="form-control" id="name" name="content" placeholder="Enter Name" value="<?php echo $service['content'] ?>" required>
            <span class="text-danger " style="font-size: 10px;"> maximum in charcters</span>
            
        </div>
    </div>


    
</div>
   
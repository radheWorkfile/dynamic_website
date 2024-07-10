

<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label for="Name"> News Limit<span class="text-danger">*</span></label>
            <input type="number" class="form-control" id="name" name="limit" placeholder="Enter Name" value="<?php echo $news['news_limit'] ?>" required>
            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $news['id'] ?>">
            <span class="text-danger " style="font-size: 10px;"> maximum </span>

        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="Name">News Size<span class="text-danger">*</span> </label>
            <input type="number" class="form-control" id="name" name="size" placeholder="Enter Name" value="<?php echo $news['news_size'] ?>" required>
            <span class="text-danger " style="font-size: 10px;"> News size in character</span>

            
        </div>
    </div>

    

   


    
</div>
   
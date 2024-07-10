<div class="row">

    
    <input type="hidden" name="menu_id" value="<?php echo set_value('menu_id',$hero['menu_id']) ?>">
    <input type="hidden" name="id" value="<?php echo set_value('id',$hero['id']) ?>">

    <div class="col-md-6 col-sm-6">
        <label>Hero Image <span class="text-danger"></span></label>
        <div class="input-group mb-3">
            <input type="file" class="form-control" name="image">
        </div>
        <span class="text-danger" style="font-size: 10px;">Image Size: <?php echo $hero_p['image_size']."&nbsp;KB";?> Image MAX width:<?php echo $hero_p['image_width']."&nbsp;px";?> Image MAX Height:<?php echo $hero_p['image_height']."&nbsp;px";?></span>
    </div>
    <div class="col-md-6 col-sm-6">
        <h4 class="text-danger">Old Image</h4>
       <img src="<?php echo base_url().$hero['image'];?>" alt="" style="max-width: 50%;" >
    </div>
    
    <div class="col-md-12 col-sm-12">
        <label>Hero Text Header <span class="text-danger">*</span></label>
        <div class="input-group mb-3">
           <input type="text" name="header" class="form-control" maxlength="50"  value="<?php echo set_value('header',$hero['header']) ?>">
        </div>
        <span class="text-danger" style="font-size: 10px;">maximum <?php echo  "50";?> charechter only</span>
    </div>
    
    
    <div class="col-md-12 col-sm-12">
        <label>Hero Text <span class="text-danger">*</span></label>
        <div class="input-group mb-3">
            <textarea name="text" class="summe form-control" maxlength="<?php echo $hero_p['content'];?>" id="" cols="90%" rows="5"><?php echo $hero['text']?></textarea><br>
        </div>
        <span class="text-danger" style="font-size: 10px;">maximum <?php echo $hero_p['content'];?> charechter only</span>
    </div>
</div>



<script>
        $(document).ready(function() {
            $('.summe').summernote({
                width: 5000, //don't use px
            });
        });
    </script>





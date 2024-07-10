<div class="row">
    <div class="col-md-12">
    <h3 class="text-center">
        <?php echo (!empty($summernote['id']))?"Edit Summernote Section":" Add Summernote Section";?>
    </h3>  
    </div>
    
    <div class="col-md-6">
        <div class="form-group">
          
            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $summernote['id'] ?>">

            <input type="hidden" class="form-control" id="id" name="menu_id" value="<?php echo $summernote['menu_id'] ?>">
        </div>
  </div>
 
    
    <div class="col-md-12">
        <div class="form-group">
            <label for="Content">Content</label> <br>
            
            <textarea name="content" class="summernot form-control" cols="100%" rows="10" placeholder="Enter Content"><?php echo $summernote['content'] ?></textarea>
            
          
        </div>
    </div>
</div>

<script>
      $(document).ready(function() {
          $('.summernot').summernote({
              width: 1100, //don't use px
          });
      });
  </script>


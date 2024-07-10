<div class="row">
    <div class="col-md-12">
    <h3 class="text-center">
        <?php echo (!empty($summernote2['id']))?"Edit Summernote-2 Section":" Add Summernote-2 Section";?>
    </h3>  
    </div>
    
    <div class="col-md-6">
        <div class="form-group">
          
            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $summernote2['id'] ?>">

            <input type="hidden" class="form-control" id="id" name="menu_id" value="<?php echo $summernote2['menu_id'] ?>">
        </div>
  </div>
 
    
    <div class="col-md-12">
        <div class="form-group">
            <label for="Content">Content</label> <br>
            
            <textarea name="content" class="summernot form-control" cols="100%" rows="10" placeholder="Enter Content"><?php echo $summernote2['content'] ?></textarea>
            
          
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


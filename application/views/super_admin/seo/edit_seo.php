<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label for="Name"> Page Title Limit<span class="text-danger">*</span></label>
            <input type="number" class="form-control" id="name" name="page_title_limit" placeholder="Enter limit" value="<?php echo $seo['page_title_limit'] ?>" required>
            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $seo['id'] ?>">
            <span class="text-danger " style="font-size: 10px;"> maximum </span>

        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="Name">Description Limit<span class="text-danger">*</span></label>
            <input type="number" class="form-control" id="name" name="description_limit" placeholder="Enter limit" value="<?php echo $seo['description_limit'] ?>" required>
            <span class="text-danger " style="font-size: 10px;"> maximum </span>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="Name">Keywords Limit<span class="text-danger">*</span></label>
            <input type="number" class="form-control" id="name" name="keyword_limit" placeholder="Enter limit" value="<?php echo $seo['keyword_limit'] ?>" required>
            <span class="text-danger " style="font-size: 10px;"> maximum </span>
        </div>
    </div>

</div>
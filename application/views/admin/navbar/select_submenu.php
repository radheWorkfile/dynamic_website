<select name="submenu_id" class="form-control" id="submenu" required>
    <?php if(empty($submenu)):?>
    <option value="">select one</option>
    <?php else:?>
    <?php foreach ($submenu as $sm) : ?>
        <option value="<?php echo $sm['id']; ?>"><?php echo $sm['sub_menu']; ?></option>
    <?php endforeach; ?>
    <?php endif;?>
</select>
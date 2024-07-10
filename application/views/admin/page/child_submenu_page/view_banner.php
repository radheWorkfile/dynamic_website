<?php  if($banner_p['banner_limit']>count($total_banner)):?>
<a href="javascript:void(0);" data-toggle="modal" data-target="#add_modal" title='Click Menu User' class="btn btn-outline-primary float-right"> <i class="fas fa-plus"></i> Add banner</a><br><br>
<?php else:?>
<p class="text-danger">You reached maximum banner limit</p>
<?php endif;?>

<?php if (!empty($banner)) :?>
    <table class="table" id="example">

        <thead>
            <tr>
                <th>s.no</th>
                <th>image</th>
                <th>text</th>
                <th>status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($banner as $ba=>$ban):?>
            <tr>
                <td><?php echo ++$ba;?></td>
                <td style=" width:20%"><img src="<?php echo base_url()."uploads/banner/".$ban['banner'];?>" alt="banner_image" style="width:100%;" ></td>
                <td ><?php echo $ban['banner_text'];?></td>
                <td><?php echo $ban['status'];?></td>               
                <td>
                    <a href="javascript:void(0);" class="text-danger" onclick="delete_banner('<?php echo $ban['id'];?>')"> <i class="fa fa-trash"></i> </a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
<?php else : ?>
    <p>Banner not found</p>
<?php endif; ?>
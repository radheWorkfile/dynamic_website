<?php if($gallery_p['gallary_limit']>count($gallery)):?>
<a href="javascript:void(0);" data-toggle="modal" data-target="#add_gallery" title='Click Menu User' class="btn btn-outline-primary float-right"> <i class="fas fa-plus"></i> Add Image</a><br><br>
<?php else:?>
<p class="text-danger">You reached maximum Gallery limit</p>
<?php endif;?>

<?php if (!empty($gallery)) :?>
    <table class="table">

        <thead>
            <tr>
                <th>S.no</th>
                <th>Image</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($gallery as $ba=>$ser):?>
            <tr>
                <td><?php echo ++$ba;?></td>
               
                <td><img src="<?php echo base_url() . "uploads/gallery/". $ser['image'];?>" alt="" style="max-width: 200px;"></td>
                

                <td><?php echo( $ser['status']==1)?"Active":"Deactive";?></td>               
                <td>
                    <a href="javascript:void(0);" class="text-danger" title="Delete gallery Image" onclick="delete_gallery('<?php echo $ser['id'];?>')"> <i class="fa fa-trash"></i> </a>&emsp;
                   
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
<?php else : ?>
    <p>Image not found</p>
<?php endif; ?> 


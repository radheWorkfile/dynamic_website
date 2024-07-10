<?php if($testimonial_p['testimonial_limit']>count($testimonial)):?>
<a href="javascript:void(0);" data-toggle="modal" data-target="#add_testimonial" title='Click Menu User' class="btn btn-outline-primary float-right"> <i class="fas fa-plus"></i> Add service</a><br><br>
<?php else:?>
<p class="text-danger">You reached maximum news limit</p>
<?php endif;?>

<?php if (!empty($testimonial)) :?>
    <table class="table">

        <thead>
            <tr>
                <th>s.no</th>
                <th>Image</th>
                <th>Text</th>
                <th>status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($testimonial as $ba=>$ser):?>
            <tr>
                <td><?php echo ++$ba;?></td>
               
                <td><img src="<?php echo base_url() . "uploads/image/". $ser['image'];?>" alt="" style="max-width: 100px;"></td>
                <td><?php echo $ser['content'];?></td>

                <td><?php echo $ser['status'];?></td>               
                <td>
                    <a href="javascript:void(0);" class="text-danger" title="Delete testimonial" onclick="delete_testimonial('<?php echo $ser['id'];?>')"> <i class="fa fa-trash"></i> </a>&emsp;
                   
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
<?php else : ?>
    <p>Testimonial not found</p>
<?php endif; ?> 


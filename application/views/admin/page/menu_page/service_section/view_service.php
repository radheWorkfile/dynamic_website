<?php if($service_p['service_limit']>count($service)):?>
<a href="javascript:void(0);" data-toggle="modal" data-target="#add_service" title='Click Menu User' class="btn btn-outline-primary float-right"> <i class="fas fa-plus"></i> Add service</a><br><br>
<?php else:?>
<p class="text-danger">You reached maximum news limit</p>
<?php endif;?>

<?php if (!empty($service)) :?>
    <table class="table">

        <thead>
            <tr>
                <th>S.no</th>
                <th>Image</th>
                <th>Text</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($service as $ba=>$ser):?>
            <tr>
                <td><?php echo ++$ba;?></td>
               
                <td><img src="<?php echo base_url() . "uploads/image/". $ser['image'];?>" alt="" style="max-width: 200px;"></td>
                <td><?php echo $ser['content'];?></td>

                <td><?php echo "Active";?></td>               
                <td>
                    <a href="javascript:void(0);" class="text-danger" title="Delete News" onclick="delete_service('<?php echo $ser['id'];?>')"> <i class="fa fa-trash"></i> </a>&emsp;
                   
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
<?php else : ?>
    <p>Service not found</p>
<?php endif; ?> 


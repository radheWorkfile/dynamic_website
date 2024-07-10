 <?php  if($hero_p['max_limit']>count($hero)):?>
<a href="javascript:void(0);" data-toggle="modal" data-target="#add_hero_data" title='Click to add Hero data' class="btn btn-outline-primary float-right"> <i class="fas fa-plus"></i> Add </a><br><br>
<?php else:?>
<p class="text-danger">You reached maximum Hero Section limit</p>
<?php endif;?>

<?php if (!empty($hero)) :?>
    <table class="table">

        <thead>
            <tr>
                <th>S.no</th>
                <th>Header</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($hero as $ba=>$hero):?>
            <tr>
                <td><?php echo ++$ba;?></td>
               
                <td><?php echo $hero['header'];?></td>
                <td><?php echo ($hero['status']==1)?"Active":"Deactive";?></td>               
                <td>
                    <a href="javascript:void(0);" class="text-danger" title="Delete" onclick="delete_hero('<?php echo $hero['id'];?>')"> <i class="fa fa-trash"></i> </a>&emsp;
                    <a href="javascript:void(0);" class="text-primary"  data-toggle="modal" data-target="#edit_hero_data" title="Edit" onclick="edit_hero('<?php echo $hero['id'];?>')"> <i class="fa fa-edit"></i> </a>&emsp;
                    <?php if($hero['status']==0):?>
                        <a href="javascript:void(0);" class="text-danger" title="Click here to Activate" onclick="activate_element(<?php echo $hero['id'];?>)"> <i class="fa fa-times"></i> </a>&emsp;
                    <?php else:?>
                        <a href="javascript:void(0);" class="text-success" title="Click here to Dectivate" onclick="deactivate_element(<?php echo $hero['id'];?>)"> <i class="fa fa-check"></i> </a>&emsp;
                        <?php endif;?>


                    
                    
                   
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
<?php else : ?>
    <p class="text-danger">Data not found</p>
<?php endif; ?> 


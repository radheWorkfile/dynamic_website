 <?php  if($news_p['news_limit']>count($news)):?>
<a href="javascript:void(0);" data-toggle="modal" data-target="#add_news" title='Click Menu User' class="btn btn-outline-primary float-right"> <i class="fas fa-plus"></i> Add News</a><br><br>
<?php else:?>
<p class="text-danger">You reached maximum news limit</p>
<?php endif;?>

<?php if (!empty($news)) :?>
    <table class="table">

        <thead>
            <tr>
                <th>S.no</th>
                <th>News</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($news as $ba=>$news):?>
            <tr>
                <td><?php echo ++$ba;?></td>
               
                <td><?php echo $news['news'];?></td>
                <td><?php echo $news['status'];?></td>               
                <td>
                    <a href="javascript:void(0);" class="text-danger" title="Delete News" onclick="delete_news('<?php echo $news['id'];?>')"> <i class="fa fa-trash"></i> </a>&emsp;
                   
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
<?php else : ?>
    <p>News not found</p>
<?php endif; ?> 


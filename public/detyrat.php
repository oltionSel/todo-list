<?php
include('../partials/header.php');
$task=new Task();
$tasks=$task->getAllTasks();
?>

<div class="container" style="height: 88.3vh">
    <div class="row justify-content-center">
        <div class="col-md-10">
        
        <div class="my-3 d-flex justify-content-between align-items-center">
            <p class="display-1">Lista e Detyrave</p>

        </div>

        <form method="POST" action="">
           <div class="row">
               <div class="col-md-12 input-group">
                   
                </div>
           </div>
        </form>

            <table class="table table-striped text-center">

                <thead>
                    <tr>
                        <th>Emri i Detyres</th>
                        <th>Data e fillimit</th>
                        <th>Data e mbarimit</th>
                        <th>Statusi</th>
                        <th>Veprimet</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach($tasks as $task){ ?>

                        <tr>
                            <td><?= $task['emri_detyres'] ?></td>
                            <td><?= $task['data_fillimit'] ?></td>
                            <td><?= $task['data_mbarimit'] ?></td>
                            <td><?= $task['statusi'] ?></td>


                            <td>
                                <a href="edit.php?id=<?php echo $task['id']?>" class='btn btn-warning'>Edit</a> 
                                <a href="delete.php?id=<?php echo $task['id']?>" class='btn btn-danger'>Delete</a> 
                                <a href="change_status.php?id=<?php echo $task['id']?>" class='btn btn-success'>Ndrysho Statusin</a>   
                              
                            </td>
                           
                        </tr>

                    <?php } ?>

                </tbody>

            </table>

        </div>
    </div>
</div>

<?php
include('../partials/footer.php');
?>
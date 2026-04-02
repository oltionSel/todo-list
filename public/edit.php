<?php
include('../partials/header.php');
include('../classes/Task.php');
$id=$_GET['id'];
$task=new Task();
$tasks=$task->getTaskById($id);


?>

<div class="container-fluid bg-body-tertiary align-content-center" style="height:88.3vh">

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg p-3 rounded rounded-3">
                <p class="h1 text-primary mb-3">Shto Detyra</p>
                <form action="http://localhost/todo-list/public/update.php" method="post">
                  
                    
                    <input type="hidden" value="<?php echo $tasks['id'] ?>" name="id">
                
                    <!-- Emri i detyres -->
                    <div class="mb-3">
                        <input type="text" class="form-control" id="emri_detyres" name="emri_detyres"
                            placeholder="Shkruaj emrin e Detyres" 
                            value="<?php echo $tasks['emri_detyres']?>">
                    </div>

                    <!-- Data e fillimit  -->
                    <div class="mb-3">
                        <input type="date" class="form-control" id="data_fillimit" name="data_fillimit"
                            placeholder="Shkruaj daten e fillimit"
                            value="<?php echo $tasks['data_fillimit'] ?>">
                    </div>

                    <!-- Data e mbarimit  -->
                    <div class="mb-3">
                        <input type="date" class="form-control" id="data_mbarimit" name="data_mbarimit"
                            placeholder="Shkruaj daten e mbarimit"
                            value="<?php echo $tasks['data_mbarimit'] ?>">
                    </div>

                    <!-- Statusi  -->
                    <div class="mb-3">
                         <!-- olti mtha bane koment SELECT -->
                    </div>


                    <div class="mb-3 w-100 d-flex justify-content-center align-content-center">
                        <button class="btn btn-outline-primary w-50" type="submit">Ruaj Të Dhënat</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</div>

<?php
include('../partials/footer.php');
?>
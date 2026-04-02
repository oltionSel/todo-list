<?php
include('../partials/header.php');
require_once('../classes/Task.php');


$detyra=new Task();

$id=$_GET['id'];
$detyrat=$detyra->getTaskById($id);
$statusi=new Task();
$statuset=$statusi->getStatus();

?>

<div class="container-fluid bg-body-tertiary align-content-center" style="height:88.3vh">

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg p-3 rounded rounded-3">
                <p class="h1 text-primary mb-3">Ndrysho Statusin</p>
                
                <div class="mb-3">                        
                     <select  id="statusi" name="statusi" class="form-select">
                        <?php foreach($statuset as $statusi){ ?>
                        <option value="<?php echo $detyrat['id'] ?>"><?php echo $statusi['statusi'] ?></option>
                        <?php } ?>
                     </select>
                </div>

            </div>
        </div>
    </div>

</div>

<?php
include('../partials/footer.php');
?>
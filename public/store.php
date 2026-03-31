<?php
include('../classes/Task.php');
include('../partials/header.php');


if($_SERVER['REQUEST_METHOD']=="POST"){

    $error=[];


    // Emri i detyres
    if(isset($_POST['emri_detyres']) && !empty($_POST['emri_detyres'])) {

        $emri_detyres=htmlspecialchars(strip_tags(trim($_POST['emri_detyres'])));

        if(strlen($emri_detyres)<2) {
            $error[]="Emri i detyres duhet te perbehet nga se paku 3 karaktere!";
        }

    }
    else {
        $error[]="Ju lutemi te plotesoni fushen e emrit te detyres!";
    }





if(count($error)>0){
foreach($error as $err){
    echo"<p class='alert alert-danger p-3'>".$err."</p>";
}

}
else{
    $task=new Task();
    $task->addTask($emri_detyres,$data_fillimit,$data_mbarimit);

}
}
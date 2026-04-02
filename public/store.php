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

    // Data e fillimit 

    if(isset($_POST['data_fillimit']) && !empty($_POST['data_fillimit'])) {

        $data_fillimit = trim($_POST['data_fillimit']);
        $date = DateTime::createFromFormat('Y-m-d', $data_fillimit);
    
    }
    else {
        $error[] = "Ju lutemi te plotesoni fushen e dates se fillimit!";
    }



    // Data e mbarimit 
    if(isset($_POST['data_mbarimit']) && !empty($_POST['data_mbarimit'])) {

        $data_mbarimit = trim($_POST['data_mbarimit']);
        $date = DateTime::createFromFormat('Y-m-d', $data_mbarimit);
    
    }
    else {
        $error[] = "Ju lutemi te plotesoni fushen e dates se mbarimit!";
    }



    // Emri i detyres
    if(isset($_POST['statusi']) && !empty($_POST['statusi'])) {

        $statusi=htmlspecialchars(strip_tags(trim($_POST['statusi'])));

        if(strlen($statusi)<2) {
            $error[]="Statusi per detyren duhet te perbehet nga se paku 3 karaktere!";
        }

    }
    else {
        $error[]="Ju lutemi te plotesoni fushen e statusit per detyren!";
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
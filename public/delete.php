<?php

include('../classes/Task.php');

$detyra=new Task();

$id=$_GET['id'];

$detyra->deleteTask($id);
<?php

require('../config/Database.php');


class Task extends Database {

    public function addTask($emri_detyres,$data_fillimit,$data_mbarimit) {
        $sql="INSERT INTO detyrat (emri_detyres,data_fillimit,data_mbarimit) VALUES ('$emri_detyres','$data_fillimit','$data_mbarimit',)";

        $this->conn->query($sql);


        echo "<script> 
                alert('Detyra u ruajt me sukses!');
                window.location.href='../public/add.php' 
            </script>";
    }

    public function updateTask($id,$emri_detyres,$data_fillimit,$data_mbarimit) {
        $sql="UPDATE detyrat SET id='$id', emri_detyres='$emri_detyres', data_fillimit='$data_fillimit', data_mbarimit='$data_mbarimit' WHERE id='$id' limit 1";

        $this->conn->query($sql);

        echo "<script> 
                alert('Detyra u perditesua me sukses!');
                window.location.href='../public/add.php' 
            </script>";
    }

    public function deleteTask($id) {
        $sql = "DELETE FROM detyrat WHERE id='$id'";
        $this->conn->query($sql);

        echo "<script> 
                alert('Detyra u fshie me sukses!');
                window.location.href='../pages/kategorite.php' 
            </script>";
    }

    public function getAllTasks() {
        $sql="SELECT * FROM detyrat";
        $result=$this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getTaskById($id) {
        $sql="SELECT * FROM detyrat WHERE id='$id' limit 1";
        $result=$this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC); 
    }




    public function changeStatus($id,$statusi) {
        $sql="UPDATE detyrat SET statusi='$statusi' WHERE id='$id' limit 1";
        $this->conn->query($sql);

        echo "<script> 
                alert('Statusi i detyres u ndryshua me sukses!');
                window.location.href='../public/change_status.php' 
            </script>";

    }

}


?>
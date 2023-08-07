<?php

if(isset($_POST['add_users'])){
    
    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $identification = $_POST['identification'];

    if ($fname == "" || empty($fname)) {
        header('location:index.php?message=Nombre incompleto');
    }

}

?>
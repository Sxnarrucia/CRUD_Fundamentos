<?php

if(isset($_POST['add_users'])){
    
    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $identification = $_POST['identification'];

    if ($fname == "" || empty($fname)) {
        header('location:index.php?message=Nombre incompleto');
    }

    if ($lname == "" || empty($lname)) {
        header('location:index.php?message=Apellido incompleto');
    }

    if ($identification == "" || empty($identification)) {
        header('location:index.php?message=Identificacion incompleta');
    }

}

?>
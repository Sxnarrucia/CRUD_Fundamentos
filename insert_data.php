<?php
include 'dbcon.php';

if(isset($_POST['add_users'])){
    
    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $identification = $_POST['identification'];

    if ($fname == "" || empty($fname)) {
        header('location:index.php?message=Nombre incompleto');
    } elseif ($lname == "" || empty($lname)) {
        header('location:index.php?message=Apellido incompleto');
    } elseif ($identification == "" || empty($identification)) {
        header('location:index.php?message=Identificación incompleta');
    } else {
        $query = "INSERT INTO Usuarios (First_Name, Last_Name, Identification) values ('$fname', '$lname', '$identification')";

        $result = mysqli_query($connection,$query);

        if (!$result) {
            die("Fallo en el query".mysqli_connect_error());
        } else {
            header('location:index.php?insert_msg=Información subida correctamente');
        }
        
    }

}

?>
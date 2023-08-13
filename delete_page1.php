<?php include('dbcon.php'); ?>


<?php


if (isset($_GET['ID'])) {
    $id = $_GET['ID'];

    $query = "DELETE FROM Usuarios WHERE ID = '$id'";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Fallo en el query".mysqli_error($connection));
    } else {
        header('location:index.php?delete_msg=Eliminado con exito.');
    }

}


?>
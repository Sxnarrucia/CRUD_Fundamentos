<?php include('header.php'); ?>
<?php include('dbcon.php'); ?>

<?php

if (isset($_GET['id'])) {
    $User_id = $_GET['id'];



    $query = "SELECT * FROM Usuarios WHERE ID = '$User_id'";

    $result = mysqli_query($connection, $query);

   if (!$result) {
       die("Fallo en el query".mysqli_error($connection));
    } else {

       $row = mysqli_fetch_assoc($result);
       

    }

}
?>

<?php
    if (isset($_POST['update_users'])) {

        if (isset($_GET['id_new'])) {
            $idnew = $_GET['id_new'];
        }

        $fname = $_POST['f_name'];
        $lname = $_POST['l_name'];
        $identification = $_POST['identification'];

        $query = "UPDATE Usuarios SET First_Name = '$fname', Last_Name = '$lname', Identification = '$identification' WHERE id = '$idnew'";

        echo $query;
        $result = mysqli_query($connection, $query);

   if (!$result) {
       die("Fallo en el query".mysqli_error($connection));
    } 
    //else {
      //  header('location:index.php?update_msg=Actualizado Correctamente');
    //}
    }
?>


            <form action="update_page1.php?id_new=<?php echo $User_id; ?>" method="POST">
            <div class="form-group">
                <label for="f_name">Primer Nombre</label>
                <input type="text" name="f_name" class="form-control" value="<?php echo $row['First_Name'] ?>">
            </div>
            <div class="form-group">
                <label for="l_name">Apellidos</label>
                <input type="text" name="l_name" class="form-control" value="<?php echo $row['Last_Name'] ?>">
            </div>
            <div class="form-group">
                <label for="id">Identificación</label>
                <input type="text" name="identification" class="form-control" value="<?php echo $row['Identification'] ?>">
            </div>
            <input type="submit" class="btn btn-primary" name="update_users" value="Actualizar">
            </form>



<?php include('footer.php'); ?>
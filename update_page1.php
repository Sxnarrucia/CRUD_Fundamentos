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


            <form>
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
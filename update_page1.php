<?php include('header.php'); ?>
<?php include('dbcon.php'); ?>

<?php

if (isset($_GET['ID'])) {
    $id = $_GET['ID'];


    $query = "SELECT * FROM Usuarios WHERE 'ID' = '$id'" ;

    $result = mysqli_query($connection, $query);

    print_r($result);

    if (!$result) {
        die("Fallo en la solicitud" . mysqli_connect_error());
    } else {
        $row = mysqli_fetch_row($result);
        print_r($row);
}
}


?>


            <form>
            <div class="form-group">
                <label for="f_name">Primer Nombre</label>
                <input type="text" name="f_name" class="form-control">
            </div>
            <div class="form-group">
                <label for="l_name">Segundo Nombre</label>
                <input type="text" name="l_name" class="form-control">
            </div>
            <div class="form-group">
                <label for="id">Identificación</label>
                <input type="text" name="identification" class="form-control">
            </div>
            </form>



<?php include('footer.php'); ?>
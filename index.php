<?php include('header.php'); ?>
<?php include('dbcon.php'); ?>

<div class="box1">
<h2>USUARIOS</h2>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Agregar Usuarios</button>
</div>
<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Primer Nombre</th>
            <th>Apellidos</th>
            <th>Cédula</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php

        $query = "SELECT * FROM Usuarios";

        $result = mysqli_query($connection, $query);

        if (!$result) {
            die("Fallo en la solicitud" . mysqli_connect_error());
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                    <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['First_Name']; ?></td>
                    <td><?php echo $row['Last_Name']; ?></td>
                    <td><?php echo $row['Identification']; ?></td>
                    <td><a href="update_page1.php?id=<?php echo $row['ID']; ?>" class="btn btn-success">Actualizar</a></td>
                    <td><a href="delete_page1.php?id=<?php echo $row['ID']; ?>" class="btn btn-danger">Eliminar</a></td>
                </tr>
        <?php
            }
        }

        ?>

    </tbody>
</table>

<?php

if (isset($_GET['message'])) {
    echo '<h5>' .$_GET['message'].'</h5>';
}

?>

<?php

if (isset($_GET['insert_msg'])) {
    echo '<h6>' .$_GET['insert_msg'].'</h6>';
}

?>

<?php

if (isset($_GET['delete_msg'])) {
    echo '<h5>' .$_GET['delete_msg'].'</h5>';
}

?>



<form action="insert_data.php" method="POST">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Usuarios</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

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

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <input type="submit" class="btn btn-primary" name="add_users" value="Añadir">
      </div>
    </div>
  </div>
</div>
</form>


<?php include('footer.php'); ?>
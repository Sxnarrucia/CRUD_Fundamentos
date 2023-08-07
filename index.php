<?php include('header.php'); ?>
<?php include('dbcon.php'); ?>

<div class="box1">
<h2>USUARIOS</h2>
<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Agregar Usuarios</button>
</div>
<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Primer Nombre</th>
            <th>Apellidos</th>
            <th>Cédula</th>
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
                </tr>
        <?php
            }
        }

        ?>

    </tbody>
</table>

<form>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Usuarios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
            <div class="form-group">
                <label for="f_name">Primer Nombre</label>
                <input type="text" name="f_name" class="form-control">
            </div>
            <div class="form-group">
                <label for="f_name">Segundo Nombre</label>
                <input type="text" name="l_name" class="form-control">
            </div>
            <div class="form-group">
                <label for="f_name">Identificación</label>
                <input type="text" name="id" class="form-control">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-success">Agregar</button>
      </div>
    </div>
  </div>
</div>
</form>

<?php include('footer.php'); ?>
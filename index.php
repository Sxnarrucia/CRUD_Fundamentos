<?php include('header.php'); ?>
<?php include('dbcon.php'); ?>

<div class="box1"></div>
<h2>USUARIOS</h2>
<button class="btn btn-primary">Agregar Usuarios</button>
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
<?php include('footer.php'); ?>
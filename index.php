<?php include('header.php'); ?>
<?php include('dbcon.php'); ?>

<h2>USUARIOS</h2>
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
            die("Fallo en la solicitud".mysqli_connect_error());
        } else {
            print_r($result);
        }

        ?>
        <tr>
            <td>3</td>
            <td>Esteban</td>
            <td>Sanarrucia</td>
            <td>24</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Rebeca</td>
            <td>Sanarrucia</td>
            <td>14</td>
        </tr>
    </tbody>
</table>
<?php include('footer.php'); ?>
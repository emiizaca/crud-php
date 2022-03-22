<?php include("db.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
</head>
<body>
    <h1>PHP MYSQL CRUD</h1>
    <?php if(isset($_SESSION['mensaje'])) { ?>
        <p id="message"><?= $_SESSION['mensaje'] ?></p>
    <?php session_unset(); } ?>

    <form action="save_client.php" method="POST" id="survey-form">
        <div id="form-group">
          <label for="nombre" id="nombre-label">Name</label>
          <input type="text" id="nombre" placeholder="Ingrese nombre" class="form-control" required="" name="nombre">
        </div>
        <div id="form-group">
          <label for="apellido" id="apellido-label">Apellido</label>
          <input type="text" id="apellido" placeholder="Ingrese apellido" class="form-control" required="" name="apellido">
        </div>
        <div id="form-group">
          <label for="email" id="email-label">Email</label>
          <input type="email" id="email" placeholder="Ingrese email" class="form-control" required="" name="email">
        </div>
        <div id="form-group">
            <!-- <input type="submit" class="submit-button" name="save_cliente" value="Guardar"> -->
          <button id="submit" class="submit-button" type="submit" name="save_cliente">Enviar</button>
        </div>
      </form>
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM cliente";
            $result = mysqli_query($conn, $query);
            while($fila = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $fila['id'] ?></td>
                    <td><?php echo $fila['nombre'] ?></td>
                    <td><?php echo $fila['apellido'] ?></td>
                    <td><?php echo $fila['email'] ?></td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</body>
</html>
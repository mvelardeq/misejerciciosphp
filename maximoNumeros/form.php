<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Máximo de n números</title>
</head>
<body>
    <h1>Formulario para hallar el máximo de n números</h1>
    <a href="../index.php">Inicio</a><br><br>
    <form action="maximo.php" method="get">
        <?php 
            $n=$_GET['cantidad'];
            for ($i=1; $i <=$n ; $i++) { 
                echo "<label for='a$i'>N° $i :</label>
                <input type='number' name='$i' id='a$i'><br>";
            }
            echo"<input type=submit value='ordenar'>";
        ?>
    </form>
</body>
</html>
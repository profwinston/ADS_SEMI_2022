<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   if(isset($_GET["codigo"])) {
    $cod = $_GET["codigo"];

    include_once("conecta.php");

    $sql = "DELETE FROM Clientes WHERE idClientes=$cod";

    $res = mysql_query($sql) or die("Erro ao excluir o cliente ".mysql_error());
   }
   header("Location:pesqclientes.php");
   ?> 
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa de Clientes</title>
</head>
<body>
    <H2>Pesquisar Clientes por Nome ou Mês</h2>
    <form action="pesqclientes.php" method="post">
        <select name="comboTipo">
            <option value="0">Nome</option>
            <option value="1">Mês</option>
        </select>
        <input type="text" name="txtPesquisa">
        <input type="submit" name="btnPesq" value="Pesquisar">
    </form>
    <?php 
        if(isset($_POST["comboTipo"])) {
            $tipo = $_POST["comboTipo"];
            $pesq = $_POST["txtPesquisa"];

            include_once("conecta.php");

            $sql = "SELECT * from Clientes ";
            if($tipo==0) {
                $sql = $sql."WHERE nome LIKE '$pesq%' ";

            } 
            else {
                $sql = $sql."WHERE month(dtNasc) = '$pesq' ";
            }
            echo "<H2>Resultado da pesquisa</h2>";
            echo "<br>";

            echo "<table border =1>";
            echo "<TR><td>Código</td>
                    <TD>Nome</td>
                    <td>CPF</td>
                    <td>Endereço</td>
                     <td>Estado</td>
                     <td>Data Nasc</td>
                     <td>Sexo</td>
                     <td>Login</td>
                     <td>Cinema</td>
                     <td>Musica</td>
                     <td>Informática</td>
                     <td>Excluir?</td></tr>";
                   
            $res = mysql_query($sql) or die("Erro ao pesquisar BD clientes. ".mysql_error());
            while ($registro = mysql_fetch_assoc($res)){
                $id = $registro["idClientes"];
                $nome = $registro["nome"];
                $ender = $registro["endereco"];
                $cpf = $registro["cpf"];
                $estado = $registro["Estados_sigla"];
                $login = $registro["login"];
                $dtNasc = $registro["dtNasc"];
                $sexo = $registro["sexo"];
                $cinema = $registro["cinema"];
                $musica = $registro["musica"];
                $info = $registro["info"];

                //echo var_dump($registro);

                echo "<tr>
                <td>$id</td>
                <td>$nome</td>
                <td>$cpf</td>
                <td>$ender</td>
                <td>$estado</td>
                <td>$dtNasc</td>
                <td>$sexo</td>
                <td>$login</td>
                <td>$cinema</td>
                <td>$musica</td>
                <td>$info</td>
                <td align='center'><a href='excluircliente.php?codigo=$id'><IMG src='delete.png' height='12px'></a></td> </tr>";
            

            }
            echo "</table>";


        }
    ?>
</body>
</html>
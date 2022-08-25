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

    $nome = $_POST["txtNome"];
    $ender = $_POST["txtEndereco"];
    $CPF = $_POST["txtCPF"];
    $estado = $_POST["listaEstados"];
    $dtNasc = $_POST["txtData"];
    $sexo = $_POST["sexo"];
    $cinema = (isset($_POST["checkCinema"])) ? true : null;  //Somente o box marcados são enviados o valor, desta forma é necessário
    $musica = (isset($_POST["checkMusica"])) ? true : null;  //verificar se o dado campo foi recebido. Se não for é necessário
    $info = (isset($_POST["checkInfo"])) ? true : null; //gravar null na variavel 
    $login = $_POST["txtLogin"];
    $senha1 = $_POST["txtSenha1"];
    $senha2 = $_POST["txtSenha2"];

    $camposOK = true;

    if ($nome == "") {
        echo "Informe o NOME. <BR>";
        $camposOK = false;
    }
    if ($ender == "") {
        echo "Informe o ENDEREÇO. <BR>";
        $camposOK = false;
    }
    if ($login == "") {
        echo "Informe o LOGIN. <BR>";
        $camposOK = false;
    }
    if ($senha1 != $senha2) {
        echo "As senhas não são identicas. <BR>";
        $camposOK = false;
    }

    /* No form foi alterado o tipo do campo de data para date
    if (strlen($dtNasc) == 10) {
        $dia = substr($dtNasc, 0, 2);
        $mes = substr($dtNasc, 3, 2);
        $ano = substr($dtNasc, 6, 4);
        $dtNasc = "$ano-$mes-$dia";

        if (!checkdate($mes, $dia, $ano)) {
            echo "DATA Inválida. <BR>";
            $camposOk = false;
        }
    } else {
        echo "DATA Inválida. <BR>";
        $camposOk = false;
    }*/

    if ($camposOK) {     //Todos os campos preenchidos
        include_once(".\conecta.php");

        $sql = "INSERT INTO clientes (nome,cpf,endereco,Estados_sigla,dtNasc,sexo,login,senha,cinema, musica,info) 
    VALUES ('$nome','$CPF','$ender','$estado','$dtNasc','$sexo','$login','$senha1','$cinema', '$musica','$info')";

        mysql_query($sql) or die("Erro na inserção de clientes. $sql");

        echo " Sucesso";

        mysql_close();
    } else {
        echo "<BR>Informações incorretas não foram gravadas no BD.";
    }
    ?>
</body>

</html>
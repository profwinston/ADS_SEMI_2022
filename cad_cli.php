<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet" type="text/css" media="screen" />
    <title>Cadatro de Clientes</title>
</head>

<body>
    <form method="post" name="formCadastro" action="./envia.php">
        <h1>Cadastro de Cliente</h1>
        <BR>
        <table width="100%">
            <tr>
                <th width="20%">Nome</th>
                <td width="80%"><input type="Text" name="txtNome">
                </td>
            </tr>
            <tr>
                <th>CPF:</th>
                <td><input name="txtCPF" type="text" maxlength="14"> </td>
            </tr>
            <tr>
                <th>Endereço:</th>
                <td><textarea name="txtEndereco" cols="30" rows="4"></textarea></td>
            </tr>
            <tr>
                <th>Estado:</th>
                <td><select name="listaEstados">
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernanbuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select></td>
            </tr>
            <tr>
                <th>Data Nasc.:</th>
                <td>

                    <input name="txtData" type="date" id="start" >
                </td>
            </tr>
            <tr>
                <th>Sexo</th>
                <td><input type="radio" name="sexo" value="M" checked>Masculino<BR>
                    <input type="radio" name="sexo" value="F" />Feminino
                </td>
            </tr>
            <tr>
                <th>Áreas de Interesse:</th>
                <td>
                    <input name="checkCinema" type="checkbox" checked="checked"/>Cinema<BR>
                    <input name="checkMusica" type="checkbox" checked="checked"/>Música<BR>
                    <input name="checkInfo" type="checkbox" checked="checked"/>Informáica<BR>
                </td>
            </tr>
            <tr>
                <th>Login</th>
                <td><input name="txtLogin" type="text"></td>
            </tr>

            <tr>
                <th>Senha</th>
                <td><input name="txtSenha1" type="password"></td>
            </tr>
            <tr>
                <th>Comfirme a Senha</th>
                <td><input name="txtSenha2" type="password"></td>
            </tr>
            <tr>
                <td><input type="submit" name="btnEnviar" value="Enviar">
                <td><input type="submit" name="btnEnviar" value="Limpar">
            </tr>
        </table>
    </form>

</body>

</html>
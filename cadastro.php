<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/cadastro.css">
    <title>Cadastro - SosVias</title>
</head>

<body>
    <main>
        <div class="cadastro_wrapper">
        <h1>Crie sua conta na SOS Vias!</h1>
        <h2>Ja tem uma conta?<br><a href="">Clique aqui e baixe o app</a></h2>
            <form name="formulario" method="post" action="validar.php">
                <label for="txtNome">Nome Completo:* &nbsp
                    <input type="text" name="txtNome" id="txtNome" required>
                </label>
                <label for="txtCpf">Cpf:* &nbsp
                    <input type="text" name="txtCpf" id="txtCpf" required>
                </label>
                <label for="txtTel">Telefone:* &nbsp
                    <input type="text" name="txtTel" id="txtTel" required>
                </label>
                <label for="txtEmail">Email:* &nbsp
                    <input type="email" name="txtEmail" id="txtEmail" required>
                </label>
                <label for="UF">Estado:* &nbsp
                    <select name="UF" id="UF" class="Estado" required>
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
                        <option value="PE">Pernambuco</option>
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
                        <option value="EX">Estrangeiro</option>
                        <option value="" selected>Selecione um Estado</option>
                    </select>
                </label>
                <label for="senha">Senha:* &nbsp
                    <input type="password" name="senha" id="senha" required>
                </label>
                <label for="confsenha">Confirmação Senha:* &nbsp
                    <input type="password" name="confSenha" id="confSenha" required>
                </label>
                <?php
                
                session_start();
                    if (isset($_SESSION['erro']) && $_SESSION['erro'] == 1){
                        echo "<p style='color: red;'>As senhas não batem!</p>";
                    }
                    else{}
                ?>
                <br>
                <input type="submit" value="Cadastrar">
            </form>
        </div>
    </main>
</body>

</html>
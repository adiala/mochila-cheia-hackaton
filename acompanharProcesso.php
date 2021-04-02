<!DOCTYPE html>
<!-- Desenvolvido pelo squad 42 - Hackaton FCamara 1°Semestre 2021 -->
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acompanhar Processo</title>
    <link rel="stylesheet" href="./css/style.css"/>
    <link rel="stylesheet" href="./css/reset.css"/>
</head>
<body>
    <!-- Sessão principal da Página -->
    <section>
        <!-- Título da Página -->
        <h1>ACOMPANHAR PROCESSO</h1>

        <!-- Formulário para acompanhar o cadastro -->
        <form method="POST">
            <label for="txtnum">Número do cadastro</label>
            <input type="text" name="txtnum" id="txtnum"><br>

            <!-- Botão de Confirmação -->
            <input type="submit" value="Confirmar">
        </form>
    </section>
</body>
</html>

<?php 
include("php/con_banco.php");//Conexão

if(isset($_POST["txtnum"])) {//POST cd_registro
    $comando = "select * from tb_crianca ";
    $comando .= "where cd_registro = '".$_POST["txtnum"]."'";//Comando SQL
    $resultado = $conn->query($comando);//Insere SQL
    $row = $resultado->fetch_assoc();
    if($resultado->num_rows > 0) {//Verrifica se houve resultado
         
        $cd_registro = $_POST["txtnum"];//Pega o POST
        session_start();//Inicia a sessão
        $_SESSION["txtnum"] = $cd_registro;
        header("location:processoemAndamento.php");//Manda pra próxima página 
    }
}

 ?>
<?php 
include("BackEnd/php/connection/con_banco.php");//Conexão
session_start();//Inicio da sessão
$cd_registro = $_SESSION["txtnum"];//Pega o registro
$comando = "select * from tb_crianca c JOIN tb_crianca_itens ct on c.cd_crianca = ct.cd_crianca join tb_itens t on t.cd_itens = ct.cd_itens ";
$comando .= "where cd_registro = '".$cd_registro."'";//Comando SQL

$resultado = $conn->query($comando);//Insere o SQL
if($resultado->num_rows > 0) {//Percorre
    $row = $resultado->fetch_assoc();
}

?>
<!DOCTYPE html>
<!-- Desenvolvido pelo squad 42 - Hackaton FCamara 1°Semestre 2021 -->
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processo em Andamento</title>
    <link rel="stylesheet" href="./css/style.css"/>
    <link rel="stylesheet" href="./css/reset.css"/>
</head>
<body>
    <!-- Sessão principal da Página -->
    <section>
        <!-- Sessão para visualizar os dados da criança -->
        <section>
            <!-- Div com o nome da criança -->
            <div>
                <?php
                    echo '<p>'. $row['nm_crianca'] .'</p>';//nm_crianca
                ?>
            </div>

            <!-- Div com o número do processo -->
            <div>
                <?php
                    echo '<p>'. $row['cd_registro'] .'</p>';//cd_registro
                ?>
            </div>
            <!-- Tabela com os itens pedidos -->
            <table>
                <!-- Cabeçalho da tabela -->
                <thead>
                    <tr>
                        <th>Material</th>
                        <th>Quantidade</th>
                        <th>Valor</th>
                    </tr>
                </thead>

                 <!-- Corpo da tabela -->
                <tbody>
                    <?php
                        $resultado_tb = $conn->query($comando);
                        while($row_tb = $resultado_tb->fetch_assoc()){
                            echo '<tr>';
                            echo '<td>'. $row_tb['nm_itens'] .'</td>';
                            echo '<td>'. $row_tb['qt_crianca_itens'] .'</td>';
                            echo '<td>'. $row_tb['nm_itens'] .'</td>';
                            echo '</tr>';
                        }
                    ?>
                </tbody>
            </table>
        </section>

        <!-- Sessão para visualizar as doações recebidas -->
        <section>
            <!-- Imagem -->
            <img src="" alt="imagem">

            <!-- Div com o valor total recebido das doações -->
            <div>
                <p>VALOR RECEBIDO</p>
            </div>

            <!-- Botão que permite resgatar o valor -->
            <button>Resgatar Vale-Compras</button>
        </section>
    </section>
</body>
</html>



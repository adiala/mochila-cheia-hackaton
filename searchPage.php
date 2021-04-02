<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Busca</title>
    <link rel="stylesheet" href="./css/styleSP.css"/>
    
</head>
<body>

    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Nome da Escola...">

    <table id="myTable">
      <thead class="header">
        <th>Nome</th>
        <th>Escola</th>
      </thead>
      <tbody>
        <?php
          include('php/con_banco.php');//Conexão
          $comando = "select nm_crianca, nm_escola from tb_crianca c join tb_donatario d on c.cd_donatario = d.cd_donatario join tb_escola e on e.cd_escola = d.cd_escola";//Comando SQL
          $resultado = $conn->query($comando);//Insere o comando
    
          if($resultado->num_rows>0){//Verifica se teve resultado
              while($row= $resultado->fetch_assoc()){//Percorre o Resultado
                  echo '<tr>';
                  echo '<td>'. $row['nm_crianca'] .'</td>';
                  echo '<td>'. $row['nm_escola'] .'</td>';
                  echo '</tr>';
                  //Cria as Table rows com os Table data
              }
    
          }
        ?>
      </tbody>
    </table>

 <script src="js/main.js"></script>
</body>
</html>
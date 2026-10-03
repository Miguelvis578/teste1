  <?php
      include_once 'conexao.php';





  $nome = $_POST["nome"];
  $descricao = $_POST["descricao"];
  $quantidade = $_POST["quantidade"];
  $validade = $_POST["validade"];


  $sql = "INSERT INTO produto (nome, descricao, quantidade, validade)
  VALUES ('".$nome."','".$descricao."','".$quantidade."','".$validade."')";

   $conn->query($sql); 
  
   Header('location: listarprodutos.php');
  
  ?>

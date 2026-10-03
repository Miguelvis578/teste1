<?php
    include_once 'conexao.php';





$data_venda = $_POST["data_venda"];
$cliente_id = $_POST['cliente_id'];
$produto_id = $_POST['produto_id'];
$quantidade = $_POST['quantidade'];


$sql = "INSERT INTO pedido (data_venda, cliente_id, produto_id, quantidade)
VALUES ('".$data_venda."','".$cliente_id."','".$produto_id."','".$quantidade."')";

 $conn->query($sql); 
  
 Header('location: listarpedidos.php');
 
  if(mysqli_query($conn, $sql)){
    echo "Pedido cadastrado com sucesso!";
} else {
    echo "Erro: " . mysqli_error($conn);
}
?>





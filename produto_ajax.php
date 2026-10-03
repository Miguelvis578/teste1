<?php
    include_once 'conexao.php';

  $sql = "SELECT * FROM produto";
  // Execute the SQL query
  $result = $conn->query($sql);
  $resultados = $result->fetchAll(PDO::FETCH_ASSOC);
  echo json_encode($resultados);

?>
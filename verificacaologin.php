<?php

require 'conexaobd.php';
$email = mysqli_real_escape_string($conn, trim($_POST['Email']));
$password = mysqli_real_escape_string($conn, trim($_POST['Senha']));
$sql = "SELECT * FROM cadastro WHERE Email = ? AND Senha = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_Param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();

foreach ($result as $row) {
  $row = $result->fetch_assoc();
  if($row["Email"] == "" && $row["Senha"] == ""){
    header('Location: 02-index.html');
  }else{
    if($row["Senha"] == $password && $row["Email"] == $email){
      echo "Retornar para tela depois do login";
      header('Location: 02-index.html');
    }else{
      echo "Senha incorreta". $conn->error;
      header('Location: 02-index.html');
    
  }
}
  }
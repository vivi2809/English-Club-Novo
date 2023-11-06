<?php
session_start();
?>

<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login</title>
      <link rel="stylesheet" href="style (1).css">
      <script src="Cad.js"></script>
  </head>
  <body style="display:flex; align-items:center; justify-content:center;">
  


  <div class="landing-page">
  <header>
    <div class="landing-page">
      <div class="container">
        <a href="#" class="logo">English <b>Club</b></a>
      </div>
    </header>
</div>

<div class="login-page">


    <div class="form">
      <form class="register-form" method="POST" action="cadastro.php">
        <h2>Registrar</h2>
        <input type="text" placeholder="Nome Completo*" name="NomeCompleto" id="NomeCompleto"required/>
        <input type="email" placeholder="Email *" name="Email" id="Email"required/>
        <input type="password" placeholder="Senha *" name="Senha" id="Senha"required/>
        <button class="btn" href="#" onclick="cadastro()">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          Criar
        </button>
      </form>
      <form class="login-form" method="POST" action="verificacaologin.php">
        <h2>Login</h2>
        <input type="email" placeholder="Email" name="Email" id="Email"required />
        <input type="password" placeholder="Senha" name="Senha" id="Senha"required/>
        <button type="submit" class="btn" method="POST" href="02-index.html">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          Entrar
        </button>
        <p class="message">Ainda não registrado? <a href="#">Criar sua conta</a></p>
      </form>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 
  <script>
     $('.message a').click(function(){
     $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
        });
</script>



  </body>
  </html>
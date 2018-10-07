

 <!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>email</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    
 <h1>Envio de email</h1>
<form action="formemail.php" method="post">
  <div class="form-group">
    <label for="email">Seu emeil:</label>
    <input type="email" class="form-control" name="email" id="email">
  </div>
  <div class="form-group">
    <label for="email">Senha:</label>
    <input type="password" class="form-control" name="senha" id="email">
  </div>
  <div class="form-group">
    <label for="email">destinatario:</label>
    <input type="email" class="form-control" name="destinatario" id="email">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
 </div>
</body>
</html>
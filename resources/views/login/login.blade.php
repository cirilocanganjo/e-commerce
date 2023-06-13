<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="{{asset('/assets/login/style-login.css')}}">
</head>
<body>

  <div class="container">
    <h1>Login</h1>

    <form method="post" action="">
     @csrf
    <label for="email">E-mail:</label>
      <input type="email" id="email" name="email" required>
      <label for="senha">Senha:</label>
      <input type="password" id="senha" name="senha" required>

      <input type="submit" value="Enviar">
    </form>



  </div>
</body>
</html>

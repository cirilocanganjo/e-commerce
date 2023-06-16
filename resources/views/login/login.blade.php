<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="{{asset('/assets/login/style-login.css')}}">
</head>
<body>

  <div class="container">
    <h1>Login</h1>
    @if(session("wrongLogin"))
    <p style="color:red; text-align: center;">{{session("wrongLogin")}}</p>
    @endif


    @if(session("success"))
    <p style="color:black; text-align: center;">{{session("success")}}</p>
    @endif

    <form method="post" action="{{route('user.signin')}}">
     @csrf
    <label for="email">E-mail:</label>
      <input type="email" id="email" name="email" required>
      <label for="senha">Senha:</label>
      <input type="password" id="senha" name="password" required>

      <input type="submit" value="Enviar">
    </form>
        <div style="display:flex; justify-content: center; margin-top: 1.5rem;">
            <span>ainda não tens uma conta?</span><a href="{{route('form.client.add.account')}}">clique aqui para a criares</a>
        </div>



  </div>
</body>
</html>

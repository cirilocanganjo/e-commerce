<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="{{asset('/assets/login/style-login.css')}}">
  <title>Cadastro de clientes</title>
</head>
<body>

        <style>
            #container-client{
                width: 45rem;
                margin-top: 2rem !important;
            }
        </style>

  <div id='container-client' class="container">
    <h1 style="text-transform: uppercase;">Cadastro de clientes</h1>


    @if(session("exception"))
    <p style="color:red; text-align: center;">{{session("exception")}}</p>
    @endif



    <form method="post" action="{{route('store.client.account')}}" enctype="multipart/form-data">
     @csrf

         <label for="nome">Nome:</label>
         <input type="text" id="nome" name="nome" required>

         <label for="sexo">Sexo:</label>
         <select name="sexo" class="select">
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
         </select>

         <label for="dataNascimento">Data de nascimento:</label>
         <input type="date" name="dataNascimento" required>


        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" required>


        <label for="provinvia">Província:</label>
        <select name="provincia" class="select">
            <option value="Luanda">Luanda</option>
            <option value="Benguela">Benguela</option>
            <option value="Cabinda">Cabinda</option>
            <option value="Bié">Bié</option>
        </select>

        <label for="municipio">Município:</label>
        <select name="municipio" class="select">
            <option value="Belas">Belas</option>
            <option value="Kilamba Kiaxi">Kilamba Kiaxi</option>
            <option value="Ingombotas">Ingombotas</option>
        </select>

        <label for="rua">Rua:</label>
        <input type="text" name="rua" required>


        <label for="bairro">Bairro:</label>
        <input type="text" name="bairro" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="password">Senha:</label>
        <input type="password" name="password" required>

      <input  type="submit" value="Cadastar" />
      <a style='text-align: center; margin-top:1rem;' href="{{route('admin.index')}}">Voltar a página inicial</a>

    </form>

  </div>
</body>
</html>

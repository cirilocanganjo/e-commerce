<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="{{asset('/assets/login/style-login.css')}}">
  <title>Cadastro de produtos</title>
</head>
<body>

        <style>
            #container{
                width: 45rem;
            }
        </style>

  <div id='container' class="container">
    <h1 style="text-transform: uppercase;">Cadastro de produtos</h1>
    @if(session("wrongLogin"))
    <p style="color:red; text-align: center;">{{session("wrongLogin")}}</p>
    @endif

    @if(session("success"))
    <p style="color:black; text-align: center;">{{session("success")}}</p>
    @endif

    @if(session("catch"))
    <p style="color:red; text-align: center;">{{session("catch")}}</p>
    @endif



    <form method="post" action="{{route('store.products')}}" enctype="multipart/form-data">
     @csrf

         <label for="produto">Produto:</label>
         <input type="text" id="produto" name="produto" required>



        <label for="preco">Preço:</label>
        <input type="text" id="preco" name="preco" required>


        <label for="preco">Data de fabrico:</label>
        <input type="date" name="dataFabrico" required>

        <label for="preco">Validade:</label>
        <input type="date" name="validade" required>

        <label for="preco">Categoria:</label>
        <select name="categoriaId" id="select">
            @foreach($categories as $category)
            <option value="{{$category->categoriaId}}">{{$category->categoria}}</option>
            @endforeach
        </select>
        <input type="date" name="validade" required>

        <label for="preco">Descrição:</label>
        <input type="text" name="descricao" required>

        <label for="preco">Foto:</label>
        <input type="file" name="foto" required>

      <input style="" type="submit" value="Cadastar" />
      <a style='text-align: center; margin-top:1rem;' href="{{route('admin.index')}}">Voltar a página inicial</a>
    </form>



  </div>
</body>
</html>

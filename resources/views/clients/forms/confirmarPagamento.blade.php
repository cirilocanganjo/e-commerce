<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="{{asset('/assets/login/style-login.css')}}">
</head>
<body>

  <div class="container">
    <h1>Informação da Compra Efectuada</h1>
    @if(session("exception"))
    <p style="color:red; text-align: center;">{{session("exception")}}</p>
    @endif


    @if(session("success"))
    <p style="color:black; text-align: center;">{{session("success")}}</p>
    @endif

    <style>
        #total{
            font-size: 22px;
        }
        #total::placeholder{
            font-size: 22px;
        }

    </style>

    <form method="post" action="{{route('client.confirm.payment')}}">
     @csrf
     <label for="">Produtos</label>
     <textarea name="produtos" id="" cols="30" rows="10">
         @foreach($productDesc as $productDesc)
        {{$productDesc->produto}}
        @endforeach
    </textarea>
    <label for="total">Total:</label>
    @foreach($productInfo as $productInfo)
      <input type="text" id="total" value='{{$productInfo->preco}} KZS' name="valor" placeholder="0.000.00" required>
    @endforeach
      <label for="cliente">Cliente:</label>
      <input type="text" id="cliente" value="{{Auth::user()->dadosPessoaisRelacionamento->nome ?? ''}}" name="cliente" required>

      <input type="submit" value="Confirmar">
    </form>
        <div style="display:flex; justify-content: center; margin-top: 1.5rem;">
           <a href="{{route('website.index')}}">voltar ao início</a>
        </div>



  </div>
</body>
</html>

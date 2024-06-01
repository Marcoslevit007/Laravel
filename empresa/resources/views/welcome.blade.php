<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
       
    </head>
    <body class="antialiased">
     <h1>ALGUM TITULO</h1>

     @if( 5 >1)
                <p>A condição e true</p>
     @endif

     <p>{{$nome}}</p>

     @if($nome == "MARCOS LEVI SANTOS TEIXEIRA") 
                <p>Bem vindo, {{$nome}} você tem {{$idade}} anos de idade e trabalha como {{$profissao}}</p>
     @else
                <p>O nome não e Marcos Levi</p>
     @endif


     @for($i = 0; $i < count($arr); $i++)
     <p>{{$arr[$i]}} - {{$i}}<p>
     @endfor
     {{-- COMENTARIO NO BLADE--}}
     @foreach($nomes as $nome)
       <p>{{$loop->index}}</p>         
       <p>{{ $nome }}</p>         


     @endforeach
    </body>
</html>

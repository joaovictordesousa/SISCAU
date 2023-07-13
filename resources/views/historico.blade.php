<!-- Onde tambem vai gerar o relatorio-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logoicon.jpg">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">    <title>SISCAU</title>
</head>
<body>

    <header class="cabecalho">
      <img src="img/logo_branca.png" alt="logo" class="logo_header">
    </header>

    <main>

    <section class="container_titulo"> 
        <h1><b>Guias de recolhimento</b></h1>
    </section>
    
  <section class="container">
  
    <div class="divTable">
      <table>
        <thead>
          <tr>
            <th class="th_tipo">Tipo recolhimento</th>
            <th class="th_empresa">Empresa</th>
            <th class="th_valor">Valor</th>
            <th class="th_acoes">Ações</th>
          </tr>
        </thead>
        <tbody>
          
        @foreach($historico as $histo)
          <tr>
            <td>{{ $histo->auxtiporecolhimento }}</td>
            <td>{{ $histo->razaosocial }}</td>
            <td>R$ {{ $histo->valor }}</td>
            <td>
              <a href="" class="btn btn-light btn-sm">Editar</a>
              <a onclick="deleteRegistroPaginacao( '{{ route('deletar.dados') }}' )" class="btn btn-danger btn-sm" >Excluir</a>
            </td>
          </tr>
        @endforeach
   
      </tbody>
      </table>
    </div>
    
  </section>

      <div class="container_botoes">
          <button class="botao_imprimir">Imprimir</button>
          <a href="{{ route('pesquisa') }}" class="botao_voltar">Voltar</a>
      </div>

    </main>

    
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.js"></script>
    <script src="../js/projeto.js"></script>
  </body>
</html>
<!-- Onde tambem vai gerar o relatorio-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logoicon.jpg">
    <link rel="stylesheet" href="css/style.css">
    <title>SISCAU</title>
</head>
<body>
    <header class="cabecalho">
      <img src="img/logo_branca.png" alt="logo" class="logo_header">
    </header>

    <main>
    
    <div class="container_titulo">
      <span>Guias de recolhimento</span>
    </div>



  <div class="container_historico">

    <div class="divTable">
      <table>
        <thead>
          <tr>
            <th>Tipo</th>
            <th>Empresa</th>
            <th>Valor</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
</div>

    <br><br><br>
      <div class="container_botoes">
          <button class="botao_imprimir">Imprimir</button>
          <a href="{{ route('pesquisa')}}" class="botao_voltar">Voltar</a>
      </div>

    </main>
 
</body>
</html>
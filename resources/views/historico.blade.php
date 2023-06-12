<!-- Onde tambem vai gerar o relatorio-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logoicon.jpg">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>SISCAU</title>
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
            <th class="th_tipo">Tipo</th>
            <th class="th_empresa">Empresa</th>
            <th class="th_valor">Valor</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td value="Tipo">Documento</td>
            <td value="Empresa">Novacap</td>
            <td value="Valor">500.000,00</td>
          </tr>
          <tr>
            <td value="Tipo">Documento</td>
            <td value="Empresa">Novacap</td>
            <td value="Valor">500.000,00</td>
          </tr>
          <tr>
            <td value="Tipo">Documento</td>
            <td value="Empresa">Novacap</td>
            <td value="Valor">500.000,00</td>
          </tr>
          <tr>
            <td value="Tipo">Documento</td>
            <td value="Empresa">Novacap</td>
            <td value="Valor">500.000,00</td>
          </tr>
        </tbody>
      </table>
    </div>

  </section>

      <div class="container_botoes">
          <button class="botao_imprimir">Imprimir</button>
          <a href="{{ route('pesquisa')}}" class="botao_voltar">Voltar</a>
      </div>

    </main>
 
</body>
</html>
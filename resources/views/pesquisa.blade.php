<!-- Onde vai pesquisar é levar para o relatorio-->
<!-- Para que leve depois da pesquisa -->
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
        <div class="container_botao">
        </div> 
    </header>

<section class="container_pesquisa">

    <div class="container_completo">

    <div class="pesquisa_titulo">
        <h1 class="titulo_recolhimento" >Guias de recolhimento</h1>
        <a href="{{ route('NovaGuia')  }}" id="NovaGuia">+ Nova guia de recolhimento</a>
    </div>

    <div id="FormBox">
        <div class="container_quatro">
            <div>
                <label>Numero</label>
                <input type="number" class="CampoInput"></input> 
            </div>
            <div>
                <label>Contrato</label>
                <input type="number" class="CampoInput"></input> 
            </div>
            <div>
                <label>Documento</label>   
                <input type="number" class="CampoInput"></input> 
            </div>
        <div>
            <label>Tipo de recolhimento</label>
            <select class="CampoSelect" required>
                <option value="documentos">Documentos</option>
                <option value="documentos">teste</option>
                <option value="documentos">teste</option>
                <option value="documentos">teste</option>
                <option value="documentos">teste</option>
            </select>
            </div>
        </div>

        <br><br>

        <div class="container_quatro">
        <div>
            <label>Agência</label>
                <select class="CampoSelect">
                    <option value="">0000000</option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
            </div>
            <div>
                <label>Processos de baixa</label>
                <input type="text" class="CampoInput"></input> 
            </div>
            <div>
                <label>CPF/CNPJ</label>
                <input type="number" class="CampoInput"></input> 
            </div>
            <!---->
        </div>
        <br><br>
    <div class="container_quatro">
        <div>
            <label>Data do GR</label>
            <input type="date" class="campodual"></input> 
            <span>a</span>
            <input type="date" class="campodual"></input> 
        </div>
        <br>
        <div>
        <label>Data de validade</label>
            <input type="date" class="campodual"></input>
            <span>a</span>
            <input type="date" class="campodual"></input> 
        </div>
    </div>
    <br><br>
    <div class="container_quatro">
        <div>
            <label>Data de validade</label>
            <input type="date" class="campodual"></input>
            <span>a</span>
            <input type="date" class="campodual"></input> 
        </div>

        <div class="espacamento_select">
            <label>Tipo do Documento</label>
                <select class="CampoSelect">
                    <option value="">Tipo do Documento</option>
                    <option value="">teste</option>
                    <option value="">teste</option>
                    <option value="">teste</option>
                    <option value="">teste</option>
                </select>
        </div>
    </div>
    <br><br><br>
    <div class="container_quatro">
        <div>
            <label>Numero da NL</label>
            <input type="number" class="CampoInput"></input> 
        </div>

        <div class="espaco_div_5">

        <label>Tipo do Documento</label>
            <select class="CampoSelect">
                <option value="">Tipo de Documento</option>
                <option value="">teste</option>
                <option value="">teste</option>
                <option value="">teste</option>
                <option value="">teste</option>
            </select>
        </div>

    </div>

    <br><br><br>
    
    <div>
        <button class="btn">Pesquisar</button>   
    </div>
     
    </div>
</section>

</body>
</html>

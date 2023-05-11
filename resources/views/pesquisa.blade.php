<!-- Onde vai pesquisar é levar para o relatorio-->
<!-- Para que leve depois da pesquisa -->
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
        <img src="img/logoicon.jpg" alt="logo" class="logo_header">
        <h1 class="tituloHeader"><br>NOVACAP</h1>
        <div class="container_botao">
        </div> 
    </header>

<section class="container_pesquisa">

    <div class="pesquisa_titulo">
        <h1>Guias de recolhimento</h1><br><br>
        <a href="{{ route('cadastro') }}" id="NovaGuia">+ Nova Guia de Recolhimento</a>
    </div>

    <br><br><br>

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
                <option value="documentos">documentos</option>
                <option value="documentos">documentos</option>
                <option value="documentos">documentos</option>
                <option value="documentos">documentos</option>
                <option value="documentos">documentos</option>
            </select>
            </div>
        </div>

        <br><br><br>

        <div class="container_quatro">
        <div>
            <label>Agência</label>
                <select class="CampoSelect">
                    <option value=""></option>
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

        <br><br><br>

    <div class="container_quatro">
        <div class="dividir">
            <label>Data do GR</label>
            <input type="date" class="campodual"></input> 
            <span>a</span>
            <input type="date" class="campodual"></input> 
        </div>
    
        <div>
        <label>Data de validade</label>
            <input type="date" class="campodual"></input>
             <span>a</span>
            <input type="date" class="campodual"></input> 
        </div>
    </div>

    <br><br><br>

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
                <option value="">Tipo de Consulta</option>
                <option value="">teste</option>
                <option value="">teste</option>
                <option value="">teste</option>
                <option value="">teste</option>
            </select>
        </div>

    </div>

    <br><br><br>

    <div>
        <button type="submit" class="btn">Pesquisar</button>   
    </div>
</section>

</body>
</html>

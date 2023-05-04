<!-- Onde vai pesquisar é levar para o relatorio-->

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
            <img src="img/logo_transparente.png" alt="logo" class="logo_header">
        <div class="container_botao">
        </div>
    </header>


    <div class="pesquisa_titulo">
        <h1>Guias de recolhimento</h1><br><br>
        <a href="#" id="NovaGuia">+ Nova Guia de Recolhimento</a>
    </div>
    <br><br>

<section class="container_cadastro">
    <div id="FormBox">
        <div class="container_quatro">
            <div>
                <label>Numero</label>
                <input></input> 
            </div>
            <div>
                <label>Contrato</label>
                <input></input> 
            </div>
            <div>
                <label>Documento</label>
                <input></input> 
            </div>
        <div>
            <label>Tipo de recolhimento</label>
            <select id="m-documentos" name="documentos" required>
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
                <select>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
            </div>
            <div>
                <label>Processos de baixa</label>
                <input></input> 
            </div>
            <div>
                <label>CPF/CNPJ</label>
                <input></input> 
            </div>
            <!---->
        </div>

        <br><br><br>

    <div class="container_quatro">
        <div class="dividir">
            <label>Data do GR</label>
            <input></input> 
            <span>a</span>
            <input></input> 
        </div>
    
        <div>
        <label>Data de validade</label>
            <input></input>
             <span>a</span>
            <input></input> 
        </div>
    </div>

    <br><br><br>

    <div class="container_quatro">
        <div>
            <label>Data de validade</label>
            <input></input>
            <span>a</span>
            <input></input> 
        </div>

        <div class="espacamento_select">
            <label>Tipo do Documento</label>
                <select>
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
            <label>Numero</label>
            <input></input> 
        </div>

        <div class="espaco_div_5">

        <label>Tipo do Documento</label>
            <select>
                <option value="">Tipo de Consulta</option>
                <option value="">teste</option>
                <option value="">teste</option>
                <option value="">teste</option>
                <option value="">teste</option>
            </select>
        </div>

    </div>
</section>
<br><br><br>

    <div>
        <button>Pesquisar</button>
    </div>
   
</body>
</html>

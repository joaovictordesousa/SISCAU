<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>SISCAU</title>
</head>
<body>
    <header class="cabecalho">
            <img src="img/logo_transparente.png" alt="logo" class="logo_header">
        <div class="container_botao">
        </div>
    </header>

<section class="container_cadastro">
    <div class="cadastro_titulo">
        <h1>Guias de recolhimento</h1><br>
        <button>+ Nova Guia de Recolhimento</button>
    </div>
    <div id="FormBox">
        <div class="conteiner_quatro">
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

        <br><br>

        <div class="conteiner_quatro">
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

        <br><br>

    <div class="conteiner_quatro">
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
</section>

</body>
</html>



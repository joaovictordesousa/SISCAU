<!DOCTYPE html>
<html lang="pt-br">
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
        <div class="container_botao"></div>
    </header>

<section class="container_cadastro">
    <div class="cadastro_titulo">
        <h1>Guias de recolhimento</h1><br>
    </div>
    <div id="FormBox">
        <div class="container_quatro">
        <div class="tipo_recolhimento">
        <label>Tipo de recolhimento</label>
            <select class="CampoSelect" id="m-documentos" name="" required>
                <option value="">Documentos</option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
            </select>
    </div>
    <div class="instituicao_financeira">
            <label>Instituição financeira</label>
            <select class="CampoSelect" id="m-documentos" name="" required>
                <option value="">Documentos</option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
            </select>
            </div>
        </div>

        <br><br>

        <div class="container_quatro">
        <div class="agencia">
            <label>Agência</label>
                <select class="CampoSelect">
                    <option value="">0000000</option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
            </div>
            <div class="conta">
                <label>Conta</label>
                <input type="number" class="CampoInput"></input> 
            </div>
            <div class="contrato">
                <label>Contrato</label>
                <input type="number" class="CampoInput"></input> 
            </div>
            <div class="aditivo">
                <label>Aditivo</label>
                <input type="text" class="CampoInput"></input> 
            </div>
            <!---->
        </div>

        <br><br>

    <div class="container_quatro">
        <div>
            <label>Data do GR</label>
            <input type="number" class="CampoInput"></input> 
        </div>
        <div>    
            <label>Data de validade</label>
            <input type="number" class="CampoInput"></input> 
        </div>
        <div>
            <label>Tipo de documento</label>
                <select class="CampoSelect">
                    <option value="">Documentos</option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
            </div>
        <div>    
            <label>Número</label>
            <input type="number" class="CampoInput"></input>
        </div>
    </div>
    <br><br>
    
    <div class="container_quatro">
    <div class="empresa">
            <label>Empresa</label>
                <select class="CampoSelect">
                    <option value="">Empresa</option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
    </div>
    <div class="valor">    
            <label>Valor</label>
            <input type="number" class="CampoInput"></input>
        </div>
</div>
<br><br>

<div class="container_quatro">
        <div class="documento">
            <label>Documento</label>
            <input type="text" class="CampoInput"></input> 
        </div>
        <div class="numero_nl">    
            <label>Numero da NL</label>
            <input type="number" class="CampoInput"></input> 
        </div>
</div>
<br><br>

<div class="container_quatro">
        <div class="historico">
            <label>Histórico</label>
            <input type="text" class="CampoInput"></input> 
        </div>
</div>
<br><br><br>

<div class="button">
<div>
    <button class="botao-cadastro">Salvar</button>
</div>
<div>
    <button class="botao-cadastro">Cancelar</button>
</div>
</div>

</section>
<br><br><br><br>        
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logoicon.jpg">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>SISCAU</title>
</head>
<body>
    <header class="cabecalho">
        <img src="img/logo_branca.png" alt="logo" class="logo_header">
        <div class="container_botao"></div>
    </header>

<section class="container_cadastro">

    <div class="container_completo_cadastro">

    <div class="cadastro_titulo">
        <h1>Guias de recolhimento</h1><br>
    </div>

        <form action="/events" method="POST">
            @csrf
            <div id="FormBox">
                <div class="container_fileira">
                <div class="tipo_recolhimento">
                <label>Tipo de recolhimento</label>
                    <select class="CampoSelect" id="recolhimento" name="recolhimento" required>
                        <option value="">Documentos</option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
            </div>
            <div class="instituicao_financeira">
                    <label>Instituição financeira</label>
                    <select class="CampoSelect" id="financeira" name="financeira" required>
                        <option value="$">Documentos</option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                    </div>
                </div>

                <br><br>

                <div class="container_fileira">
                <div class="agencia">
                    <label>Agência</label>
                        <select class="CampoSelect" id="agencias" name="agencias">
                            <option value="">0000000</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="conta">
                        <label>Conta</label>
                        <input type="number" id="contas" name="contas" class="CampoInput"></input> 
                    </div>
                    <div class="contrato">
                        <label>Contrato</label>
                        <input type="number" id="contatos" name="contatos" class="CampoInput"></input> 
                    </div>
                    <div class="aditivo">
                        <label>Aditivo</label>
                        <input type="text" id="aditivos" name="aditivos" class="CampoInput"></input> 
                    </div>
                    <!---->
                </div>

                <br><br>

            <div class="container_fileira">
                <div>
                    <label>Data do GR</label>
                    <input type="number" id="datas_grs" name="datas_grs" class="CampoInput"></input> 
                </div>
                <div>    
                    <label>Data de validade</label>
                    <input type="number" id="data_validade" name="data_validade" class="CampoInput"></input> 
                </div>
                <div>
                    <label>Tipo de documento</label>
                        <select class="CampoSelect" name="documentos" id="documentos">
                            <option value="">Documentos</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                <div>    
                    <label>Número</label>
                    <input type="number" id="numeros" name="numeros" class="CampoInput"></input>
                </div>
            </div>
            <br><br>
            
            <div class="container_fileira">
            <div class="empresa">
                    <label>Empresa</label>
                        <select class="CampoSelect" id="empresa" name="empresa">
                            <option value="">Empresa</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
            </div>
            <div class="valor">    
                    <label>Valor</label>
                    <input type="number" id="valores" name="valores" class="CampoInput"></input>
                </div>
        </div>
        <br><br>

        <div class="container_fileira">
                <div class="documento">
                    <label>Documento</label>
                    <input type="text" id="documentos" name="documentos" class="CampoInput"></input> 
                </div>
                <div class="numero_nl">    
                    <label>Numero da NL</label>
                    <input type="number" id="numeros_nls" name="numeros_nls" class="CampoInput"></input> 
                </div>
        </div>
        <br><br>

        <div class="container_fileira">
                <div class="historico">
                    <label>Histórico</label>
                    <input type="text" id="historicos" name="historicos" class="CampoInput"></input> 
                </div>
        </div>
        <br><br><br>
    </form>

        <div class="button">
        <div>
            <button class="botao-salvar">Salvar</button>
        </div>
        <div>
            <a href="{{ route('pesquisa')}}" class="botao-cadastro">Cancelar</a>
        </div>
        </div>
    </div>
</section>
<br><br><br><br>        
<!-- Onde vai pesquisar é levar para o relatorio-->
<!-- Para que leve depois da pesquisa -->
<!DOCTYPE html>
<html lang="pt-br">
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
                <input type="number" class="CampoInput" ></input> 
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
                
            @foreach($recolhimentos as $recolhimento)   
                <option value="{{ $recolhimento->id }}">{{ $recolhimento->descricao }}</option>
            @endforeach

            </select>
            </div>
        </div>

        <br><br>

        <div class="container_quatro">
        <div>
            <label>Agência</label>
                <select class="CampoSelect">

                @foreach($agencias as $agencia) 
                    <option value="{{ $agencia->id }}">{{ $agencia->descricao }}</option>
                @endforeach

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

        <div>
            <label>Data da baixa</label>
            <input type="date" class="campodual"></input>
            <span>a</span>
            <input type="date" class="campodual"></input> 
        </div>

    </div>

    <br><br><br>
    <div class="container_quatro">

    <div class="container_documento">

        <label>Tipo do Documento</label>
            <select class="CampoSelect">

            @foreach($documentos as $documento)     
                <option value="{{ $documento->id }}">{{ $documento->descricao }}</option>
            @endforeach
                    
            </select>

    </div>

        <div>
            <label>Numero da NL</label>
            <input type="number" class="CampoInput"></input> 
        </div>

        <div class="espaco_div_5">
        <label>Tipo do consulta</label>
            <select class="CampoSelect">
                <option value="">Tipo da Consulta</option>
                <option value="baixadas">Baixadas</option>
                <option value="baixadas antes do vencimento">Baixadas antes do vencimento</option>
                <option value="nao baixadas">Não baixadas</option>
                <option value="vencidas e nao baixadas">Vencidas e não baixadas</option>
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

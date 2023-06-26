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

    <form action="/historico" method="POST">
    @csrf
    <div id="FormBox">
        <div class="container_quatro">
            <div>
                <label>Numero</label>
                <input type="number" class="CampoInput" id="nr" name="nr"></input> 
            </div>
            <div>
                <label>Contrato</label>
                <input type="number" class="CampoInput" id="nrcontrato" name="nrcontrato"></input> 
            </div>
            <div>
                <label>Documento</label>   
                <input type="number" class="CampoInput" id="nrdocumento" name="nrdocumento"></input> 
            </div>
        <div>
            <label>Tipo de recolhimento</label>
            <select class="CampoSelect" id="auxtiporecolhimentoid" name="auxtiporecolhimentoid">
                
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
                <select class="CampoSelect" id="codigoagencia" name="codigoagencia">

                @foreach($agencias as $agencia) 
                    <option value="{{ $agencia->id }}">{{ $agencia->descricao }}</option>
                @endforeach

                </select>
            </div>
            <div>
                <label>Processos de baixa</label>
                <input type="text" class="CampoInput" id="nrbaixaprocesso" name="nrbaixaprocesso"></input> 
            </div>
            <div>
                <label>CPF/CNPJ</label>
                <input type="number" class="CampoInput" id="nrcpfcnpj" name="nrcpfcnpj"></input> 
            </div>
            <!---->
        </div>
        <br><br>
    <div class="container_quatro">
        <div>
            <label>Data do GR</label>
            <input type="date" class="campodual" id="datagrinicio" name="datagrinicio"></input> 
            <span>a</span>
            <input type="date" class="campodual" id="datagrfim" name="datagrfim"></input> 
        </div>
        <br>

        <div>
        <label>Data de validade</label>
            <input type="date" class="campodual" id="datavalidadeinicio" name="datavalidadeinicio"></input>
            <span>a</span>
            <input type="date" class="campodual" id="datavalidadefim" name="datavalidadefim"></input> 
        </div>

        <div>
            <label>Data da baixa</label>
            <input type="date" class="campodual" id="databaixainicio" name="databaixainicio"></input>
            <span>a</span>
            <input type="date" class="campodual" id="databaixafim" name="databaixafim"></input> 
        </div>

    </div>

    <br><br><br>
    <div class="container_quatro">

    <div class="container_documento">

        <label>Tipo do Documento</label>
            <select class="CampoSelect" id="nrauxtipodocumentoid" name="nrauxtipodocumentoid">

            @foreach($documentos as $documento)     
                <option value="{{ $documento->id }}">{{ $documento->descricao }}</option>
            @endforeach
                    
            </select>

    </div>

        <div>
            <label>Numero da NL</label>
            <input type="number" class="CampoInput" id="nrnumeronl" name="nrnumeronl"></input> 
        </div>

        <div class="espaco_div_5">
        <label>Tipo do consulta</label>
            <select class="CampoSelect" namer id="tipoconsulta" name=""> 
                <option value="">Tipo da Consulta</option>
                <option value="baixadas">Baixadas</option>
                <option value="baixadas antes do vencimento">Baixadas antes do vencimento</option>
                <option value="nao baixadas">Não baixadas</option>
                <option value="vencidas e nao baixadas">Vencidas e não baixadas</option>
            </select>
        </div>

    </div>
    </form>

    <br><br><br>
    
    <div>
        <button class="btn">Pesquisar</button>   
    </div>
     
    </div>
</section>

</body>
</html>

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

        <form action="/cadastro" method="POST">
            @csrf
            <div id="FormBox">
                <div class="container_fileira">
                <div class="tipo_recolhimento">
                <label>Tipo de recolhimento</label>
                    <select class="CampoSelect" id="recolhimento" name="auxtiporecolhimentoid" required>
                    <!-- <option value="Instituição financeira">Instituição financeira</option> -->

                    
                    
                    @foreach($recolhimentos as $recolhimento)
                        <option value="{{ $recolhimento->id }}">{{ $recolhimento->descricao }}</option>
                    @endforeach

                    
                    </select>
            </div>
            
            <div class="instituicao_financeira">
                    <label>Instituição financeira</label>
                    <select class="CampoSelect" id="financeira" name="auxinstituicaofinanceiraid" required>
                        <option value="Instituição financeira">Instituição financeira</option>

                        @foreach($financas as $fin)
                        <option value="{{ $fin->id }}">{{ $fin->descricao }}</option>
                        @endforeach

                    </select>
                    </div>
                </div>

                <br><br>

                <div class="container_fileira">
                <div class="agencia">
                    <label>Agência</label>
                        <select class="CampoSelect" id="agencias" name="auxagenciaid" required>
                            <option value="Agência">Agência</option>

                            @foreach($agencia as $agen)
                            <option value="{{ $agen->id }}">{{ $agen->descricao }}</option>
                            @endforeach
                          
                        </select>
                    </div>
                    <div class="conta">
                        <label>Conta</label>
                        <input type="number" id="numeroconta" name="numeroconta" class="CampoInput" required></input> 
                    </div>
                    <div class="contrato">
                        <label>Contrato</label>
                        <input type="number" id="numerocontrato" name="numerocontrato" class="CampoInput" required></input> 
                    </div>
                    <div class="aditivos">
                        <label>Aditivo</label>
                        <input type="text" id="aditivo" name="aditivo" class="CampoInput" required></input> 
                    </div>
                    <!---->
                </div>

                <br><br>

            <div class="container_fileira">
                <div>
                    <label>Data do GR</label>
                    <input type="date" id="datagr" name="datagr" class="CampoInput" required></input> 
                </div>
                <div>    
                    <label>Data de validade</label>
                    <input type="date" id="datavalidade" name="datavalidade" class="CampoInput" required></input> 
                </div>
                <div>
                    <label>Tipo de documento</label>
                        <select class="CampoSelect" name="auxtipodocumentoid" id="documentos">
                        <option value="Tipo de documento">Tipo de documento</option>
                        @foreach($documento as $docu)
                            <option value="{{ $docu->id }}">{{ $docu->descricao }}</option>
                        @endforeach
                        </select>
                    </div>
                <div>    
                    <label>Número</label>
                    <input type="number" id="numero" name="numero" class="CampoInput" required></input>
                </div>
            </div>
            <br><br>
            
            <div class="container_fileira">
            <div class="empresa">
                    <label>Empresa</label>
                    <select class="CampoSelect" id="empresa" name="auxempresaid" required>
                    <option value="Empresa">Empresa</option>  
                    @foreach($empresa as $empre)       
                        <option value="{{ $empre->id }}">{{ $empre->razaosocial }}</option>     
                    @endforeach      
                    </select>
            </div>
            <div class="valor">    
                    <label>Valor</label>
                    <input type="number" id="valor" name="valor" class="CampoInput" required></input>
                </div>
        </div>
        <br><br>

        <div class="container_fileira">
                <div class="documento">
                    <label>Documento</label>
                    <input type="text" id="numerodocumento" name="numerodocumento" class="CampoInput" required></input> 
                </div>
                <div class="numero_nl">    
                    <label>Numero da NL</label>
                    <input type="number" id="numeros_nls" name="numeronl" class="CampoInput" required></input> 
                </div>
        </div>
        <br><br>

        <div class="container_fileira">
                <div class="historicos">
                    <label>Histórico</label>
                    <input type="text" id="historico" name="historico" class="CampoInput" required></input> 
                </div>
        </div>
        <br><br><br>
    </form>

        <div class="button">
        <div>
            <button class="botao-salvar">Salvar</button>
        </div>
        <div>
            <a href="{{ route('pesquisa')  }}" class="botao-cadastro">Cancelar</a>
        </div>
        </div>
    </div>
</section>
<br><br><br><br>        
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

<div class="form-container">

    <div class="cadastro_titulo">
        <h1>Guias de recolhimento</h1><br>
        <hr>
    </div>

    <form action="/cadastro" method="POST">
        @csrf
     <div class="form-row">
        <label>Tipo de recolhimento:</label>
        <select id="recolhimento" name="auxtiporecolhimentoid" required> 
        <!-- <option value="Instituição financeira">Instituição financeira</option> -->                 
        <option value="">Selecione</option>
        @foreach($recolhimentos as $recolhimento)
            <option value="{{ $recolhimento->id }}">{{ $recolhimento->descricao }}</option>
        @endforeach

        </select>
      </div>

      <div class="form-row">
        <label>Instituição financeira:</label>
            <select id="financeira" name="auxinstituicaofinanceiraid" required>
            <option value="">Selecione</option>
            @foreach($financas as $fin)
             <option value="{{ $fin->id }}">{{ $fin->descricao }}</option>
            @endforeach

            </select>
      </div>
  
      <div class="form-row">
        <label>Agência:</label>
            <select id="agencias" name="auxagenciaid" required>
            <option value="">Selecione</option>
            @foreach($agencia as $agen)
              <option value="{{ $agen->id }}">{{ $agen->descricao }}</option>
            @endforeach
                          
            </select>
      </div>
  
      <div class="form-row">
        <label >Conta</label>
        <input type="number" id="numeroconta" name="numeroconta" required></input>  

        <label style="margin: 0 0 0 30px; flex-basis: 102px;">Contrato:</label>
        <input type="number" id="numerocontrato" name="numerocontrato" required></input>
      </div>
  
      <div class="form-row">
        <label>Aditivo</label>
        <input type="text" id="aditivo" name="aditivo" required></input> 
      </div>

      <div class="form-row">     

        <label>Data do GR:</label>
        <input type="date" id="datagr" name="datagr" required></input> 

        <label style="margin: 0 0 0 30px; flex-basis: 102px;">Data de validade:</label>
        <input type="date" id="datavalidade" name="datavalidade" required></input> 
        
      </div>
  
      <div class="form-row">
        <label>Tipo de documento</label>
        <select name="auxtipodocumentoid" id="documentos">
          <option value="">Selecione</option>        
          @foreach($documento as $docu)
            <option value="{{ $docu->id }}">{{ $docu->descricao }}</option>
          @endforeach
        </select>
      </div>
  
      <div class="form-row">
        <label>Número</label>
        <input type="number" id="numero" name="numero" required></input>
      </div>
  
      <div class="form-row">
        <label>Empresa</label>
        <select id="empresa" name="auxempresaid" required>
          <option value="">Selecione</option>
        @foreach($empresa as $empre)       
            <option value="{{ $empre->id }}">{{ $empre->razaosocial }}</option>     
        @endforeach      
        </select>
      </div>
  
      <div class="form-row">
        <label>Valor:</label>
        <input type="number" id="valor" name="valor" required></input>


        <label style="margin: 0 0 0 30px; flex-basis: 102px;">Documento:</label>
        <input type="text" id="numerodocumento" name="numerodocumento" required></input>
      </div>

      <div class="form-row">
        <label>Numero da NL:</label>
        <input type="number" id="numeros_nls" name="numeronl" required></input>
      </div>

      <div class="form-row">
        <label>Histórico:</label>
        <input type="text" id="historico" name="historico" required></input>
      </div>
      <br><br><br><br>  
        <div class="button">
        <div>
            <button class="botao-salvar">Salvar</button>
        </div>
        
        <div>
            <a href="{{ route('pesquisa')  }}" class="botao-cadastro">Cancelar</a>
        </div>
    </div>
</section>
      
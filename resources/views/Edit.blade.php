@include('navbar.cabecalho');
    
<section class="container_cadastro">

<div class="form-container">

    <div class="cadastro_titulo">
        <h1>Guias de recolhimento</h1><br>
        <hr>
    </div>

    <form action="{{ route('Principal.store')}}" method="POST">
        @csrf
     <div class="form-row">
        <input type="hidden" method="PUT">

        <label>Tipo de recolhimento:</label>
        <select id="recolhimento" name="auxtiporecolhimentoid"> 
        <!-- <option value="Instituição financeira">Instituição financeira</option> -->                 
        <option value="">Selecione</option>
        @foreach($recolhimentos as $recolhimento)
            <option value="{{ $recolhimento->id }}">{{ $recolhimento->descricao }}</option>
        @endforeach

        </select>
      
        <label>Instituição financeira:</label>
            <select id="financeira" name="auxinstituicaofinanceiraid">
            <option value="">Selecione</option>
            @foreach($financas as $fin)
             <option value="{{ $fin->id }}">{{ $fin->descricao }}</option>
            @endforeach

            </select>

        <label>Agência:</label>
            <select id="agencias" name="auxagenciaid">
            <option value="">Selecione</option>
            @foreach($agencia as $agen)
              <option value="{{ $agen->id }}">{{ $agen->descricao }}</option>
            @endforeach
                          
            </select>
      </div>
  
      <div class="form-row">
        <label>Conta:</label>
        <input value="{{ $GuiasRecolhimento->numeroconta }}" type="text" id="numeroconta" name="numeroconta" maxlength="10">

        <label style="margin: 0 0 0 30px; flex-basis: 102px;">Contrato:</label>
        <input type="text" id="numerocontrato" name="numerocontrato" maxlength="10">

        <label>Aditivo:</label>
        <input type="text" id="aditivo" name="aditivo" maxlength="25">
      </div>

      <div class="form-row">     

        <label>Data do GR:</label>
        <input type="date" id="datagr" name="datagr">

        <label style="margin: 0 0 0 30px; flex-basis: 102px;">Data de validade:</label>
        <input type="date" id="datavalidade" name="datavalidade">

        <label>Tipo de documento:</label>
        <select name="auxtipodocumentoid" id="documentos">
          <option value="">Selecione</option>        
          @foreach($documento as $docu)
            <option value="{{ $docu->id }}">{{ $docu->descricao }}</option>
          @endforeach
        </select>
      </div>
  
      <div class="form-row">
        <label>Numero</label>
        <input value="{{ $GuiasRecolhimento->numero }}" type="text" id="numero" name="numero" maxlength="10">

        <label>Empresa:</label>
        <select id="empresa" name="auxempresaid">
          <option value="">Selecione</option>
        @foreach($empresa as $empre)       
            <option value="{{ $empre->id }}">{{ $empre->razaosocial }}</option>     
        @endforeach      
        </select>
      </div>
  
      <div class="form-row">
        <label>Valor:</label>
        <input {{ $GuiasRecolhimento->valor }} type="text" id="valor" name="valor" maxlength="18">


        <label>Documento:</label>
        <input {{ $GuiasRecolhimento->numerodocumento }} type="text" id="numerodocumento" name="numerodocumento" maxlength="25">

        <label>Numero da NL:</label>
        <input {{ $GuiasRecolhimento->numeronl }} type="text" id="numeros_nls" name="numeronl">
      </div>

      <div class="form-row">
        <label>Histórico:</label>
        <input type="text" id="historico" name="historico" maxlength="512">
      </div>
      <br><br><br><br>  
        <div class="button">
        <div>
          <button class="botao-salvar">Salvar</button>
          <a href=" {{ route('principal_historico') }} " class="btn btn-danger" style="padding: 1.09em 1.5em">Voltar</a> 
        </div>
    </div>
</section>

<script src="../js/cadastro.js"></script>
</body>
</html>

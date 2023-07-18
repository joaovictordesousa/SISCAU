@include('navbar.cabecalho')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    <script>
        setTimeout(function() {
            document.querySelector('.alert-success').style.display = 'none';
        }, {{ session('display_time', 5000) }});
    </script>
@endif

<section class="container_pesquisa">

    <div class="form-container">
    <!-- Guias de recolhimento  -->
    <div class="pesquisa_titulo">
        <h1 class="titulo_recolhimento" >Guias de recolhimento</h1>
        <a href="{{ route('NovaGuia')  }}" id="NovaGuia">+ Nova guia de recolhimento</a><br><br>
        <hr>
    </div>
    <!--  -->
    
    <form action="{{ route('principal.historico') }}" method="POST">
      @csrf
      <div class="form-row">
        <label for="numero">Numero:</label>
        <input type="text" id="nr" name="nr">
  
        <label for="contrato" style="margin: 0 0 0 20px; flex-basis: 102px;">Contrato:</label>
        <input type="text" id="nrcontrato" name="nrcontrato">

        <label for="documento">Documento:</label>
        <input type="text" id="nrdocumento" name="nrdocumento">
      </div>
  
      <div class="form-row">
        <label for="recolhimento">Tipo de recolhimento:</label>
        <select id="auxtiporecolhimento" name="auxtiporecolhimento">
          <option value="">Selecione</option>
        @foreach($recolhimentos as $recolhimento)  
          <option value="{{ $recolhimento->id }}">{{ $recolhimento->descricao }}</option>
        @endforeach
        </select>

        <label for="agencia">Agência:</label>
        <select id="codigoagencia" name="codigoagencia">
          <option value="">Selecione</option>
        @foreach($agencias as $agencia) 
          <option value="{{ $agencia->id }}">{{ $agencia->descricao }}</option>
        @endforeach
        </select>
      </div>

      <div class="form-row">
        <label for="baixa">Processos de baixa:</label>
        <input type="text" id="nrbaixaprocesso" name="nrbaixaprocesso">
     
        <label for="cpf_cnpj" style="margin: 0 0 0 20px; flex-basis: 102px;">CPF/CNPJ:</label>
        <input type="text" id="nrcpfcnpj" name="nrcpfcnpj">
      </div>
  
      <div class="form-row">
        <label for="gr">Data do GR:</label>

        <input type="date" id="datagrinicio" name="datagrinicio">
        <span>a</span>
        <input type="date" id="datagrfim" name="datagrfim">

      </div>
  
      <div class="form-row">
        <label for="validade">Data de validade:</label>
        <input type="date" id="datavalidadeinicio" name="datavalidadeinicio">
        <span>a</span>
        <input type="date" id="datavalidadefim" name="datavalidadefim">
      </div>
  
      <div class="form-row">
        <label for="data_baixa">Data da baixa:</label>
        <input type="date" id="databaixainicio" name="databaixainicio">
        <span>a</span>
        <input type="date" id="databaixafim" name="databaixafim">
      </div>
  
      <div class="form-row">
        <label for="tipo_documento">Tipo do Documento:</label>
        <select id="nrauxtipodocumentoid" name="nrauxtipodocumentoid">
          <option value="">Selecione</option>
        @foreach($documentos as $documento)
          <option value="{{ $documento->id }}">{{ $documento->descricao }}</option>
        @endforeach
        </select>

        <label for="numero_nl">Número da NL:</label>
        <input type="text" id="nrnumeronl" name="nrnumeronl">
      </div>
  
      <div class="form-row">
        <label for="tipo_consulta">Tipo da Consulta:</label>
        <select id="tipoconsulta" name="tipoconsulta">
          <option value="">Selecione</option>
          <option value="baixadas">Baixadas</option>
          <option value="baixadas antes do vencimento">Baixadas antes do vencimento</option>
          <option value="nao baixadas">Não baixadas</option>
          <option value="vencidas e nao baixadas">Vencidas e não baixadas</option>
        </select>
      </div>
  
      <div class="form-row">
        <button class="butao">Pesquisar</button>  
      </div>
    </form>
  </div>

    <br><br><br>
    

</section>

</body>
</html>

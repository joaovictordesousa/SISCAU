@include('navbar.cabecalho');

<style>
  form {
    box-shadow: 0px 1px 10px 0px gray;
    padding: 4em; 
    background-color: white;
  }
  
  .form-control {
    padding: 9px 10px;
    border: 1px solid gray
  }
  
  .form-select {
    padding: 9px 10px;
    border: 1px solid gray
  }
  
  .titulo_edit {
    font-size: 25px;
  }
  
  .form-floating {
    margin: 2em 0 0 0;
  }
  
  @media only screen and (max-width: 600px){
    #form_cadastro {
    box-shadow: none;
    background-color: white;
  }
  
  }
  
  </style>

    <form action="{{ route('principal.update', ['GuiasRecolhimento'=>$GuiasRecolhimento->id]) }}" class="row g-3" method="POST" style="width: 80%; margin: 5em auto;">
      <h1 class="titulo_edit">Guias de recolhimento <span style="font-size: 20px; color: rgb(120, 120, 120);"> - (Editar)</span></h1><br> 
      @csrf
      <input type="hidden" name="_method" value="PUT">
      <br><br><br>
      <div class="col-md-4">
        <label class="form-label"><b>Tipo de recolhimento</b></label>
        <select class="form-select" id="recolhimento" name="auxtiporecolhimentoid" required>
          @foreach($recolhimentos as $reco)
            <option value="{{ $reco->id }}">{{ $reco->descricao }}</option>
          @endforeach
        </select>
      </div>
  
      <div class="col-md-4">
        <label class="form-label"><b>Instituição financeira</b></label>
        <select class="form-select" id="financeira" name="auxinstituicaofinanceiraid" required>
          @foreach($financas as $fin)
          <option value="{{ $fin->id }}">{{ $fin->descricao }}</option>
          @endforeach
        </select>
      </div>
  
      <div class="col-md-4">
        <label class="form-label"><b>Agência</b></label>
        <select class="form-select" id="agencias" name="auxagenciaid" required>
          @foreach($agencia as $agen)
            <option value="{{ $agen->id }}">{{ $agen->descricao }}</option>
          @endforeach
        </select>
      </div>
  <br><br>
      <div class="col-md-4">
        <label class="form-label"><b>Conta</b></label>
        <input value="{{ $GuiasRecolhimento->numeroconta }}" type="text" class="form-control" id="numeroconta" name="numeroconta" maxlength="10" required>
      </div>
  
      <div class="col-md-4">
        <label class="form-label"><b>Contrato</b></label>
        <input value="{{ $GuiasRecolhimento->numerocontrato }}" type="text" class="form-control" id="numerocontrato" name="numerocontrato" maxlength="10" required>
      </div>
      </div>
  
      <div class="col-md-4">
        <label class="form-label"><b>Aditivo</b></label>
        <input value="{{ $GuiasRecolhimento->aditivo }}" type="text" class="form-control" id="aditivo" name="aditivo" maxlength="25" required>
      </div>
  
      <div class="col-md-4">
        <label class="form-label"><b>Data do GR</b></label>
        <input value="{{ $GuiasRecolhimento->datagr }}" type="date" class="form-control" id="datagr" name="datagr" style="padding: 9px 10px" required>
      </div>
  
      <div class="col-md-4">
        <label class="form-label"><b>Data de validade</b></label>
        <input value="{{ $GuiasRecolhimento->datavalidade }}" type="date" class="form-control" id="datavalidade" name="datavalidade" style="padding: 9px 10px" required>
      </div>
  
      <div class="col-md-4">
        <label class="form-label"><b>Tipo de documento</b></label>
        <select class="form-select" name="auxtipodocumentoid" id="documentos" required>
          @foreach($documento as $docu)
            <option value="{{ $docu->id }}">{{ $docu->descricao }}</option>
          @endforeach
        </select>
      </div>

      <div class="col-md-6">
        <label class="form-label"><b>Numero</b></label>
        <input value="{{ $GuiasRecolhimento->numero }}" type="text" class="form-control" id="numero" name="numero" maxlength="10">
      </div>
      <div class="col-md-6">
        <label class="form-label"><b>Empresa</b></label>
        <select id="empresa" name="auxempresaid" class="form-select">
          @foreach($empresa as $empre)       
          <option value="{{ $empre->id }}">{{ $empre->razaosocial }}</option>     
        @endforeach
        </select>
      </div>

      <div class="col-md-4">
        <label class="form-label"><b>Valor</b></label>
        <input type="text" value="{{ $GuiasRecolhimento->valor }}" class="form-control" id="valor" name="valor" maxlength="18" required>
      </div>

      <div class="col-md-4">
        <label class="form-label"><b>Documento</b></label>
        <input value="{{ $GuiasRecolhimento->numerodocumento }}" type="text" class="form-control" id="numerodocumento" name="numerodocumento" maxlength="25" required>
      </div>
  
  
      <div class="col-md-4">
        <label class="form-label"><b>Numero da NL</b></label>
        <input value="{{ $GuiasRecolhimento->numeronl }}" type="text" class="form-control" id="numeros_nls" name="numeronl" required>
      </div>
  
      <div class="form-floating">
        <textarea value="{{ $GuiasRecolhimento->historico }}" class="form-control" placeholder="Leave a comment here" id="historico" name="historico" maxlength="512" style="height: 100px" required></textarea>
        <label for="floatingTextarea2"><b>Histórico</b></label>
      </div>

      <div class="button">
          <button class="btn btn-primary" style="padding:  15px 20px;">Salvar</button>
          <a href="{{ route('pesquisa')  }}" class="btn btn-danger" style="padding:  15px 20px;">Cancelar</a>
      </div>
      </form>
<script src="../js/cadastro.js"></script>
</body>
</html>

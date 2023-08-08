@include('navbar.cabecalho')
    
<style>
 #form_cadastro  {
  width: 80%;
  margin: 5em auto;
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

.titulo_cadastro {
  margin: 5px 0 50px 0;
  font-size: 25px;
}

.form-floating {
  margin: 2em 0 0 0;
}

@media only screen and (max-width: 600px){
  #form_cadastro {
    width: 100%;
    box-shadow: none;
    background-color: white;
}

}

</style>

    <form class="row g-3" id="form_cadastro" action="{{ route('Principal.store')}}" method="POST">
      <h1 class="titulo_cadastro">Guias de recolhimentos<span style="font-size: 20px; color: rgb(120, 120, 120);"> - (Cadastro)</span></h1>
      @csrf
      <div class="col-md-4">
        <label class="form-label"><b>Tipo de recolhimento</b></label>
        <select class="form-select" id="recolhimento" name="auxtiporecolhimentoid" required>
          <option selected disabled value="">Selecione...</option>
          @foreach($recolhimentos as $recolhimento)
          <option value="{{ $recolhimento->id }}">{{ $recolhimento->descricao }}</option>
          @endforeach
        </select>
      </div>
  
      <div class="col-md-4">
        <label class="form-label"><b>Instituição financeira</b></label>
        <select class="form-select" id="financeira" name="auxinstituicaofinanceiraid" required>
          <option selected disabled value="">Selecione...</option>
          @foreach($financas as $fin)
          <option value="{{ $fin->id }}">{{ $fin->descricao }}</option>
          @endforeach
        </select>
      </div>
  
      <div class="col-md-4">
        <label class="form-label"><b>Agência</b></label>
        <select class="form-select" id="agencias" name="auxagenciaid" required>
          <option selected disabled value="">Selecione...</option>
          @foreach($agencia as $agen)
          <option value="{{ $agen->id }}">{{ $agen->descricao }}</option>
          @endforeach
        </select>
      </div>
  <br><br>
      <div class="col-md-4">
        <label for="validationDefault02" class="form-label"><b>Conta</b></label>
        <input type="text" class="form-control" id="numeroconta" name="numeroconta" maxlength="10" required>
      </div>
  
      <div class="col-md-4">
        <label for="validationDefault02" class="form-label"><b>Contrato</b></label>
        <input type="text" class="form-control" id="numerocontrato" name="numerocontrato" maxlength="10" required>
      </div>
      </div>
  
      <div class="col-md-4">
        <label for="validationDefault02" class="form-label"><b>Aditivo</b></label>
        <input type="text" class="form-control" id="aditivo" name="aditivo" maxlength="25" required>
      </div>
  
      <div class="col-md-4">
        <label for="validationDefault02" class="form-label"><b>Data do GR</b></label>
        <input type="date" class="form-control" id="datagr" name="datagr" style="padding: 9px 10px" required>
      </div>
  
      <div class="col-md-4">
        <label for="validationDefault02" class="form-label"><b>Data de validade</b></label>
        <input type="date" class="form-control" id="datavalidade" name="datavalidade" style="padding: 9px 10px" required>
      </div>
  
      <div class="col-md-4">
        <label class="form-label"><b>Tipo de documento</b></label>
        <select class="form-select" name="auxtipodocumentoid" id="documentos"> required>
          <option selected disabled value="">Selecione...</option>
          @foreach($documento as $docu)
          <option value="{{ $docu->id }}">{{ $docu->descricao }}</option>
          @endforeach
        </select>
      </div>
  
      <div class="col-md-4">
        <label for="validationDefault02" class="form-label"><b>Numero</b></label>
        <input type="text" class="form-control" id="numero" name="numero" maxlength="10" required>
      </div>
  
      <div class="col-md-8">
        <label for="validationDefault04" class="form-label"><b>Empresa</b></label>
        <select class="form-select" id="empresa" name="auxempresaid" required>
          <option selected disabled value="">Selecione...</option>
          @foreach($empresa as $empre)
          <option value="{{ $empre->id }}">{{ $empre->razaosocial }}</option>
          @endforeach
        </select>
      </div>
  
      <div class="col-md-4">
        <label for="validationDefault02" class="form-label"><b>Valor</b></label>
        <input type="text" class="form-control" id="valor" name="valor" oninput="formatarValor()" maxlength="18" required>
      </div>
  
      <div class="col-md-4">
        <label for="validationDefault02" class="form-label"><b>Documento</b></label>
        <input type="text" class="form-control" id="numerodocumento" name="numerodocumento" maxlength="25" required>
      </div>
  
      <div class="col-md-4">
        <label for="validationDefault02" class="form-label"><b>Numero da NL</b></label>
        <input type="text" class="form-control" id="numeros_nls" name="numeronl" required>
      </div>
  
      <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" id="historico" name="historico" maxlength="512"
          style="height: 100px"></textarea>
        <label for="floatingTextarea2"><b>Histórico</b></label>
      </div>
      <div class="button">
          <button class="btn btn-primary" style="padding:  15px 20px;">Salvar</button>
          <a href="{{ route('principal.mostrardados')  }}" class="btn btn-danger" style="padding:  15px 20px;">Cancelar</a>
      </div>

    </form>
    <br><br><br><br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="../js/cadastro.js"></script>
</body>
</html>

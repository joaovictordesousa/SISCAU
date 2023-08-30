@include('navbar.cabecalho')

<section class="container_form_baixas">
<div class="container_baixas">
    <h1 class="titulo_baixas">Cadastrar Baixas</h1>
</div>

<form class="row g-3 needs-validation" method="POST">
    <hr>
    @csrf
    <div class="col-md-4">
        <label for="validationCustom01" class="form-label"><b>Data</b></label>
        <input type="date" class="form-control" id="validationCustom01" required>
    </div>

    <div class="col-md-4">
        <label for="validationCustom01" class="form-label"><b>Processo</b></label>
        <input type="text" class="form-control" id="validationCustom01">
    </div>

    <div class="col-md-4">
        <label for="validationCustom01" class="form-label"><b>Numero da NL</b></label>
        <input type="text" class="form-control" id="validationCustom01">
    </div>
    {{-- DIVISÃO --}}
    <br><br><br><br>
    <div class="col-md-8">
        <label for="validationCustom01" class="form-label"><b>Mensagem</b></label>
        <input type="text" class="form-control" id="validationCustom01">
    </div>

    <div class="col-md-4">
        <label for="validationCustom01" class="form-label"><b>Data da mensagem</b></label>
        <input type="date" class="form-control" id="validationCustom01">
    </div>

    <div class="col-12">
        <button class="btn btn-success" type="submit">CADASTRAR</button>
    </div>
</form>

</section>
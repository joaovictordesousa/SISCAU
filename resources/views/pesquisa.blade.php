@include('navbar.cabecalho')

<style>
    .form-control {
        padding: 9px 10px;
        border: 1px solid rgb(200, 200, 200)
    }

    .form-select {
        padding: 9px 10px;
        border: 1px solid rgb(200, 200, 200)
    }

    .input-group-text {
        background-color: rgb(255, 255, 255);
        border: none;
    }

    .form-row {
        margin: 4em 0 0 0;
    }

    .btn-primary {
        padding: 1em;
    }

    @media only screen and (max-width: 600px) {
        #form-pesquisa {
            width: 80%;
            margin: 0 auto;
        }

        .pesquisa_titulo {
            text-align: center;
        }

    }
</style>

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
            <h1 class="titulo_recolhimento">Guias de recolhimento<span
                    style="font-size: 20px; color: rgb(120, 120, 120);"> - (Pesquisa)</span></h1>
            <a href="{{ route('NovaGuia') }}" id="NovaGuia">+ Nova guia de recolhimento</a><br><br>
            <hr>
        </div>
        <!--  -->

        <form class="row g-3" id="form-pesquisa" action="{{ route('principal.historico') }}" method="POST">
            @csrf
            <div class="col-md-4">
                <label class="form-label"><b>Numero</b></label>
                <input type="text" class="form-control" id="nr" name="nr">
            </div>

            <div class="col-md-4">
                <label class="form-label"><b>Contrato</b></label>
                <input type="text" class="form-control" id="nrcontrato" name="nrcontrato">
            </div>

            <div class="col-md-4">
                <label class="form-label"><b>Documento</b></label>
                <input type="text" class="form-control" id="nrdocumento" name="nrdocumento">
            </div>

            <div class="col-md-6">
                <label class="form-label"><b>Tipo de recolhimento</b></label>
                <select class="form-select" id="auxtiporecolhimentoid " name="auxtiporecolhimentoid">
                    <option selected disabled value="">Selecione...</option>
                    @foreach ($recolhimentos as $recolhimento)
                        <option value="{{ $recolhimento->id }}">{{ $recolhimento->descricao }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-6">
                <label class="form-label"><b>Agência</b></label>
                <select class="form-select" id="codigoagencia" name="codigoagencia">
                    <option selected disabled value="">Selecione...</option>
                    @foreach ($agencias as $agencia)
                        <option value="{{ $agencia->id }}">{{ $agencia->descricao }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-6">
                <label for="inputEmail4" class="form-label"><b>Processos de baixa</b></label>
                <input type="text" class="form-control" id="nrbaixaprocesso" name="nrbaixaprocesso">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label"><b>CPF/CNPJ</b></label>
                <input type="text" class="form-control" id="nrcpfcnpj" name="nrcpfcnpj">
            </div>

            <div class="col-4">
                <label for="inputAddress" class="form-label"><b>Data de GR</b></label>
                <div class="input-group mb-3">
                    <input type="date" class="form-control" id="datagrinicio" name="datagrinicio">
                    <span class="input-group-text">a</span>
                    <input type="date" class="form-control" id="datagrfim" name="datagrfim">
                </div>
            </div>

            <div class="col-4">
                <label for="inputAddress" class="form-label"><b>Data de validade</b></label>
                <div class="input-group mb-3">
                    <input type="date" class="form-control" id="datavalidadeinicio" name="datavalidadeinicio">
                    <span class="input-group-text">a</span>
                    <input type="date" class="form-control" id="datavalidadefim" name="datavalidadefim">
                </div>
            </div>

            <div class="col-4">
                <label for="inputAddress" class="form-label"><b>Data da baixa</b></label>
                <div class="input-group mb-3">
                    <input type="date" class="form-control" id="databaixainicio" name="databaixainicio">
                    <span class="input-group-text">a</span>
                    <input type="date" class="form-control" id="databaixafim" name="databaixafim">
                </div>
            </div>

            <div class="col-md-4">
                <label class="form-label"><b>Tipo do documento</b></label>
                <select class="form-select" id="nrauxtipodocumentoid" name="nrauxtipodocumentoid">
                    <option selected disabled value="">Selecione...</option>
                    @foreach ($documentos as $documento)
                        <option value="{{ $documento->id }}">{{ $documento->descricao }}</option>
                    @endforeach
                </select>
                </select>
            </div>

            <div class="col-md-4">
                <label class="form-label"><b>Número da NL</b></label>
                <input type="text" class="form-control" id="nrnumeronl" name="nrnumeronl">
            </div>

            <div class="col-md-4">
                <label class="form-label"><b>Tipo do consulta</b></label>
                <select class="form-select" id="tipoconsulta" name="tipoconsulta" required>
                    <option selected disabled value="">Selecione...</option>
                    <option value="1">baixadas</option>
                    <option value="2">baixadas antes do vencimento</option>
                    <option value="3">baixadas após o vencimento</option>
                    <option value="4">não baixadas</option>
                    <option value="5">vencidas não baixadas</option>
                </select>
            </div>

            <div class="form-row">
                <button class="btn btn-primary">Pesquisar</button>
            </div>
        </form>
    </div>
    <br><br><br>
</section>

</body>

</html>

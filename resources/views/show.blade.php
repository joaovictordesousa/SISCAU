@include('navbar.cabecalho')

<style>
    .card {
        width: 40%;
        margin: 5em auto;
    }

    td {
        text-align: center;
        width: 60%
    }

    .campohisto {
        text-align: none;
    }

    @media only screen and (max-width: 600px) {
        .card {
            width: 100%;
            box-shadow: none;
            border: none;
            margin: 0;
        }

        table {
            width: 60%;
        }

        td {
            text-align: center;
        }
    }
</style>

<div class="card">
    <h2 class="card-title" style="text-align: center; margin: 1em 0;">Guia completa</h2>
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-striped">
                    <tbody>
                        @foreach($GuiasRecolhimento as $Guias)
                        <tr>
                            <th><b>Tipo recolhimento:</b></th>
                            <td>{{ $GuiasRecolhimento->auxtiporecolhimento->descricao }}</td>
                        </tr>
                        <tr>
                            <th><b>Instituição financeira:</b></th>
                            <td>{{ $GuiasRecolhimento->auxinstituicaofinanceira->descricao }}</td>
                        </tr>
                        <tr>
                            <th><b>Agência:</b></th>
                            <td>{{ $GuiasRecolhimento->auxagencia->descricao }}</td>
                        </tr>
                        <tr>
                            <th><b>Conta:</b></th>
                            <td>{{ $GuiasRecolhimento->numeroconta }}</td>
                        </tr>
                        <tr>
                            <th><b>Contrato:</b></th>
                            <td>{{ $GuiasRecolhimento->numerocontrato }}</td>
                        </tr>
                        <tr>
                            <th><b>Aditivo:</b></th>
                            <td>{{ $GuiasRecolhimento->aditivo }}</td>
                        </tr>
                        <tr>
                            <th><b>Data GR:</b></th>
                            <td>{{ $GuiasRecolhimento->datagr }}</td>
                        </tr>
                        <tr>
                            <th><b>Data validade:</b></th>
                            <td>{{ $GuiasRecolhimento->datavalidade }}</td>
                        </tr>
                        <tr>
                            <th><b>Tipo do documento:</b></th>
                            <td>{{ $GuiasRecolhimento->auxtipodocumentoid }}</td>
                        </tr>
                        <tr>
                            <th><b>Numero:</b></th>
                            <td>{{ $GuiasRecolhimento->numero }}</td>
                        </tr>
                        <tr>
                            <th><b>Empresa:</b></th>
                            <td>{{ $GuiasRecolhimento->auxempresaid }}</td>
                        </tr>
                        <tr>
                            <th><b>Valor:</b></th>
                            <td>{{ $GuiasRecolhimento->valor }}</td>
                        </tr>
                        <tr>
                            <th><b>Documento:</b></th>
                            <td>{{ $GuiasRecolhimento->numerodocumento }}</td>
                        </tr>
                        <tr>
                            <th><b>Numero NL:</b></th>
                            <td> {{ $GuiasRecolhimento->numeronl }}</td>
                        </tr>
                        <tr>
                            <th><b>Historico:</b></th>
                            <td>{{ $GuiasRecolhimento->historico }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <a href="{{ route('pesquisa') }} " class="btn btn-primary"
            style="padding: 10px 2em; margin: 0 0 0 2em; ">Voltar</a>
        <br><br>
    </div>
</div>
<br><br>

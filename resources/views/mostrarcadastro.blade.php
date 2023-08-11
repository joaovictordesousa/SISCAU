@include('navbar.cabecalho')

<style>
    .container {
        width: 40%;
    }
</style>

<div class="card">
    <h4 class="card-title" style="text-align: center; margin: 1em 0;">CADASTRADOS</h4>
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th><b>Tipo recolhimento:</b></th>
                            <td>{{ $guiasrecolhimento->auxtiporecolhimentoid }}</td>guiasRecolhimento
                        </tr>
                        <tr>
                            <th><b>Instituição financeira:</b></th>
                            <td>{{ $guiasrecolhimento->auxinstituicaofinanceiraid }}</td>
                        </tr>

                        <tr>
                            <th><b>Agência:</b></th>
                            <td>{{ $guiasrecolhimento->auxagenciaid }}</td>
                        </tr>

                        <tr>
                            <th><b>Conta:</b></th>
                            <td>{{ $guiasrecolhimento->numeroconta }}</td>
                        </tr>

                        <tr>
                            <th><b>Contrato:</b></th>
                            <td>{{ $guiasrecolhimento->numerocontrato }}</td>
                        </tr>

                        <tr>
                            <th><b>Aditivo:</b></th>
                            <td>{{ $guiasrecolhimento->aditivo }}</td>
                        </tr>

                        <tr>
                            <th><b>Data GR:</b></th>
                            <td>{{ $guiasrecolhimento->datagr }}</td>
                        </tr>
                        <tr>
                            <th><b>Data validade:</b></th>
                            <td>{{ $guiasrecolhimento->datavalidade }}</td>
                        </tr>
                        <tr>
                            <th><b>Tipo do documento:</b></th>
                            <td>{{ $guiasrecolhimento->auxtipodocumentoid }}</td>
                        </tr>
                        <tr>
                            <th><b>Numero:</b></th>
                            <td>{{ $guiasrecolhimento->numero }}</td>
                        </tr>
                        <tr>
                            <th><b>Empresa:</b></th>
                            <td>{{ $guiasrecolhimento->auxempresaid }}</td>
                        </tr>

                        <tr>
                            <th><b>Valor:</b></th>
                            <td>{{ $guiasrecolhimento->valor }}</td>
                        </tr>

                        <tr>
                            <th><b>Documento:</b></th>
                            <td>{{ $guiasrecolhimento->numerodocumento }}</td>
                        </tr>

                        <tr>
                            <th><b>Numero NL:</b></th>
                            <td> {{ $guiasrecolhimento->numeronl }}</td>
                        </tr>

                        <tr>
                            <th><b>Historico:</b></th>
                            <td>{{ $guiasrecolhimento->historico }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <a href=" {{ route('NovaGuia') }} " class="btn btn-primary"
            style="padding: 10px 2em; margin: 0 0 0 2em; ">Voltar</a>
        <br><br>
    </div>
</div>
<br><br>

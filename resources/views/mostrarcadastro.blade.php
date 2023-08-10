@include('navbar.cabecalho')

<div class="card">
    <h4 class="card-title" style="text-align: center; margin: 1em 0;">CADASTRADO</h4>
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th><b>Tipo recolhimento:</b></th>
                            <td>{{ $novaGuia->auxtiporecolhimentoid }}</td>
                        </tr>
                        <tr>
                            <th><b>Instituição financeira:</b></th>
                            <td>{{ $novaGuia->auxinstituicaofinanceiraid }}</td>
                        </tr>

                        <tr>
                            <th><b>Agência:</b></th>
                            <td>{{ $novaGuia->auxagenciaid }}</td>
                        </tr>

                        <tr>
                            <th><b>Conta:</b></th>
                            <td>{{ $novaGuia->numeroconta }}</td>
                        </tr>

                        <tr>
                            <th><b>Contrato:</b></th>
                            <td>{{ $novaGuia->numerocontrato }}</td>
                        </tr>

                        <tr>
                            <th><b>Aditivo:</b></th>
                            <td>{{ $novaGuia->aditivo }}</td>
                        </tr>

                        <tr>
                            <th><b>Data GR:</b></th>
                            <td>{{ $novaGuia->datagr }}</td>
                        </tr>
                        <tr>
                            <th><b>Data validade:</b></th>
                            <td>{{ $novaGuia->datavalidade }}</td>
                        </tr>
                        <tr>
                            <th><b>Tipo do documento:</b></th>
                            <td>{{ $novaGuia->auxtipodocumentoid }}</td>
                        </tr>
                        <tr>
                            <th><b>Numero:</b></th>
                            <td>{{ $novaGuia->numero }}</td>
                        </tr>
                        <tr>
                            <th><b>Empresa:</b></th>
                            <td>{{ $novaGuia->auxempresaid }}</td>
                        </tr>

                        <tr>
                            <th><b>Valor:</b></th>
                            <td>{{ $novaGuia->valor }}</td>
                        </tr>

                        <tr>
                            <th><b>Documento:</b></th>
                            <td>{{ $novaGuia->numerodocumento }}</td>
                        </tr>

                        <tr>
                            <th><b>Numero NL:</b></th>
                            <td> {{ $novaGuia->numeronl }}</td>
                        </tr>

                        <tr>
                            <th><b>Historico:</b></th>
                            <td>{{ $novaGuia->historico }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <a href=" {{ route('principal_historico') }} " class="btn btn-primary"
            style="padding: 10px 2em; margin: 0 0 0 2em; ">Voltar</a>
        <br><br>
    </div>
</div>
<br><br>

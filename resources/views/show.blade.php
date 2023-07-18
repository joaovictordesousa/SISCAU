@include('navbar.cabecalho')

    <div class="ContainerShow">
       
        <table class="table">
            <tbody>
              <tr>
                <td><b>Numero:</b></td>
                <td>{{ $GuiasRecolhimento->numero }}</td>
              </tr>
              <tr>
                <td><b>Tipo recolhimento:</b></td>
                <td>{{ $GuiasRecolhimento->auxtiporecolhimento }}</td>
              </tr>
              <tr>
                <td><b>Instituição financeira:</b></td>
                <td>{{ $GuiasRecolhimento->auxinstituicaofinanceira }}</td>
              </tr>
              <tr>
                <td><b>Numero do contrato:</b></td>
                <td>{{ $GuiasRecolhimento->numerocontrato }}</td>
              </tr>
              <tr>
                <td><b>Agência:</b></td>
                <td>{{ $GuiasRecolhimento->auxagencia }}</td>
              </tr>
              <tr>
                <td><b>Numero do documento:</b></td>
                <td>{{ $GuiasRecolhimento->numerodocumento }}</td>
              </tr>
              <tr>
                <td><b>Empresa CNPJ:</b></td>
                <td>{{ $GuiasRecolhimento->auxempresacnpj }}</td>
              </tr>
              <tr>
                <td><b>Razão social:</b></td>
                <td>{{ $GuiasRecolhimento->razaosocial }}</td>
              </tr>
              <tr>
                <td><b>Data GR:</b></td>
                <td>{{ $GuiasRecolhimento->datagr }}</td>
              </tr>
              <tr>
                <td><b>Data validade:</b></td>
                <td>{{ $GuiasRecolhimento->datavalidade }}</td>
              </tr>
              <tr>
                <td><b>Tipo do documento:</b></td>
                <td>{{ $GuiasRecolhimento->auxtipodocumento }}</td>
              </tr>
              <tr>
                <td><b>Numero conta:</b></td>
                <td>{{ $GuiasRecolhimento->numeroconta }}</td>
              </tr>
              <tr>
                <td><b>Aditivo:</b></td>
                <td>{{ $GuiasRecolhimento->aditivo }}</td>
              </tr>
              <tr>
                <td><b>Código:</b></td>
                <td>{{ $GuiasRecolhimento->codigo }}</td>
              </tr>
              <tr>
                <td><b>Numero NL:</b></td>
                <td>{{ $GuiasRecolhimento->numeronl }}</td>
              </tr>
              <tr>
                <td><b>Baixa processo:</b></td>
                <td>{{ $GuiasRecolhimento->baixaprocesso }}</td>
              </tr>
              <tr>
                <td><b>baixa data:</b></td>
                <td>{{ $GuiasRecolhimento->baixadata }}</td>
              </tr>
              <tr>
                <td><b>Baixa NL:</b></td>
                <td>{{ $GuiasRecolhimento->baixanl }}</td>
              </tr>
              <tr>
                <td><b>Baixa mensagem:</b></td>
                <td>{{ $GuiasRecolhimento->baixamensagem }}</td>
              </tr>
              <tr>
                <td><b>Valor:</b></td>
                <td>{{ $GuiasRecolhimento->valor }}</td>
              </tr><br><br>

            </tbody>
          </table>
          <br><br>

        <div class="containerbutton">
            <a href="{{ route('principal.confirmdestroy', ['GuiasRecolhimento' => $GuiasRecolhimento->id]) }}" class="btn btn-danger btn-sm" style="padding: 1em 1.2em; margin: 0 10px;"> Excluir</a>
            <a href=" {{ route('principal_historico') }} " class="btn btn-success" style="padding: 0.8em 1.2em">Voltar</a> 
        </div>

</div>
<br><br><br>

</body>
</html>
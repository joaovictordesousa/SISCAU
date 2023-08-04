@include('navbar.cabecalho')

    <div class="ContainerShow">
{{-- estou chamando os dados do GuiasRecolhimento trazendo os dados que foram cadastrados --}}
        <table class="table show_show">
            <tbody>
              
              <tr>
                <td><b>Tipo recolhimento:</b></td>
                <td>{{ $GuiasRecolhimento->auxtiporecolhimentoid }}</td>
              </tr>
              <tr>
                <td><b>Instituição financeira:</b></td>
                <td>{{ $GuiasRecolhimento->auxinstituicaofinanceiraid }}</td>
              </tr>
              
              <tr>
                <td><b>Agência:</b></td>
                <td>{{ $GuiasRecolhimento->auxagenciaid }}</td>
              </tr>
                   
              <tr>
                <td><b>Conta:</b></td>
                <td>{{ $GuiasRecolhimento->conta }}</td>
              </tr>

              <tr>
                <td><b>Contrato:</b></td>
                <td>{{ $GuiasRecolhimento->contrato }}</td>
              </tr>

              <tr>
                <td><b>Aditivo:</b></td>
                <td>{{ $GuiasRecolhimento->aditivo }}</td>
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
                <td><b>Numero:</b></td>
                <td>{{ $GuiasRecolhimento->numero }}</td>
              </tr>
              <tr>
                <td><b>Empresa:</b></td>
                <td>{{ $GuiasRecolhimento->empresa }}</td>
              </tr>
              
              <tr>
                <td><b>Valor:</b></td>
                <td>{{ $GuiasRecolhimento->valor }}</td>
              </tr>

              <tr>
                <td><b>Documento:</b></td>
                <td>{{ $GuiasRecolhimento->documento }}</td>
              </tr>
              
              <tr>
                <td><b>Numero NL:</b></td>
                <td>{{ $GuiasRecolhimento->numeronl }}</td>
              </tr>
                                          
              <tr>
                <td><b>Historico:</b></td>
                <td>{{ $GuiasRecolhimento->historico }}</td>
              </tr>
              <br><br>

            </tbody>
          </table>
          <br><br>

        <div class="containerbutton">
            {{-- <a href="{{ route('principal.confirmdestroy', ['GuiasRecolhimento' => $GuiasRecolhimento->id]) }}" class="btn btn-danger btn-sm" style="padding: 1em 1.2em; margin: 0 10px;"> Excluir</a> --}}
            <a href=" {{ route('principal_historico') }} " class="btn btn-success" style="padding: 0.8em 1.2em">Voltar</a> 
        </div>

</div>
<br><br><br>

</body>
</html>
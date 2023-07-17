@include('navbar.cabecalho');

    <div class="ContainerShow">
        <p class="numero_show"><b>Numero:</b> {{ $GuiasRecolhimento->numero }}</p>
        <p class="numero_show"><b>Tipo recolhimento:</b> {{ $GuiasRecolhimento->auxtiporecolhimento }}</p>
        <p class="numero_show"><b>Instituição financeira:</b> {{ $GuiasRecolhimento->auxinstituicaofinanceira }}</p>
        <p class="numero_show"><b>Numero do contrato:</b> {{ $GuiasRecolhimento->numerocontrato }}</p>
        <p class="numero_show"><b>Agência:</b> {{ $GuiasRecolhimento->auxagencia }}</p>
        <p class="numero_show"><b>Numero do documento:</b> {{ $GuiasRecolhimento->numerodocumento }}</p>
        <p class="numero_show"><b>Empresa CNPJ:</b> {{ $GuiasRecolhimento->auxempresacnpj }}</p>
        <p class="numero_show"><b>Razão social:</b> {{ $GuiasRecolhimento->razaosocial}}</p>
        <p class="numero_show"><b>Data GR:</b> {{ $GuiasRecolhimento->datagr }}</p>
        <p class="numero_show"><b>Data validade:</b> {{ $GuiasRecolhimento->datavalidade }}</p>
        <p class="numero_show"><b>Numero da NL:</b> {{ $GuiasRecolhimento->auxtipodocumento }}</p>
        <p class="numero_show"><b>Numero da conta:</b> {{ $GuiasRecolhimento->numeroconta }}</p> 
        <p class="numero_show"><b>Aditivo:</b> {{ $GuiasRecolhimento->aditivo }}</p> 
        <p class="numero_show"><b>Código:</b> {{ $GuiasRecolhimento->codigo }}</p> 
        <p class="numero_show"><b>Numero NL:</b> {{ $GuiasRecolhimento->numeronl }}</p> 
        <p class="numero_show"><b>Baixa Processo:</b> {{ $GuiasRecolhimento->baixaprocesso }}</p> 
        <p class="numero_show"><b>Baixa data:</b> {{ $GuiasRecolhimento->baixadata }}</p> 
        <p class="numero_show"><b>Baixa nl:</b> {{ $GuiasRecolhimento->baixanl }}</p> 
        <p class="numero_show"><b>Baixa mensagem:</b> {{ $GuiasRecolhimento->baixamensagem }}</p> 
        <p class="numero_show"><b>Valor:</b> R${{ $GuiasRecolhimento->valor }}</p> <br><br>
    
    <a href="{{ route('principal.confirmdestroy', ['GuiasRecolhimento' => $GuiasRecolhimento->id]) }}" class="btn btn-danger btn-sm" style="padding: 1em 1.2em"> Excluir</a>
</div>
<br><br><br>

</body>
</html>
@include('navbar.cabecalho')

    <section class="container_titulo"> 
        <h1><b>Guias de recolhimento</b></h1>
    </section>
    
  <section class="container">

  <div class="container_table">

  <table class="table">
    <thead>
      <tr>
        <th scope="col"><b>Tipo recolhimento</b></th>
        <th scope="col"><b>Empresa</b></th>
        <th scope="col"><b>Valor</b></th>
        <th scope="col"><b>Ações</b></th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
      @foreach($historico as $histo)
      <tr>
        <td>{{ $histo->auxtiporecolhimento }}</td>
        <td>{{ $histo->razaosocial }}</td>
        <td>R$ {{ $histo->valor }}</td>
        <td>
          <a href=" {{ route('editardados', ['GuiasRecolhimento'=> $histo->id] ) }} " class="btn btn-light btn-sm">Editar</a>
          <a href=" {{ route('principal.show', ['GuiasRecolhimento'=> $histo->id] ) }} " class="btn btn-success btn-sm">ver mais</a>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
  </div>
  
<br><br>

      <div class="container_botoes">
          <button class="botao_imprimir">Imprimir</button>
          <a href="{{ route('pesquisa') }}" class="botao_voltar">Voltar</a>
      </div>
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
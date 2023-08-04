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
        {{-- Mudar nome para os do filtro --}}
        <td>{{ $histo->auxtiporecolhimento }}</td>
        <td>{{ $histo->razaosocial }}</td>
        <td>R$ {{ $histo->valor }}</td>
        <td style="display: flex; gap: 10px;">
          <a href=" {{ route('editardados', ['GuiasRecolhimento'=> $histo->id] ) }} " class="btn btn-warning btn-sm">Editar</a>
          <a href=" {{ route('principal.show', ['GuiasRecolhimento'=> $histo->id] ) }} " class="btn btn-success btn-sm">ver mais</a>
          <form action="{{ route('principal.destroy', ['GuiasRecolhimento' => $histo->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
        </form>
        {{-- <a href="{{ route('principal.confirmdestroy', ['GuiasRecolhimento' => $histo->id]) }}" class="btn btn-danger btn-sm" style="padding: 1em 1.2em; margin: 0 10px;"> Excluir</a> --}}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table> 
  {{-- paginate passando os parametros que estão pesquisando' --}}
     {{-- {{$paginate->appends([
        'search' => request()->get('search','')
     ])->links()}}  --}}

  </div>
<br><br>
      <div class="container_botoes">
          <button class="btn btn-primary" style="padding: 12px 20px;">Imprimir</button>
          <a href="{{ route('pesquisa') }}" class="btn btn-danger" style="padding: 12px 20px;">Voltar</a>
      </div>
    <br><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </html>
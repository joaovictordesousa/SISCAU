@include('navbar.cabecalho')

<style>
  .text-right {
    text-align: right !important;
}

</style>
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
        <th scope="col" style="text-align: center"><b>Valor</b></th>
        <th></th>
        <th scope="col" style="text-align: center"><b>Ações</b></th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
      @foreach($historico as $histo)
      <tr>
        {{-- Mudar nome para os do filtro --}}
        <td>{{ $histo->auxtiporecolhimento }}</td>
        <td>{{ $histo->razaosocial }}</td>
        <td class="text-right">R$ {{ number_format(floatval($histo->valor), 2, ',', '.') }}</td>
        <td></td>
        <td style="display: flex; gap: 10px;">
          <a href=" {{ route('editardados', ['GuiasRecolhimento'=> $histo->id] ) }} " class="btn btn-warning btn-sm" title="Editar Guia de Recolhimento"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
          </svg></a>
          
          <a href=" {{ route('principal.show', ['GuiasRecolhimento'=> $histo->id] ) }} " class="btn btn-primary btn-sm" title="Visualizar Guia de recolhimento"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
          
            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
          </svg>
        </a>

        <a class="btn btn-success" href="{{ route('baixas.criar', ['GuiasRecolhimento' => $histo->id]) }}" title="Cadastrar baixa">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
              <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
            </svg>
          </a>

          <form action="{{ route('principal.destroy', ['GuiasRecolhimento' => $histo->id]) }}" onsubmit="return confirm('Tem certeza que deseja excluir?')" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm" title="Deletar Guia de recolhimento" style="padding: 8px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
              </svg>
            </button>
        </form>

        </td>
      </tr>
      @endforeach
    </tbody>
  </table> 
  {{ $historico->appends(request()->except('page'))->links() }}
</div>
<br><br>
      <div class="container_botoes">
          {{-- <a href="{{ route('principal.gerapdf', [$historico=>Filtro]) }}" class="btn btn-primary" style="padding: 12px 20px;">Imprimir</a> --}}
          <a href="{{ route('pesquisa') }}" class="btn btn-danger" style="padding: 12px 20px;">Voltar</a>
      </div>
    <br><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </html>
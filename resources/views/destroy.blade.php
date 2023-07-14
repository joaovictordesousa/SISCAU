<body>
    <p>Deseja deletar?</p>
    <form action="{{ route('principal.destroy', ['GuiasRecolhimento' => $GuiasRecolhimento->id]) }}" method="POST">
    @csrf
    <input name="_method" type="hidden" value="DELETE">    
    <button type="submit">Sim</button>   
    </form>
    <a href="{{ route('pesquisa') }}">Não</a>
    
</body>

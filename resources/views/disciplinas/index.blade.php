<a href="/disciplinas/create">Cadastrar Disciplina</a><br>
<ul>
	@foreach($disciplinas as $disciplina) 
		<a href="/disciplinas/{{ $disciplina->id }}"><li>{{ $disciplina->titulo}}</li></a>
	@endforeach
</ul>
<div class="card" style="width: 18rem;">
<div class="card-body">
<h5 class="card-title">{{ $chamado->assunto }}</h5>
<p class="card-text">{{ substr($chamado->descricao, 0, 50) }}...</p>
<a href="{{ route('chamado.detalhe', $chamado->id) }}" class="btn btn-primary">Ver
Detalhes</a>
</div>
</div>
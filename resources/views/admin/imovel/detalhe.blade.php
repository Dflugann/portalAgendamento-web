@extends('layout.system')

@section('titulo', 'Detalhes Imovel')

@section('corpo')
<div class="container">
	<div class="col s12 m7">
	    <h3 class="header center">Imóvel</h3>
			<div class="card horizontal">
				<div class="card-image">
					<img class="responsive-img" src="../../{{$empreendimento->imagem}}" style="width: 350px;">
						<div class="center">

							<strong><small>{{$empreendimento->titulo}}</small></strong><br>
							<strong><small>{{$empreendimento->descricao}}</small></strong>
						</div>
				</div>
				<div class="card-stacked">
					<div class="card-content">
						<div class="center">
							<p><i class="material-icons" style="color: #4caf50;">person</i></p>
							<strong> Thiago Valillo</strong>
						</div>
						@if(($imovel->tipo) == 'comercio')
						<p><strong style="color: #4caf50">Tipo:</strong> {{$imovel->tipo}}</p>
						<p><strong style="color: #4caf50">Bloco:</strong> {{$endereco->bloco}}</p>
						<p><strong style="color: #4caf50">Andar:</strong> {{$endereco->andar}}</p>
						<p><strong style="color: #4caf50">Conjunto:</strong> {{$endereco->conjunto}}</p>
						<p><strong style="color: #4caf50">Vaga:</strong> {{$imovel->vaga}}</p>
						<p><strong style="color: #4caf50">Descrição:</strong> {{$imovel->descricao}}</p>
						@endif
						@if(($imovel->tipo) == 'vertical')
						<p><strong style="color: #4caf50">Tipo:</strong> Residencial {{$imovel->tipo}}</p>
						<p><strong style="color: #4caf50">Bloco:</strong> {{$endereco->bloco}}</p>
						<p><strong style="color: #4caf50">Andar:</strong> {{$endereco->andar}}</p>
						<p><strong style="color: #4caf50">Apto:</strong> {{$endereco->apto}}</p>
						<p><strong style="color: #4caf50">Vaga:</strong> {{$imovel->vaga}}</p>
						<p><strong style="color: #4caf50">Descrição:</strong> {{$imovel->descricao}}</p>
						@endif
						@if(($imovel->tipo) == 'horizontal')
						<p><strong style="color: #4caf50">Tipo:</strong> Residencial {{$imovel->tipo}}</p>
						<p><strong style="color: #4caf50">Quadra:</strong> {{$endereco->quadra}}</p>
						<p><strong style="color: #4caf50">Num/lote:</strong> {{$endereco->numLote}}</p>
						<p><strong style="color: #4caf50">Vaga:</strong> {{$imovel->vaga}}</p>
						<p><strong style="color: #4caf50">Descrição:</strong> {{$imovel->descricao}}</p>
						@endif
					</div>
					<div class="card-action">
					<a href="{{route('imovel.index')}}" class="btn blue waves-effect waves-light">Voltar</a>
					</div>
				</div>
			</div>
	</div>
</div>
@endsection
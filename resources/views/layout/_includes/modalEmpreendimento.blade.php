<!-- Modal Structure -->
<div id="empreendimento" class="modal">
	<div class="modal-content center">
		<h4>Ola {{Auth::user()->name}}</h4>
		<p>Qual empreendimento deseja criar?</p>

		<a href="{{route('empreendimento.adicionar', 'Comercial')}}" class="btn green waves-effect waves-light" name="action">Comercial
			<i class="material-icons right">domain</i>
		</a>
		<a href="{{route('empreendimento.adicionar', 'Residencial')}}" class="btn blue waves-effect waves-light" name="action">Residêncial
			<i class="material-icons right">location_city</i>
		</a>
	</div>
	<div class="modal-footer">
		<a href="#" class="modal-action modal-close waves-effect waves-green btn-flat">Fechar</a>
	</div>
</div>

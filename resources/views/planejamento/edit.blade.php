@extends('layouts.app')

@section('content')

	<div class="row">
		<div class="col-md-12">
			<p class="h1 text-center">Formulário de Edição de Atividade</p>
			<hr>
			</p>
		</div>
	</div>

	  <!-- EXIBE MENSAGENS DE ERROS -->
	  @if ($errors->any())
		<div class="row">
		  <div class="alert alert-danger">
		    <ul>
		      @foreach ($errors->all() as $error)
		      <li>{{ $error }}</li>
		      @endforeach
		    </ul>
		  </div>
		</div>
	  @endif

	<div class="row">
		<div class="col-md-12">
			<form action="/planejamento/{{$planejamento->id}}" method="POST">
				{{ csrf_field() }}
				{{ method_field('PUT') }}
				<div class="form-group row">
				<label class="col-form-label col-form-label-lg" for="previsao_ganhos">Previsão de Ganhos</label>
					<input class="form-control form-control-lg" type="string" id="previsao_ganhos" name="previsao_ganhos">
					<small id="titleHelp" class="form-text text-muted"></small>
				</div>
				<div class="form-group row">
					<label class="col-form-label col-form-label-lg" for="cad_semente_nome">Cadastro de Semente</label>
					<input class="form-control form-control-lg" type="text" id="cad_semente_nome" name="cad_semente_nome">
				</div>
				<div class="form-group row">
					<label class="col-form-label col-form-label-lg" for="ano">Ano</label>
					<input class="form-control form-control-lg" type="datetime" id="ano" name="ano">
					
				</div>
				<div class="form-group row">
					<label class="col-form-label col-form-label-lg" for="safra">Cadastro de Safra</label>
					<input class="form-control form-control-lg" type="text" id="safra" name="safra">
				</div>

				<button type="submit" class="btn btn-primary">Salvar</button>
			</form>
		</div>
	</div>
@endsection


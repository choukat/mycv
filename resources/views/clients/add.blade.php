@extends('template')

@section('contenu')
	<br>
	<div class="col-sm-offset-3 col-sm-6">
		<div class="panel panel-info">
			<div class="panel-heading">Ajout d'un client</div>
			<div class="panel-body">
				{!! Form::open(['route' => 'client.store']) !!}
					<div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
						{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'name']) !!}
					</div>
					<div class="form-group {!! $errors->has('contenu') ? 'has-error' : '' !!}">
						{!! Form::textarea ('description', null, ['class' => 'form-control', 'placeholder' => 'description']) !!}
					</div>
					<div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
						{!! Form::text('logo', null, ['class' => 'form-control', 'placeholder' => 'logo']) !!}
					</div>
					<div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
						{!! Form::text('url', null, ['class' => 'form-control', 'placeholder' => 'url']) !!}
					</div>
					{!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
				{!! Form::close() !!}
			</div>
		</div>
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		</a>
	</div>
@endsection

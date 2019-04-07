@extends('template')

@section('header')
	@if(Auth::check())
		<div class="btn-group pull-right">
			{!! link_to_route('competence.create', 'Créer une competence', [], ['class' => 'btn btn-info']) !!}
			{!! link_to('logout', 'Deconnexion', ['class' => 'btn btn-warning']) !!}
		</div>
	@else
		{!! link_to('login', 'Se connecter', ['class' => 'btn btn-info pull-right']) !!}
	@endif
@endsection

@section('contenu')
	@if(isset($info))
		<div class="row alert alert-info">{{ $info }}</div>
	@endif
	{!! $links !!}
	@foreach($competences as $competence)
		<article class="row bg-primary">
			<div class="col-md-12">
				<header>
					<h1>{{ $competence->name }}</h1>
				</header>
				<hr>
				<section>
					<p>{{ $competence->description }}</p>
					<p>{{ $competence->level }}</p>
					@if(Auth::check())
						{!! Form::open(['method' => 'DELETE', 'route' => ['competence.destroy', $competence->id]]) !!}
							{!! Form::submit('Supprimer cette competence', ['class' => 'btn btn-danger btn-xs ', 'onclick' => 'return confirm(\'Vraiment supprimer cette competence ?\')']) !!}
						{!! Form::close() !!}
					@endif
				</section>
			</div>
		</article>
		<br>
	@endforeach
	{!! $links !!}
@endsection

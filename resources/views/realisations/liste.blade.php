@extends('template')

@section('header')
	@if(Auth::check())
		<div class="btn-group pull-right">
			{!! link_to_route('realisation.create', 'Créer une realisation', [], ['class' => 'btn btn-info']) !!}
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
	@foreach($realisations as $realisation)
		<article class="row bg-primary">
			<div class="col-md-12">
				<header>
					<h1>{{ $realisation->title }}</h1>
				</header>
				<hr>
				<section>
					<p>{{ $realisation->description }}</p>
					<p>{{ $realisation->url }}</p>
					@if(Auth::check())
						{!! Form::open(['method' => 'DELETE', 'route' => ['realisation.destroy', $realisation->id]]) !!}
							{!! Form::submit('Supprimer cette realisation', ['class' => 'btn btn-danger btn-xs ', 'onclick' => 'return confirm(\'Vraiment supprimer cette realisation ?\')']) !!}
						{!! Form::close() !!}
					@endif
				</section>
			</div>
		</article>
		<br>
	@endforeach
	{!! $links !!}
@endsection

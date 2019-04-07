@extends('template')

@section('header')
	@if(Auth::check())
		<div class="btn-group pull-right">
			{!! link_to_route('client.create', 'Créer un client', [], ['class' => 'btn btn-info']) !!}
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
	@foreach($clients as $client)
		<article class="row bg-primary">
			<div class="col-md-12">
				<header>
					<h1>{{ $client->name }}</h1>
				</header>
				<hr>
				<section>
					<p>{{ $client->description }}</p>
					<p>{{ $client->url }}</p>
					@if(Auth::check())
						{!! Form::open(['method' => 'DELETE', 'route' => ['client.destroy', $client->id]]) !!}
							{!! Form::submit('Supprimer ce client', ['class' => 'btn btn-danger btn-xs ', 'onclick' => 'return confirm(\'Vraiment supprimer ce client ?\')']) !!}
						{!! Form::close() !!}
					@endif
				</section>
			</div>
		</article>
		<br>
	@endforeach
	{!! $links !!}
@endsection

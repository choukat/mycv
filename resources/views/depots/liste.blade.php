@extends('template')

@section('header')
	@if(Auth::check())
		<div class="btn-group pull-right">
			{!! link_to_route('depot.create', 'Créer un depot', [], ['class' => 'btn btn-info']) !!}
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
	@foreach($depots as $depot)
		<article class="row bg-primary">
			<div class="col-md-12">
				<header>
					<h1>{{ $depot->name }}</h1>
				</header>
				<hr>
				<section>
					<p>{{ $depot->description }}</p>
					<p>{{ $depot->url }}</p>
					@if(Auth::check())
						{!! Form::open(['method' => 'DELETE', 'route' => ['depot.destroy', $depot->id]]) !!}
							{!! Form::submit('Supprimer cet article', ['class' => 'btn btn-danger btn-xs ', 'onclick' => 'return confirm(\'Vraiment supprimer cet article ?\')']) !!}
						{!! Form::close() !!}
					@endif
				</section>
			</div>
		</article>
		<br>
	@endforeach
	{!! $links !!}
@endsection

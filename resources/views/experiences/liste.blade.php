@extends('template')

@section('header')
	@if(Auth::check())
		<div class="btn-group pull-right">
			{!! link_to_route('experience.create', 'Créer une experience', [], ['class' => 'btn btn-info']) !!}
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
	@foreach($experiences as $experience)
		<article class="row bg-primary">
			<div class="col-md-12">
				<header>
					<h1>{{ $experience->title }}</h1>
				</header>
				<hr>
				<section>
					<p>{{ $experience->description }}</p>
					<p>{{ $experience->begin }}</p>
					<p>{{ $experience->end }}</p>
					@if(Auth::check())
						{!! Form::open(['method' => 'DELETE', 'route' => ['experience.destroy', $experience->id]]) !!}
							{!! Form::submit('Supprimer cette experience', ['class' => 'btn btn-danger btn-xs ', 'onclick' => 'return confirm(\'Vraiment supprimer cette experience ?\')']) !!}
						{!! Form::close() !!}
					@endif
				</section>
			</div>
		</article>
		<br>
	@endforeach
	{!! $links !!}
@endsection

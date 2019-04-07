@extends('template')

@if(Auth::check())
  @section('header')
		<div class="btn-group pull-right">
			{!! link_to('logout', 'Deconnexion', ['class' => 'btn btn-warning']) !!}
		</div>
  @endsection
  @section('contenu')
  	<div class="col-md-12">
  		<header>
  			<h1>Administrer mon cv</h1>
  		</header>
  		<hr>
  		<section>
  			<p>{!! link_to_route('depot.index', 'Gérer mes dépots', [], ['class' => 'btn btn-info']) !!}</p>
  			<p>{!! link_to_route('realisation.index', 'Gérer mes réalisations', [], ['class' => 'btn btn-info']) !!}</p>
        <p>{!! link_to_route('experience.index', 'Gérer mes experiences', [], ['class' => 'btn btn-info']) !!}</p>
        <p>{!! link_to_route('competence.index', 'Gérer mes competences', [], ['class' => 'btn btn-info']) !!}</p>
        <p>{!! link_to_route('client.index', 'Gérer mes clients', [], ['class' => 'btn btn-info']) !!}</p>
  		</section>
  	</div>
  	<br>
  @endsection
@else
  @section('header')
	   {!! link_to('login', 'Se connecter', ['class' => 'btn btn-info pull-right']) !!}
  @endsection
@endif

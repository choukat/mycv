@extends('template')

@section('header')

@endsection

@section('contenu')
	@if(isset($info))
		<div class="row alert alert-info">{{ $info }}</div>
	@endif
	<h1>Qui suis je</h1>
	<article class="row bg-primary">
		<div class="col-md-12">
			<header>
				<h1>{{ $profil->name }} {{ $profil->surname }}</h1>
			</header>
			<hr>
			<section>
				<p>{{ $profil->description }}</p>
				<p>{{ $profil->birthdate }}</p>
				<p>{{ $profil->email }}</p>
			</section>
		</div>
	</article>
	<br>
	<h1>Experiences</h1>
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
				</section>
			</div>
		</article>
		<br>
	@endforeach
	<h1>Compétences</h1>
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
				</section>
			</div>
		</article>
		<br>
	@endforeach
	<h1>Clients</h1>
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
				</section>
			</div>
		</article>
		<br>
	@endforeach
	<h1>Réalisations</h1>
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
				</section>
			</div>
		</article>
		<br>
	@endforeach
	<h1>Dépots</h1>
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
				</section>
			</div>
		</article>
		<br>
	@endforeach
@endsection

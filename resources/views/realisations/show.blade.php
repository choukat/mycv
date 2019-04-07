@extends('template')

@section('contenu')
    <div class="col-sm-offset-4 col-sm-4">
    	<br>
		<div class="panel panel-primary">
			<div class="panel-heading">Réalisation</div>
			<div class="panel-body">
				<p>Nom : {{ $realisation->name }}</p>
        <p>{!! Html::image($realisation->logo) !!}</p>
				<p>description : {{ $realisation->description }}</p>
        <p>url : {{ $realisation->url }}</p>
			</div>
		</div>
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		</a>
	</div>
@endsection

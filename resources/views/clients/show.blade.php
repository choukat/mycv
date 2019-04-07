@extends('template')

@section('contenu')
    <div class="col-sm-offset-4 col-sm-4">
    	<br>
		<div class="panel panel-primary">
			<div class="panel-heading">Client</div>
			<div class="panel-body">
				<p>Nom : {{ $client->name }}</p>
        <p>{!! Html::image($client->logo) !!}</p>
				<p>description : {{ $client->description }}</p>
        <p>url : {{ $client->url }}</p>
			</div>
		</div>
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		</a>
	</div>
@endsection

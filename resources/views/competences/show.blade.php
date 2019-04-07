@extends('template')

@section('contenu')
    <div class="col-sm-offset-4 col-sm-4">
    	<br>
		<div class="panel panel-primary">
			<div class="panel-heading">Competence</div>
			<div class="panel-body">
				<p>Title : {{ $competence->name }}</p>
        <p>{!! Html::image($competence->logo) !!}</p>
				<p>description : {{ $competence->description }}</p>
        <p>level : {{ $competence->level }}</p>
			</div>
		</div>
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		</a>
	</div>
@endsection

@extends('template')

@section('contenu')
    <div class="col-sm-offset-4 col-sm-4">
    	<br>
		<div class="panel panel-primary">
			<div class="panel-heading">Experience</div>
			<div class="panel-body">
				<p>Title : {{ $experience->title }}</p>
        <p>{!! Html::image($experience->logo) !!}</p>
				<p>description : {{ $experience->description }}</p>
        <p>begin : {{ $experience->begin }}</p>
        <p>end : {{ $experience->end }}</p>
			</div>
		</div>
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		</a>
	</div>
@endsection

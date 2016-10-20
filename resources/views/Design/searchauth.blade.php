@extends('layouts.app2')


@section('styles')

<style type="text/css">
	#detail-row
	{
		padding: 1%;
	}
	#detail-col
	{
		box-shadow: 0 1px 10px rgba(0,1,1,.2);
		width: 25%;
		padding: 1%;
		border: solid 1px lightblue;
	}


</style>
@endsection






@section('content')
	@if (count($articles) === 0)
	There is no such job seeker or the job seeker required not lies in the specific area
	@elseif (count($articles) >= 1)
	<div class="row" id="detail-row">
		    @foreach($articles as $article)
		<div class="col-lg-3" id="detail-col">
		    @if($article->city===$region)
				<label>Name: </label>    {{$article->username}}<br/>
				<label>City: </label>    {{$article->city}}<br/>
				<a href="{{action('SearchController@jsdetail',[ $article->id]) }}" class="btn btn-info">View Complete Profile</a>
			@endif
		</div>
		    @endforeach
	</div>
	@endif


@endsection


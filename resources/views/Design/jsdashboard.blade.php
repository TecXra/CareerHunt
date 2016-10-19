@extends('layouts.app')


@section('content')
<h2>job seeker dashboard<br/>
	<a href="{{action('JobSeekerController@jsedit',[ $Pinfos->id]) }}">Edit Profile</a>
</h2>
@endsection

@extends('layouts.app4')


@section('content')
<h2>job seeker dashboard<br/>
{{ Auth::user()->name }}
	<a href="{{action('JobSeekerController@jsedit',[ $Pinfos->id]) }}">Edit Profile</a>
</h2>
@endsection

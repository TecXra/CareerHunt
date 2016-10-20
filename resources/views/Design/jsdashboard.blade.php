@extends('layouts.app4')







@section('content')

<h2 class="text-center">Job Seeker dashboard</h2>

<hr/>

{{ Auth::user()->name }}
<br/>
	<a href="{{action('JobSeekerController@jsedit',[ $Pinfos->id]) }}" class="btn btn-info">Edit Profile</a>
@endsection

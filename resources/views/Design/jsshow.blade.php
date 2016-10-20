@extends('layouts.app4')



@section('content')

<a href="Design/{{ $Pinfos->id }}"><img src="{{ asset($Pinfos->image) }}" class="img-thumbnail" style="width:200px; height:150px;" /></a><br/>
{{ Auth::user()->name }}

<br/>
<a href="{{action('JobSeekerController@jsedit',[ $Pinfos->id]) }}" class="btn btn-info">Edit Profile</a>

<a href="{{action('JobSeekerController@jsdashboard',[ $Pinfos->id]) }}" class="btn btn-info">Dashboard</a>

@endsection





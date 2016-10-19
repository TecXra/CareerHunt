@extends('layouts.app2')


@section('content')
<!-- {{ Auth::user()->name }}
 -->
<div class="container-fluid">
    <div class="container">
		<h2 class="text-center"> Employer Detail </h2>
		<label>Company Logo</label>
    		<a href="Design/{{ $Compinfo->id }}"><img src="{{ asset($Compinfo->company_logo) }}" style="width:200px; height:150px;" /></a><br/>
		<label>Company Head Name: </label>
		{{$Compinfo->comp_head_name}}<br/>
		<label>Company Slogan: </label>
		{{$Compinfo->slogan}}

		<label>Head Hr Deparment: </label>
		 {{$Compinfo->head_hr_department}}<br/>
		<label>Industry: </label>
		 {{$Compinfo->industry_type}}<br/>
		<label>Ownership Type: </label>
		 {{$Compinfo->ownership_type}}<br/>
		<label>Number of Employees: </label>
		 {{$Compinfo->number_of_employer}}<br/>
		<label>Number of Branches: </label>
		 {{$Compinfo->number_of_branches}}<br/>
		<label>Company website: </label>
		 {{$Compinfo->comp_website}}<br/>
		<label>Phone: </label>
		 {{$Compinfo->phone}}<br/>
		 <label>Company Email: </label>
		 {{$Compinfo->email}}<br/>
	
			<a href="{{action('EmployerController@empedit',[ $Compinfo->id]) }}" class="btn btn-primary">Edit</a>
			<a href="{{action('EmployerController@emdashboard',[ $Compinfo->id]) }}" class="btn btn-primary">Dashboard</a>
	</div>
</div>
@endsection

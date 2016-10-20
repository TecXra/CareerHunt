@extends('layouts.app2')

@section('styles')

<style type="text/css">
	  #emp-heading
  {
    width: 25%;
    margin-left: 35%;
    border-bottom: solid lightblue;
    padding-bottom: 1%;
  }

</style>

@endsection


@section('content')
<!-- {{ Auth::user()->name }}
 -->
<div class="container-fluid">
    <div class="container">
		<h2 class="text-center" id="emp-heading"> Employer Detail </h2>

		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="border-right: solid 1px lightblue;">
        <h4>Company Logo</h4>
    		<a href="Design/{{ $Compinfo->id }}"><img src="{{ asset($Compinfo->company_logo) }}" style="width:200px; height:150px;" /></a><br/>
      	</div>

      	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="border-right: solid 1px lightblue;">
      		<h5>
				<label>Company Head Name: </label>
				{{$Compinfo->comp_head_name}}      			
      		</h5>
      		<h5>
				<label>Company Slogan: </label>
				{{$Compinfo->slogan}}      			
      		</h5>
      		<h5>
				<label>Head Hr Deparment: </label>
				 {{$Compinfo->head_hr_department}}
      		</h5>
      		<h5>
				<label>Industry: </label>
				 {{$Compinfo->industry_type}}      			
      		</h5>
      		<h5>
				<label>Ownership Type: </label>
				 {{$Compinfo->ownership_type}}      			
      		</h5>
      		<h5>
      			<label>Company Email: </label>
      			{{$Compinfo->email}}<br/>
      		</h5>
      	</div>

		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<h5>
				<label>Number of Employees: </label>
				 {{$Compinfo->number_of_employer}}<br/>
			</h5>
			<h5>
				<label>Number of Branches: </label>
				 {{$Compinfo->number_of_branches}}<br/>				
			</h5>
			<h5>
				<label>Company website: </label>
				 {{$Compinfo->comp_website}}<br/>				
			</h5>
			<h5>
				<label>Phone: </label>
				 {{$Compinfo->phone}}<br/>				
			</h5>
			<a href="{{action('EmployerController@empedit',[ $Compinfo->id]) }}" class="btn btn-primary">Edit</a>

			<a href="{{action('EmployerController@emdashboard',[ $Compinfo->id]) }}" class="btn btn-primary">Dashboard</a>
		</div>	
	</div>
</div>
@endsection

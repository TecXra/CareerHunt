@extends('layouts.app2')




@section('content')
<div class="row text-center">
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
		<img src="{{ asset($Pinfos->image) }}" class="img-thumbnail" style="width:200px; height:200px;" /><br/>
		<h4 style="padding-left: 1%;">
			{{ Auth::user()->name }}
		</h4>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="margin-top: 2%;">
		<label>Age: </label>  {{$Pinfos->age}}<br/>
		<label>Phone: </label>  {{$Pinfos->phone}}<br/>
		<label>Address: </label>  {{$Pinfos->address}}<br/>
		<label>Town: </label>  {{$Pinfos->town}}<br/>
		<label>City: </label>  {{$Pinfos->city}}<br/>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="margin-top: 2%;">
		<label>Country: </label>  {{$Pinfos->country}}<br/>
		<label>Religion: </label>  {{$Pinfos->religion}}<br/>
		<label>Nationality: </label>  {{$Pinfos->nationality}}<br/>
		<label>Marital Status: </label>  {{$Pinfos->martial_status}}<br/>
	</div>
</div>

<div class="row text-center">
	<h2 class="text-center" id="js-heading">Qualification Detail</h2>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		<label>Matric: </label>  {{$Pinfos->matric}}<br/>
		<label>Intermediate: </label>  {{$Pinfos->intermediate}}<br/>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		<label>BS / B.Sc: </label> {{$Pinfos->bs_bsc}}<br/>
		<label>MS / M.Sc: </label> {{$Pinfos->ms_Msc}}		
	</div>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		<label>Other: </label> {{$Pinfos->other}}
	</div>
</div>

<div class="row text-center">
	<h2 class="text-center" id="js-heading">Research & Pubication</h2>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<label>Research & Pubication Name (1): </label>
		{{$Pinfos->title1}}<br/>
		<label>Research & Pubication Year (1): </label>
		{{$Pinfos->year1}}<br/>
	</div>	
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<label>Research & Pubication Name (1): </label>
		{{$Pinfos->title2}}<br/>
		<label>Research & Pubication Year (1): </label>
		{{$Pinfos->year2}}<br/>
	</div>	
</div>

<div class="row text-center">
	<h2 class="text-center" id="js-heading">Job Detail</h2>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<label>Company Name: </label>
				{{$Pinfos->comp1}}<br/>
		<label>Job Designation: </label>
				{{$Pinfos->comp2}}<br/>
		<label>Last Job Detail: </label>
				{{$Pinfos->comp3}}
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
</div>

<div class="row text-center">
	<h2 class="text-center" id="js-heading">Award Detail</h2>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<label>Award Name (1): </label>
				{{$Pinfos->award1}}<br/>
		<label>Award Name (1): </label>
				{{$Pinfos->award2}}<br/>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
</div>

<div class="row text-center">
	<h2 class="text-center" id="js-heading">Skills Detail</h2>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<label>Skill (1): </label>
				{{$Pinfos->Skill1}}<br/>
		<label>Skill (2): </label>
				{{$Pinfos->Skill2}}<br/>
		<label>Skill (3): </label>
				{{$Pinfos->Skill3}}<br/>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
</div>

<div class="row text-center">
	<h2 class="text-center" id="js-heading">Other Detail</h2>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<label>Total Job Experience: </label>
				{{$Pinfos->exp}}<br/>
		<label>About Yourself: </label>
				{{$Pinfos->about_you}}<br/>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
</div>@endsection

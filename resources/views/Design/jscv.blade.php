@extends('layouts.app')

@section('styles')
	<link rel="stylesheet" href="{{ asset('jquery-ui.css')}}">
<style type="text/css">
	#profile-pic
	{
		height: 200px;
		opacity: 0.8;"
	}
	.col-lg-3
	{
		margin-top: 3%;
	}
	.col-lg-3 img
	{
		box-shadow: 3px 3px 3px black;
		margin-top: 3%;
		border:solid;
	}
	.input-group
	{
		border:solid 1px;
		border-radius: 5%;
		margin-top: 0.5%;
	}
	#profile-pic-heading
	{
		text-shadow: 3px 3px 3px black;
		font-weight: bold;
		font-family: cursive;
		color: lightblue;
	}
	#profile-pic
	{
		width: 100%;
		
	}
	#latest-job
	{
		border:groove 1px;
		width: 98%; 
		margin-left: 1%;
		margin-top: 2%;
		border-radius: 5%;
	}




</style>

@endsection


@section('content')
<div class="container-fluid">
	<div class="row text-center">
		<h2>
			<i>
				Job Seeker Detail
			</i>
		</h2>
		<div class="col-lg-6">
			<div class="row">
					<h2>Personal Information</h2>
				<div class="col-lg-3">
					<img src="{{ asset('img/person-flat.png') }}" alt="Profile Picture" class="thumbnail" id="profile-pic">
					<h3 id="profile-pic-heading">Profile Picture</h3>
				</div>
				<div class="col-lg-9" style="margin-bottom: 1%;">
					<div class="input-group">
						<div class="input-group-addon">Name: </div>
						<input type="text" class="form-control" placeholder="Asif Sharif Shahid" disabled="disabled">
					</div>
					<div class="input-group">
						<div class="input-group-addon">E-Mail: </div>
						<input type="text" class="form-control" placeholder="asifsharif190@gmail.com" disabled="disabled">
					</div>
					<div class="input-group">
						<div class="input-group-addon">Phone #: </div>
						<input type="text" class="form-control" placeholder="+92-301-4430979" disabled="disabled">
					</div>
					<div class="input-group">
						<div class="input-group-addon">Date Of Birth: </div>
						<input type="text" class="form-control" placeholder="14 August 1993" disabled="disabled">
					</div>
					<div class="input-group">
						<div class="input-group-addon">Nationality: </div>
						<input type="text" class="form-control" placeholder="Pakistani" disabled="disabled">
					</div>
					<div class="input-group">
						<div class="input-group-addon">Religion: </div>
						<input type="text" class="form-control" placeholder="Islam" disabled="disabled">
					</div>
					<div class="input-group">
						<div class="input-group-addon">Marital Status: </div>
						<input type="text" class="form-control" placeholder="Single" disabled="disabled">
					</div>
					<div class="input-group">
						<div class="input-group-addon">Gender: </div>
						<input type="text" class="form-control" placeholder="Male" disabled="disabled">
					</div>
					<div class="input-group">
						<div class="input-group-addon">Address: </div>
						<input type="text" class="form-control" placeholder="Qainchi Amer Sidhu Lahore Cantt" disabled="disabled">
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-4">
			<h3 style="font-weight: bolder;">Other Details: </h3>
			<div id="accordion" style="margin-top: 4%;">
				
			  	<h3>Educational Detail</h3>
				<ul>
					<li>Degree</li>
					<li>Degree Year</li>
			  	</ul>

			  	<h3>Jobs Experinces</h3>
			  		<ul>
			  			<li>Job Title</li>
			  			<li>Company Name</li>
			  			<li>Duration</li>
			  		</ul>

			  	<h3>Research And Publication</h3>
				<ul>
					<li>Research & Publication Title</li>
					<li>Research & Publication Year</li>
					<li>Publication Paper</li>
				</ul>

				<h3>Certications And Courses</h3>			
				<ul>
					<li>Certification / Course Title</li>
					<li>Certification / Course Year</li>
					<li>Certification / Course Institute</li>
				</ul>

				<h3>Seminar Detail</h3>
				<ul>
					<li>Seminar Topic</li>
					<li>Institute</li>
				</ul>

				<h3>Volunteer Detail</h3>
				<ul>
					<li>Organization</li>
					<li>Post</li>
					<li>Duration</li>
				</ul>

				<h3>Award Detail</h3>
				<ul>
					<li>Award Name</li>
					<li>Award year</li>
					<li>Institute</li>
				</ul>
			</div>
		</div>
	</div>
</div>

@endsection





@section('scripts')
  <script src="{{ asset('jquery-1.10.2.js')}}"></script>
  <script src="{{ asset('jquery-ui.js')}}"></script>
<script type="text/javascript">
	$(function() {
	$("#accordion").accordion();
  });
</script>

@endsection



@extends('layouts.app')

<!DOCTYPE html>
<html>
<head>
	<title>Job Seeker Detail</title>
  <link rel="stylesheet" href="{{ asset('jquery-ui.css')}}">
  <script src="{{ asset('jquery-1.10.2.js')}}"></script>
  <script src="{{ asset('jquery-ui.js')}}"></script>
  <link rel="stylesheet" href="{{ asset('style.css')}}">
</head>

<script type="text/javascript">
	$(function() {
	$("#accordion").accordion();
  });
</script>


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
	#latest-job
	{
		border:groove 1px;
		width: 98%; 
		margin-left: 1%;
		margin-top: 2%;
		border-radius: 5%;
	}




</style>

<body>

@include('partials.index-header2')
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
					<img src="#" alt="Profile Picture" class="thumbnail" id="profile-pic">
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
		<div class="col-lg-2" style="margin-bottom: 1%; box-shadow: 3px 3px 3px black; height: 410px; overflow-y: scroll; border-left: dotted 1px; border-radius: 5%;">
			<h3 style="border: groove 5px; font-weight: bolder; font-style: italic; box-shadow: 2px 2px 2px black;">Latest Jobs</h3>
				<marquee direction="up">
					<div class="row" id="latest-job">
						<div class="col-lg-12">
							<a href="#">Java Developer</a>
							<h5 class="text-muted">Softec</h5>
							<h5 class="text-muted">Lahore Pakistan</h5>
						</div>
					</div>

					<div class="row" id="latest-job">
						<div class="col-lg-12">
							<a href="#">Java Developer</a>
							<h5 class="text-muted">Softec</h5>
							<h5 class="text-muted">Lahore Pakistan</h5>
						</div>
					</div>

					<div class="row" id="latest-job">
						<div class="col-lg-12">
							<a href="#">Java Developer</a>
							<h5 class="text-muted">Softec</h5>
							<h5 class="text-muted">Lahore Pakistan</h5>
						</div>
					</div>

					<div class="row" id="latest-job">
						<div class="col-lg-12">
							<a href="#">Java Developer</a>
							<h5 class="text-muted">Softec</h5>
							<h5 class="text-muted">Lahore Pakistan</h5>
						</div>
					</div>

					<div class="row" id="latest-job">
						<div class="col-lg-12">
							<a href="#">Java Developer</a>
							<h5 class="text-muted">Softec</h5>
							<h5 class="text-muted">Lahore Pakistan</h5>
						</div>
					</div>

					<div class="row" id="latest-job">
						<div class="col-lg-12">
							<a href="#">Java Developer</a>
							<h5 class="text-muted">Softec</h5>
							<h5 class="text-muted">Lahore Pakistan</h5>
						</div>
					</div>

					<div class="row" id="latest-job">
						<div class="col-lg-12">
							<a href="#">Java Developer</a>
							<h5 class="text-muted">Softec</h5>
							<h5 class="text-muted">Lahore Pakistan</h5>
						</div>
					</div>
				</marquee>
		</div>






<!--
		<div class="input-group">
			<div class="input-group-addon">First Name * </div>
			<input type="text" class="form-control" placeholder="Asif Sharif Shahid" disabled="disabled">
			<div class="input-group-addon">
				<a href="#" style="text-decoration: none;">Edit</a>
			</div>
		</div>
-->
	</div>
</div>
@include('partials.footer2')

</body>
</html>









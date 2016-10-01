@extends('layouts.app')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">

#profile-col
{
	border: solid 1px;
	border-radius: 5px;
	box-shadow: 1px 5px 10px black;
	width: 48%;
	padding: 1%;
	margin-left: 1%;
}

#asdf
{
	font-style: oblique;
	font-family: Castellar;
	color: black;
//	font-family: Baskerville Old Face;
//	color: rgb(65,100,108);
}
h3 i
{
  	font-family: Baskerville Old Face;
  	color: rgb(100,100,200);
}

</style>
<body>
@include('partials.index-header')
<div class="container-fluid">
	<div class="row">
		<!-- breadcrumb starts -->
		<ol class="breadcrumb" style="height: 100%;">
			<li><a href="{{ URL::to('index')}}">Home</a></li>
			<li class="active">Jobs Seekers Result</li>
		</ol>
		<!-- breadcrumb end -->
		<div class="row" style="margin-top: -1.5%;">
		    <div class="col-sm-1" style="border-top: solid lightblue"></div>
		    <div class="col-sm-1" style="border-top: solid antiquewhite"></div>
		    <div class="col-sm-1" style="border-top: solid lightblue"></div>
		    <div class="col-sm-1" style="border-top: solid antiquewhite"></div>
		    <div class="col-sm-1" style="border-top: solid lightblue"></div>
		    <div class="col-sm-1" style="border-top: solid antiquewhite"></div>
		    <div class="col-sm-1" style="border-top: solid lightblue"></div>
		    <div class="col-sm-1" style="border-top: solid antiquewhite"></div>
		    <div class="col-sm-1" style="border-top: solid lightblue"></div>
		    <div class="col-sm-1" style="border-top: solid antiquewhite"></div>
		    <div class="col-sm-1" style="border-top: solid lightblue"></div>
		    <div class="col-sm-1" style="border-top: solid antiquewhite"></div>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row text-center">
		<h1 id="asdf">Job Seekers from allover Pakistan...</h1>
	</div>
	<div class="row" style="margin-top: 1%;">
		<div class="col-lg-6" id="profile-col">
			<div class="col-lg-4">
				<div class="fileupload-new thumbnail img-up">
					<img alt="Profile Picture" src="{{ asset('img/demoUpload.jpg')}}" height="" width="">
				</div>
			</div>
			<div class="col-lg-8">
				<h3><i>Asif Sharif Shahid</i></h3>
				<h4><i>Frontend Developer (Web Development)</i></h4>
				<h5>Lahore, Pakistan</h5>
				<div class="btn btn-primary"> 
					<a href="{{ URL::to('jscv')}}">View Complete Profile</a>				
				</div>
			</div>
		</div>
		<div class="col-lg-6" id="profile-col">
			<div class="col-lg-4">
				<div class="fileupload-new thumbnail img-up">
					<img alt="Profile Picture" src="{{ asset('img/demoUpload.jpg')}}" height="" width="">
				</div>
			</div>
			<div class="col-lg-8">
				<h3><i>Ali Haider</i></h3>
				<h4><i>Android Developer</i></h4>
				<h5>Lahore, Pakistan</h5>
				<div class="btn btn-primary"> View Complete Profile</div>
			</div>
		</div>
	</div>

	<div class="row" style="margin-top: 1%;">
		<div class="col-lg-6" id="profile-col">
			<div class="col-lg-4">
				<div class="fileupload-new thumbnail img-up">
					<img alt="Profile Picture" src="{{ asset('img/demoUpload.jpg')}}" height="" width="">
				</div>
			</div>
			<div class="col-lg-8">
				<h3><i>Saad Rafique</i></h3>
				<h4><i>Android Developer</i></h4>
				<h5>Lahore, Pakistan</h5>
				<div class="btn btn-primary"> View Complete Profile</div>
			</div>
		</div>
		<div class="col-lg-6" id="profile-col">
			<div class="col-lg-4">
				<div class="fileupload-new thumbnail img-up">
					<img alt="Profile Picture" src="{{ asset('img/demoUpload.jpg')}}" height="" width="">
				</div>
			</div>
			<div class="col-lg-8">
				<h3><i>Ali Raza</i></h3>
				<h4><i>Frontend Developer (Web Development)</i></h4>
				<h5>Lahore, Pakistan</h5>
				<div class="btn btn-primary"> View Complete Profile</div>
			</div>
		</div>
	</div>

	<div class="row" style="margin-top: 1%;">
		<div class="col-lg-6" id="profile-col">
			<div class="col-lg-4">
				<div class="fileupload-new thumbnail img-up">
					<img alt="Profile Picture" src="{{ asset('img/demoUpload.jpg')}}" height="" width="">
				</div>
			</div>
			<div class="col-lg-8">
				<h3><i>M Amin</i></h3>
				<h4><i>Marketing Officer</i></h4>
				<h5>Lahore, Pakistan</h5>
				<div class="btn btn-primary"> View Complete Profile</div>
			</div>
		</div>
		<div class="col-lg-6" id="profile-col">
			<div class="col-lg-4">
				<div class="fileupload-new thumbnail img-up">
					<img alt="Profile Picture" src="{{ asset('img/demoUpload.jpg')}}" height="" width="">
				</div>
			</div>
			<div class="col-lg-8">
				<h3><i>Umair Ahmed</i></h3>
				<h4><i>Teacher</i></h4>
				<h5>Lahore, Pakistan</h5>
				<div class="btn btn-primary"> View Complete Profile</div>
			</div>
		</div>
	</div>

	<div class="row" style="margin-top: 1%;">
		<div class="col-lg-6" id="profile-col">
			<div class="col-lg-4">
				<div class="fileupload-new thumbnail img-up">
					<img alt="Profile Picture" src="{{ asset('img/demoUpload.jpg')}}" height="" width="">
				</div>
			</div>
			<div class="col-lg-8">
				<h3><i>Yunneb Arshad</i></h3>
				<h4><i>Database Administrator</i></h4>
				<h5>Lahore, Pakistan</h5>
				<div class="btn btn-primary"> View Complete Profile</div>
			</div>
		</div>
		<div class="col-lg-6" id="profile-col">
			<div class="col-lg-4">
				<div class="fileupload-new thumbnail img-up">
					<img alt="Profile Picture" src="{{ asset('img/demoUpload.jpg')}}" height="" width="">
				</div>
			</div>
			<div class="col-lg-8">
				<h3><i>Maqsood Akhter</i></h3>
				<h4><i>.Net Developer</i></h4>
				<h5>Lahore, Pakistan</h5>
				<div class="btn btn-primary"> View Complete Profile</div>
			</div>
		</div>
	</div>

	<div class="row" style="margin-top: 1%;">
		<div class="col-lg-6" id="profile-col">
			<div class="col-lg-4">
				<div class="fileupload-new thumbnail img-up">
					<img alt="Profile Picture" src="{{ asset('img/demoUpload.jpg')}}" height="" width="">
				</div>
			</div>
			<div class="col-lg-8">
				<h3><i>M Rashid</i></h3>
				<h4><i>Android Developer</i></h4>
				<h5>Lahore, Pakistan</h5>
				<div class="btn btn-primary"> View Complete Profile</div>
			</div>
		</div>
		<div class="col-lg-6" id="profile-col">
			<div class="col-lg-4">
				<div class="fileupload-new thumbnail img-up">
					<img alt="Profile Picture" src="{{ asset('img/demoUpload.jpg')}}" height="" width="">
				</div>
			</div>
			<div class="col-lg-8">
				<h3><i>M Rizwan</i></h3>
				<h4><i>Bussiness Administrator</i></h4>
				<h5>Lahore, Pakistan</h5>
				<div class="btn btn-primary"> View Complete Profile</div>
			</div>
		</div>
	</div>

	<div class="row" style="margin-top: 1%;">
		<div class="col-lg-6" id="profile-col">
			<div class="col-lg-4">
				<div class="fileupload-new thumbnail img-up">
					<img alt="Profile Picture" src="{{ asset('img/demoUpload.jpg')}}" height="" width="">
				</div>
			</div>
			<div class="col-lg-8">
				<h3><i>Wasif Sharif</i></h3>
				<h4><i>CSR</i></h4>
				<h5>Lahore, Pakistan</h5>
				<div class="btn btn-primary"> View Complete Profile</div>
			</div>
		</div>
		<div class="col-lg-6" id="profile-col">
			<div class="col-lg-4">
				<div class="fileupload-new thumbnail img-up">
					<img alt="Profile Picture" src="{{ asset('img/demoUpload.jpg')}}" height="" width="">
				</div>
			</div>
			<div class="col-lg-8">
				<h3><i>M Waseem</i></h3>
				<h4>Software Engineer</h4>
				<h5>Lahore, Pakistan</h5>
				<div class="btn btn-primary"> View Complete Profile</div>
			</div>
		</div>
	</div>

	<div class="row text-center">
		<nav>
			<ul class="pagination">
			    <li class="disabled">
			    	<a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a>
			    </li>
			    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
			    <li><a href="#">2</a></li>
			    <li><a href="#">3</a></li>
			    <li><a href="#">4</a></li>
			    <li><a href="#">5</a></li>
			    <li>
			    	<a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a>
			    </li>
			</ul>
		</nav>
	</div>
</div>
@include('partials.footer2')

</body>
</html>

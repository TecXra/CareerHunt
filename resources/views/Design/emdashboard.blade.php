@extends('layouts.app')

<!DOCTYPE html>
<html>
<head>
	<title>Employer Dashboard</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
<!--Header Starts Here-->
<div class="container-fluid" id="header">
    <div class="row">
        <div class="col-lg-6" id="logo-col">
            <img id="logo" src="{{ asset('img/logo2.png')}}">
        </div>

        <div class="col-lg-6" id="reg-col">
            <ul id="nav-reg1" class="nav navbar-nav">
                    <li id="nav-reg12"><a href="{{ URL::to('index2')}}">Homepage</a></li>
                  <!--  <li id="nav-reg12"><a href="{{action('EmployerController@empedit',[ ]) }}">Edit Profile</a> </li>-->
                    <li id="nav-reg12"><a href="" data-toggle="modal" data-target="#jobpost" id="asw">Post Job</a></li>
                    <li id="nav-reg12"><a href="{{ URL::to('index')}}">Log Out</a></li>
                </ul>
        </div>
    </div>
</div>
<!--Header Ends Here-->

<!--Color Divide Row Starts Here-->
<div class="container-fluid">
    <div class="row">
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
    <div class="row" id="asif">
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
<!--Color Divide Row Ends Here-->

<!--Dashboard Inner Div-->
<div class="container-fluid">
	<div class="row">
		<h3 class="text-center btn btn-primary" id="asd1" data-toggle="modal" data-target="#jobpost"> All Posted Jobs </h3><hr/>
		<div class="row" id="asd2"></div>
		<div class="row" id="asd3"></div>
<!--
		<div class="row" id="job-rows">
			<div class="col-lg-2 text-centre">
				<p style="font-size: xx-large; font-weight: bolder; text-align: center;">
					ONE
				</p>
   			</div>
       		<div class="col-lg-7">
           		<a href="#"><h5>Website Designer</h5></a>
           		<span class="text-danger app-date">Job posted: 26-06-2016</span>
           		<div class="text-muted" style="margin-top: 1%;">
               		A web designer person who is capable for Maintenance and designing of new features and updates...
               	</div>
            </div>
           	<div class="col-lg-3">
           		<input class="btn btn-primary" value="Edit" type="button" style="width: 50%;">
           		<input class="btn btn-primary" value="Delete" type="button" style="width: 50%; margin-top: 1%;">
           	</div>
		</div><hr/>
		<div class="row" id="job-rows">
			<div class="col-lg-2 text-centre">
				<p style="font-size: xx-large; font-weight: bolder; text-align: center;">
					TWO
				</p>
   			</div>
       		<div class="col-lg-7">
           		<a href="#"><h5>Website Designer</h5></a>
           		<span class="text-danger app-date">Job posted: 26-06-2016</span>
           		<div class="text-muted" style="margin-top: 1%;">
               		A web designer person who is capable for Maintenance and designing of new features and updates...
               	</div>
            </div>
           	<div class="col-lg-3">
           		<input class="btn btn-primary" value="Edit" type="button" style="width: 50%;">
           		<input class="btn btn-primary" value="Delete" type="button" style="width: 50%; margin-top: 1%;">
           	</div>
		</div><hr/>
		<div class="row" id="job-rows">
			<div class="col-lg-2 text-centre">
				<p style="font-size: xx-large; font-weight: bolder; text-align: center;">
					THREE
				</p>
   			</div>
       		<div class="col-lg-7">
           		<a href="#"><h5>Website Designer</h5></a>
           		<span class="text-danger app-date">Job posted: 26-06-2016</span>
           		<div class="text-muted" style="margin-top: 1%;">
               		A web designer person who is capable for Maintenance and designing of new features and updates...
               	</div>
            </div>
           	<div class="col-lg-3">
           		<input class="btn btn-primary" value="Edit" type="button" style="width: 50%;">
           		<input class="btn btn-primary" value="Delete" type="button" style="width: 50%; margin-top: 1%;">
           	</div>
		</div><hr/>
		<div class="row" id="job-rows">
			<div class="col-lg-2 text-centre">
				<p style="font-size: xx-large; font-weight: bolder; text-align: center;">
					FOUR
				</p>
   			</div>
       		<div class="col-lg-7">
           		<a href="#"><h5>Website Designer</h5></a>
           		<span class="text-danger app-date">Job posted: 26-06-2016</span>
           		<div class="text-muted" style="margin-top: 1%;">
               		A web designer person who is capable for Maintenance and designing of new features and updates...
               	</div>
            </div>
           	<div class="col-lg-3">
           		<input class="btn btn-primary" value="Edit" type="button" style="width: 50%;">
           		<input class="btn btn-primary" value="Delete" type="button" style="width: 50%; margin-top: 1%;">
           	</div>
		</div><hr/>
		<div class="row" id="job-rows">
			<div class="col-lg-2 text-centre">
				<p style="font-size: xx-large; font-weight: bolder; text-align: center;">
					FIVE
				</p>
   			</div>
       		<div class="col-lg-7">
           		<a href="#"><h5>Website Designer</h5></a>
           		<span class="text-danger app-date">Job posted: 26-06-2016</span>
           		<div class="text-muted" style="margin-top: 1%;">
               		A web designer person who is capable for Maintenance and designing of new features and updates...
               	</div>
            </div>
           	<div class="col-lg-3">
           		<input class="btn btn-primary" value="Edit" type="button" style="width: 50%;">
           		<input class="btn btn-primary" value="Delete" type="button" style="width: 50%; margin-top: 1%;">
           	</div>
		</div><hr/>
		<div class="row" id="job-rows">
			<div class="col-lg-2 text-centre">
				<p style="font-size: xx-large; font-weight: bolder; text-align: center;">
					SIX
				</p>
   			</div>
       		<div class="col-lg-7">
           		<a href="#"><h5>Website Designer</h5></a>
           		<span class="text-danger app-date">Job posted: 26-06-2016</span>
           		<div class="text-muted" style="margin-top: 1%;">
               		A web designer person who is capable for Maintenance and designing of new features and updates...
               	</div>
            </div>
           	<div class="col-lg-3">
           		<input class="btn btn-primary" value="Edit" type="button" style="width: 50%;">
           		<input class="btn btn-primary" value="Delete" type="button" style="width: 50%; margin-top: 1%;">
           	</div>
		</div>
-->
	</div>
</div>

<!--Footer Included by partial view-->
@include('partials.footer2')
<!--Footer Included by partial view-->







<!-- Modal Form Starts Here -->
<div id="jobpost" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
    	<div class="modal-header">
    		<button type="button" class="close" data-dismiss="modal">&times;</button>
    		<h4 class="modal-title">Enter Job Detail:</h4>
    	</div>
    	<div class="modal-body">
            <form action="jobstore" method="post" id="job-form">
                <label>Job Title: </label><br/>
                <input class="form-control" type="text" name="job_title" placeholder="Job Title"><br/>
                <label>Job Description: </label><br/>
                <input class="form-control" type="text" name="job_description" placeholder="Job Description"><br/>
                <label>Job Duration: </label><br/>
                <input class="form-control" type="text" name="job_duration" placeholder="Job Description"><br/>
                <label>Apply Due: </label><br/>
                <div class="form-inline">
                    <label>From: </label>
                    <input class="form-control" type="date" name="apply_due" placeholder="From" style="width: 43%;">
                    <label>To: </label>
                    <input class="form-control" type="date" name="last_date" placeholder="To" style="width: 43%;">
                </div>
                <br/>
                <input class="btn btn-primary" type="submit" value="submit" id="asd">
            </form>
    	</div>
    	<div class="modal-footer">
    		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    	</div>
    </div>
  </div>
</div>
<!-- Modal Form Starts Here -->


<!--
<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://www.google.com/maps/ms?msa=0&amp;msid=206462011011095192868.0004ba4702e8e6c1d6e35&amp;ie=UTF8&amp;ll=31.519737,74.394296&amp;spn=0.141688,0.087354&amp;t=m&amp;output=embed"></iframe><br /><small>View <a href="http://www.google.com/maps/ms?msa=0&amp;msid=206462011011095192868.0004ba4702e8e6c1d6e35&amp;ie=UTF8&amp;ll=31.519737,74.394296&amp;spn=0.141688,0.087354&amp;t=m&amp;source=embed" style="color:#0000FF ;text-align:left">B-36</a> in a larger map</small>
-->
</body>
<script type="text/javascript">
 $(function(){
       $('#asd1').click(function(){
$.ajax({
     url: 'jobpost',
     type: "get",
     success: function(data){
        $("#jobpost").append(data);
     }
   		});  
   })//end of click event
})





</script>
</html>














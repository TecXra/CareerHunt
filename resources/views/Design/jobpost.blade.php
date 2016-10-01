@extends('layouts.app')

<!DOCTYPE html>
<html>
<head>
	<title>Job Post Page</title>
</head>
<body>
<!--Job post form starts here-->
<div class="container-fluid">
    <div class="row" style="margin-bottom: 1%;">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <h2 class="text-center">Post Job Detail: </h2>
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
                    <input class="form-control" type="date" name="apply_due" placeholder="From" style="width: 41%;">
                    <label>To: </label>
                    <input class="form-control" type="date" name="last_date" placeholder="To" style="width: 41%;">
                </div>
                <br/>
                <input class="btn btn-primary" type="submit" value="submit" >
            </form>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>
<!--Job post form ends here-->
</body>
</html>





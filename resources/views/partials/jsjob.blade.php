@extends('layouts.app');
<div class="container-fluid">
    <div class="row text-center">
        <h3>
            Job Experience
        </h3>
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <form action="jobexp_store" method="post" file="true" id="jobexp-form">
                Job Title:
                <input type="text" class="form-control" name="job_title"></input><br/>
                Job Description:
                <input type="text" class="form-control" name="job_description"></input><br/>
                Job Duration:
                <input type="text" class="form-control" name="j_duration"></input><br/>
                Company Name:
                <input type="text" class="form-control" name="comp_name"></input><br/>
                <input type="submit" class="btn btn-primary" value="submit" id="jobexp-get">
            </form>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>
<div id="add-jobexpview">
        
        </div>
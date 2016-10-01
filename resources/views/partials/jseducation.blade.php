@extends('layouts.app');
<div class="container-fluid">
    <div class="row text-center">
        <h3>
            Education / Qualification
        </h3>
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <form action="edustore" method="post" file="true" id="edu-form">
               
                Degree Title:
                <input type="text" class="form-control" name="degree_title"></input><br/>
                Major Subjects:
                <input type="text" class="form-control" name="major_subjects"></input><br/>
                Institute:
                <input type="text" class="form-control" name="institute"></input><br/>
                Percentage:
                <input type="text" class="form-control" name="per_age"></input><br/>
                Degree Duration:
                <input type="text" class="form-control" name="e_duration"></input><br/>
                <button type="submit" class="btn btn-primary" id="btn-get">Submit</button>
            </form>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>
<div id="add-view">

</div>
        <div id="add-btnview">
        
        </div>




























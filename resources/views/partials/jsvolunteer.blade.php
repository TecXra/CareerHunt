@extends('layouts.app');
<div class="container-fluid">
    <div class="row text-center">
                <h3>Volunteer</h3>
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <form action="volunteer_store" method="post" file="true" id="volunteer-form">
                Organization:
                <input type="text" class="form-control" name="org"></input><br/>
                Post:
                <input type="text" class="form-control" name="post"></input><br/>
                Duration:
                <input type="text" class="form-control" name="v_duration"></input><br/>
                <input type="submit" class="btn btn-primary" value="submit" id="btn-volunteerget">
            </form>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>
<div id="add-volunteerview">
        
        </div>



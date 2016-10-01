@extends('layouts.app');
<div class="container-fluid">
    <div class="row text-center">
        <h3>Skills</h3>
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
		    <form action="award_store" method="post" file="true">
                Skill Name:
                <input type="text" class="form-control" name="name"> </input><br/>
                <input type="submit" class="btn btn-primary" value="submit">
            </form>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>




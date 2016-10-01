@extends('layouts.app');
<div class="container-fluid">
    <div class="row text-center">
        <h3>Award</h3>
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
		    <form action="award_store" method="post" file="true" id="award-form">
                Award Name:
                <input type="text" class="form-control" name="a_name"> </input><br/>
                Award year:
                <input type="text" class="form-control" name="a_year"> </input><br/>
                Institute:
                <input type="text" class="form-control" name="a_institute"> </input><br/>
                <input type="submit" class="btn btn-primary" value="submit" id="btn-awardget">
            </form>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>
<div id="add-awardview">
        
        </div>



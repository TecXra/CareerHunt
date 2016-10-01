@extends('layouts.app');
<div class="container-fluid">
    <div class="row text-center">
                <h3>Seminar</h3>
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
		    <form action="seminar_store" method="post" file="true" id="seminar-form">
        		Seminar Topic:
		        <input type="text" class="form-control" name="s_topic"></input><br/>
        		Institute:
		        <input type="text" class="form-control" name="s_institute"></input><br/>
        		<input type="submit" class="btn btn-primary" value="submit" id="btn-seminarget">
		    </form>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>

<div id="add-seminarview">
        
        </div>


@extends('layouts.app')


@section('styles')
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
@endsection


@section('content')

<!--Dashboard Inner Div-->
<div class="container-fluid">
  <div class="row">
    <h2 class="text-center">Employer Dashboard</h2>
                      
      <a href="{{action('EmployerController@empedit',[ $Compinfo->id]) }}">Edit Profile</a>
<br/>
      <a href="" data-toggle="modal" data-target="#jobpost" id="asw">Post Job</a>

    <div class="row" id="asd2"></div>
    <div class="row" id="asd3"></div>
  </div>
</div>














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

@endsection




@section('scripts')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

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

@endsection















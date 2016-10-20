@extends('layouts.app2')


@section('styles')
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<style type="text/css">
  #emp-heading
  {
    width: 25%;
    margin-left: 35%;
    border-bottom: solid lightblue;
    padding-bottom: 1%;
  }

</style>



@endsection


@section('content')

<!--Dashboard Inner Div-->
<div class="container-fluid">
  <div class="row">
    <h2 class="text-center" id="emp-heading">Employer Dashboard</h2>   
      <div class="col-lg-4">
        <label>Company Name: <span>{{Auth::user()->name}}</span> </label> <br/>
        <label>Company Head Name: <span>{{$Compinfo->comp_head_name}}</span> </label>
      </div>
      <a href="{{action('EmployerController@empedit',[ $Compinfo->id]) }}">Edit Profile</a>

      <a href="Design/{{ $Compinfo->id }}"><img src="{{ asset($Compinfo->company_logo) }}" class="img-thumbnail" style="width:200px; height:150px;" /></a><br/>

<!--       <a href="" data-toggle="modal" data-target="#jobpost" id="asw">Post Job</a>
 -->
    <div class="row" id="asd2"></div>
    <div class="row" id="asd3"></div>
  </div>
</div>


<!-- {{ Auth::user()->name }}
 -->










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















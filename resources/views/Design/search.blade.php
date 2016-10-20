@extends('layouts.app')



@section('content')



@if (count($articles) === 0)
There is no such job seeker or the job seeker required not lies in the specific area
@elseif (count($articles) >= 1)

    @foreach($articles as $article)
    @if($article->city===$region)
<label>name: </label>    {{$article->username}}
<label>City: </label>    {{$article->city}}

@endif
    @endforeach
@endif















<!--       <a href="" data-toggle="modal" data-target="#jobpost" id="asw">Post Job</a>
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



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Main</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">


<script type="text/javascript" src="{{ asset ('js/angular.min.js')}}"></script>
<script type="text/javascript" src="{{ asset ('js/angular.js')}}"></script>


<link rel="stylesheet" type="text/css" href="{{ asset('Site.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
<script type="text/javascript" src="{ asset('css/'bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('css/jquery.js')}}"></script>

<script type="text/javascript" src="{{ asset('js/jqui/jquery-ui.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('js/jqui/jquery-ui.css')}}">
<!--
<link rel="stylesheet" type="text/css" href="{{ asset('style.css')}}">
-->
<script type="text/javascript" src="{{ asset('js/validate/bootstrapValidator.js')}}"></script>

<script type="text/javascript" src="{{ asset('js/validate/jquery.datetimepicker.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/validate/pwstrength.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/validate/registration_validation.js')}}"></script>

@yield('styles')
<style type="text/css">
*
{
  font-family: 'Raleway';
  font-style: normal;
  font-weight: 400;
  src: local('Raleway'), local('Raleway-Regular'), url('https://fonts.gstatic.com/s/raleway/v11/yQiAaD56cjx1AooMTSghGfY6323mHUZFJMgTvxaG2iE.woff2') format('woff2');
  unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
}

</style>

<body ng-app="sampleApp">

<!-- <div ng-controller="myCtrl">
  <% firstName + " " + lastName %>
</div>
<div>
<input type="text" ng-model="name"></input>
<input type="text" ng-model="last_name"></input>
  <h1>
    <% name + " " + last_name%>
  </h1>
</div>
 -->

@include('partials.emdashboard-header')


<div class="container-fluid" style="margin-top: 1%;">
  @yield('content')
</div>

@include('partials.footer1')

<!-- Scripts -->
@yield('scripts')

</body>
<script type="text/javascript">




var requestRunning = false;
$(document).ready(function(){
  $('#btn-get').click(function(event){  
   // return false;         
    $.ajax({
      url: 'edustore',
      type: "post",
      data: $('#edu-form').serialize(),//{'email':$('input[name=email]').val(), '_token': $('input[name=_token]').val()},
      success: function(data){
$("#add-view").append(data);
        //alert(data);
   //   window.alert('Loading: Please Wait...');
   
   
      }
    });

event.preventDefault(); 
 requestRunning = true;
    $.ajax(ajaxOpts);
    //event.preventDefault(); 
  }); 
});
</script>
<script type="text/javascript">
var requestRunning = false;
$(document).ready(function(){
  $('#btn-rpget').click(function(event){  
   // return false;         
    $.ajax({
      url: 'rpstore',
      type: "post",
      data: $('#rp-form').serialize(),
      success: function(data){
$("#add-rpview").append(data);
  }
    });

event.preventDefault(); 
 requestRunning = true;
    $.ajax(ajaxOpts);
  }); 
});
</script>

<script type="text/javascript">
var requestRunning = false;
$(document).ready(function(){
  $('#btn-courseget').click(function(event){  
   // return false;         
    $.ajax({
      url: 'coursestore',
      type: "post",
      data: $('#course-form').serialize(),
      success: function(data){
$("#add-courseview").append(data);
  }
    });

event.preventDefault(); 
 requestRunning = true;
    $.ajax(ajaxOpts);
  }); 
});
</script>

<script type="text/javascript">
var requestRunning = false;
$(document).ready(function(){
  $('#btn-jobexpget').click(function(event){  
   // return false;         
    $.ajax({
      url: 'jobexp_store',
      type: "post",
      data: $('#jobexp-form').serialize(),
      success: function(data){
$("#add-jobexpview").append(data);
  }
    });

event.preventDefault(); 
 requestRunning = true;
    $.ajax(ajaxOpts);
  }); 
});
</script>

<script type="text/javascript">
var requestRunning = false;
$(document).ready(function(){
  $('#btn-seminarget').click(function(event){  
   // return false;         
    $.ajax({
      url: 'seminar_store',
      type: "post",
      data: $('#seminar-form').serialize(),
      success: function(data){
$("#add-seminarview").append(data);
  }
    });

event.preventDefault(); 
 requestRunning = true;
    $.ajax(ajaxOpts);
  }); 
});
</script>

<script type="text/javascript">
var requestRunning = false;
$(document).ready(function(){
  $('#btn-volunteerget').click(function(event){  
   // return false;         
    $.ajax({
      url: 'volunteer_store',
      type: "post",
      data: $('#volunteer-form').serialize(),
      success: function(data){
$("#add-volunteerview").append(data);
  }
    });

event.preventDefault(); 
 requestRunning = true;
    $.ajax(ajaxOpts);
  }); 
});
</script>

<script type="text/javascript">
var requestRunning = false;
$(document).ready(function(){
  $('#btn-volunteerget').click(function(event){  
   // return false;         
    $.ajax({
      url: 'volunteer_store',
      type: "post",
      data: $('#volunteer-form').serialize(),
      success: function(data){
$("#add-volunteerview").append(data);
  }
    });

event.preventDefault(); 
 requestRunning = true;
    $.ajax(ajaxOpts);
  }); 
});
</script>

<script type="text/javascript">
var requestRunning = false;
$(document).ready(function(){
  $('#btn-awardget').click(function(event){  
   // return false;         
    $.ajax({
      url: 'award_store',
      type: "post",
      data: $('#award-form').serialize(),
      success: function(data){
$("#add-awardview").append(data);
  }
    });

event.preventDefault(); 
 requestRunning = true;
    $.ajax(ajaxOpts);
  }); 
});
</script>



      <script type="text/javascript">
    $(function(){
        $('#adv').click(function(){
//window.alert('Loading: Please Wait...');

 $.ajax({
      url: 'jseducationshow/{id}',
      type: "get",
   
      success: function(data){
        
         $("#add-btnview").append(data);
      }
    });  
 })
    })
</script>
<!--
<script type="text/javascript">
$(document).ready(function(){
  $('#btn-view').click(function(){            
    $.ajax({
      url: 'empstore',
      type: "post",
      data: $('#form').serialize(),//{'email':$('input[name=email]').val(), '_token': $('input[name=_token]').val()},
      success: function(data){
        //alert(data);
      window.alert('Loading: Please Wait...');
      }
    });      
  }); 
});
</script>-->



</html>














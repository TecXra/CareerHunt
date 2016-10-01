<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Main</title>
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

<body>
@include('partials.nav')



</body>
<!--
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@section('title') Article Site @show</title>
    @section('meta_keywords')
        <meta name="keywords" content="your, awesome, keywords, here"/>
    @show @section('meta_author')
        <meta name="author" content="Jon Doe"/>
    @show @section('meta_description')
        <meta name="description"
              content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei."/>
    @show
        <link href="{{ asset('Site.css') }}" rel="stylesheet">
        <link href="{{ asset('style.css') }}" rel="stylesheet">
 
        <script src="{{ asset('js/site.js') }}"></script>
       
        <script src="{{ asset('js/Js.js') }}"></script><link href="{{ asset('bootstrap/bootstrap.min.css') }}" rel="stylesheet">
        <script src="{{ asset('bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js') }}"></script>

    @yield('styles')
     HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]

    <link rel="shortcut icon" href="{!! asset('assets/site/ico/favicon.ico')  !!} ">
-->
</head>
<body>
<!--<div class="container">
    @yield('content')
</div>

<!-- Scripts -->
<!--@yield('scripts')-->
@yield('content')

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














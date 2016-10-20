@extends('layouts.login_app')

@section('styles')
<style>
   .col-md-3{
        height:600px;
    }
    #form-row
    {
        background-image: url("img/bg/bg.jpg");
        margin-top: -1.5%;
        margin-left: -2.2%;
        width: 104.5%;

/*        background-color: WhiteSmoke;*/
    }
    #login
    {
/*        opacity: 0.6;*/
        background-image: url("img/bg/bg3.jpg");
            margin-top:50px;
            padding-top:40px;
            height: 420px;
            box-shadow: 10px 10px 5px #888888;
            border-radius: 10%;
    }
    #login:hover
    {
        opacity: 1;
    }
    #welcome
    {
        margin-top: 40%;
    }
    span{
        font-family: 'ChunkFiveRegular';
        font-size: 38px;
        color: #f03761;
        text-shadow: 2px 2px rgba(134,134,134, 0.4);
    }
    input{
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 3px solid #ccc;
        -moz-transition: 0.5s;
        transition: 0.5s;
        outline: none;
    }
    label{
        color: #FCB53B;
    }
    button {
        background-color: #f03761;; /* Green */
        border: none;
        color: white;
        padding: 16px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
    }
    #link{
        text-align: center;
        color: red;
    }
    #forgot-password
    {
        color: blue;
    }
</style>

@endsection









@section('content')
<div class="container-fluid" id="from-container">
    <div class="row" id="form-row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="row" id="login">
            <h2 class="text-center">Login Form</h2>
                <div class="col-md-2"></div>
                <div class="col-md-8" id="login-form">
                    {!! Form::open(array('action' => 'UsersController@login')) !!}
                        <div class="form-group  {{ $errors->has('status') ? 'has-error' : '' }}">   
                            <div class="controls">
                                {!! Form::hidden('status', 'e', array('class' => 'form-control')) !!}
                                <span class="help-block">{{ $errors->first('status', ':message') }}</span>
                            </div>
                        </div>
                    
                        <div class="form-group  {{ $errors->has('email') ? 'has-error' : '' }}">
                            {!! Form::label('email', "E-Mail Address", array('class' => 'control-label')) !!}
                            <div class="controls">
                                <input type="email" name="email" class="form-control" placeholder="E-Mail" required></input>
                                <!-- {!! Form::text('email', null, array('class' => 'form-control')) !!} -->
                                <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                            </div>
                        </div>

                        <div class="form-group  {{ $errors->has('password') ? 'has-error' : '' }}">
                            {!! Form::label('password', "Password", array('class' => 'control-label')) !!}
                            <div class="controls">
                                <input type="password" name="password" placeholder="Password" id="confirm_password" class="form-control" required>
                                <!-- {!! Form::password('password', array('class' => 'form-control')) !!} -->
                                <span class="help-block">{{ $errors->first('password', ':message') }}</span>
                            </div>
                        </div>
<!-- 
                            <div class="col-md-6" style="border: solid;">
                                <input type="checkbox" name="remember" style="border: solid; margin-left: 0%;">
                                <label>Remember Me</label>
                            </div>
 -->
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary" style="margin-right: 15px;">Login</button>
                            </div>
                    {!! Form::close() !!}
                            
    <!--
                             <div class="col-md-12">
                                <a href="{{ URL::to('/password/email') }}" id="forgot-password" style="border: solid;">Forgot Your Password?</a>    
                            </div> 
    -->
<!--                             <div class="col-md-12 text-center">
                                <a href="#" id="link" class="blink1" data-toggle="modal" data-target="#myModal">New Here? Create an account.</a>
                            </div> -->
                    </div>

                <div class="col-md-2"> </div>
            </div>
        </div>
    <div class="col-md-3"> </div> 
</div>
</div>











<!-- Modal 1-->
<!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="border: solid black;">
  <div class="modal-dialog" role="document" style="border: solid; width: 70%;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Search Provider</h4>
      </div>
      <div class="modal-body">
        <h3>Choose From Following two Options: </h3>
        <h4>
            <a href="#">I am A Job Seeker</a>
        </h4>
        <h4>
            <a href="#">I am Employer</a>
        </h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" style="padding-top: 0.8%;">Close</button>
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal2" style="margin-top: 0px; padding-top: 0.8%;">Search</button>
      </div>
    </div>
  </div>
</div>
 -->
@endsection




@section('scripts')
<!--     <script>
    function blinker() {
        $('.blink1').fadeOut(500);
        $('.blink1').fadeIn(500);
    }
    setInterval(blinker, 1000);
    </script>
 -->@endsection









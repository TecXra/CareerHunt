@extends('layouts.app')

@section('styles')
    <style>
   .col-md-3{
        height:600px;
    }
    #from-container
    {
        background-image: url("img/bg/bg.jpg");
//        background-color: WhiteSmoke;
    }
    #login
    {
//        opacity: 0.6;
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
                <div class="col-md-2"></div>
                <div class="col-md-8" id="login-form">
                    {!! Form::open(array('action' => 'UsersController@login')) !!}
                        <div class="form-group  {{ $errors->has('status') ? 'has-error' : '' }}">   
                            <div class="controls">
                                {!! Form::hidden('status', 'e', array('class' => 'form-control')) !!}
                                <span class="help-block">{{ $errors->first('status', ':message') }}</span>
                            </div>
                        </div>
                    
                        <div class="form-group  {{ $errors->has('email') ? 'has-error' : '' }}"  style="border: solid;">
                            {!! Form::label('email', "E-Mail Address", array('class' => 'control-label')) !!}
                            <div class="controls">
                                {!! Form::text('email', null, array('class' => 'form-control')) !!}
                                <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                            </div>
                        </div>

                        <div class="form-group  {{ $errors->has('password') ? 'has-error' : '' }}" style="border: solid;">
                            {!! Form::label('password', "Password", array('class' => 'control-label')) !!}
                            <div class="controls">
                                {!! Form::password('password', array('class' => 'form-control')) !!}
                                <span class="help-block">{{ $errors->first('password', ':message') }}</span>
                            </div>
                        </div>
<!-- 
                            <div class="col-md-6" style="border: solid;">
                                <input type="checkbox" name="remember" style="border: solid; margin-left: 0%;">
                                <label>Remember Me</label>
                            </div>
 -->
                            <div class="col-md-12 text-center" style="border: solid;">
                                <button type="submit" class="btn btn-primary" style="margin-right: 15px;">Login</button>
                            </div>
                    {!! Form::close() !!}
                            
    <!--
                             <div class="col-md-12">
                                <a href="{{ URL::to('/password/email') }}" id="forgot-password" style="border: solid;">Forgot Your Password?</a>    
                            </div> 
    -->
                            <div class="col-md-12 text-center">
                                <a href="{{URL::to('emsignup')}}" id="link" class="blink">
                                    New Here? Create an account.
                        </div>
                                
                            </div>

                <div class="col-md-2"> </div>
            </div>
        </div>
    <div class="col-md-3"> </div> 
</div>
</div>

@endsection




@section('scripts')
    <script>
    function blinker() {
        $('.blink').fadeOut(500);
        $('.blink').fadeIn(500);
    }
    setInterval(blinker, 1000);
    </script>
@endsection









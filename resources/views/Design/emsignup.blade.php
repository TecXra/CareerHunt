@extends('layouts.app')
<script>
function blinker() {
    $('.blink').fadeOut(500);
    $('.blink').fadeIn(500);
}
setInterval(blinker, 1000);
</script>
    <style>
   .col-md-3{
        height:600px;
    }
    #from-container
    {
        background-image: url("img/bg/bg.jpg");
//        background-color: WhiteSmoke;
    }
    .form,fieldset
    {
    }
    #login
    {
        opacity: 0.6;
        background-image: url("img/bg/bg3.jpg");
            margin-top:50px;
            padding-top:40px;
            height: 620px;
            box-shadow: 10px 10px 5px #888888;
            border-radius: 10%;
    }
    #login:hover
    {
        opacity: 1;
    }
    #welcome{
       margin-bottom: 20px;
    }
    span{
        font-family: 'ChunkFiveRegular';
        font-size: 38px;
        color: #f03761;
        text-shadow: 2px 2px rgba(134,134,134, 0.4);

    }
input, textarea{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
//    -moz-transition: 0.5s;
  //  transition: 0.5s;
    outline: none;
}
textarea{
    height: 200px;
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
    //-moz-transition-duration: 0.4s; /* Safari */
    //transition-duration: 0.4s;
    //cursor: pointer;
}
#link{
    text-align: center;
    color: red;
}
    
    </style>
    @include('partials.signup-header')
<div class="container-fluid" id="from-container">
    <div class="row" id="form-row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="row" id="login">
                <div class="col-md-3"></div>
                <div class="col-md-6" id="login-form">
                    {!! Form::open(array('action' => 'UsersController@register')) !!}
            <div class="form-group  {{ $errors->has('name') ? 'has-error' : '' }}">
                {!! Form::label('name', trans('site/user.name'), array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::text('name', null, array('class' => 'form-control')) !!}
                    <span class="help-block">{{ $errors->first('name', ':message') }}</span>
                </div>
            </div>
            
            <div class="form-group  {{ $errors->has('email') ? 'has-error' : '' }}">
                {!! Form::label('email', trans('site/user.e_mail'), array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::text('email', null, array('class' => 'form-control')) !!}
                    <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                </div>
            </div>
            <div class="form-group  {{ $errors->has('password') ? 'has-error' : '' }}">
                {!! Form::label('password', "Password", array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::password('password', array('class' => 'form-control')) !!}
                    <span class="help-block">{{ $errors->first('password', ':message') }}</span>
                </div>
            </div>
            <div class="form-group  {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                {!! Form::label('password_confirmation', "Confirm Password", array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::password('password_confirmation', array('class' => 'form-control')) !!}
                    <span class="help-block">{{ $errors->first('password_confirmation', ':message') }}</span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Register
                    </button>
                </div>
            </div>
            {!! Form::close() !!}
                </div> 
                <div class="col-md-3"> </div>
            </div>
        </div>
    <div class="col-md-3"> </div> 
</div>
</div>
<!--Color Divide Row Starts Here-->
<div class="container-fluid">
<div class="row">
    <div class="col-sm-1" style="border-bottom: solid lightblue"></div>
    <div class="col-sm-1" style="border-bottom: solid antiquewhite"></div>
    <div class="col-sm-1" style="border-bottom: solid lightblue"></div>
    <div class="col-sm-1" style="border-bottom: solid antiquewhite"></div>
    <div class="col-sm-1" style="border-bottom: solid lightblue"></div>
    <div class="col-sm-1" style="border-bottom: solid antiquewhite"></div>
    <div class="col-sm-1" style="border-bottom: solid lightblue"></div>
    <div class="col-sm-1" style="border-bottom: solid antiquewhite"></div>
    <div class="col-sm-1" style="border-bottom: solid lightblue"></div>
    <div class="col-sm-1" style="border-bottom: solid antiquewhite"></div>
    <div class="col-sm-1" style="border-bottom: solid lightblue"></div>
    <div class="col-sm-1" style="border-bottom: solid antiquewhite"></div>
</div>
<div class="row">
    <div class="col-sm-1" style="border-top: solid lightblue"></div>
    <div class="col-sm-1" style="border-top: solid antiquewhite"></div>
    <div class="col-sm-1" style="border-top: solid lightblue"></div>
    <div class="col-sm-1" style="border-top: solid antiquewhite"></div>
    <div class="col-sm-1" style="border-top: solid lightblue"></div>
    <div class="col-sm-1" style="border-top: solid antiquewhite"></div>
    <div class="col-sm-1" style="border-top: solid lightblue"></div>
    <div class="col-sm-1" style="border-top: solid antiquewhite"></div>
    <div class="col-sm-1" style="border-top: solid lightblue"></div>
    <div class="col-sm-1" style="border-top: solid antiquewhite"></div>
    <div class="col-sm-1" style="border-top: solid lightblue"></div>
    <div class="col-sm-1" style="border-top: solid antiquewhite"></div>
</div>
</div>
<!--Color Divide Row Ends Here-->
<div class="container-fluid">
<div class="row text-center" style="background-color: lightblue">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
        <h4>
            <p>&copy; | All Rights Reserved By <a href="#">Career Grip</a></p>
        </h4>
    </div>
    <div class="col-lg-4"></div>
</div>
</div>

<!--
@extends('layouts.app')
<div class="container-fluid">
    <div class="container">
        <div class="row text-center">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <h2>
                Job Seeker Sign Up Form
            </h2>
            <form action="{{ URL::to('jsprofile') }}" method="get">
                <label>*First name: </label><br/>
                <input class="form-control" type="text" name="First-name" placeholder="First name"  required><br/><br/>
                <label>*Last name: </label><br/>
                <input class="form-control" type="text" name="Last-name" placeholder="Last name" required><br/><br/>
                <label>*Password: </label><br/>
                <input class="form-control" type="password" name="Password" placeholder="Password" required><br/><br/>
                <label>*Re-Type Password: </label><br/>
                <input class="form-control" type="password" name="Re-Type Password" placeholder="Re-Type Password" required><br/><br/>
                <label>*E-Mail: </label><br/>
                <input class="form-control" type="email" name="E-Mail" placeholder="Enter E-Mail" required><br/><br/>
                <input type="submit" value="Submit" id="b1">
            </form>
        </div>
        <div class="col-lg-4"></div>
        </div>
    </div>
</div>
-->
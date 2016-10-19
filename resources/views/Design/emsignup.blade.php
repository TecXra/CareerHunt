@extends('layouts.app')

@section('styles')

<style>
   #form-row
   {
    margin-top: -2%;
    background-image: url("img/bg/bg.jpg");
    }
    #login
    {
/*        opacity: 0.6;*/
        background-image: url("img/bg/bg3.jpg");
        margin-top:50px;
        padding-top:20px;
        margin-bottom: 7%;
        height: 480px;
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
        -moz-transition: 0.5s;
        transition: 0.5s;
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
        -moz-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
        cursor: pointer;
    }
    #link{
        text-align: center;
        color: red;
    }
</style>

@endsection



@section('content')

    <div class="row" id="form-row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="row" id="login">
                <h3 class="text-center">I am a Employer</h3>
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
                        <div class="form-group  {{ $errors->has('status') ? 'has-error' : '' }}">
                           
                            <div class="controls">
                                {!! Form::hidden('status', 'e', array('class' => 'form-control')) !!}
                                <span class="help-block">{{ $errors->first('status', ':message') }}</span>
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

@endsection





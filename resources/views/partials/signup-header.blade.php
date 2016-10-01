@extends('layouts.app')
<!--Header Starts Here-->
<div class="container-fluid" id="header">
    <div class="row">
        <div class="col-lg-6" id="logo-col">
            <img id="logo" src="{{ asset('img/logo2.png')}}" style="height: 100px;">
        </div>

        <div class="col-lg-6" id="reg-col">
            <ul id="nav-reg1" class="nav navbar-nav">
                    <li id="nav-reg12"><a href="{{ URL::to('index')}}">Home</a></li>
                    <li id="nav-reg12"><a href="{{ URL::to('jslogin')}}">Login as Job Seeker</a> </li>
                    <li id="nav-reg12"><a href="{{ URL::to('emplogin')}}">Login as Employer</a> </li>
                </ul>
        </div>
    </div>
</div>
<!--Header Ends Here-->
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
@extends('layouts.app')
@section('title') Home :: @parent @stop
@section('content')


<div class="container-fluid">
    <div class="container">
        <!--Start Header-->
        <div class="row" style="border: solid #ccd097;box-shadow: 3px 3px 2px black">
            <div class="col-lg-6">
                <h3>
                    Company Logo
                </h3>
            </div>
            <div class="col-lg-6">
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('login') }}">Login</a></li>
                    <li><a href="#popup1">Signup</a> </li>
                </ul>
            </div>
        </div>
        <!--End Header-->

        <!--First Navigation Menu Start-->
        <div class="row" style="border: solid #ccd097; margin-top: 0.3%; box-shadow: 3px 3px 2px black">
            <div class="col-lg-6">
            </div>
            <div class="col-lg-6">
                <ul class="nav navbar-nav">
                    <li><a href="{{URL::to('job')}}">Jobs</a></li>
                    <li><a href="#">Employers</a></li>
                    <li><a href="#">Job Seeker</a></li>
                    <li><a href="About-Us.html">About Us</a></li>
                    <li><a href="Contact-Us.html">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <!--First Navigation Menu End-->

        <!--Search and Advanced Search Field-->
        <div class="row" style="border: solid #ccd097; margin-top: 0.3%; box-shadow: 3px 3px 2px black">
            <div class="col-lg-6">

                <form action="queries" method="POST">
                    <input type="text" name="search_text"><br/><br/>
                    <input type="submit" value="Search">
                </form>

            </div>
            <div class="col-lg-6">
                <div class="btn btn-primary" style="margin-top: 1%; width: 70%; font-size: xx-large">
                    <span class="glyphicon glyphicon-search"></span>
                    Advanced Search
                </div>
            </div>
        </div>
        <!--Search and Advanced Search Field-->

        <!--Job Count Starts Here-->
        <div class="row" style="border: solid #ccd097; margin-top: 0.3%; box-shadow: 3px 3px 2px black">
            <div class="col-lg-3">
                <ul>
                    <h4>City</h4>
                    <li id="jc1"><a href="#">Lahore(15)</a></li>
                    <li id="jc1"><a href="#">Quetta(35)</a></li>
                    <li id="jc1"><a href="#">Multan(65)</a></li>
                    <li id="jc1"><a href="#">Karachi(75)</a></li>
                    <li id="jc1"><a href="#">Islamabad(15)</a></li>
                </ul>
                <div class="btn btn-primary" style="float: right">
                    <span class="glyphicon glyphicon-globe"></span>
                    Click for More
                </div>
            </div>
            <div class="col-lg-3">
                <ul>
                    <h4>Jobs</h4>
                    <li id="jc1"><a href="#">Web Development(15)</a></li>
                    <li id="jc1"><a href="#">Web Designing(35)</a></li>
                    <li id="jc1"><a href="#">Software Engineer(45)</a></li>
                    <li id="jc1"><a href="#">Java Developer(15)</a></li>
                    <li id="jc1"><a href="#">.net Developer(25)</a></li>
                </ul>
                <div class="btn btn-primary" style="float: right">
                    <span class="glyphicon glyphicon-globe"></span>
                    Click for More
                </div>
            </div>
            <div class="col-lg-3">
                <ul>
                    <h4>Languages</h4>
                    <li id="jc1"><a href="#">English(55)</a></li>
                    <li id="jc1"><a href="#">Urdu(25)</a></li>
                    <li id="jc1"><a href="#">Spanish(75)</a></li>
                    <li id="jc1"><a href="#">French(15)</a></li>
                    <li id="jc1"><a href="#">Arabic(35)</a></li>
                </ul>
                <div class="btn btn-primary" style="float: right">
                    <span class="glyphicon glyphicon-globe"></span>
                    Click for More
                </div>
            </div>
            <div class="col-lg-3">
                <ul>
                    <h4>Sports</h4>
                    <li id="jc1"><a href="#">Cricket(95)</a></li>
                    <li id="jc1"><a href="#">Football(55)</a></li>
                    <li id="jc1"><a href="#">Hockey(35)</a></li>
                    <li id="jc1"><a href="#">Baseball(05)</a></li>
                    <li id="jc1"><a href="#">Soccer(25)</a></li>
                </ul>
                <div class="btn btn-primary" style="float: right">
                    <span class="glyphicon glyphicon-globe"></span>
                    Click for More
                </div>
            </div>
        </div>
        <!--Job Count Starts Here-->

        <!--Logo Slider Code Starts Here-->
        <div class="row" style="border: solid #ccd097; margin-top: 0.3%; box-shadow: 3px 3px 2px black">
            <h1 style="margin-left:1%">Logo Slider</h1>
        </div>
        <!--Logo Slider Code Starts Here-->

        <!--Job Listing & Success Stories-->
        <div class="row" style="border: solid #ccd097; margin-top: 0.3%; box-shadow: 3px 3px 2px black">
            <div class="col-lg-6">
                <h3 class="text-center">Latest Jobs</h3>
                <div class="col-sm-6">
                    <ol style="margin-left: 20%;">
                        <li><a href="#">Android Developer</a> Small Description</li>
                        <li><a href="#">Java Developer</a> Small Description</li>
                        <li><a href="#">C++ Developer</a> Small Description</li>
                        <li><a href="#">dotNet Developer</a> Small Description</li>
                    </ol>
                </div>
                <div class="col-sm-6">
                    <ol>
                        <li><a href="#">Data Entry Operator</a> Small Description</li>
                        <li><a href="#">Salesman</a> Small Description</li>
                        <li><a href="#">Driver</a> Small Description</li>
                        <li><a href="#">Office Boy</a> Small Description</li>
                        <li><a href="#">Cook</a> Small Description</li>
                        <li><a href="#">Athelete</a> Small Description</li>
                        <li><a href="#">Gym Trainer</a> Small Description</li>
                    </ol>
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="text-center">
                    Success Stories
                </h3>
                <h4 style="margin-left: 20%;">Success Stories Slider Code Write Here</h4>
            </div>
        </div>
        <!--Job Listing & Success Stories-->
    </div>
</div>

<div id="popup1" class="overlay">
    <div class="popup"STYLE="width: 75%;border: groove #ac2925 5px; background-color: #cfffc9">
        <a class="close" href="#">&times;</a>
        <div class="row text-center">
            <h1 style="color: #1b6d85; text-shadow: 8px 11px 7px black; font-family: Algerian">
                Sign-Up As:
            </h1>
            <div class="col-sm-6" style="border-right: solid crimson">
                <h3>
                    <a id="overlay-link" href="{{ URL::to('jssignup') }}">
                        <span class="glyphicon glyphicon-user"></span>
                        Job Seeker
                    </a>
                </h3>
            </div>
            <div class="col-sm-6">
                <h3>
                    <a id="overlay-link" href="{{ URL::to('emsignup') }}">
                        <span class="glyphicon glyphicon-user"></span>
                        Employer
                    </a>
                </h3>
            </div>
        </div>
    </div>
</div>
@endsection
@stop


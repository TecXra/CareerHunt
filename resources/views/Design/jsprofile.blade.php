@extends('layouts.app')
<style type="text/css">
    #js1
    {
        margin-left: 0.1%;
    }
    #js2,#js3,#js4,#js5,#js6,#js7
    {
        margin-left: 0.1%;
    }
    #js1:hover,#js2:hover,#js3:hover,#js4:hover
    {
        box-shadow: 5px 5px 5px black;
//        transform: rotate(360deg);
    }
    #js5:hover,#js6:hover,#js7:hover
    {
        box-shadow: 5px 5px 5px black;
//        transform: rotateX(360deg);
    }
    

</style>
@include('partials.logout-header')
<div class="container-fluid" style="margin-bottom: 1%;">
    <div class="row text-center">
        <h2 style="margin-bottom: -1%;"><i>Job Seeker Profile</i></h2>
    </div>    
<hr/>
    <form action="storejobseeker" method="post" files="true">
        <div class="row" id="p-info">
            <div class="col-sm-2">
                <h4>Upload Profile Picture</h4>
                <div class="fileupload-new thumbnail img-up">
                    <img alt="Profile Picture" src="{{ asset('img/demoUpload.jpg')}}"/>
                </div>
                <input type="file" class="form-control">
            </div>
            <div class="col-lg-10">
                <div class="row" id="form-row" style="margin-top: 4%;">
                    <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">Date-Of-Birth * </div>
                                <input type="date" id="datepicker" class="form-control" placeholder="DD/MM/YYYY">
                            </div>
                    </div>

                    <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">Phone * </div>
                                <div class="input-group-addon">+92</div>
                                <input type="number" class="form-control" placeholder="XXX-XXXXXXX">
                            </div>
                    </div>
                </div>
                <div class="row" id="form-row">
                    <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">Address</div>
                                <input type="text" class="form-control" placeholder="House #..St..">
                            </div>
                    </div>
                    <div class="col-md-6 form-inline">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Town">
                            </div>
                            <div class="input-group" style="margin-left: 6%;">
                                <input type="text" class="form-control" placeholder="City">
                            </div>
                    </div>
                </div>
                <div class="row" id="form-row">
                    <div class="col-md-12 form-inline">
                            <div class="input-group">
                                <div class="input-group-addon">Nationality</div>
                                <input type="text" class="form-control" placeholder="Pakistani">
                            </div>
                            <div class="input-group" style="margin-left: 3%;">
                                <div class="input-group-addon">Marital Status</div>
                                <input type="text" class="form-control" placeholder="Single / Married">
                            </div>
                            <div class="input-group" style="margin-left: 3%;">
                                <div class="input-group-addon">Religion</div>
                                <input type="text" class="form-control" placeholder="Religion">
                            </div>
                    </div>
                </div>
                <div class="row text-center" id="form-row">
                               
                </div>
            </div>
            <input type="submit" value="submit">
        </div>
    </form>
            <div class="row" id="jsedu">
        @include('partials.jseducation');
        <div class="btn btn-primary" id="btn2" style="float: right;">Skip</div>
    </div>
    <div class="row" id="jsrespub">
        @include('partials.jsrespub');
        <div class="btn btn-primary" id="btn3" style="float: right;">Skip</div>
    </div>
    <div class="row" id="jscertificate">
        @include('partials.jscertificate');
        <div class="btn btn-primary" id="btn4" style="float: right;">Skip</div>
    </div>
    <div class="row" id="jsjob">
        @include('partials.jsjob');
        <div class="btn btn-primary" id="btn5" style="float: right;">Skip</div>
    </div>
    <div class="row" id="jsseminar">
        @include('partials.jsseminar');
        <div class="btn btn-primary" id="btn6" style="float: right;">Skip</div>
    </div>
    <div class="row" id="jsaward">
        @include('partials.jsaward');
        <div class="btn btn-primary" id="btn7" style="float: right;">Skip</div>
    </div>
    <div class="row" id="jsvolunteer">
        @include('partials.jsvolunteer');
        <div class="btn btn-primary" id="btn8" style="float: right;">Skip</div>
    </div>
    <div class="row" id="jsotherinfo">
        @include('partials.jsotherinfo')
        <div class="btn btn-primary" id="btn9" style="float: right;">Skip</div>
    </div>

</div>
<div class="container-fluid">
    <div class="row" id="edit" style="margin-top: 1%">
        <form class="form-inline">
            <div class="btn btn-info" id="js1">Edit Educational Detail</div>
            <div class="btn btn-info" id="js2">Edit Research And Publication</div>
            <div class="btn btn-info" id="js3">Edit Certications And Courses</div>
            <div class="btn btn-info" id="js4">Edit Jobs Experinces</div>
            <div class="btn btn-info" id="js5">Edit Seminar Detail</div>
            <div class="btn btn-info" id="js6">Edit Volunteer Detail</div>
            <div class="btn btn-info" id="js7">Edit Award Detail</div>
            <div class="btn btn-info" id="js8">Edit Other Info</div>
        </form>
    </div>
</div>
<!--Color Divide Row Starts Here-->
<div class="container-fluid">
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

<!--Footer Starts Here-->
  <div class="container-fluid" id="foo">
     <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3">
            <h3 id="foo-head"><span>Jobs By Industry</span></h3>
        <div>
            <ul>
            <li><a href="#">Sales And Marketing jobs</a></li>
            <li><a href="#">Business Development Jobs</a></li>
            <li><a href="#">IT/Software Development Jobs</a></li>
            <li><a href="#">Medical/Health Jobs</a></li>
            <li><a href="#">Accounting/Finance Jobs</a></li>
            <li><a href="#">Trainee/Internship Jobs</a></li>
            <li><a href="#">Customer Support/Client Care Jobs</a></li>
            <li><a href="#">Production/Operations Jobs</a></li>
            <li><a href="#">Engineering Jobs</a></li>
            <li><a href="#">Security/Protective Services Jobs</a></li>
            <li><a href="#">Project/Program Management Jobs</a></li>
            <li><a href="#">Newspaper Jobs</a></li>
            </ul>
          </div>
    </div>
       <div class="col-xs-12 col-sm-3 col-md-3">
        <h3 id="foo-head"><span>Jobs by City</span></h3>
        <div>
            <ul>
            <li><a href="#">Jobs in Lahore</a></li>
            <li><a href="#">Jobs in Karachi</a></li>
            <li><a href="#">Jobs in Islamabad</a></li>
            <li><a href="#">Jobs in Rawalpindi</a></li>
            <li><a href="#">Jobs in Faisalabad</a></li>
            <li><a href="#">Jobs in Multan</a></li>
            <li><a href="#">Jobs in Gujranwala</a></li>
            <li><a href="#">Jobs in Quetta</a></li>
            <li><a href="#">Jobs in Peshawar</a></li>
            <li><a href="#">Jobs in Hyderabad</a></li>
            <li><a href="#">Jobs in Sialkot</a></li>
            <li><a href="#">Jobs in Muzaffarabad</a></li>
            </ul>
         </div>   
    </div>          
  <div class="col-xs-12 col-sm-3 col-md-3">
        <h3 id="foo-head"><span>Jobs by Type</span></h3>
        <div>
            <ul>
            <li><a href="#">Full Time</a></li>
            <li><a href="#">Part Time</a></li>
            <li><a href="#">Contract</a></li>
            <li><a href="#">Scheduler</a></li>
            <li><a href="#">Freelancer</a></li>
            <li><a href="#">Internship</a></li>
            </ul>
      </div> 
      <h3 id="foo-head"><span>Jobs by Min Experience</span></h3>
      <div>
            <ul>
            <li><a href="#">3 years experience</a></li>
            <li><a href="#">5 years experience</a></li>
            <li><a href="#">7 years experience</a></li>
            </ul> 
      </div>         
    </div>                      
  <div class="col-xs-12 col-sm-3 col-md-3">
     <h3 id="foo-head"><span>About</span></h3>
        <div>
            <ul>
            <li><a href="#">Site Map</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms Of Use</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">FAQ's</a></li>
            <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
                <a href="#logo" id="top-link">Go To Top <img src="{{ asset('img/top.png')}}" id="top-link-img">
        </a>
    </div>
  </div>      
</div>
<!--Footer Endss Here-->
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
        <div class="col-sm-1" style="border-top: solid antiquewhite"></djscertificateiv>
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
<script>

    $(function(){
//        $('#edit').hide();
        $('#jsedu').hide();
        $('#jsrespub').hide();
        $('#jscertificate').hide();
        $('#jsjob').hide();
        $('#jsseminar').hide();
        $('#jsaward').hide();
        $('#jsvolunteer').hide();
        $('#jsotherinfo').hide();


        $('#btn').click(function(){
            $('#jsedu').show();
            $('#p-info').hide();
        })

        $('#btn2').click(function(){
            $('#jsrespub').show();
            $('#jsedu').hide();
            $('#p-info').hide();
        })

        $('#btn3').click(function(){
            $('#jscertificate').show();
            $('#jsrespub').hide();
            $('#jsedu').hide();
            $('#p-info').hide();
        })

        $('#btn4').click(function(){
            $('#jsjob').show();
            $('#jscertificate').hide();
            $('#jsrespub').hide();
            $('#jsedu').hide();
            $('#p-info').hide();
        })

        $('#btn5').click(function(){
            $('#jsseminar').show();
            $('#jsjob').hide();
            $('#jscertificate').hide();
            $('#jsrespub').hide();
            $('#jsedu').hide();
            $('#p-info').hide();
        })

        $('#btn6').click(function(){
            $('#jsaward').show();
            $('#jsseminar').hide();
            $('#jsjob').hide();
            $('#jscertificate').hide();
            $('#jsrespub').hide();
            $('#jsedu').hide();
            $('#p-info').hide();
        })

        $('#btn7').click(function(){
            $('#jsvolunteer').show();
            $('#jsaward').hide();
            $('#jsseminar').hide();
            $('#jsjob').hide();
            $('#jscertificate').hide();
            $('#jsrespub').hide();
            $('#jsedu').hide();
            $('#p-info').hide();
        })

        $('#btn8').click(function(){
            $('#p-info').show();
            $('#edit').hide();
            $('#jsvolunteer').hide();
            $('#jsaward').hide();
            $('#jsseminar').hide();
            $('#jsjob').hide();
            $('#jscertificate').hide();
            $('#jsrespub').hide();
            $('#jsedu').hide();
        })

        $('#btn9').click(function(){
            $('#jsotherinfo').show();
            $('#p-info').show();
            $('#edit').show();
            $('#jsvolunteer').hide();
            $('#jsaward').hide();
            $('#jsseminar').hide();
            $('#jsjob').hide();
            $('#jscertificate').hide();
            $('#jsrespub').hide();
            $('#jsedu').hide();
        })


        $('#js1').click(function(){
            $('#edit').show();
            $('#p-info').hide();
            $('#jsvolunteer').hide();
            $('#jsaward').hide();
            $('#jsseminar').hide();
            $('#jsjob').hide();
            $('#jscertificate').hide();
            $('#jsrespub').hide();
            $('#jsedu').show();
        })
        $('#js2').click(function(){
            $('#edit').show();
            $('#p-info').hide();
            $('#jsvolunteer').hide();
            $('#jsaward').hide();
            $('#jsseminar').hide();
            $('#jsjob').hide();
            $('#jscertificate').hide();
            $('#jsrespub').show();
            $('#jsedu').hide();
        })

        $('#js3').click(function(){
            $('#edit').show();
            $('#p-info').hide();
            $('#jsvolunteer').hide();
            $('#jsaward').hide();
            $('#jsseminar').hide();
            $('#jsjob').hide();
            $('#jscertificate').show();
            $('#jsrespub').hide();
            $('#jsedu').hide();
        })

        $('#js4').click(function(){
            $('#edit').show();
            $('#p-info').hide();
            $('#jsvolunteer').hide();
            $('#jsaward').hide();
            $('#jsseminar').hide();
            $('#jsjob').show();
            $('#jscertificate').hide();
            $('#jsrespub').hide();
            $('#jsedu').hide();
        })

        $('#js5').click(function(){
            $('#edit').show();
            $('#p-info').hide();
            $('#jsvolunteer').hide();
            $('#jsaward').hide();
            $('#jsseminar').show();
            $('#jsjob').hide();
            $('#jscertificate').hide();
            $('#jsrespub').hide();
            $('#jsedu').hide();
        })

        $('#js6').click(function(){
            $('#edit').show();
            $('#p-info').hide();
            $('#jsvolunteer').show();
            $('#jsaward').hide();
            $('#jsseminar').hide();
            $('#jsjob').hide();
            $('#jscertificate').hide();
            $('#jsrespub').hide();
            $('#jsedu').hide();
        })

        $('#js7').click(function(){
            $('#edit').show();
            $('#p-info').hide();
            $('#jsvolunteer').hide();
            $('#jsaward').show();
            $('#jsseminar').hide();
            $('#jsjob').hide();
            $('#jscertificate').hide();
            $('#jsrespub').hide();
            $('#jsedu').hide();
        })

        $('#js8').click(function(){
            $('#edit').show();
            $('#p-info').hide();
            $('#jsvolunteer').hide();
            $('#jsaward').hide();
            $('#jsseminar').hide();
            $('#jsjob').hide();
            $('#jscertificate').hide();
            $('#jsrespub').hide();
            $('#jsedu').hide();
            $('#jsotherinfo').show();
        })
    })
  
  $(function() {
    $( "#datepicker" ).datepicker();
  });

</script>










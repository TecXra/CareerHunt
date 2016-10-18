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
/*        transform: rotate(360deg);*/
    }
    #js5:hover,#js6:hover,#js7:hover
    {
        box-shadow: 5px 5px 5px black;
/*        transform: rotateX(360deg);*/
    }
    

</style>
@include('partials.logout-header')
<div class="container-fluid" style="margin-bottom: 1%;">
    <div class="row text-center">
        <h2 style="margin-bottom: -1%;"><i>Job Seeker Profile</i></h2>
    </div>    
<hr/>


    <form action="storejobseeker" method="post" files="true">
        
            <div class="col-sm-2">
                
                <input type="file" class="form-control">
            </div>
            
                            <div class="input-group">
                                <div class="input-group-addon">Date-Of-Birth * </div>
                                <input type="date" id="datepicker" class="form-control" placeholder="DD/MM/YYYY">
                            </div>
                   
                            <div class="input-group">
                                <div class="input-group-addon">Phone * </div>
                                <div class="input-group-addon">+92</div>
                                <input type="number" class="form-control" placeholder="XXX-XXXXXXX">
                            </div>
                
                            <div class="input-group">
                                <div class="input-group-addon">Address</div>
                                <input type="text" class="form-control" placeholder="House #..St..">
                            </div>
                    
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Town">
                            </div>
                            <div class="input-group" style="margin-left: 6%;">
                                <input type="text" class="form-control" placeholder="City">
                            </div>
               
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
                    
                
                
        
            <input type="submit" value="submit">
           </form>
            

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











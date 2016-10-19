@extends('layouts.app')


@section('styles')
<style type="text/css">

    #form-row
    {
    }
    #btn-view
    {
        width: 20%;
        margin-left: 48%;
    }
</style>
@endsection
{{ Auth::user()->name }}


@section('content')
<div class="container-fluid" style="margin-bottom: 1%;">
    <div class="row text-center">
        <h2 style="margin-bottom: -1%;"><i>Employer Profile</i></h2>
    </div>    
<hr/>
    <form action="empstore" method="post" files = "true" enctype="multipart/form-data" id="form">
        <div class="row" id="p-info">
            <!--Personal Information form starts here...-->

            <div class="col-sm-2">
                <input type="hidden" name="compinfos_id" value= {{$user->id}} />
                <h4>Company Logo</h4>
                <div class="fileupload-new thumbnail img-up">
                    <img alt="Company Logo" src="{{ asset('img/demoUpload.jpg')}}">
                </div>
                <input type="file" name="company_logo" class="form-control">
            </div>
            <div class="col-lg-5">
                <div class="form-group">
                    <label>Company Head Name * </label>
                    <input type="text" class="form-control" name="comp_head_name" placeholder="Mr. Ali">
                </div>
                <div class="form-group">
                    <label>HR Head Name</label>
                    <input type="text" class="form-control" name="head_hr_department" placeholder="Mr. Adnan">
                </div>
                <div class="form-group">
                    <label>Company Slogan</label>
                    <input type="text" class="form-control" name="slogan" placeholder="Company Slogan">
                </div>
                <div class="form-group">
                    <label>Company Website</label>
                    <input type="text" class="form-control" name="comp_website" placeholder="www.pel.com.pk">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address" placeholder="House #..St..">
                </div>
                <div class="form-group">
                    <label>City</label>
                    <input type="text" class="form-control" name="city" placeholder="City">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="form-group">
                    <label>Industry</label>
                    <input list = "Industry" name="industry_type" placeholder="Industry Type" class="form-control">
                    <datalist id="Industry">
                        <option value="Textile Industry">Textile Industry</option>
                        <option value="Vegetable Ghee and Cooking Oil Industry">Vegetable Ghee and Cooking Oil Industry</option>
                        <option value="Sugar Industry">Sugar Industry</option>
                        <option value="Fertilizer Industry">Fertilizer Industry</option>
                        <option value="Cement Industry">Cement Industry</option>
                        <option value="Chemical Industry">Chemical Industry</option>
                        <option value="Jute Industry">Jute Industry</option>
                        <option value="Engineering Goods Industry">Engineering Goods Industry</option>
                        <option value="Heavy Mechanical Complex, Texila">Heavy Mechanical Complex, Texila</option>
                        <option value="Pakistan Machine Tools Factory, Landhi">Pakistan Machine Tools Factory, Landhi</option>
                        <option value="Pakistan Steel Mills, Karachi">Pakistan Steel Mills, Karachi</option>
                        <option value="Ship Building Industry">Ship Building Industry</option>
                        <option value="Woolen and Worsted Textile Industry">Woolen and Worsted Textile Industry</option>
                        <option value="Cigarette Industry">Cigarette Industry</option>
                    </datalist> 
                </div>
                <div class="form-group">
                    <label>Employees Count</label>
                    <input list = "Number Of Employees" name="number_of_employer" class="form-control" placeholder="Number Of Employees">
                    <datalist id="Number Of Employees">
                        <option value="1-10">1-10</option>
                        <option value="11-50">11-50</option>
                        <option value="51-100">51-100</option>
                        <option value="101-200">101-200</option>
                        <option value="201-300">201-300</option>
                        <option value="301-500">301-500</option>
                        <option value="More than 500">More than 500</option>
                    </datalist> 
                </div>
                <div class="form-group">
                    <label>Ownership Type</label>
                    <input list = "Ownership Type" name="ownership_type" class="form-control" placeholder="Ownership Type">
                    <datalist id="Ownership Type">
                        <option value="Sole Proprietorship">Sole Proprietorship</option>
                        <option value="Public">Public</option>
                        <option value="Private">Private</option>
                        <option value="NGO">NGO</option>
                    </datalist> 
                </div>
                <div class="form-group">
                    <label>Since</label>
                    <input list = "since" name="since" class="form-control" placeholder="Since">
                    <datalist id="since"> 
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                        <option value="1999">1999</option>
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                        <option value="1985">1985</option>
                        <option value="1984">1984</option>
                        <option value="1983">1983</option>
                        <option value="1982">1982</option>
                        <option value="1981">1981</option>
                        <option value="1980">1980</option>
                    </datalist> 
                </div>
                <div class="form-group">
                    <label>Branches</label>
                    <input list = "Branches" name="number_of_branches" class="form-control" placeholder="Branches">
                    <datalist id="Branches">
                        <option value="0-1">0-1</option>
                        <option value="1-2">1-2</option>
                        <option value="2-3">2-3</option>
                        <option value="More then 3">More then 3</option>
                    </datalist> 
                </div>
                <div class="form-group">
                    <label>Phone #:</label>
                    <input type="text" class="form-control" name="phone" placeholder="Phone">
                </div>
            </div>
        <!--Personal Information form ends here...-->
        </div>

        <div class="row" id="form-row">
            <input type="submit" class="btn btn-primary" id="btn-view"/>
        </div>
    </form>

</div>

@endsection

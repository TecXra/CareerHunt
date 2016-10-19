{{ Auth::user()->name }}

{!! Form::model($Pinfos, array('url' => URL::to('jsupdate') . '/' . $Pinfos->id, 'method' => 'post','files'=>true)) !!}

        <div class="row text-center">
            <h2><i>Personal Information</i></h2>
        </div>
        <hr/>
        <div class="row" id="per-info">
            <div class="col-lg-6">
                <div class="form-group">
                    {!! Form::hidden('User Name') !!}
                    {!! Form::hidden('username',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::hidden('Password') !!}
                    {!! Form::hidden('email',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group" style="width: 50%;">
                    {!! Form::label('Profile Picture') !!}
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    {!! Form::label('Date-of-Birth') !!}
                    {!! Form::date('age',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Phone Number: ') !!}
                    {!! Form::number('phone',null,['class'=>'form-control','placeholder' => 'Enter Phone Number']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Address') !!}
                    {!! Form::text('address',null,['class'=>'form-control','placeholder' => 'Permanent Address']) !!}
                </div>
                <div class="form-group form-inline">
                    {!! Form::text('town',null,['class'=>'form-control','placeholder' => 'Town']) !!}

                    {!! Form::text('city',null,['class'=>'form-control city','placeholder' => 'City']) !!}
                    
                    {!! Form::text('country',null,['class'=>'form-control country','placeholder' => 'Country']) !!}
                </div>
            </div>
            <div class="col-lg-6" style="margin-top: 1%;">
                <div class="form-group">
                    {!! Form::label('Nationality') !!}
                    {!! Form::text('nationality',null,['class'=>'form-control', 'placeholder'=>'Nationality']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Religion') !!}
                    {!! Form::text('religion',null,['class'=>'form-control', 'placeholder'=>'Religion']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Marital Status') !!}
                    {!! Form::select('martial_status', 
                        [
                            'Sigle' => 'Single',
                            'Married' => 'Married'
                        ],
                    null, ['class' => 'form-control', 'placeholder'=>'Select Status' ]); !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Gender') !!}
                    {!! Form::select('gender', 
                        [
                            'Male' => 'Male',
                            'Female' => 'Female'
                        ],
                    null, ['class' => 'form-control', 'placeholder'=>'Select Gender' ]); !!}
                </div>
            </div>
        </div>

        <div class="row text-center">
            <h2><i>Eduactional Information</i></h2>
        </div>
        <hr/>
        <div class="row" id="edu-info">
            <div class="col-lg-6">
                <div class="form-group">
                    {!! Form::label('Matric') !!}
                    <input list = "Matric" name="matric" class="form-control" placeholder="Major Subjects">
                    <datalist id="Matric">
                        <option value="Science">Science</option>
                        <option value="Arts">Arts</option>
                    </datalist>
                </div>

                <div class="form-group">
                    {!! Form::label('Intermediate') !!}
                    <input list = "Intermediate" name="intermediate" class="form-control" placeholder="Major Subjects">
                    <datalist id="Intermediate">
                        <option value="Pre-Engineering">Pre-Engineering</option>
                        <option value="Pre-Medical">Pre-Medical</option>
                        <option value="ICS">ICS</option>
                        <option value="F.A">F.A</option>
                    </datalist>
                
                </div>

                <div class="form-group">
                    {!! Form::Label('If Any Other Qualification: ') !!}
                    <input type="text" name="other" class="form-control" placeholder="Type Here...">
                </div>
            </div>

            <div class="col-lg-6">

                <div class="form-group">
                    {!! Form::label('Bs / B.Sc') !!}
                    <input list = "Bs / B.Sc" name="bs_bsc" class="form-control" placeholder="Major Subjects">
                    <datalist id="Bs / B.Sc">
                        <option value="Computer Studies">Computer Studies</option>
                        <option value="Mathematics">Mathematics</option>
                        <option value="Chemistry">Chemistry</option>
                        <option value="Physics">Physics</option>
                    </datalist>
                </div>
                
                <div class="form-group">
                    {!! Form::label('MS / M.Sc') !!}
                    <input list = "MS / M.Sc" name="ms_Msc" class="form-control" placeholder="Major Subjects">
                    <datalist id="MS / M.Sc">
                        <option value="Computer Studies">Computer Studies</option>
                        <option value="Mathematics">Mathematics</option>
                        <option value="Chemistry">Chemistry</option>
                        <option value="Physics">Physics</option>
                        <option value="Biology">Biology</option>
                        <option value="Accounting & Finance">Accounting & Finance</option>
                    </datalist>
                </div>

                
            </div>
        </div>

        <div class="row text-center">
            <h2><i>Job Experience</i></h2>
        </div>
        <hr/>
        <div class="row" id="job-info">
            <div class="col-lg-4">
                <div class="form-group">
                    <label>Company Name</label>
                    <input type="text" class="form-control" name="comp1" placeholder="Company Name"></input>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label>Job Designation</label>
                    <input type="text" class="form-control" name="comp2" placeholder="Job Designation"></input>
                </div>                
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label>Type Any Other Job Deatil</label>
                    <input type="text" class="form-control" name="comp3" placeholder="Job Designation (Company Name)"></input>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <h2><i>Researce and Publication</i></h2>
        </div>
        <hr/>
        <div class="row" id="research-info">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>1: Researce and Publication Title</label>
                    <input type="text" name="title1" placeholder="Researce and Publication Title" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>1: Researce and Publication Year</label>
                    <input type="number" name="year1" placeholder="Researce and Publication Year" class="form-control"></input>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>2: Researce and Publication Title</label>
                    <input type="text" name="title2" placeholder="Researce and Publication Title" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label>2: Researce and Publication Year</label>
                    <input type="number" name="year2" placeholder="Researce and Publication Year" class="form-control"></input>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <h2><i>Award</i></h2>
        </div>
        <hr/>
        <div class="row" id="award-info">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>1: Award Name</label>
                    <input type="text" name="award1" class="form-control" placeholder="Award Name"></input>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>2: Award Name</label>
                    <input type="text" name="award2" class="form-control" placeholder="Award Name"></input>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <h2><i>Skills</i></h2>
        </div>
        <hr/>
        <div class="row">
            <h4 style="margin-left: 1%;">Type Any Three Skills: </h4>
            <div class="col-lg-4">
                <input type="text" name="Skill1" placeholder="Skill One" class="form-control"></input>
            </div>
            <div class="col-lg-4">
                <input type="text" name="Skill2" placeholder="Skill Two" class="form-control"></input>                
            </div>
            <div class="col-lg-4">
                <input type="text" name="Skill3" placeholder="Skill Three" class="form-control"></input>                
            </div>
        </div>

        <div class="row text-center">
            <h2><i>Industrial Experience</i></h2>
        </div>
            <h4 style="margin-left: 1%;">Type Total Experience in Years: </h4>

            <input type="number" name="exp" class="form-control">
            </input>

        <div class="row text-center">
            <h2><i>Write something about yourself...</i></h2>
        </div>
        <hr/>
        <div class="row">
	        <div class="col-lg-4">

	        </div>
	        <div class="col-lg-4">
	            <textarea rows="4" cols="50" name="about_you"class="form-control">
	                Write something about yourself in few sentencs...
	            </textarea>

	        </div>
	        <div class="col-lg-4">

	        </div>
        </div>
        <div class="form-group">
            {!! Form::submit('Submit',['class' => 'btn btn-primary submit-btn']) !!}
        </div>



{!! Form::close() !!}
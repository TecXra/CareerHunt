@extends('layouts.app')





@section('styles')

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
    .city
    {
        margin-left: 6.5%;
    }
    .country
    {
        margin-left: 6.5%;
    }
    

</style>

@endsection




@section('content')
<!-- 
    <form action="storejobseeker" method="post" files="true">
 -->

<div class="container-fluid" style="margin-bottom: 1%;">
    {!! Form::model(array('url' => URL::to('#'), 'method' => 'post')) !!}
        <div class="row text-center">
            <h2><i>Personal Information</i></h2>
        </div>
        <hr/>
        <div class="row">
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
            $table->string('matric');<br/>
            $table->string('intermediate');<br/>
            $table->string('bs_bsc');<br/>
            $table->string('ms_Msc');<br/>
            $table->string('other');<br/>







    <div class="row text-center">
        <h2><i>Job Experience</i></h2>
    </div>
            $table->string('comp1');<br/>
            $table->string('comp2');<br/>
            $table->string('comp3');<br/>


    <div class="row text-center">
        <h2><i>Researce and Publication</i></h2>
    </div>
            $table->string('title1');<br/>
            $table->string('year1');<br/>
            $table->string('title2');<br/>
            $table->string('year2');<br/>

    <div class="row text-center">
        <h2><i>Award</i></h2>
    </div>
            $table->string('award1');<br/>
            $table->string('award2');<br/>

    <div class="row text-center">
        <h2><i>Skills</i></h2>
    </div>
            $table->string('Skill1');<br/>
            $table->string('Skill2');<br/>
            $table->string('Skill3');<br/>

    <div class="row text-center">
        <h2><i>Eduactional Information</i></h2>
    </div>
            //experience<br/><br/><br/>
            $table->string('Skill3');<br/>

    <div class="row text-center">
        <h2><i>Write something about you...</i></h2>
    </div>
            $table->string('about_you');<br/>

<br/>        

                <div class="form-group">
                    {!! Form::submit('Submit',['class' => 'btn btn-primary form-control']) !!}
                </div>

                {!! Form::close() !!}
</div>
            

@endsection













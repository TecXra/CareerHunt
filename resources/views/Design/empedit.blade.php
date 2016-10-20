@extends('layouts.app2')


@section('content')
<div class="container-fluid">
    <div class="row">
            {!! Form::model($Compinfoes, array('url' => URL::to('empupdate') . '/' . $Compinfoes->id, 'method' => 'post','files'=>true)) !!}

        <div class="row text-center">
            <h3>Update Your Company Detail</h3>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label class="form-control text-center">Change Company Logo (If Changed) -->></label>
                </div>
                <div class="form-group">
                    {!! Form::label('Company Head Name') !!}
                    {!! Form::text('comp_head_name',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('HR Head Name') !!}
                    {!! Form::text('head_hr_department',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Company Slogan') !!}
                    {!! Form::text('slogan',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Company Website') !!}
                    {!! Form::text('comp_website',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Address') !!}
                    {!! Form::text('address',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('City') !!}
                    {!! Form::text('city',null,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="col-lg-6">
            <div class="form-group">
                <input type="file" name="company_logo" class="form-control">
            </div>

                <div class="form-group">
                    {!! Form::label('Industry') !!}
                    {!! Form::select('industry_type', 
                        [
                            'Textile Industry' => 'Textile Industry',
                            'Vegetable Ghee and Cooking Oil Industry' => 'Vegetable Ghee and Cooking Oil Industry',
                            'Sugar Industry' => 'Sugar Industry',
                            'Fertilizer Industry' => 'Fertilizer Industry',
                            'Cement Industry' => 'Cement Industry',
                            'Chemical Industry' => 'Chemical Industry',
                            'Jute Industry' => 'Jute Industry',
                            'Engineering Goods Industry' => 'Engineering Goods Industry',
                            'Heavy Mechanical Complex, Texila' => 'Heavy Mechanical Complex, Texila',
                            'Pakistan Machine Tools Factory, Landhi' => 'Pakistan Machine Tools Factory, Landhi',
                            'Pakistan Steel Mills, Karachi' => 'Pakistan Steel Mills, Karachi',
                            'Ship Building Industry' => 'Ship Building Industry',
                            'Woolen and Worsted Textile Industry' => 'Woolen and Worsted Textile Industry',
                            'Cigarette Industry' => 'Cigarette Industry'
                        ],
                    null, ['class' => 'form-control','placeholder'=> 'Select Industry Type' ]); !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Employees Count') !!}
                    {!! Form::select('number_of_employer', 
                        [
                            '1-10' => '1-10',
                            '11-50' => '11-50',
                            '51-100' => '51-100',
                            '101-200' => '101-200',
                            '201-300' => '201-300',
                            '301-500' => '301-500',
                            'More than 500' => 'More than 500'
                        ],
                    null, ['class' => 'form-control','placeholder'=> 'Select Number of Employers']); !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Ownership Type') !!}
                    {!! Form::select('ownership_type', 
                        [
                            'Sole Proprietorship' => 'Sole Proprietorship',
                            'Public' => 'Public',
                            'Private' => 'Private',
                            'NGO' => 'NGO'
                        ],
                    null, ['class' => 'form-control','placeholder'=> 'Select Ownership Type']); !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Since') !!}
                    {!! Form::selectRange('since',1980,2016,null, ['class' => 'form-control','placeholder'=> 'Select Year of Estalished']); !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Branches') !!}
                    {!! Form::select('number_of_branches', 
                        [
                                    '0-1' => '0-1',
                                    '1-2' => '1-2',
                                    '2-3' => '2-3',
                                    'More then 3' => 'More then 3'
                        ],
                    null, ['class' => 'form-control','placeholder'=> 'Select Total Number of branches']); !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Phone #') !!}
                    {!! Form::number('phone',null,['class'=>'form-control','placeholder'=> 'Enter Phone Number']) !!}
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    {!! Form::submit('Update',['class' => 'btn btn-primary form-control']) !!}
                </div>
                {!! Form::close() !!}
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <a href="{{action('EmployerController@emdashboard',[ $Compinfoes->id]) }}" class="btn btn-info form-control">Dashboard</a>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection


{!! Form::model($Posts, array('url' => URL::to('Postupdate') . '/' . $Posts->id, 'method' => 'post')) !!}


<div class="form-group">
    {!! Form::label('title','Title:') !!}
    {!! Form::text('job_title',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('discription','Body:') !!}
    {!! Form::text('job_description',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">

    {!! Form::label('duration','Image:') !!}
    {!! Form::text('job_duration',null,['class' => 'form-controle']) !!}

</div>

<div class="form-group">
    {!! Form::label('due date','Published on:') !!}
    {!! Form::input('date','apply_due',date('Y-m-d'),['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('last date','Published on:') !!}
    {!! Form::input('date','last_date',date('Y-m-d'),['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Update',['class' => 'btn btn-primary form-control']) !!}
</div>

{!! Form::close() !!}

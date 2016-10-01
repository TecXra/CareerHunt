@foreach($Posts as $Post)
          {{$Post->job_title}}
          {{$Post->job_description}}
          {{$Post->job_duration}}
          {{$Post->apply_due}}
          {{$Post->last_date}}

<a href="{{action('EmployerController@jobedit',[ $Post->id]) }}">Edit</a>
{!! Form::open([
            'method' => 'DELETE',
            'route' => ['design.destroy', $Post->id]
        ]) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
  @endforeach




  
{{ Auth::user()->name }}
<a href="Design/{{ $Pinfos->id }}"><img src="{{ asset($Pinfos->image) }}" style="width:200px; height:150px;" /></a><br/>
<a href="{{action('JobSeekerController@jsedit',[ $Pinfos->id]) }}">Edit</a>
<a href="{{action('JobSeekerController@jsdashboard',[ $Pinfos->id]) }}">Dashboard</a>
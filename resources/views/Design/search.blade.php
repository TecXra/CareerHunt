

@if (count($articles) === 0)
There is no such job seeker or the job seeker required not lies in the specific area
@elseif (count($articles) >= 1)

    @foreach($articles as $article)
    @if($article->city==={{$region}})
<label>Language: </label>    {{$article->name}}
<label>City: </label>    {{$article->city}}
<a href="{{action('JobSeekerController@jsedit',[ $Pinfos->id]) }}">Edit</a>
@endif
    @endforeach
@endif


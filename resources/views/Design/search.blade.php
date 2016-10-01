

@if (count($articles) === 0)
... html showing no articles found
@elseif (count($articles) >= 1)
... print out results
    @foreach($articles as $article)
<label>Language: </label>    {{$article->name}}
<label>City: </label>    {{$article->city}}
    @endforeach
@endif
<a href="{{URL::to('jscv')}}">View Complete</a>

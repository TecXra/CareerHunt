

@if (count($articles) === 0)
... html showing no articles found
@elseif (count($articles) >= 1)

    @foreach($articles as $article)
    @if($article->status=='j')
<label>Language: </label>    {{$article->name}}
<label>City: </label>    {{$article->city}}
@endif
    @endforeach
@endif


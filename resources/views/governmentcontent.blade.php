
<ul>

@foreach ($data['result'] as $dat)

    <li> Headline: <b>{{ $dat['he\dline']}}</li></b>

    <p> Source: <b>{{ $dat['source']}}</p></b>

    <p> Description: {{ $dat['category']}}</p>

    <p> Description: {{ $dat['publishedAt']}}</p>

    <p>  Description: {{$dat['id']}}</p>

    <p> Description: {{ $dat['item_url']}}</p>

@endforeach

<ul>

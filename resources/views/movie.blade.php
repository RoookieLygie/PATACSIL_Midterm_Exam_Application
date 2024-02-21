

<h1>Movie for Sale</h1>

<h2>Movie Genres Available:</h2>
<ul>
    @foreach($productMovie['genre'] as $language)
        <li>{{ $language }}</li>
    @endforeach
</ul>

<h2>Horror Movies:</h2>
<ul>
    @foreach($productMovie['horror'] as $horror)
        <li>{{ $horror }}</li>
    @endforeach
</ul>
<h2>Best Kids Movies:</h2>
<ul>
    @foreach($productMovie['children'] as $children)
        <li>{{ $children }}</li>
    @endforeach
</ul>

<h2>Other Movies:</h2>
<ul>
    @foreach($productMovie['other_movies'] as $movie)
        <li>{{ $movie }}</li>
    @endforeach
</ul>


<h1>{{$heading ; }}</h1>

@unless(count($listing) == 0)
   
@foreach($listing as $listing)
    <h2>
        <a href="/Blog/{{$listing['id']}}">{{$listing['title']}}</a>
    </h2>
    <p>{{$listing['content']}} </p>
@endforeach
@else
    <p>There are no listing</p>
@endunless

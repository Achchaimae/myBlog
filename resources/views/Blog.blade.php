<h1>{{$heading ; }}</h1>


@foreach($listing as $listing)
    <h2>
        <a href="/singleBlog/{{$listing['id']}}">{{$listing['title']}}</a>
    </h2>
    <p>{{$listing['description']}} </p>
@endforeach 
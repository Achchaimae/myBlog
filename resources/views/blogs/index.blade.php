<x-layout>
@include('partials._hero')
@include('partials._search')
<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

@unless(count($listing) == 0)
   
@foreach($listing as $listing)

{{-- the :listing is to bind variable to the component --}}
    <x-listing-blog :listing="$listing" />

@endforeach
@else
    <p>There are no listing</p>
@endunless
</div>
</x-layout>
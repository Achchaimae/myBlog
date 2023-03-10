@props(['listing'])

<x-card>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{asset('images/no-image.png')}}"
            alt=""
        />

        <div>
            <h3 class="text-2xl">
                <a href="/Blog/{{$listing->id}}">{{$listing->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$listing->author}}</div>
            <x-listing-tags :tagsCsv="$listing->tags" />
            
        </div>
    </div>
</x-card>
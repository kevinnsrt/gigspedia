<x-app-layout>
    <div class="flex justify-center mt-20 ml-12">
    <div class="w-1/2">
     @foreach ($songs as $item)

    {{-- {{ dd($item->id) }} --}}
<div class="flex">
        <iframe class="mb-4" style="border-radius:12px" src="https://open.spotify.com/embed/track/{{ $item->id }}?utm_source=generator" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
        <div class=" ml-4 self-center">
        <button type="button" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Add To Playlist</button>
    </div>
</div>
    @endforeach
    </div>
    </div>
</x-app-layout>
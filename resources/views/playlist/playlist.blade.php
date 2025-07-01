<x-app-layout>
    <div class="flex justify-center mt-20 ml-20 w-full">
        <div>   
    @if ($details->isEmpty())
        <p>
            Playlist Kosong
        </p>
    @else
        <div class="mb-4 flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row md:max-w-full dark:border-gray-700 dark:bg-gray-800">
    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('storage/'. $details->first()->playlist->gambar) }}" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $details->first()->playlist->name }}</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
    </div>
</div>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Judul
                </th>
                <th scope="col" class="px-6 py-3">
                    Preview
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        @foreach ($details as $item )
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $item->songs->title }}
                </th>
                <td class="px-6 py-4">
                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/{{  $item->songs->id   }}?utm_source=generator" 
                    width="100%" height="80" frameBorder="0" 
                    allowfullscreen="" allow=" clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
    @endif
        </div>

    </div>
</x-app-layout>
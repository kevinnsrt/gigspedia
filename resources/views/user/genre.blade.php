<x-app-layout>

    <div class="flex justify-center mt-20 ml-40">
        <div class="grid grid-cols-3 gap-4">
            @foreach ($genre as $item)
            <form method="POST" action="{{ route('genre.artist',$item->id) }}">
                @csrf
             <button class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                {{ $item->name }}
            </button>
            </form>
            @endforeach
        </div>
    </div>

</x-app-layout>
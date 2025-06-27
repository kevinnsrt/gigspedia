<x-app-layout>

    <div class="flex justify-center mt-20">
        <div class="grid grid-cols-3 gap-4">
            @foreach ($genre as $item)
            <form method="POST" action="{{ route('genre.artist',$item->id) }}">
                @csrf
             <button>
                {{ $item->name }}
            </button>
            </form>
            @endforeach
        </div>
    </div>

</x-app-layout>
<x-app-layout>

    <div class="flex justify-center mt-20">
        <div class="grid grid-cols-3 gap-4">
            @foreach ($genre as $item)
             <button>
                {{ $item->name }}
            </button>
            @endforeach
        </div>
    </div>

</x-app-layout>
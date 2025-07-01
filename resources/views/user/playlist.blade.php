<x-app-layout>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @session('success')
        <script>
        Swal.fire({
        title: "Success",
        text: "Playlist berhasil dibuat",
        icon: "success"
        });
    </script>
    @endsession
        
    <div class="flex justify-center mt-20 ml-40">
    <div>
        {{-- gallery start --}}
        <div class="grid grid-cols-3 md:grid-cols-4 gap-4">
            @foreach ($playlists as $item)
                <div>
                    <button>
                        <img class="h-auto max-w-56 rounded-lg hover:opacity-80" src="{{ asset('storage/'. $item->gambar) }}" alt="">
                        <p>{{  $item->name   }}</p>
                    </button>
                </div>
            @endforeach
            
        </div>

        {{-- gallery end --}}
    </div>
     {{-- footer start --}}

            <div class="fixed bottom-4">
                <a href="{{ route('create.playlist') }}" type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Create Playlist</a>
            </div>
        {{-- footer end --}}
    </div>
    
</x-app-layout>
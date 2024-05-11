<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Game') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                @if (session('status'))
                    <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800"
                        role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <span class="font-medium">Success alert!</span> {{ session('status') }}
                        </div>
                    </div>
                @endif

                <div class="mx-auto">
                    <div class="bg-white shadow-md rounded-md overflow-hidden">
                        <div class="flex">
                            <img src='{{asset("img/$game->image")}}' alt="Imagen del juego" style="width:40%">
                            <div class="p-4">
                                <h2 class="text-2xl font-semibold mb-2">{{$game->title}}</h2>
                                <p class="text-gray-600 mb-2">Desarrollador: {{$game->developer}}</p>
                                <p class="text-gray-600 mb-2">Fecha de lanzamiento: {{$game->release_date}}</p>
                                <p class="text-gray-600 mb-2">Precio: ${{$game->price}}</p>
                                <p class="text-gray-800">Descripción:</p>
                                <p class="text-gray-600 mb-4">{{$game->description}}</p>
                                <p class="text-gray-600 mb-2">Fecha creación: {{$game->created_at}}</p>
                                <p class="text-gray-600 mb-2">Fecha modificación: {{$game->updated_at}}</p>
                                <br>
                                <a href="{{route('games.index')}}"
                                    class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Regresar</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
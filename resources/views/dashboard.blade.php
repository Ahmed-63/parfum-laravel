<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("Marque") }}
                    </div>
                @foreach ($articles as $article)
                    <div class="p-1 text-gray-900">
                        {{ $article->title}}
                    </div>
                @endforeach
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("Stock") }}
                    </div>
                @foreach ($articles as $article)
                    <div class="p-1 text-gray-900">
                        {{ $article->stock}}
                    </div>
                @endforeach
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("Prix") }}
                    </div>
                @foreach ($articles as $article)
                    <div class="p-1 text-gray-900">
                        {{ $article->price}}
                    </div>
                @endforeach
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("Prix") }}
                    </div>
                @foreach ($articles as $article)
                    <div class="p-0.5 text-gray-800">
                        <a href="{{ route('articles.edit', $article)}}" class="inline-block rounded-md border border-transparent bg-indigo-600 text-center text-white hover:bg-indigo-700">Modifier</a>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Créer un article') }}
        </h2>
    </x-slot>


    <div class="p-4 flex justify-center ">

        <div class="my-5">
            @foreach ($errors->all() as $error)
            <span class=>{{$error}}</span> {{-- Affiche un message d'erreur si les champs requis du formulaire ne sont pas remplis --}}
            @endforeach
        </div>

        <form action="{{ route('articles.store') }}" method="post" enctype="multipart/form-data" class="flex flex-col  rounded-lg p-4" style="background-color: rgba(0, 0, 0, 0.075); border: 2px solid rgba(0, 0, 0, 0.048);"> 
        
            @csrf

            <label for="title" class="p-4">Marque de l'article</label>
            <input id="title" name="title" class="rounded-lg">
            
            <label for="name" class="p-4">Nom de l'article</label>
            <input type="text" id="name" name="name" class="rounded-lg">

            <label for="content" value="Contenu du Articles" class="p-4">Contenu du Articles</label>
            <textarea id="content" name="content" class="rounded-lg"></textarea>

            <label for="price" class="p-4">Prix de l'Article</label>
            <input type="number" id="price" name="price" class="rounded-lg">

            <label for="stock" class="p-4">Nombres d'Articles</label>
            <input type="number" id="stock" name="stock" class="rounded-lg">
            
            <label for="image" class="p-4">Image du Articles</label>
            <input id="image" type="file" name="image" class="p-4 ">
            
            <button type="submit" class="py-2 px-4 mt-10 border bg-white rounded-lg">Enregistrer</button>
        </form>

    </div>
</x-app-layout>
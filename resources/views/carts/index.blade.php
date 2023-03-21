<h1>coucou</h1>

{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Votre panier') }}
        </h2>
    </x-slot>

    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-full text-left text-sm font-light">
                    <thead class="border-b font-medium dark:border-neutral-500">
                    <tr>
                        <th scope="col" class="px-6 py-4">Marque</th>
                        <th scope="col" class="px-6 py-4">Nom</th>
                        <th scope="col" class="px-6 py-4">Prix</th>
                        <th scope="col" class="px-6 py-4">Stock</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($articles as $article)
                        <tr class="border-b dark:border-neutral-500">
                            <td class="whitespace-nowrap px-6 py-4">{{ $article->title}}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $article->name}}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $article->price}}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $article->stock}}</td>
                            <td class="whitespace-nowrap px-6 py-4"><a href="{{ route('articles.edit', $article) }}" class="inline-block rounded-md border border-transparent bg-indigo-600 text-center text-white hover:bg-indigo-700">Modifier</a></td>
                            <td>
                                <form method="POST" action="{{ route('articles.destroy', $article) }}" >
                                    @csrf
                                    @method("DELETE")
                                    <input type="submit" value="x Supprimer" >
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>

</x-app-layout> --}}

<x-app-layout>
<div class="relative z-10" role="dialog" aria-modal="true">
    <div class="fixed inset-0 hidden bg-gray-500 bg-opacity-75 transition-opacity md:block"></div>
  
    <div class="fixed inset-0 z-10 overflow-y-auto">
      <div class="flex min-h-full items-stretch justify-center text-center md:items-center md:px-2 lg:px-4">
        <!--
          Modal panel, show/hide based on modal state.
  
          Entering: "ease-out duration-300"
            From: "opacity-0 translate-y-4 md:translate-y-0 md:scale-95"
            To: "opacity-100 translate-y-0 md:scale-100"
          Leaving: "ease-in duration-200"
            From: "opacity-100 translate-y-0 md:scale-100"
            To: "opacity-0 translate-y-4 md:translate-y-0 md:scale-95"
        -->
        <div class="flex w-full transform text-left text-base transition md:my-8 md:max-w-2xl md:px-4 lg:max-w-4xl">
          <div class="relative flex w-full items-center overflow-hidden bg-white px-4 pt-14 pb-8 shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">
            <a href="{{ route('articles.index', $article)}}" class="absolute top-4 right-4 text-gray-400 hover:text-gray-500 sm:top-8 sm:right-6 md:top-6 md:right-6 lg:top-8 lg:right-8">
              <span class="sr-only">Close</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </a>
  
            <div class="grid w-full grid-cols-1 items-start gap-y-8 gap-x-6 sm:grid-cols-12 lg:gap-x-8">
              <div class="aspect-w-2 aspect-h-3 overflow-hidden rounded-lg bg-gray-100 sm:col-span-4 lg:col-span-5">
                <img src="{{ asset('storage/'.$article->image)}}" class="object-cover object-center">
              </div>
              <div class="sm:col-span-8 lg:col-span-7">
                <h2 class="text-2xl font-bold text-gray-900 sm:pr-12"> {{ $article->title }} </h2>
  
                <section aria-labelledby="information-heading" class="mt-2">
                  <h3 id="information-heading" class="sr-only">Product information</h3>
  
                  <p class="text-2xl text-gray-900">{{ $article->price }} €</p>
  
                  <!-- Reviews -->
                  <div class="mt-6">
                    <h4 class="sr-only">Reviews</h4>
                    <div class="flex items-center">
                      <div class="flex items-center">
                        <!-- Active: "text-gray-900", Default: "text-gray-200" -->
                        <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                        </svg>
  
                        <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                        </svg>
  
                        <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                        </svg>
  
                        <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                        </svg>
  
                        <svg class="text-gray-200 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                        </svg>
                      </div>
                      <p class="sr-only">3.9 out of 5 stars</p>
                      <a href="#" class="ml-3 text-sm font-medium text-indigo-600 hover:text-indigo-500">117 Avis</a>
                    </div>
                  </div>
                </section>
  
                <section aria-labelledby="options-heading" class="mt-10">
                  <h3 id="options-heading" class="sr-only">Product options</h3>
  
                  <form>
                    <!-- Size -->
                    <div>
                      <h4 class="text-sm font-medium text-gray-900">Taille</h4>
                      <p>50 ml</p>
 
                    </div>
  
                    <!-- Description -->
                    <div class="mt-10">
                      <div class="flex items-center justify-between">
                        <h4 class="text-sm font-medium text-gray-900">Description</h4>
                      </div>
                      <div>
                        <p> {{ $article->content}} </p>
                      </div>
                    </div>
  
                    <button type="submit" class="mt-6 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 py-3 px-8 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Ajouter au panier</button>
                  </form>
                </section>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  

</x-app-layout>
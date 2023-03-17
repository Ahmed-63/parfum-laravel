<x-app-layout>
    <div class="relative overflow-hidden bg-white h-screen mt-32">
        <div class="pt-16 pb-80 sm:pt-24 sm:pb-40 lg:pt-40 lg:pb-48">
          <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
            <div class="sm:max-w-lg">
              <h1 class="font text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Etre différent,<br> Se sentir unique !</h1>
              <p class="mt-4 text-xl text-gray-500">Une sélection pointue de parfums exclusifs, plus de 130 marques et près de 1800 références..</p>
            </div>
            <div>
              <div class="mt-10">
                <!-- Decorative image grid -->
                <div aria-hidden="true" class="pointer-events-none lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl">
                  <div class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                    <div class="flex items-center space-x-6 lg:space-x-8">
                      <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                        <div class="h-64 w-44 overflow-hidden rounded-lg sm:opacity-0 lg:opacity-100">
                          <img src="{{url('/img/cover1.png')}}" alt="logo" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="{{url('/img/cover2.png')}}" alt="logo" class="h-full w-full object-cover object-center">
                        </div>
                      </div>
                      <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                        <div class=" h-max w-44 overflow-hidden rounded-lg">
                          <img src="{{url('/img/hili.jpg')}}" alt="logo" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="{{url('/img/cover4.png')}}" alt="logo" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="{{url('/img/cover5.png')}}" alt="logo" class="h-full w-full object-cover object-center">
                        </div>
                      </div>
                      <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="{{url('/img/cover6.png')}}" alt="logo" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="{{url('/img/logo.jpg')}}" alt="logo" class="h-full w-full object-cover object-center">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                  <x-nav-link :href="route('articles.index')" :active="request()->routeIs('articles.index')" class=" flex items-center justify-center rounded-xl border border-transparent bg-orange-600 w-32 p-2 h-10 text-center font-bold text-white hover:bg-black hover:text-white">
                    {{ ('Boutique') }}
                  </x-nav-link>
              </div>
            </div>
          </div>
        </div>
      </div>
      
</x-app-layout>

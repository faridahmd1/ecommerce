<x-app-layout>
    <x-slot name="header">
        <div>
            <div>
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight pb-2">
                    {{ __('Catalog') }}
                </h2>
                <div class="p">
                    <a href="{{ route('catalog.create') }}">
                      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Add New
                      </button>
                    </a>
                </div>
            </div>
        </div>
    </x-slot>
    <div class="bg-gray-900">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <h2 class="text-2xl font-bold tracking-tight text-gray-100">Customers also purchased</h2>
            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @foreach ($catalogs as $catalog)
                    <div class="group relative">
                        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                            <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                        </div>
                        <div class="mt-4 flex justify-between bg-white-200">
                            <div class="bg-white-200">
                                <h3 class="text-sm text-gray-700">
                                    <a href="{{ route('catalog.show', $catalog->id) }}">
                                        <span aria-hidden="true" class="absolute inset-1/4 pointer-events-auto"></span>
                                        {{ $catalog->name }}
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">Kategori : {{ $catalog->category->name }}</p>
                            </div>
                            <p class="text-sm font-medium text-gray-200">$ {{ $catalog->price }}</p>
                        </div>
                        <div class="mt-2 flex justify-between">
                            <a href="{{ route('catalog.edit', $catalog->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                            <form method="POST" action="{{ route('catalog.destroy', $catalog->id) }}" onsubmit="return confirm('Are you sure you want to delete this catalog?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
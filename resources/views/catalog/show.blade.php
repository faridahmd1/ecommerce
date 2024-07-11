<x-app-layout>
    <x-slot name="header">
        <div>
            <div>
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight pb-2">
                    {{ __('') }}
                </h2>
            </div>
        </div>
    </x-slot>
    {{-- <div class="flow-root rounded-lg border border-gray-100 py-3 shadow-sm">
        <dl class="-my-3 divide-y divide-gray-100 text-sm">
          <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
            <dt class="font-medium text-gray-900">Title</dt>
            <dd class="text-gray-700 sm:col-span-2">Mr</dd>
          </div>
      
          <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
            <dt class="font-medium text-gray-900">Name</dt>
            <dd class="text-gray-700 sm:col-span-2">John Frusciante</dd>
          </div>
      
          <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
            <dt class="font-medium text-gray-900">Occupation</dt>
            <dd class="text-gray-700 sm:col-span-2">Guitarist</dd>
          </div>
      
          <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
            <dt class="font-medium text-gray-900">Salary</dt>
            <dd class="text-gray-700 sm:col-span-2">$1,000,000+</dd>
          </div>
      
          <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
            <dt class="font-medium text-gray-900">Bio</dt>
            <dd class="text-gray-700 sm:col-span-2">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et facilis debitis explicabo
              doloremque impedit nesciunt dolorem facere, dolor quasi veritatis quia fugit aperiam
              aspernatur neque molestiae labore aliquam soluta architecto?
            </dd>
          </div>
        </dl>
      </div> --}}
      <div class="bg-gray-900">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <h2 class="text-2xl font-bold tracking-tight text-gray-100">Catalog Details</h2>
            <div class="mt-6 bg-white rounded-lg shadow-lg p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-bold text-gray-900">{{ $catalog->name }}</h3>
                    <p class="text-lg font-medium text-gray-900">${{ $catalog->price }}</p>
                </div>
                <div class="mb-4">
                    <h4 class="text-sm font-medium text-gray-700">Category</h4>
                    <p class="text-sm text-gray-600">{{ $catalog->category->name }}</p>
                </div>
                <div>
                    <h4 class="text-sm font-medium text-gray-700">Details</h4>
                    <p class="text-sm text-gray-600">{{ $catalog->detail }}</p>
                </div>
            </div>
            <div class="mt-6">
                <a href="{{ route('catalog.index') }}" class="underline text-sm text-gray-500">Back to Catalog</a>
            </div>
        </div>
    </div>
</x-app-layout>
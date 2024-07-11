<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Catalog') }}
        </h2>
    </x-slot>

    <div class="bg-gray-900">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <h2 class="text-2xl font-bold tracking-tight text-gray-100">Edit Catalog</h2>
            <form method="POST" action="{{ route('catalog.update', $catalog->id) }}" class="mt-6 space-y-4">
                @csrf
                @method('PATCH')
    
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Catalog Name</label>
                    <div class="relative mt-1">
                        <input
                            type="text"
                            id="name"
                            name="name"
                            class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                            value="{{ old('name', $catalog->name) }}"
                            required
                        />
                    </div>
                </div>
    
                <div>
                    <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                    <div class="relative mt-1">
                        <input
                            type="number"
                            id="price"
                            name="price"
                            class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                            value="{{ old('price', $catalog->price) }}"
                            required
                        />
                    </div>
                </div>
    
                <div>
                    <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
                    <select
                        id="category_id"
                        name="category_id"
                        class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm"
                        required
                    >
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $catalog->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
    
                <div>
                    <label for="detail" class="block text-sm font-medium text-gray-700">Detail</label>
                    <textarea
                        id="detail"
                        name="detail"
                        class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm"
                        rows="4"
                        required
                    >{{ old('detail', $catalog->detail) }}</textarea>
                </div>
    
                <div class="flex items-center justify-between">
                    <a href="{{ route('catalog.index') }}" class="underline text-sm text-gray-500">Back</a>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Update Catalog
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add New Catalog') }}
        </h2>
    </x-slot>
    <!--
        Heads up! 👋

        Plugins:
            - @tailwindcss/forms
    -->

  <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-lg text-center">
      <h1 class="text-2xl font-bold text-gray-100 sm:text-3xl">Get started today!</h1>
  
      <p class="mt-4 text-gray-500">
        Please fill out the form below to add a new catalog!
      </p>
    </div>
    <form method="POST" action="{{ route('catalog.store') }}" class="mx-auto mb-0 mt-8 max-w-md space-y-4">
      @csrf
      <div>
          <label for="name" class="sr-only">Catalog Name</label>
          <div class="relative">
              <input
                  type="text"
                  id="name"
                  name="name"
                  class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                  placeholder="Enter New Catalog"
                  required
                  value="{{ old('name') }}"
              />
          </div>
      </div>
  
      <div>
          <label for="price" class="sr-only">Price</label>
          <div class="relative">
              <input
                  type="number"
                  id="price"
                  name="price"
                  class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                  placeholder="Enter Price"
                  required
                  value="{{ old('price') }}"
              />
          </div>
      </div>
  
      <div>
          <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select a Category</label>
          <select
              id="category_id"
              name="category_id"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              required
          >
              <option selected disabled>Choose a category</option>
              @foreach ($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endforeach
          </select>
      </div>
  
      <div>
          <label for="detail" class="block text-sm font-medium text-gray-100">Description</label>
          <textarea
              id="detail"
              name="detail"
              class="mt-2 w-full rounded-lg border-gray-200 align-top shadow-sm sm:text-sm"
              rows="4"
              placeholder="Enter any additional order notes..."
              required
          >{{ old('detail') }}</textarea>
      </div>
  
      <div class="flex items-center justify-between">
          <p class="text-sm text-gray-500">
              <a class="underline" href="{{ route('catalog.index') }}">Back</a>
          </p>
          <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
              Submit
          </button>
      </div>
  </form>
  
  </div>
</x-app-layout>
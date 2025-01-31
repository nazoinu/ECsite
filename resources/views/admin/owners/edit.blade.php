<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

<section class="text-gray-600 body-font relative">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">EDIT</h1>
    </div>
    <div class="lg:w-1/2 md:w-2/3 mx-auto">
        <!--form-->
        <form method="POST" action="{{ route('admin.owners.update', ['owner' => $owner->id]) }}">
          @method('PUT')
          @csrf
      <div class=" -m-2">
        <div class="p-2 w-1/2 mx-auto">
          <div class="relative">
            <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
            <input type="text" id="name" name="name" value="{{ $owner->name }}" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
          </div>
        </div>
        <div class="p-2 w-1/2 mx-auto">
            <div class="relative">
              <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
              <input type="email" id="email" name="email" value="{{ $owner->email }}" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
          </div>
        <div class="p-2 w-1/2 mx-auto">
          <div class="relative">
            <label for="shop" class="leading-7 text-sm text-gray-600">店名</label>
            <div required class="w-full bg-gray-100 bg-opacity-50 rounded  focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              <!--選択した値によって、紐づけられているshopのnameを変更(予定)owner側で作成後-->
              @php
                  $data = $owner->shop;
                  foreach($data as $shop){
                    echo $shop['name'];
                  }
              @endphp
            </div>
              <x-input-error :messages="$errors->get('email')" class="mt-2" />
          </div>
        </div>
        <div class="p-2 w-1/2 mx-auto">
          <div class="relative">
            <label for="password" class="leading-7 text-sm text-gray-600">password</label>
            <input type="password" id="password" name="password" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
          </div>
        </div>
        <div class="p-2 w-1/2 mx-auto">
            <div class="relative">
              <label for="password_confirmation" class="leading-7 text-sm text-gray-600">password confirmation</label>
              <input type="password" id="password_confirmation" name="password_confirmation" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
          </div>

          <!--button-->
        <div class="p-2 w-full flex justify-around mt-4 mb-8">
          <button type="button" onclick="location.href='{{ route('admin.owners.index') }}'" class=" bg-gray-200 border-0 py-2 px-8 focus:outline-none hover:bg-gray-500 rounded text-lg">return</button>
          <button type="submit" onclick="location.href" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">update</button>
        </div>
      </div>
    </form>
    </div>
  </div>
</section>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

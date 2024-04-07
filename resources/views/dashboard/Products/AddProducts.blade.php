<x-app-layout>
    <x-slot name="header">
        @extends('dashboard.dashboardNav.nav')
    </x-slot> 
    

<div class=" shadow-lime-400 shadow-xl  w-full max-w-screen-md  ml-96 mt-16 max-h-screen p-4 hover:border-lime-500 rounded-lg  sm:p-6 md:p-8 bg-zinc-900 ">
    <form class="space-y-6" action="{{ route("dashboard.store") }}" enctype="multipart/form-data" method="POST">
        @csrf
        <h5 class="text-xl font-medium text-limeCustom  ">ADD PRODUCT</h5>
        <div>
            <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
            <input value="{{ old("name") }}" type="text" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Name"  />
            @error('name')
                <span class="text-red-700 text-sm">{{$message}}</span>
            @enderror
        </div>
        <div>
            <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prix</label>
            <input  value="{{ old("prix") }}" type="text" name="prix" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Prix"   />
            @error('prix')
                <span class="text-red-700 text-sm">{{$message}}</span>
            @enderror
        </div>
        <div>
            <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stock</label>
            <input  value="{{ old("stock") }}" type="text" name="stock"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Stock"   />
            @error('stock')
                <span class="text-red-700 text-sm">{{$message}}</span>
            @enderror
        </div>
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
            <input type="file" name="image" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400  dark:text-white"  />
            @error('image')
                <span class="text-red-700 text-sm">{{$message}}</span>
            @enderror
        </div>
        
        <button type="submit" class="w-full text-white bg-lime-600 hover:bg-lime-800 hover:text-black focus:ring-4 focus:outline-none focus:ring-lime-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">ADD PRODUCT</button>
        
    </form>
</div>

</x-app-layout>

<x-app-layout>
  <x-slot name="header">
      @extends('dashboard.dashboardNav.nav')
  </x-slot>

  {{-- table User --}}
<div class="max-w-4xl mt-28 max-h-28 ml-80 grid grid-cols-1 2xl:grid-cols-2 xl:gap-4 p-2">
  <!-- Top Sales Card -->
  <div class="bg-white shadow rounded-lg mb-4 p-4 sm:p-6 h-full">
    <div class="flex items-center justify-between mb-4">
      <h3 class="text-xl font-bold leading-none text-gray-900">Latest Products</h3>
      <div>
        <a href="{{ route("dashboard.create") }}" class=" mr-3 text-sm font-medium bg-blue-600 text-white hover:bg-white hover:text-black border-blue-300 border rounded-lg inline-flex items-center p-2">
          New Product
        </a>
      </div>
    </div>
    <div class="flow-root">
      <ul role="list" class="divide-y divide-gray-200">
       @foreach ($products as $product)
       <li class="py-3 sm:py-4">
        <div class="flex items-center space-x-4">
          <div class="flex-shrink-0">
            <img class="h-16 w-16 rounded-full" src="{{ asset('storage/'.$product->image) }}" alt="Neil image">
          </div>
          <div class="flex-1 min-w-0" >
            <p class="text-sm font-medium text-gray-900 truncate" >
              Name
            </p>
            <p class="text-sm text-gray-500 truncate">
              {{$product->name}}
            </p>
          </div>
          <div class="flex-1">
            <h6>Prix</h6>
              <span>${{$product->prix}}</span>
          </div>
          <div class="flex-1">
            <h6>stock </h6>
              <span>{{$product->stock}}</span>
          </div>
          <div>
            <a href="{{ route("dashboard.edit", $product->id) }}" class="rounded border border-yellow-500 bg-yellow-500 text-white hover:text-black hover:bg-white  m-2 p-2">Update</a>
          </div>
          <div>
            <form method="POST" action="{{ route('dashboard.destroyProduct',$product->id) }}">
              @csrf
              @method('delete')
              
              <button class="rounded border border-red-500 bg-red-500  text-white hover:text-black hover:bg-white  m-2 p-2" >
                Delete
              </button>
              </form>
              
          </div>
        </div>
      </li>
       @endforeach
      </ul>
      {{ $products->links() }}
    </div>
    
  </div>
</div>

{{-- End --}}
</x-app-layout>

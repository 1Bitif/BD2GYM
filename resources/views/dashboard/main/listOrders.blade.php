
<div class="max-w-4xl top-full ml-80 grid grid-cols-1 2xl:grid-cols-2 xl:gap-4 max-h-screen ">
  <!-- Top Sales Card -->
  <div class="bg-white shadow rounded-lg mb-4 p-4 sm:p-6 h-full">
    <div class="flex items-center justify-between mb-4">
      <h3 class="text-xl font-bold leading-none text-gray-900">Latest Orders</h3>
      <a href="#" class=" text-sm font-medium text-black hover:bg-lime-300 hover:text-white border-lime-300 border rounded-lg inline-flex items-center p-2">
        View all
      </a>
    </div>
    <div class="flow-root">
      <ul role="list" class="divide-y divide-gray-200">
       @foreach ($users as $user)
       <li class="py-3 sm:py-4">
        <div class="flex items-center space-x-4">
          <div class="flex-shrink-0">
            <img class="h-8 w-8 rounded-full" src="https://placehold.co/42x42" alt="Neil image">
          </div>
          <div class="flex-1 min-w-0" >
            <p class="text-sm font-medium text-gray-900 truncate" >
              {{$user->name}}
            </p>
            <p class="text-sm text-gray-500 truncate">
              {{$user->email}}
            </p>
          </div>
          <div class="inline-flex items-center text-base font-semibold text-gray-900">
            $320
          </div>
          <div>
            <a href="#" class="rounded border border-blue-500 bg-blue-500 text-white hover:text-black hover:bg-white hover:border-blue-500 m-2 p-2">Afficher</a>
          </div>
        </div>
      </li>
       @endforeach
      </ul>
    </div>
    
  </div>
  {{ $users->links() }}
</div>

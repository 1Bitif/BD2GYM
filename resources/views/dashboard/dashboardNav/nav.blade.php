<div class="fixed z-50 left-0 top-16 w-64 h-full bg-zinc-900 p-4 border-t-lime-600 border-t-2 border-r-2 border-r-lime-600 ">
    {{-- <a href="#" class="flex items-center pb-4 border-b border-b-gray-800">
        <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded object-cover">
        <spaan class="text-lg font-bold text-white ml-3">Logo</spaan>
    </a> --}}
    <ul class="mt-4">
        <li class="mb-1 group active:bg-gray-800">
            <a href="{{ route("dashboard.home") }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 click" >
                <svg class="w-6 h-6 text-gray-500 group-hover:text-white transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                
                <span class="text-sm pl-3">Dashboard</span>
            </a>
        </li>
        <li class="mb-1 group ">
            <a href="{{ route("dashboard.user") }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle click">
                <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-white transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                <span class="text-sm pl-3">Users</span>
            </a>
        </li>
        <li class="mb-1 group">
            <a href="{{ route("dashboard.products") }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle click">
                <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-white transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                <span class="text-sm pl-3">Products</span>
            </a>
        </li>
        <li class="mb-1 group">
            <a href="{{ route("dashboard.orders") }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-white transition duration-75"  aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M4 4a1 1 0 0 1 1-1h1.5a1 1 0 0 1 .979.796L7.939 6H19a1 1 0 0 1 .979 1.204l-1.25 6a1 1 0 0 1-.979.796H9.605l.208 1H17a3 3 0 1 1-2.83 2h-2.34a3 3 0 1 1-4.009-1.76L5.686 5H5a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
                  </svg>
                  
                <span class="text-sm pl-3">Orders</span> 
            </a>
            
        </li>
    </ul>
</div>
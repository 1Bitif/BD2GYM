
<div class="py-8 w-full  ">
    <div class="ml-72 mr-72  mt-16  grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-60 ">
        <div class="flex items-center shadow rounded-md p-4 w-80 bg-white">
            <div class="flex-shrink-0">
                <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">
                    
                        {{$users->total()-1}}
                </span>
                <h3 class="text-base font-normal text-gray-500">Total Users</h3>
            </div>
            @if (($users->total()/1000)*100 > 0)
            <div class="ml-5 w-0 flex items-center justify-end flex-1 text-green-500 text-base font-bold">
                {{ ($users->total()/100)*100 }}%
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                clip-rule="evenodd"></path>
            </svg>
            </div>
            @else
                <div class="ml-5 w-0 flex items-center justify-end flex-1 text-red-500 text-base font-bold">
                {{ ($orders->total()/1000)*100 }}%
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" 
                d="M14.707 12.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l2.293-2.293a1 1 0 011.414 0z" 
                clip-rule="evenodd"></path>
                </svg>
            </div>
            @endif
        </div>   
        <div class="flex items-center shadow rounded-md  ml-4 p-4 w-80 bg-white">
            <div class="flex-shrink-0">
                <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">{{ $products->total() }}</span>
                <h3 class="text-base font-normal text-gray-500">Products</h3>
            </div>
            @if (($products->total()/1000)*100 > 0)
            <div class="ml-5 w-0 flex items-center justify-end flex-1 text-green-500 text-base font-bold">
                {{ ($products->total()/1000)*100 }}%
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                clip-rule="evenodd"></path>
            </svg>
            </div>
            @else
                <div class="ml-5 w-0 flex items-center justify-end flex-1 text-red-500 text-base font-bold">
                {{ ($orders->total()/1000)*100 }}%
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" 
                d="M14.707 12.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l2.293-2.293a1 1 0 011.414 0z" 
                clip-rule="evenodd"></path>
                </svg>
            </div>
            @endif
        </div>   
        <div class="flex items-center shadow rounded-md ml-4 p-4 w-80 bg-white">
            <div class="flex-shrink-0">
                <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">{{$orders->total()}}</span>
                <h3 class="text-base font-normal text-gray-500">Orders</h3>
            </div>
            @if (($orders->total()/1000)*100 > 0)
            <div class="ml-5 w-0 flex items-center justify-end flex-1 text-green-500 text-base font-bold">
                {{ ($orders->total()/1000)*100 }}%
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                clip-rule="evenodd"></path>
            </svg>
            </div>
            @else
                <div class="ml-5 w-0 flex items-center justify-end flex-1 text-red-500 text-base font-bold">
                {{ ($orders->total()/1000)*100 }}%
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" 
                d="M14.707 12.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l2.293-2.293a1 1 0 011.414 0z" 
                clip-rule="evenodd"></path>
                </svg>
            </div>
            @endif
        </div>   
</div>    
</div>    
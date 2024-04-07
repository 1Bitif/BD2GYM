
<div class="bg-black px-20 py-20">
    <h2 class="font-extrabold tracking-wider text-limeCustom text-3xl text-center uppercase ">Shop products</h2>
    <p class="text-gray-100 mt-4 text-center">Equip yourself for success and elevate your fitness journey with premium gear from our gym shop today!</p>
    <div class="  grid  grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        {{-- <div class="mt-8">
            <a href="#">
                <img src="images/BSN2480002-grey_465x.webp" alt="img" class="hover:opacity-75 transition ease-in-out duration-150">
            </a>
            <div class="mt-2 text-gray-100">
                <a href="#" class="text-lg mt-2  hover:text-gray-300">BSN N.O.-Xplode Pre-workout</a>
                <div class="div flex items-center text-sm mt-1">
                    <span>2 Flavor / Package Size Options</span>
                </div>
                <div class="text-green-500 text-sm">
                        390.99DH
                </div>
            </div>
        </div> --}}
        {{-- <div class="mt-8">
            <a href="#">
                <img src="images/PNGedit-BB-pre-RS-grey_465x.webp" alt="img" class="hover:opacity-75 transition ease-in-out duration-150">
            </a>
            <div class="mt-2 text-gray-100">
                <a href="#" class="text-lg mt-2  hover:text-gray-300">Bodybuilding.com ELITE Ultimate PRE Pre-Workout</a>
                <div class="div flex items-center text-sm mt-1">
                    <span>2 Flavor / Package Size Options</span>
                </div>
                <div class="text-green-500 text-sm">
                    370.49DH
                </div>
            </div>
        </div> --}}
        {{-- <div class="mt-8">
            <a href="#">
                <img src="images/BBCOMNEWSignature-Whey-VAN2-LBV3-grey_465x.webp" alt="img" class="hover:opacity-75 transition ease-in-out duration-150">
            </a>
            <div class="mt-2 text-gray-100">
                <a href="#" class="text-lg mt-2  hover:text-gray-300">Bodybuilding.com Signature 100% Whey Protein Powder</a>
                <div class="div flex items-center text-sm mt-1">
                    <span>12 Flavor / Package Size Options</span>
                </div>
                <div class="text-green-500 text-sm">
                    390.00DH
                </div>
            </div>
        </div> --}}
        {{-- <div class="mt-8">
            <a href="#">
                <img src="images/SKU30002332-Main-Vanilla-grey_465x.webp" alt="img" class="hover:opacity-75 transition ease-in-out duration-150">
            </a>
            <div class="mt-2 text-gray-100">
                <a href="#" class="text-lg mt-2  hover:text-gray-300">Pro Supps Whey Concentrate</a>
                <div class="div flex items-center text-sm mt-1">
                    <span>2 Flavor / Package Size Options</span>
                </div>
                <div class="text-green-500 text-sm">
                    690.99DH
                </div>
            </div>
        </div> --}}
        {{-- <div class="mt-8">
            <a href="#">
                <img src="images/SKU30002196-Main-grey_465x.webp" alt="img" class="hover:opacity-75 transition ease-in-out duration-150">
            </a>
            <div class="mt-2 text-gray-100">
                <a href="#" class="text-lg mt-2  hover:text-gray-300">MuscleSport Lean Whey Iso-Hydro</a>
                <div class="div flex items-center text-sm mt-1">
                    <span>9 Flavor / Package Size Options</span>
                </div>
                <div class="text-green-500 text-sm">
                    740.99DH
                </div>
            </div>
        </div> --}}
        {{-- <div class="mt-8">
            <a href="#">
                <img src="images/BBCOMNEWSignature-Whey-VAN2-LBV3-grey_465x.webp" alt="img" class="hover:opacity-75 transition ease-in-out duration-150">
            </a>
            <div class="mt-2 text-gray-100">
                <a href="#" class="text-lg mt-2  hover:text-gray-300">Bodybuilding.com Signature 100% Whey Protein Powder</a>
                <div class="div flex items-center text-sm mt-1">
                    <span>12 Flavor / Package Size Options</span>
                </div>
                <div class="text-green-500 text-sm">
                    390.00DH
                </div>
            </div>
        </div> --}}
      

{{--  --}}
{{--  --}}


{{-- @foreach ($products as $product) --}}
<div class=" mt-8 border-4 border-lime-800 rounded-lg shadow-lg hover:shadow-lime-600 max-w-sm ">
    <a href="{{ route('register') }}">
        {{-- <img class="p-1 hover:opacity-75 transition ease-in-out duration-150 max-h-60 w-screen" src="{{ asset("storage/$product->image") }}" alt="product image" /> --}}
    </a>
    <div class="px-5 pb-5">
        <a href="{{ route("register") }}">
            {{-- <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{$product->name}}</h5> --}}
        </a>
        <div class="flex items-center mt-2.5 mb-5">
            <div class="flex items-center space-x-1 rtl:space-x-reverse">
                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                </svg>
                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                </svg>
                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                </svg>
                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                </svg>
                <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                </svg>
            </div>
            <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">5.0</span>
        </div>
        <div class="flex items-center justify-between">
            {{-- <span class="text-3xl font-bold text-gray-900 dark:text-white">${{$product->prix}}</span> --}}
            <a href="{{ route("register") }}" class="text-black bg-lime-300  hover:bg-lime-900 hover:text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Add to cart</a>
        </div>
    </div>
</div>
{{-- @endforeach --}}

</div>
</div> 
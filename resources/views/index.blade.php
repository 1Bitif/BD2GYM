@extends('layouts.homelayout')
@extends('layouts.layout')
@section('content')
    @section('Homecontent')
    <div class="bg-black mt-36 px-20 py-20">
        <h2 class="font-extrabold tracking-wider text-limeCustom text-3xl text-center uppercase">MEMBERSHIP PLANS</h2>
        <p class="text-gray-100 mt-4 text-center">Choose the membership plan that best fits your needs and start your fitness journey today!</p>
        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="mt-8 bg-black overflow-hidden border shadow-lg">
                <div class="bg-gray-100 p-6">
                    <h2 class="text-xl font-semibold text-center text-black">Basic Membership</h2>
                </div>
                <div class="p-6 text-center ">
                    <span class="text-lg font-semibold text-limeCustom">350DH</span>
                    <ul class="mt-4 text-gray-300">
                        <li>Access to gym equipment</li>
                        <li>Group fitness classes</li>
                        <li>Locker room access</li>
                    </ul>
                    <button class="mt-6 bg-limeCustom text-black px-6 py-3 rounded-sm font-bold uppercase hover:bg-black hover:text-lime-500 transition duration-300 ease-in-out">Subscribe Now</button>
                </div>
            </div>
            <div class="mt-8 bg-black overflow-hidden border shadow-lg">
                <div class="bg-yellow-400 p-6">
                    <h2 class="text-xl font-semibold text-center text-black">Premium Membership</h2>
                </div>
                <div class="p-6 text-center ">
                    <span class="text-lg font-semibold text-limeCustom">700DH</span>
                    <ul class="mt-4 text-gray-300">
                        <li>Access to gym equipment</li>
                        <li>Group fitness classes</li>
                        <li>Locker room access</li>
                        <li>Personal trainer sessions</li>
                    </ul>
                    <button class="mt-6 bg-limeCustom text-black px-6 py-3 font-bold uppercase rounded-sm hover:bg-black hover:text-lime-500 transition duration-300 ease-in-out">Subscribe Now</button>
                </div>
            </div>
            <div class="mt-8 bg-black overflow-hidden border shadow-lg">
                <div class="bg-gray-300 p-6">
                    <h2 class="text-xl font-semibold text-center text-black">Platinum Membership</h2>
                </div>
                <div class="p-6 text-center ">
                    <span class="text-lg font-semibold text-limeCustom">1000DH</span>
                    <ul class="mt-4 text-gray-300">
                        <li>Access to gym equipment</li>
                        <li>Group fitness classes</li>
                        <li>Locker room access</li>
                        <li>Personal trainer sessions</li>
                        <li>Exclusive access to sauna and pool</li>
                    </ul>
                    <button class="mt-6 bg-limeCustom text-black px-6 py-3 font-bold uppercase rounded-sm hover:bg-black hover:text-lime-500 transition duration-300 ease-in-out">Subscribe Now</button>
                </div>
            </div>
        </div>
    </div> 
    {{-- products section  --}}
<div class="bg-black px-20 py-20">
    <h2 class="font-extrabold tracking-wider text-limeCustom text-3xl text-center uppercase ">Shop products</h2>
    <p class="text-gray-100 mt-4 text-center">Equip yourself for success and elevate your fitness journey with premium gear from our gym shop today!</p>
    <div class="  grid  grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @foreach ($products as $product)
            <div class=" mt-8 border-4 border-lime-800 rounded-lg shadow-lg hover:shadow-lime-600 max-w-sm ">
                <a href="{{ route('register') }}">
                    <img class="p-1 hover:opacity-75 transition ease-in-out duration-150 max-h-60 w-screen" src="{{ asset("storage/$product->image") }}" alt="product image" />
                </a>
                <div class="px-5 pb-5">
                    <a href="{{ route("register") }}">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{$product->name}}</h5>
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
                        <span class="text-3xl font-bold text-gray-900 dark:text-white">${{$product->prix}}</span>
                        <a href="{{ route("register") }}" class="text-black bg-lime-300  hover:bg-lime-900 hover:text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Add to cart</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div> 

    {{-- subscribe section --}}
    <div class="bg-black px-20 py-20 ">
        <h2 class="font-extrabold tracking-wider text-limeCustom text-3xl text-center uppercase">GET MEMBERSHIP</h2>
        <p class="text-gray-100 mt-4 text-center">Join our fitness family today and unlock a healthier, stronger you with our exclusive membership plans!</p>
        <div class="flex items-center gap-11 border border-gray-800 rounded-lg p-8 mt-8">
            <div class="w-1/2">
                <img src="images/connect-with-us.jpg" alt="Image" class="hover:opacity-75 transition ease-in-out duration-150 rounded-lg">
            </div>
            <div class="flex flex-col items-start">
                <h2 class="text-3xl font-semibold uppercase text-limeCustom mb-4">Join Us now!</h2>
                <form action="#" class="flex flex-col gap-4">
                    <input type="text" placeholder="Full Name" class="w-full bg-gray-800 text-gray-200 pr-28 pl-4 py-5 rounded-md focus:outline-none focus:ring-2 focus:ring-limeCustom">
                    <input type="text" placeholder="Email" class="w-full bg-gray-800 text-gray-200 pr-28 pl-4 py-5 rounded-md focus:outline-none focus:ring-2 focus:ring-limeCustom">
                    <input type="password" placeholder="Password" class="w-full bg-gray-800 text-gray-200 pr-28 pl-4 py-5 rounded-md focus:outline-none focus:ring-2 focus:ring-limeCustom">
                    <button type="submit" class="w-full bg-limeCustom text-black px-28 py-5 font-bold uppercase rounded-md hover:bg-black hover:text-limeCustom transition duration-300 ease-in-out">Join</button>
                </form>
            </div>
        </div>   
    </div>
    {{-- footer section --}}
    <div class="bg-black px-20 py-20">
        <hr>
        <div class="my-4">
            <div class="px-28 flex items-center justify-center font-bold text-limeCustom text-2xl">
                <svg fill="#7CFC00" class=" md:w-8 mr-1" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" transform="matrix(-1, 0, 0, 1, 0, 0)">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                  <g id="SVGRepo_iconCarrier"> <g> <g> <path d="M477.875,204.8h-8.542v-42.667c0-32.93-26.795-59.733-59.733-59.733c-16.708,0-31.812,6.912-42.667,18.014v-9.481 c0-32.93-26.795-59.733-59.733-59.733c-16.708,0-31.812,6.912-42.667,18.014v-9.481C264.533,26.803,237.739,0,204.8,0 s-59.733,26.803-59.733,59.733V153.6H32.631c-13.286,0-24.098,10.812-24.098,24.098v61.235h34.133c4.71,0,8.533,3.814,8.533,8.533 S47.377,256,42.667,256H8.533v17.067H51.2c4.71,0,8.533,3.814,8.533,8.533c0,4.719-3.823,8.533-8.533,8.533H8.533V307.2h51.2 c4.71,0,8.533,3.814,8.533,8.533s-3.823,8.533-8.533,8.533h-51.2v10.035c0,13.286,10.812,24.098,24.098,24.098h112.435v93.867 c0,32.93,26.795,59.733,59.733,59.733s59.733-26.803,59.733-59.733v-9.481c10.854,11.102,25.958,18.014,42.667,18.014 c32.939,0,59.733-26.803,59.733-59.733v-9.481c10.854,11.102,25.958,18.014,42.667,18.014c32.939,0,59.733-26.803,59.733-59.733 v-51.2h8.542c14.114,0,25.591-11.486,25.591-25.591v-42.684C503.467,216.286,491.989,204.8,477.875,204.8z M247.467,110.933 v290.133v51.2c0,23.526-19.14,42.667-42.667,42.667c-23.526,0-42.667-19.14-42.667-42.667v-102.4V162.133v-102.4 c0-23.526,19.14-42.667,42.667-42.667c23.526,0,42.667,19.14,42.667,42.667V110.933z M452.267,213.333v76.8v59.733 c0,23.526-19.14,42.667-42.667,42.667c-23.526,0-42.667-19.14-42.667-42.667V162.133c0-23.526,19.14-42.667,42.667-42.667 c23.526,0,42.667,19.14,42.667,42.667V213.333z"/> </g> </g> </g>
                </svg>
                BD2GYM
                <svg fill="#7CFC00" class=" md:w-8 ml-1" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" transform="matrix(1, 0, 0, -1, 0, 0)">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                  <g id="SVGRepo_iconCarrier"> <g> <g> <path d="M477.875,204.8h-8.542v-42.667c0-32.93-26.795-59.733-59.733-59.733c-16.708,0-31.812,6.912-42.667,18.014v-9.481 c0-32.93-26.795-59.733-59.733-59.733c-16.708,0-31.812,6.912-42.667,18.014v-9.481C264.533,26.803,237.739,0,204.8,0 s-59.733,26.803-59.733,59.733V153.6H32.631c-13.286,0-24.098,10.812-24.098,24.098v61.235h34.133c4.71,0,8.533,3.814,8.533,8.533 S47.377,256,42.667,256H8.533v17.067H51.2c4.71,0,8.533,3.814,8.533,8.533c0,4.719-3.823,8.533-8.533,8.533H8.533V307.2h51.2 c4.71,0,8.533,3.814,8.533,8.533s-3.823,8.533-8.533,8.533h-51.2v10.035c0,13.286,10.812,24.098,24.098,24.098h112.435v93.867 c0,32.93,26.795,59.733,59.733,59.733s59.733-26.803,59.733-59.733v-9.481c10.854,11.102,25.958,18.014,42.667,18.014 c32.939,0,59.733-26.803,59.733-59.733v-9.481c10.854,11.102,25.958,18.014,42.667,18.014c32.939,0,59.733-26.803,59.733-59.733 v-51.2h8.542c14.114,0,25.591-11.486,25.591-25.591v-42.684C503.467,216.286,491.989,204.8,477.875,204.8z M247.467,110.933 v290.133v51.2c0,23.526-19.14,42.667-42.667,42.667c-23.526,0-42.667-19.14-42.667-42.667v-102.4V162.133v-102.4 c0-23.526,19.14-42.667,42.667-42.667c23.526,0,42.667,19.14,42.667,42.667V110.933z M452.267,213.333v76.8v59.733 c0,23.526-19.14,42.667-42.667,42.667c-23.526,0-42.667-19.14-42.667-42.667V162.133c0-23.526,19.14-42.667,42.667-42.667 c23.526,0,42.667,19.14,42.667,42.667V213.333z"/> </g> </g> </g>
                  </svg>
                </div>
        </div>
        <div class="text-white flex items-center mt-4 justify-center">
            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 48 48">
                <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1" cx="19.38" cy="42.035" r="44.899" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fd5"></stop><stop offset=".328" stop-color="#ff543f"></stop><stop offset=".348" stop-color="#fc5245"></stop><stop offset=".504" stop-color="#e64771"></stop><stop offset=".643" stop-color="#d53e91"></stop><stop offset=".761" stop-color="#cc39a4"></stop><stop offset=".841" stop-color="#c837ab"></stop></radialGradient><path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path><radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2" cx="11.786" cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#4168c9"></stop><stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop></radialGradient><path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path><path fill="#fff" d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z"></path><circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle><path fill="#fff" d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z"></path>
                </svg></a>
            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 48 48">
                <path fill="#039be5" d="M24 5A19 19 0 1 0 24 43A19 19 0 1 0 24 5Z"></path><path fill="#fff" d="M26.572,29.036h4.917l0.772-4.995h-5.69v-2.73c0-2.075,0.678-3.915,2.619-3.915h3.119v-4.359c-0.548-0.074-1.707-0.236-3.897-0.236c-4.573,0-7.254,2.415-7.254,7.917v3.323h-4.701v4.995h4.701v13.729C22.089,42.905,23.032,43,24,43c0.875,0,1.729-0.08,2.572-0.194V29.036z"></path>
                </svg></a>
            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 48 48">
                <path fill="#455A64" d="M14.539 6h2.125l1.37 5.496h.133l1.308-5.493h2.147l-2.458 8.036V20h-2.112v-5.703L14.539 6zM21.525 11.923c0-.784.254-1.411.759-1.874.504-.466 1.182-.7 2.035-.7.778 0 1.413.245 1.908.737.495.488.743 1.121.743 1.894v5.235c0 .866-.242 1.548-.728 2.044C25.756 19.753 25.09 20 24.235 20c-.823 0-1.477-.259-1.974-.767-.493-.508-.738-1.194-.738-2.055v-5.256H21.525zM23.455 17.368c0 .275.066.494.205.646.132.15.322.226.571.226.255 0 .454-.077.604-.234.149-.151.226-.366.226-.638v-5.522c0-.22-.079-.399-.231-.536-.151-.135-.352-.205-.599-.205-.229 0-.417.07-.561.205-.143.137-.215.316-.215.536V17.368zM33.918 9.605V20h-1.875v-1.266c-.346.414-.705.728-1.081.941C30.59 19.89 30.227 20 29.876 20c-.435 0-.76-.149-.981-.452-.221-.3-.329-.751-.329-1.357V9.605h1.874v7.886c0 .236.04.41.12.519.075.104.207.162.38.162.141 0 .315-.071.522-.215.213-.141.406-.324.581-.544V9.605H33.918z"></path><path fill="#FFF" d="M38.799,26.439c0-2.342-1.94-4.24-4.329-4.24c-3.412-0.143-6.905-0.203-10.47-0.198c-3.563-0.005-7.056,0.056-10.47,0.198c-2.387,0-4.327,1.898-4.327,4.24C9.061,28.291,8.995,30.145,9,32.001c-0.005,1.853,0.06,3.707,0.204,5.561c0,2.345,1.938,4.243,4.326,4.243c3.414,0.14,6.907,0.2,10.47,0.195c3.564,0.008,7.058-0.056,10.47-0.195c2.389,0,4.329-1.898,4.329-4.243c0.142-1.854,0.209-3.708,0.201-5.561C39.008,30.145,38.941,28.291,38.799,26.439z"></path><g><path fill="#F44336" d="M33.851 30.346c-.219 0-.368.058-.458.18-.064.091-.145.299-.145.752v.774h1.193v-.774c0-.446-.083-.655-.151-.757C34.205 30.402 34.061 30.346 33.851 30.346zM26.865 30.386c-.086.042-.17.105-.258.193v5.876c.11.111.217.191.316.242.111.055.224.08.346.08.231 0 .303-.091.326-.123.057-.071.119-.219.119-.54v-5.005c0-.278-.053-.493-.152-.625C27.428 30.306 27.164 30.236 26.865 30.386z"></path><path fill="#F44336" d="M38.799,26.439c0-2.342-1.94-4.24-4.329-4.24c-3.412-0.143-6.905-0.203-10.47-0.198c-3.563-0.005-7.056,0.056-10.47,0.198c-2.387,0-4.327,1.898-4.327,4.24C9.061,28.291,8.995,30.145,9,32.001c-0.005,1.853,0.06,3.707,0.204,5.561c0,2.345,1.938,4.243,4.326,4.243c3.414,0.14,6.907,0.2,10.47,0.195c3.564,0.008,7.058-0.056,10.47-0.195c2.389,0,4.329-1.898,4.329-4.243c0.142-1.854,0.209-3.708,0.201-5.561C39.008,30.145,38.941,28.291,38.799,26.439z M15.701,38.382c0,0.111-0.092,0.204-0.206,0.204h-2.049c-0.114,0-0.206-0.093-0.206-0.204v-11.03h-1.914c-0.113,0-0.205-0.092-0.205-0.203v-1.904c0-0.112,0.092-0.204,0.205-0.204h6.291c0.114,0,0.206,0.092,0.206,0.204v1.904c0,0.111-0.091,0.203-0.206,0.203h-1.916V38.382z M22.995,38.382c0,0.111-0.092,0.204-0.206,0.204h-1.822c-0.114,0-0.206-0.093-0.206-0.204v-0.551c-0.243,0.233-0.486,0.418-0.738,0.56c-0.397,0.227-0.776,0.336-1.16,0.336c-0.488,0-0.864-0.176-1.117-0.517c-0.238-0.324-0.361-0.803-0.361-1.421v-8.1c0-0.112,0.092-0.204,0.207-0.204h1.821c0.114,0,0.206,0.092,0.206,0.204v7.428c0,0.244,0.044,0.343,0.072,0.382c0.013,0.017,0.05,0.067,0.205,0.067c0.052,0,0.172-0.022,0.389-0.169c0.176-0.115,0.334-0.259,0.473-0.425v-7.283c0-0.112,0.092-0.204,0.207-0.204h1.821c0.114,0,0.206,0.092,0.206,0.204v9.692H22.995z M30,36.373c0,0.736-0.159,1.31-0.473,1.708c-0.326,0.418-0.797,0.626-1.398,0.626c-0.383,0-0.733-0.077-1.046-0.233c-0.166-0.083-0.327-0.191-0.479-0.325v0.233c0,0.114-0.093,0.204-0.206,0.204h-1.837c-0.114,0-0.207-0.09-0.207-0.204v-13.14c0-0.112,0.092-0.203,0.207-0.203h1.837c0.113,0,0.206,0.091,0.206,0.203v3.717c0.15-0.136,0.31-0.25,0.474-0.343c0.309-0.17,0.625-0.256,0.941-0.256c0.641,0,1.143,0.238,1.484,0.706c0.328,0.45,0.495,1.101,0.495,1.933L30,36.373L30,36.373z M36.729,33.765c0,0.113-0.093,0.205-0.207,0.205h-3.273v1.621c0,0.592,0.082,0.845,0.148,0.951c0.053,0.088,0.152,0.199,0.438,0.199c0.23,0,0.388-0.055,0.469-0.164c0.037-0.058,0.139-0.28,0.139-0.988v-0.675c0-0.114,0.093-0.204,0.207-0.204h1.872c0.114,0,0.205,0.09,0.205,0.204v0.729c0,1.044-0.249,1.844-0.737,2.384c-0.49,0.543-1.23,0.82-2.198,0.82c-0.872,0-1.574-0.296-2.079-0.871c-0.5-0.571-0.755-1.354-0.755-2.333v-4.352c0-0.892,0.278-1.63,0.83-2.196c0.55-0.568,1.274-0.857,2.144-0.857c0.89,0,1.587,0.271,2.072,0.803c0.48,0.526,0.724,1.284,0.724,2.251v2.474H36.729z"></path></g>
                </svg></a>
            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 48 48">
                <path fill="#03a9f4" d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z"></path><path fill="#fff" d="M36,17.12c-0.882,0.391-1.999,0.758-3,0.88c1.018-0.604,2.633-1.862,3-3	c-0.951,0.559-2.671,1.156-3.793,1.372C29.789,13.808,24,14.755,24,20v2c-4,0-7.9-3.047-10.327-6c-2.254,3.807,1.858,6.689,2.327,7	c-0.807-0.025-2.335-0.641-3-1c0,0.016,0,0.036,0,0.057c0,2.367,1.661,3.974,3.912,4.422C16.501,26.592,16,27,14.072,27	c0.626,1.935,3.773,2.958,5.928,3c-2.617,2.029-7.126,2.079-8,1.977c8.989,5.289,22.669,0.513,21.982-12.477	C34.95,18.818,35.342,18.104,36,17.12"></path>
                </svg></a>
        </div>
        <p class="text-limeCustom text-center mt-4 ">All rights reserved © BD2GYM 2024</p>
    </div>
    @endsection
@endsection

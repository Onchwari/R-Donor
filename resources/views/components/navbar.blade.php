<nav class="bg-red-800 border-red-800 px-2 sm:px-4 py-3  dark:bg-red-800">
  <div class="container flex flex-wrap justify-between items-center mx-auto">
    <a href="/" class="flex items-center">
      <span class="self-center text-xl font-semibold ml-5 whitespace-nowrap dark:text-white">
          <p class="w-[100px]">R-DONOR</p>
        
      </span>
    </a>
    
    <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
      <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-md md:font-medium font-light">
        <li>
          <a href="/"
            class="block py-2 font-normal pr-4 pl-3 text-neutral-200 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 dark:text-white md:dark:hover:text-orange-600 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
            aria-current="page">HOME</a>
        </li>
        <li>
          <a href="{{ url('bloodtypes') }}"
            class="block py-2 font-normal pr-4 pl-3 text-neutral-200 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 dark:text-white md:dark:hover:text-orange-600 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">BLOOD TYPES</a>
        </li>
        <li>

          <a href="{{ url('whocandonate') }}"
            class="block py-2 font-normal pr-4 pl-3 text-neutral-200 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 dark:text-white md:dark:hover:text-orange-600 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">WHO CAN DONATE</a>
        </li>
        <li>
          <a href="{{ url('blooddrives') }}"
            class="block py-2 font-normal pr-4 pl-3 text-neutral-200 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:tex-white0 md:p-0 dark:text-white md:dark:hover:text-orange-600 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">BLOOD DRIVES</a>
        </li>

        
          <a href="{{ url('login') }}" class="block py-2 font-normal pr-4 pl-3 text-neutral-200 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:tex-white0 md:p-0 dark:text-white md:dark:hover:text-orange-600 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">LOGIN</a>
          
        </li>
      </ul>

    </div>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
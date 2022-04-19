<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body>
    <nav class="bg-white border-gray-200 px-2 sm:px-16 py-8 dark:bg-gray-800">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <a href="https://flowbite.com" class="flex items-center">
                {{-- <img src="/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo"> --}}
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">CSB</span>
            </a>
            <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Layanan</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Portfolio</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tentang</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Blog</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
        

<div class="py-40">
    <div class="lg:flex mx-10">
        <div class="lg:flex-1 mr-10">
        <h1 class="text-2xl md:text-4xl font-bold">CSB</h1>
        <h3 class="text-xl pt-5 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nostrum, ducimus fuga corporis dolore mollitia doloremque obcaecati rerum veritatis. Nihil, nisi voluptatum! Explicabo fuga deserunt ut voluptate totam nulla tempora!</h3>
        <div>
            <button class="text-lg shadow-lg px-5 py-2 my-5 inline-block bg-[#40E883] hover:bg-[#3bd177] text-white rounded-[5px]">> Selengkapnya</button>
        </div>
        </div>
        <div class="lg:flex-0">
        <img src="data:image/jpeg;base64,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" alt="">    
        </div>     
    </div>   
</div>
<div class="py-16 md:px-20">
    <div class="m-5">
    <h1 class="text-5xl md:text-6xl font-bold m-10">Features</h1>
        <div class="lg:flex-1 text-left mt-5">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
        <div class="p-5 border-2 border-[#40E883] shadow-xl rounded-lg">
            <h2 class="text-2xl font-bold">Judul</h2>
            <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="p-5 border-2 border-[#40E883] shadow-xl rounded-lg">
            <h2 class="text-2xl font-bold">Judul</h2>
            <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="p-5 border-2 border-[#40E883] shadow-xl rounded-lg">
            <h2 class="text-2xl font-bold">Judul</h2>
            <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="p-5 border-2 border-[#40E883] shadow-xl rounded-lg">
            <h2 class="text-2xl font-bold">Judul</h2>
            <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="p-5 border-2 border-[#40E883] shadow-xl rounded-lg">
            <h2 class="text-2xl font-bold">Judul</h2>
            <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="p-5 border-2 border-[#40E883] shadow-xl rounded-lg">
            <h2 class="text-2xl font-bold">Judul</h2>
            <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        </div>
        </div> 
    </div>
</div>
</body>
</html>
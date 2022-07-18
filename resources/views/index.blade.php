<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.2/dist/flowbite.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased">
        <nav class="bg-[#2A1A5E] border-gray-200 px-2 sm:px-4 py-5">
            <div class="container flex flex-wrap justify-between items-center mx-auto">
                <a href="https://flowbite.com" class="flex items-center">
                    {{-- <img src="/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" /> --}}
                    <span class="self-center text-xl font-semibold whitespace-nowrap text-white">Flowbite</span>
                </a>
                <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 text-gray-400 hover:bg-gray-700 focus:ring-gray-600" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                    <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 text-white" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-3 border-b border-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700">About</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-3 border-b border-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700">Services</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-3 border-b border-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700">Pricing</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-3 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 text-gray-400 md:hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="bg-[#F7F7F7] md:flex text-left py-20">
            <div class="flex-1 px-10">
                <img src="https://s3-alpha.figma.com/hub/file/948140848/1f4d8ea7-e9d9-48b7-b70c-819482fb10fb-cover.png" class="m-auto" alt="">
            </div>
            <div class="flex-1 my-auto px-10 md:pl-32 pr-10 pt-5 md:pt-0">
                <h1 class="">Slogan</h1>
                <div>We are a company engaged in the field of General Contractor and Supplier.
                    Our company is an experienced company in the field of General Contractor
                    & Supplier with employees who are experts in their fields.</div>
            </div>
        </div>
        <div class="bg-[#F0C929] px-20 py-10">
            <h1 class="font-bold text-white text-2xl text-center pb-10">SERVICES</h1>
            <div class="md:flex">
                <div class="bg-white rounded-lg p-10 flex-1 m-5 shadow-lg">
                    <img src="https://s3-alpha.figma.com/hub/file/948140848/1f4d8ea7-e9d9-48b7-b70c-819482fb10fb-cover.png" alt="">
                    asdf
                </div>
                <div class="bg-white rounded-lg p-10 flex-1 m-5 shadow-lg">
                    <img src="https://s3-alpha.figma.com/hub/file/948140848/1f4d8ea7-e9d9-48b7-b70c-819482fb10fb-cover.png" alt="">
                    asdf
                </div>
                <div class="bg-white rounded-lg p-10 flex-1 m-5 shadow-lg">
                    <img src="https://s3-alpha.figma.com/hub/file/948140848/1f4d8ea7-e9d9-48b7-b70c-819482fb10fb-cover.png" alt="">
                    asdf
                </div>
                <div class="bg-white rounded-lg p-10 flex-1 m-5 shadow-lg">
                    <img src="https://s3-alpha.figma.com/hub/file/948140848/1f4d8ea7-e9d9-48b7-b70c-819482fb10fb-cover.png" alt="">
                    asdf
                </div>
            </div>
        </div>
        <div class="pt-10">
            <h1 class="font-bold text-[#F0C929] text-2xl text-center pb-10">PARTNER SHIP</h1>
            <p class="font-bold text-[#F0C929] text-lg text-center pb-10">Here are some of the clients we work with frequently:</p>
            <div class="md:flex p-10">
                <div class="bg-white rounded-lg p-10 flex-1 m-5 shadow-lg">
                    <img src="https://s3-alpha.figma.com/hub/file/948140848/1f4d8ea7-e9d9-48b7-b70c-819482fb10fb-cover.png" alt="">
                    asdf
                </div>
                <div class="bg-white rounded-lg p-10 flex-1 m-5 shadow-lg">
                    <img src="https://s3-alpha.figma.com/hub/file/948140848/1f4d8ea7-e9d9-48b7-b70c-819482fb10fb-cover.png" alt="">
                    asdf
                </div>
                <div class="bg-white rounded-lg p-10 flex-1 m-5 shadow-lg">
                    <img src="https://s3-alpha.figma.com/hub/file/948140848/1f4d8ea7-e9d9-48b7-b70c-819482fb10fb-cover.png" alt="">
                    asdf
                </div>
                <div class="bg-white rounded-lg p-10 flex-1 m-5 shadow-lg">
                    <img src="https://s3-alpha.figma.com/hub/file/948140848/1f4d8ea7-e9d9-48b7-b70c-819482fb10fb-cover.png" alt="">
                    asdf
                </div>
            </div>
        </div>
        <div class="bg-[#2A1A5E] md:flex w-full px-5 md:px-32 pt-20 text-white">
            <div class="flex-1 md:pl-10 md:pr-32">
                <img src="https://klikalamat.com/wp-content/uploads/2016/08/PT.-CAHAYA-SEBELAS-BINTANG.png" alt="" width="80" height="50">
                <p class="mt-10">
                    Jl. Syarifuddin Yoes Komplek Balikpapan Regency. Ruko Victorian Block V-2 no.2 Balikpapan Selatan. Kalimantan Timur
                </p>
                <div><i class="fa-solid fa-square-phone fa-xl text-[#F0C929] mt-10 text-center"></i><span class="ml-5">0542-7211614</span></div>
                <div><i class="fa-solid fa-mobile fa-xl text-[#F0C929] mt-8 text-center"></i><span class="ml-5">0542-7211614</span></div>
                <div><i class="fa-solid fa-envelope fa-xl text-[#F0C929] mt-8 text-center"></i><span class="ml-5">info@11bintang.com</span></div>
            </div>
            <div class="flex-1 mt-5 md:mt-0">
                <iframe class="m-auto w-10/12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2238.6954898917033!2d116.89241490069891!3d-1.2281543646764999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9d789db2e72a996!2zMcKwMTMnNDAuOSJTIDExNsKwNTMnNDEuOSJF!5e0!3m2!1sid!2sid!4v1650540818113!5m2!1sid!2sid" width="450" height="337" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="bg-[#2A1A5E] text-center text-white p-10">
            Copyright © 2022 PT CAHAYA SEBELAS BINTANG
        </div>
        <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
    </body>
</html>

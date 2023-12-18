<?php include('components/header.php');
include('components/navbar.php');
?>

<body>
    <!---------- banner starts from here xl above start ----------->
    <div class="hidden xl:block relative overflow-hidden min-w-full lg:h-[65vh]">
        <video class="lg:min-w-full lg:min-h-full brightness-50" src="./assets/video/fleetbanner.mp4" loop muted autoplay>
        </video>
        <div class="absolute top-16 md:top-1/2 inset-x-0 z-10 mx-[10vw]">
            <h1 class=" text-white md:text-4xl lg:text-6xl font-semibold text-center mb-3">Operate at a Whole New Level
            </h1>
            <p class="text-white lg:text-lg text-center mb-5">Lower fuel costs, boost efficiency, track your equipment,
                and
                more. All on one platform</p>
            <div class="flex justify-center">
                <button class="font-semibold bg-sky-400 px-5 py-2 text-white rounded-md">Check Our Price</button>
            </div>
        </div>
    </div>
    <!---------- banner starts from here xl above end ----------->

    <!---------- banner starts from here lg smaller start ----------->
    <div class="block xl:hidden relative">
        <img class="w-full brightness-50" src="./assets/video/tabmobbanner.gif" alt="">
        <div class="absolute top-1/3 md:top-1/3 inset-x-0 z-10 mx-[10vw]">
            <h1 class=" text-white text-3xl md:text-6xl  font-semibold text-center mb-5">Operate at a Whole New Level
            </h1>
            <p class="text-white text-sm md:text-lg text-center mb-5">Lower fuel costs, boost efficiency, track your equipment,
                and
                more. All on one platform</p>
            <div class="flex justify-center">
                <button class="font-semibold bg-sky-400 px-5 py-2 text-white rounded-md">Check Our Price</button>
            </div>
        </div>
    </div>
    <!---------- banner starts from here lg smaller end ----------->


    <div class="bg-[#F0F6FE] lg:flex justify-center items-center gap-5 py-5">
        <div class=" mx-[2vw] lg:mx-0 font-semibold">Whats New</div>
        <div class="hidden lg:block h-32 w-[1px] bg-slate-200"></div>
        <div class="flex gap-2 lg:w-[25rem] cursor-pointer mx-[2vw] lg:mx-0">
            <img class="w-32 h-20" src="./assets/images/strip1.webp" alt="">
            <p class="font-medium underline underline-offset-2">An interview with Samsara's 2023 Top Driver award winner
                on safety and the future of trucking</p>
        </div>
        <div class="hidden lg:block h-32 w-[1px] bg-slate-200"></div>
        <div class="hidden lg:block lg:flex gap-2 w-[30rem] cursor-pointer">
            <img class="w-32 h-20" src="./assets/images/strip2.webp" alt="">
            <p class="font-medium underline underline-offset-2">U.S. Logistics Solutions saves 100,000 hours and reduces
                accidents with mobile-first technology</p>
        </div>
    </div>
    <!---------- banner ends from here ----------->


    <section class="max-w-7xl mx-auto mt-16 lg:mt-28 relative">
        <h2 class="text-2xl md:text-4xl lg:text-5xl font-semibold text-center mb-10">See better. Operate smarter.</h2>
        <div class="flex justify-center md:flex-row flex-col">
            <button class="bt1 md:w-1/4 bg-slate-100 hover:bg-white transition-color duration-300 border-0" onclick="toggleVisibility('show1')">
                <div class="flex ml-3 md:ml-0 md:justify-center">
                    <div class="flex md:flex-col py-5 items-center">
                        <p class="font-semibold text-sky-800 text-xl">Reduce Costs</p>
                    </div>
                </div>
            </button>

            <button class="bt2 md:w-1/4 bg-slate-100 hover:bg-white transition-color duration-300 border-0" onclick="toggleVisibility('show2')">
                <div class="flex ml-3 md:ml-0 md:justify-center">
                    <div class="flex md:flex-col py-5 items-center">
                        <p class="font-semibold text-sky-800 text-xl">Enhance Safety</p>
                    </div>
                </div>
            </button>

            <button class="bt3 md:w-1/4 bg-slate-100 hover:bg-white transition-color duration-300 border-0" onclick="toggleVisibility('show3')">
                <div class="flex ml-3 md:ml-0 md:justify-center">
                    <div class="flex md:flex-col py-5 items-center">
                        <p class="font-semibold text-sky-800 text-xl">Advance Sustainablity</p>
                    </div>
                </div>
            </button>

            <button class="bt4 md:w-1/4 bg-slate-100 hover:bg-white transition-color duration-300 border-0" onclick="toggleVisibility('show4')">
                <div class="flex ml-3 md:ml-0 md:justify-center">
                    <div class="flex md:flex-col py-5 items-center">
                        <p class="font-semibold text-sky-800 text-xl">Levarage AI Advantage</p>
                    </div>
                </div>
            </button>

            <button class="bt5 md:w-1/4 bg-slate-100 hover:bg-white transition-color duration-300 border-0" onclick="toggleVisibility('show5')">
                <div class="flex ml-3 md:ml-0 md:justify-center">
                    <div class="flex md:flex-col py-5 items-center">
                        <p class="font-semibold text-sky-800 text-xl ">Expand Value</p>
                    </div>
                </div>
        </div>
        </button>
        </div>

        <div class="">
            <div id="show1" class=" bg-white shadow-lg w-full">
                <div class="md:flex justify-center items-center gap-10 p-10">
                    <div class="md:w-1/2 text-sky-800">
                        <h2 class="text-3xl font-bold mb-5 font-lora lg:text-4xl">Reduce Costs</h2>

                        <p class="mb-5"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores recusandae
                            quos facere
                            molestiae magni laboriosam sequi explicabo quaerat consequatur, quas suscipit aut sint
                            mollitia, earum
                            ratione quam soluta? Unde, eligendi?</p>l
                        <p class="mb-3">lorem ipsum</p>
                        <ul class="list-disc pl-4 mb-10">
                            <li class="mb-2">Lorem ipsum dolor sit amet.</li>
                            <li class="mb-2">Lorem, ipsum dolor.</li>
                            <li class="mb-2">lorem ipsum</li>
                        </ul>

                        <div class="flex gap-5 mt-10 px-5">
                            <a href="" class="bg-sky-700 px-4 py-3 text-white font-semibold">Solution Overview</a>
                            <a href="" class="px-4 py-3 text-sky-800 font-semibold hover:bg-slate-200">Discove real
                                customer
                                impact</a>

                        </div>
                    </div>
                    <div class="md:w-1/2">
                        <img class="rounded-xl" src="./assets/images/reduce.jpg" alt="">
                    </div>
                </div>
            </div>
            <div id="show2" class=" bg-white shadow-lg w-full">
                <div class="md:flex justify-center items-center gap-10 p-10">
                    <div class="md:w-1/2 text-sky-800">
                        <h2 class="text-3xl font-bold mb-5 font-lora lg:text-4xl">Enhance Safety</h2>

                        <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus soluta,
                            veritatis,
                            delectus laudantium rerum, enim minus quis praesentium non unde incidunt illo vero harum
                            ipsum. </p>
                        <p class="mb-3">lorem ipsum</p>
                        <ul class="list-disc pl-4 mb-10">
                            <li class="mb-2">Lorem ipsum dolor sit amet.</li>
                            <li class="mb-2">Lorem ipsum dolor sit amet consectetur.</li>
                            <li class="mb-2">Lorem, ipsum dolor.</li>
                        </ul>

                        <div class="flex gap-5 mt-10 px-5">
                            <a href="" class="bg-sky-700 px-4 py-3 text-white font-semibold">Solution Overview</a>
                            <a href="" class="px-4 py-3 text-sky-800 font-semibold hover:bg-slate-200">Discove real
                                customer
                                impact</a>

                        </div>

                    </div>
                    <div class="md:w-1/2">
                        <img class="rounded-xl" src="./assets/images/safety.jpg" alt="">
                    </div>
                </div>
            </div>
            <div id="show3" class="  bg-white shadow-lg w-full">
                <div class="md:flex justify-center items-center gap-10 p-10">
                    <div class="md:w-1/2 text-sky-800">
                        <h2 class="text-3xl font-bold mb-5 font-lora lg:text-4xl">Advance Sustainability</h2>
                        <!--             <p class="font-bold mb-3">Lorem Ipsum dipsum Lorem ipsum dipsum Lorem Ipsum dipsum Lorem ipsum
                  dipsum Lorem Ipsum
                  dipsum Lorem ipsum dipsum Lorem Ipsum </p> -->
                        <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint accusantium, quos,
                            hic numquam
                            suscipit voluptas, exercitationem quas ea vero provident velit aliquam voluptatibus placeat
                            est et. </p>
                        <p class="mb-3">lorem dolor sit amet</p>
                        <ul class="list-disc pl-4 mb-10">
                            <li class="mb-2">lorem ipsum</li>
                            <li class="mb-2">Lorem ipsum, dolor sit amet consectetur adipisicing.</li>
                            <li class="mb-2">lorem ipsum dolor</li>
                        </ul>

                        <div class="flex gap-5 mt-10 px-5">
                            <a href="" class="bg-sky-700 px-4 py-3 text-white font-semibold">Solution Overview</a>
                            <a href="" class="px-4 py-3 text-sky-800 font-semibold hover:bg-slate-200">Discove real
                                customer
                                impact</a>

                        </div>

                    </div>
                    <div class="md:w-1/2">
                        <img class="rounded-xl" src="./assets/images/sustainability.jpg" alt="">
                    </div>
                </div>
            </div>
            <div id="show4" class="  bg-white shadow-lg w-full">
                <div class="md:flex justify-center items-center gap-10 p-10">
                    <div class="md:w-1/2 text-sky-800">
                        <h2 class="text-3xl font-bold mb-5 font-lora lg:text-4xl">Levarage AI Advantage</h2>
                        <!--             <p class="font-bold mb-3">Lorem Ipsum dipsum Lorem ipsum dipsum Lorem Ipsum dipsum Lorem ipsum
                  dipsum Lorem Ipsum
                  dipsum Lorem ipsum dipsum Lorem Ipsum </p> -->
                        <p class="mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident cupiditate
                            repellendus
                            dicta, pariatur distinctio voluptate consequatur rem aut. Quisquam libero soluta et, itaque
                            odit unde.</p>
                        <p class="mb-3">Lorem, ipsum dolor.</p>
                        <ul class="list-disc pl-4 mb-10">
                            <li class="mb-2">Lorem ipsum dolor sit amet.</li>
                            <li class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                            <li class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                        </ul>

                        <div class="flex gap-5 mt-10 px-5">
                            <a href="" class="bg-sky-700 px-4 py-3 text-white font-semibold">Solution Overview</a>
                            <a href="" class="px-4 py-3 text-sky-800 font-semibold hover:bg-slate-200">Discove real
                                customer
                                impact</a>

                        </div>

                    </div>
                    <div class="md:w-1/2">
                        <img class="rounded-xl" src="./assets/images/levarage.jpg" alt="">
                    </div>
                </div>
            </div>

            <div id="show5" class="  bg-white shadow-lg w-full">
                <div class="md:flex justify-center items-center gap-10 p-10">
                    <div class="md:w-1/2 text-sky-800">
                        <h2 class="text-3xl font-bold mb-5 font-lora lg:text-4xl">Expand Value</h2>

                        <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis eligendi odit
                            inventore
                            vero omnis ipsam? Tempore dolore hic, porro molestiae, quod aut perspiciatis minima
                            doloribus at beatae
                            ipsum. </p>
                        <p class="mb-3">lorem ipsum dolor</p>
                        <ul class="list-disc pl-4 mb-10">
                            <li class="mb-2">lorem ipsum</li>
                            <li class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                            <li class="mb-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</li>
                        </ul>

                        <div class="flex gap-5 mt-10 px-5">
                            <a href="" class="bg-sky-700 px-4 py-3 text-white font-semibold">Solution Overview</a>
                            <a href="" class="px-4 py-3 text-sky-800 font-semibold hover:bg-slate-200">Discove real
                                customer
                                impact</a>

                        </div>
                    </div>
                    <div class="md:w-1/2">
                        <img class="rounded-xl" src="./assets/images/expand.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900 mt-32">
        <div class="container px-6 py-10 mx-auto max-w-7xl">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-sky-800 capitalize dark:text-white text-center">
                Discover the Geotab
                advantage</h1>

            <p class="mt-4 text-sky-800 xl:mt-6 dark:text-gray-300 text-center md:text-xl">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum quam voluptatibus Nostrum quam
                voluptatibus
            </p>
            <p class="mt-4 text-sky-800 xl:mt-6 text-center text-xl">Here's what sets us apart</p>

            <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-16 md:grid-cols-2 xl:grid-cols-3">
                <div class="space-y-3">
                    <span class="inline-block p-3 text-blue-500 bg-blue-100 rounded-full dark:text-white dark:bg-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                        </svg>
                    </span>

                    <h1 class="text-2xl font-semibold text-sky-800 capitalize dark:text-white">Open Platform</h1>

                    <p class="text-sky-800 dark:text-gray-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla quod dignissimos vel
                        non corrupti doloribus voluptatum eveniet
                    </p>
                </div>

                <div class="space-y-3">
                    <span class="inline-block p-3 text-blue-500 bg-blue-100 rounded-full dark:text-white dark:bg-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                        </svg>
                    </span>

                    <h1 class="text-2xl font-semibold text-sky-800 capitalize dark:text-white">Scalability</h1>

                    <p class="text-sky-800 dark:text-gray-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla quod dignissimos vel
                        non corrupti doloribus voluptatum eveniet
                    </p>
                </div>

                <div class="space-y-3">
                    <span class="inline-block p-3 text-blue-500 bg-blue-100 rounded-full dark:text-white dark:bg-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </span>

                    <h1 class="text-2xl font-semibold text-sky-800 capitalize dark:text-white">Comprehensive Data
                        Collection</h1>

                    <p class="text-sky-800 dark:text-gray-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla quod dignissimos vel
                        non corrupti doloribus voluptatum eveniet
                    </p>
                </div>

                <div class="space-y-3">
                    <span class="inline-block p-3 text-blue-500 bg-blue-100 rounded-full dark:text-white dark:bg-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                        </svg>
                    </span>

                    <h1 class="text-2xl font-semibold text-sky-800 capitalize dark:text-white">Rich Details</h1>

                    <p class="text-sky-800 dark:text-gray-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla quod dignissimos vel
                        non corrupti doloribus voluptatum eveniet
                    </p>
                </div>

                <div class="space-y-3">
                    <span class="inline-block p-3 text-blue-500 bg-blue-100 rounded-full dark:text-white dark:bg-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                        </svg>
                    </span>

                    <h1 class="text-2xl font-semibold text-sky-800 capitalize dark:text-white">Data Intelligence</h1>

                    <p class="text-sky-800 dark:text-gray-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla quod dignissimos vel
                        non corrupti doloribus voluptatum eveniet
                    </p>
                </div>

                <div class="space-y-3">
                    <span class="inline-block p-3 text-blue-500 bg-blue-100 rounded-full dark:text-white dark:bg-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                    </span>

                    <h1 class="text-2xl font-semibold text-sky-800 capitalize dark:text-white">Focus On Sustainability
                    </h1>

                    <p class="text-sky-800 dark:text-gray-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla quod dignissimos vel
                        non corrupti doloribus voluptatum eveniet
                    </p>
                </div>
            </div>
        </div>
    </section>


    <div class="max-w-screen-xl mx-auto px-5 bg-white pt-8 my-32">
        <div class="flex flex-row text-left items-center">
            <h2 class="lg:text-5xl text-4xl font-semibold font-lora pt-4 text-sky-800">
                Commonly Asked Questions </h2>

        </div>
        <div class="grid divide-y divide-neutral-200  mx-auto mt-10">
            <div class="py-5 flex">
                <details class="group w-full">
                    <summary class="flex justify-between text-left font-medium cursor-pointer list-none text-xl text-sky-800">

                        <span> <b>1.</b> Lorem ipsum dolor sit amet consectetur adipisicing elit ?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="text-sky-800 mt-3 group-open:animate-fadeIn ">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. At ab, maiores dolorum molestias quia,
                        voluptate magnam, amet sed nostrum minima fugit numquam! Iste, aspernatur accusantium.
                </details>
            </div>
            <div class="py-5 flex">

                <details class="group w-full">
                    <summary class="flex justify-between font-medium cursor-pointer list-none text-xl text-sky-800">
                        <span>
                            <b>2.</b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore?
                        </span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="text-sky-800 mt-3 group-open:animate-fadeIn">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum nemo atque ut obcaecati,
                        explicabo sapiente excepturi, aperiam ea unde temporibus voluptatem natus cum maxime.</p>
                </details>
            </div>
            <div class="py-5 flex">

                <details class="group w-full">
                    <summary class="flex justify-between font-medium cursor-pointer list-none text-xl text-sky-800">
                        <span>
                            <b>3.</b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus?
                        </span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="text-sky-800 mt-3 group-open:animate-fadeIn">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore ad quasi, nam beatae
                        laudantium ratione sint atque.
                    </p>
                </details>
            </div>
            <div class="py-5 flex">

                <details class="group w-full">
                    <summary class="flex justify-between  font-medium cursor-pointer list-none text-xl text-sky-800">
                        <span> <b>4.</b> Lorem ipsum dolor sit amet consectetur?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="text-sky-800 mt-3 group-open:animate-fadeIn">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <ul class="list-disc text-sky-800 px-5 mt-3 ">
                        <li>lorem</li>
                        <li>ipsum</li>
                        <li>lorem</li>
                        <li>lorem</li>
                    </ul>
                </details>
            </div>
            <div class="py-5 flex">

                <details class="group w-full">
                    <summary class="flex justify-between  font-medium cursor-pointer list-none text-xl text-sky-800">
                        <span> <b>5.</b> Lorem ipsum dolor sit amet, consectetur adipisicing?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="text-sky-800 mt-3 group-open:animate-fadeIn">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor in eligendi quod cumque repellat
                        consectetur nostrum, velit corporis.
                    </p>
                </details>
            </div>

            <div class="py-5 flex">

                <details class="group w-full">
                    <summary class="flex justify-between  font-medium cursor-pointer list-none text-xl text-sky-800">
                        <span> <b>6.</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="text-sky-800 mt-3 group-open:animate-fadeIn">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia soluta a et recusandae tempore
                        error. Veniam, ratione!
                    </p>
                </details>
            </div>

            <div class="py-5 flex">

                <details class="group w-full">
                    <summary class="flex justify-between  font-medium cursor-pointer list-none text-xl text-sky-800">
                        <span> <b>7.</b> Lorem ipsum dolor sit, amet consectetur adipisicing elit?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="text-sky-800 mt-3 group-open:animate-fadeIn">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam maiores tempora nobis
                        quisquam doloribus deleniti assumenda soluta adipisci quidem.
                    </p>
                </details>
            </div>

            <div class="py-5 flex">

                <details class="group w-full">
                    <summary class="flex justify-between  font-medium cursor-pointer list-none text-xl text-sky-800">
                        <span> <b>8.</b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="text-sky-800 mt-3 group-open:animate-fadeIn">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit harum quidem impedit quos!
                        Architecto temporibus dignissimos voluptatem at dolorem.
                    </p>
                </details>
            </div>

            <div class="py-5 flex">

                <details class="group w-full">
                    <summary class="flex justify-between  font-medium cursor-pointer list-none text-xl text-sky-800">
                        <span> <b>9.</b> Lorem ipsum dolor sit amet consectetur adipisicing elit?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="text-sky-800 mt-3 group-open:animate-fadeIn">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam?
                    </p>
                </details>
            </div>

            <div class="py-5 flex">

                <details class="group w-full">
                    <summary class="flex justify-between  font-medium cursor-pointer list-none text-xl text-sky-800">
                        <span> <b>10.</b> Lorem ipsum dolor sit, amet consectetur adipisicing elit?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="text-sky-800 mt-3 group-open:animate-fadeIn">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed?
                    </p>
                </details>
            </div>

            <div class="py-5 flex">

                <details class="group w-full">
                    <summary class="flex justify-between  font-medium cursor-pointer list-none text-xl text-sky-800">
                        <span> <b>11.</b> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet?</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="text-sky-800 mt-3 group-open:animate-fadeIn">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem Lorem ipsum dolor sit amet
                        consectetur adipisicing elit.
                    </p>
                </details>
            </div>
        </div>
    </div>

    <footer class="bg-[#0B2032] dark:bg-gray-900">
        <div class="r py-8 mx-auto max-w-7xl px-3">
            <div>
                <h2 class="uppercase text-3xl text-left text-white  pb-10 px-3 ">Fleet</h2>
            </div>
            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 px-2">

                <div>
                    <div class="text-xl font-medium text-white ">
                        Products
                    </div>

                    <a href="#" class="block mt-5 text-base font-medium text-white duration-700 hover:bg-gray-700">
                        Installation
                    </a>
                    <a href="#" class="block mt-3 text-base font-medium text-white duration-700 hover:bg-gray-700">
                        Release Notes
                    </a>
                    <a href="#" class="block mt-3 text-base font-medium text-white duration-700 hover:bg-gray-700">
                        Upgrade Guide
                    </a>
                    <a href="#" class="block mt-3 text-base font-medium text-white duration-700 hover:bg-gray-700 ">
                        Using with Preprocessors
                    </a>
                    <a href="#" class="block mt-3 text-base font-medium text-white duration-700 hover:bg-gray-700 ">
                        Optimizing for Production
                    </a>
                    <div class="mt-5">
                        <div class="text-xl font-medium text-white">
                            Government and Smart City
                        </div>

                        <a href="#" class="block mt-5 text-base font-medium text-white duration-700 hover:bg-gray-700">
                            Installation
                        </a>
                        <a href="#" class="block mt-3 text-base font-medium text-white duration-700 hover:bg-gray-700">
                            Rele
                        </a>
                    </div>
                </div>

                <div>
                    <div class="text-xl font-medium text-white ">
                        Fleet Management solutions
                    </div>

                    <a href="#" class="block mt-5 text-sm font-medium text-white duration-700 hover:bg-gray-700">
                        Installation
                    </a>
                    <a href="#" class="block mt-3 text-sm font-medium text-white duration-700 hover:bg-gray-700">
                        Release Notes
                    </a>
                    <a href="#" class="block mt-3 text-sm font-medium text-white duration-700 hover:bg-gray-700">
                        Upgrade Guide
                    </a>
                    <a href="#" class="block mt-3 text-sm font-medium text-white duration-700 hover:bg-gray-700">
                        Using with Preprocessors
                    </a>
                    <a href="#" class="block mt-3 text-sm font-medium text-white duration-700 hover:bg-gray-700">
                        Optimizing for Production
                    </a>
                    <a href="#" class="block mt-3 text-sm font-medium text-white duration-700 hover:bg-gray-700">
                        Browser Support
                    </a>
                    <a href="#" class="block mt-3 text-sm font-medium text-white duration-700 hover:bg-gray-700">
                        IntelliSense
                    </a>

                    <a href="#" class="block mt-5 text-sm font-medium text-white duration-700 hover:bg-gray-700">
                        Installation
                    </a>
                    <a href="#" class="block mt-3 text-sm font-medium text-white duration-700 hover:bg-gray-700">
                        Release Notes
                    </a>
                    <a href="#" class="block mt-3 text-sm font-medium text-white duration-700 hover:bg-gray-700">
                        Upgrade Guide
                    </a>
                    <a href="#" class="block mt-3 text-sm font-medium text-white duration-700 hover:bg-gray-700">
                        Using with Preprocessors
                    </a>
                    <a href="#" class="block mt-3 text-sm font-medium text-white duration-700 hover:bg-gray-700">
                        Optimizing for Production
                    </a>
                    <a href="#" class="block mt-3 text-sm font-medium text-white duration-700 hover:bg-gray-700">
                        Browser Support
                    </a>
                    <a href="#" class="block mt-3 text-sm font-medium text-white duration-700 hover:bg-gray-700">
                        IntelliSense
                    </a>

                    <a href="#" class="block mt-5 text-sm font-medium text-white duration-700 hover:bg-gray-700">
                        Installation
                    </a>
                    <a href="#" class="block mt-3 text-sm font-medium text-white duration-700 hover:bg-gray-700">
                        Release Notes
                    </a>
                    <a href="#" class="block mt-3 text-sm font-medium text-white duration-700 hover:bg-gray-700">
                        Upgrade Guide
                    </a>
                </div>

                <div>
                    <div class="text-xl font-medium text-white ">
                        Resources
                    </div>

                    <a href="#" class="block mt-5 text-sm font-medium text-white duration-700 hover:bg-gray-700">
                        Installation
                    </a>
                    <a href="#" class="block mt-3 text-sm font-medium text-white duration-700 hover:bg-gray-700">
                        Release Notes
                    </a>
                    <a href="#" class="block mt-3 text-sm font-medium text-white duration-700 hover:bg-gray-700">
                        Upgrade Guide
                    </a>
                    <a href="#" class="block mt-3 text-sm font-medium text-white duration-700 hover:bg-gray-700">
                        Using with Preprocessors
                    </a>
                    <div class="mt-4">
                        <div class="text-xl font-medium text-white">
                            Support
                        </div>

                        <a href="#" class="block mt-5 text-sm font-medium text-white duration-700 hover:bg-gray-700">
                            Installation
                        </a>
                        <a href="#" class="block mt-3 text-sm font-medium text-white duration-700 hover:bg-gray-700">
                            Release Notes
                        </a>
                        <a href="#" class="block mt-3 text-sm font-medium text-white duration-700 hover:bg-gray-700">
                            Upgrade Guide
                        </a>
                        <a href="#" class="block mt-3 text-sm font-medium text-white duration-700 hover:bg-gray-700">
                            Using with Preprocessors
                        </a>
                        <a href="#" class="block mt-3 text-sm font-medium text-white duration-700 hover:bg-gray-700">
                            Using with Preprocessors
                        </a>
                    </div>
                </div>

                <div>
                    <div class="text-xl font-medium text-white ">
                        Our Company
                    </div>

                    <a href="#" class="block mt-5 text-sm font-medium text-white duration-700 hover:bg-gray-700">
                        Installation
                    </a>
                    <a href="#" class="block mt-3 text-sm font-medium text-white duration-700 hover:bg-gray-700">
                        Release Notes
                    </a>
                    <a href="#" class="block mt-3 text-sm font-medium text-white duration-700 hover:bg-gray-700">
                        Upgrade Guide
                    </a>
                    <a href="#" class="block mt-3 text-sm font-medium text-white duration-700 hover:bg-gray-700">
                        Using with Preprocessors
                    </a>
                    <a href="#" class="block mt-3 text-sm font-medium text-white duration-700 hover:bg-gray-700">
                        Optimizing for Production
                    </a>
                    <a href="#" class="block mt-3 text-sm font-medium text-white duration-700 hover:bg-gray-700">
                        Browser Support
                    </a>
                    <a href="#" class="block mt-3 text-sm font-medium text-white duration-700 hover:bg-gray-700">
                        IntelliSense
                    </a>
                    <a href="#" class="block mt-5 text-sm font-medium text-white duration-700 hover:bg-gray-700">
                        Installation
                    </a>
                    <a href="#" class="block mt-3 text-sm font-medium text-white duration-700 hover:bg-gray-700">
                        Release Notes
                    </a>
                    <a href="#" class="block mt-3 text-sm font-medium text-white duration-700 hover:bg-gray-700">
                        Upgrade Guide
                    </a>
                </div>
            </div>

            <hr class="my-10 border-gray-200 dark:border-gray-700">

            <div class="sm:flex sm:items-center sm:justify-between px-4 lg:px-8 ">
                <!-- <p class="text-xl text-white">© Copyright 2021. All Rights Reserved.</p> -->
                <ul class="flex flex-wrap">
                    <li class="text-white px-2 py-1 text-base lg:px-4 hover:bg-gray-700"> Privacy Policy |</li>
                    <li class="text-white px-2 py-1 text-base lg:px-4 hover:bg-gray-700"> Cookies |</li>
                    <li class="text-white px-2 py-1 text-base lg:px-4 hover:bg-gray-700"> Sitemap |</li>
                    <li class="text-white px-2 py-1 text-base lg:px-4 hover:bg-gray-700"> MySubscriptions |</li>
                    <li class="text-white px-2 py-1 text-base lg:px-4 hover:bg-gray-700"> MyAdmin |</li>
                    <li class="text-white px-2 py-1 text-base lg:px-4 hover:bg-gray-700"> Legal |</li>
                    <li class="text-white px-2 py-1 text-base lg:px-4 hover:bg-gray-700"> Modern slavery apartment |
                    </li>
                    <li class="text-white px-2 py-1 text-base lg:px-4 hover:bg-gray-700"> Terms of use </li>
                </ul>


                <div class="flex  mt-3 -mx-2 sm:flex-row">
                    <a href="#" class="mx-2 text-white hover:text-gray-500 dark:hover:text-gray-300" aria-label="Reddit">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z">
                            </path>
                        </svg>
                    </a>

                    <a href="#" class="mx-2 text-white hover:text-gray-500 dark:hover:text-gray-300" aria-label="Facebook">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
                            </path>
                        </svg>
                    </a>

                    <a href="#" class="mx-2 text-white hover:text-gray-500 dark:hover:text-gray-300" aria-label="Github">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
            <p class="text-xl text-white pt-5">© Copyright 2021. All Rights Reserved.</p>
        </div>


    </footer>


    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
</body>

</html>
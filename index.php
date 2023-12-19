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
                <button class="font-semibold bg-[#3887BE] px-5 py-2 text-white rounded-md">Check Our Price</button>
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

    <?php include('components/footer.php');?>



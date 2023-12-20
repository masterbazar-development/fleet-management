<?php include('../components/header.php');
include('../components/navbar.php');
?>

<body>

    <section class="product-telematics mt-10">
        <div class="max-w-7xl mx-auto flex py-32">
            <div class="xl:w-1/2 mx-[3vw] xl:mx-0">
                <h1 class="text-white text-4xl md:text-6xl font-semibold">
                    Vehicle telematics connected your way</h1>
                <p class="text-white text-xl md:text-2xl w-3/4 mt-3">GO device, OEM embedded or third party hardware, Geotab makes vehicle telematics secure and consistent.</p>
                <button class="bg-sky-600 px-8 py-3 rounded text-sky-100 hover:bg-sky-500 transition duration-300 mt-10">Schedule a Demo</button>
            </div>
            <div class="hidden xl:block w-1/2">
            </div>
        </div>
    </section>





    <section class="max-w-7xl mx-auto mt-16 xl:my-16 relative">
        <h2 class="text-2xl md:text-4xl lg:text-5xl font-semibold text-center mb-10">Connect your fleet with the power of choice</h2>
        <div class="flex justify-center md:flex-row flex-col">
            <button class="bt1 md:w-1/4 bg-slate-100 hover:bg-white transition-color duration-300 border-0" onclick="toggleVisibility('show1')">
                <div class="flex ml-3 md:ml-0 md:justify-center">
                    <div class="flex md:flex-col py-5 items-center">
                        <p class="font-semibold text-sky-800 text-xl">Basic</p>
                    </div>
                </div>
            </button>

            <button class="bt2 md:w-1/4 bg-slate-100 hover:bg-white transition-color duration-300 border-0" onclick="toggleVisibility('show2')">
                <div class="flex ml-3 md:ml-0 md:justify-center">
                    <div class="flex md:flex-col py-5 items-center">
                        <p class="font-semibold text-sky-800 text-xl">Standard</p>
                    </div>
                </div>
            </button>

            <button class="bt3 md:w-1/4 bg-slate-100 hover:bg-white transition-color duration-300 border-0" onclick="toggleVisibility('show3')">
                <div class="flex ml-3 md:ml-0 md:justify-center">
                    <div class="flex md:flex-col py-5 items-center">
                        <p class="font-semibold text-sky-800 text-xl">Preminum</p>
                    </div>
                </div>
            </button>

            <button class="bt4 md:w-1/4 bg-slate-100 hover:bg-white transition-color duration-300 border-0" onclick="toggleVisibility('show4')">
                <div class="flex ml-3 md:ml-0 md:justify-center">
                    <div class="flex md:flex-col py-5 items-center">
                        <p class="font-semibold text-sky-800 text-xl">Order now</p>
                    </div>
                </div>
            </button>


        </div>

        </div>

        <div class="">
            <div id="show1" class=" bg-white shadow-lg w-full">
                <div class="md:flex justify-center items-center gap-10 p-4 md:p-10">
                    <div class="md:w-1/2 text-sky-800">
                        <h2 class="text-3xl font-bold mb-5 font-lora lg:text-4xl">Basic</h2>

                        <p class="mb-5"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores recusandae
                            quos facere
                            molestiae magni laboriosam sequi explicabo quaerat consequatur, quas suscipit aut sint
                            mollitia, earum
                            ratione quam soluta? Unde, eligendi?</p>

                        <div class="flex gap-5 mt-10">

                            <a href="" class="px-4 py-3 text-sky-800 font-semibold hover:bg-slate-200">Brouse Basic Solution</a>

                        </div>
                    </div>
                    <div class="md:w-1/2">
                        <img class="rounded-xl" src="../assets/images/reduce.jpg" alt="">
                    </div>
                </div>
            </div>
            <div id="show2" class=" bg-white shadow-lg w-full">
                <div class="md:flex justify-center items-center gap-10 p-10">
                    <div class="md:w-1/2 text-sky-800">
                        <h2 class="text-3xl font-bold mb-5 font-lora lg:text-4xl">Standard</h2>

                        <p class="mb-5"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores recusandae
                            quos facere
                            molestiae magni laboriosam sequi explicabo quaerat consequatur, quas suscipit aut sint
                            mollitia, earum
                            ratione quam soluta? Unde, eligendi?</p>

                        <div class="flex gap-5 mt-10">

                            <a href="" class="px-4 py-3 text-sky-800 font-semibold hover:bg-slate-200">Brouse Standard Solution</a>

                        </div>
                    </div>
                    <div class="md:w-1/2">
                        <img class="rounded-xl" src="../assets/images/safety.jpg" alt="">
                    </div>
                </div>
            </div>
            <div id="show3" class="  bg-white shadow-lg w-full">
                <div class="md:flex justify-center items-center gap-10 p-10">
                    <div class="md:w-1/2 text-sky-800">
                        <h2 class="text-3xl font-bold mb-5 font-lora lg:text-4xl">Premium</h2>

                        <p class="mb-5"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores recusandae
                            quos facere
                            molestiae magni laboriosam sequi explicabo quaerat consequatur, quas suscipit aut sint
                            mollitia, earum
                            ratione quam soluta? Unde, eligendi?</p>

                        <div class="flex gap-5 mt-10">

                            <a href="" class="px-4 py-3 text-sky-800 font-semibold hover:bg-slate-200">Brouse premium Solution</a>

                        </div>
                    </div>
                    <div class="md:w-1/2">
                        <img class="rounded-xl" src="../assets/images/sustainability.jpg" alt="">
                    </div>
                </div>
            </div>
            <div id="show4" class="  bg-white shadow-lg w-full">
                <div class="md:flex justify-center items-center gap-10 p-10">
                    <div class="md:w-1/2 text-sky-800">
                        <h2 class="text-3xl font-bold mb-5 font-lora lg:text-4xl">Order Now</h2>

                        <p class="mb-5"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores recusandae
                            quos facere
                            molestiae magni laboriosam sequi explicabo quaerat consequatur, quas suscipit aut sint
                            mollitia, earum
                            ratione quam soluta? Unde, eligendi?</p>

                        <div class="flex gap-5 mt-10">

                            <a href="" class="px-4 py-3 text-sky-800 font-semibold hover:bg-slate-200">Brouse order now Solution</a>

                        </div>
                    </div>
                    <div class="md:w-1/2">
                        <img class="rounded-xl" src="../assets/images/levarage.jpg" alt="">
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
                        <img class="rounded-xl" src="../assets/images/expand.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class=" bg-slate-200">
        <div class="xl:flex max-w-7xl mx-auto py-24">
            <div class="p-10 xl:w-1/3">
                <h2 class="text-4xl font-semibold text-[#25477B]">Fleet and vehicle telematic resources</h2>
                <p class="text-black mt-4 text-lg">Learn how in-vehicle telematics solutions capture important vehicle and driver data to improve fleet operations. Discover new use cases, tips and tricks that will help you reduce costs and gain more control of your fleet.</p>
            </div>
            <div #swiperRef="" class="swiper mySwiper xl:w-2/3">
                <div class="swiper-wrapper p-10">
                    <div class="swiper-slide bg-white ">
                        <img src="../assets/images/swippic1.jpg" alt="">
                        <div class="p-5">
                            <p>Blog</p>
                            <h3 class="text-xl">Top 5 ways Fleet Is the new yeet </h3>
                            <p>Febuary 17, 2024</p>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white ">
                        <img src="../assets/images/swippic2.jpg" alt="">
                        <div class="p-5">
                            <p>Blog</p>
                            <h3 class="text-xl">Top 5 ways Fleet Is the new yeet </h3>
                            <p>Febuary 17, 2024</p>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white">
                        <img src="../assets/images/swippic3.jpg" alt="">
                        <div class="p-5">
                            <p>Blog</p>
                            <h3 class="text-xl">Top 5 ways Fleet Is the new yeet </h3>
                            <p>Febuary 17, 2024</p>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white">
                        <img src="../assets/images/swippic4.jpg" alt="">
                        <div class="p-5">
                            <p>Blog</p>
                            <h3 class="text-xl">Top 5 ways Fleet Is the new yeet </h3>
                            <p>Febuary 17, 2024</p>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white">
                        <img src="../assets/images/swippic1.jpg" alt="">
                        <div class="p-5">
                            <p>Blog</p>
                            <h3 class="text-xl">Top 5 ways Fleet Is the new yeet </h3>
                            <p>Febuary 17, 2024</p>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white">
                        <img src="../assets/images/swippic2.jpg" alt="">
                        <div class="p-5">
                            <p>Blog</p>
                            <h3 class="text-xl">Top 5 ways Fleet Is the new yeet </h3>
                            <p>Febuary 17, 2024</p>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white">
                        <img src="../assets/images/swippic3.jpg" alt="">
                        <div class="p-5">
                            <p>Blog</p>
                            <h3 class="text-xl">Top 5 ways Fleet Is the new yeet </h3>
                            <p>Febuary 17, 2024</p>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white">
                        <img src="../assets/images/swippic4.jpg" alt="">
                        <div class="p-5">
                            <p>Blog</p>
                            <h3 class="text-xl">Top 5 ways Fleet Is the new yeet </h3>
                            <p>Febuary 17, 2024</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
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

        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,

            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                type: "fraction",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>



    <?php include('../components/footer.php'); ?>
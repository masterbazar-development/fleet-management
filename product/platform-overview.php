<?php include('../components/header.php');
include('../components/navbar.php');
?>

<body>

    <section class="product-overview mt-10">
        <div class="max-w-7xl mx-auto flex py-32">
            <div class="xl:w-1/2 mx-[3vw] xl:mx-0">
                <h1 class="text-white text-4xl md:text-6xl font-semibold">The agnostic, AI-driven platform for connected fleet management</h1>
                <p class="text-white text-xl md:text-2xl w-3/4 mt-3">Transform real-time data from any source into actionable insights for measurable business value.</p>
                <button class="bg-sky-600 px-8 py-3 rounded text-sky-100 hover:bg-sky-500 transition duration-300 mt-10">Schedule a Demo</button>
            </div>
            <div class="hidden xl:block w-1/2">
            </div>
        </div>
    </section>


    <div class="flex flex-col items-center lg:flex-row max-w-7xl mx-auto  gap-8 xl:gap-16 py-16">
        <div class="xl:w-1/2 order-2 lg:order-1 mx-[3vw] xl:mx-0">
            <h2 class="xl:text-5xl text-3xl text-head font-semibold text-[#25477B]">
                Keep your fleet safe, productive and profitable with one integrated platform
            </h2>
            <p class=" md:text-lg xl:text-xl md:mt-5 text-start ">
                Your fleet includes multiple vehicle types, drivers, assets and data that you need to manage towards operational excellence. Geotab simplifies every step of your journey to total fleet digitisation. Securely consolidate data from multiple sources into one agnostic platform that delivers the insights you need to build a better business.
            </p>
        </div>
        <div class="xl:w-1/2 order-1 lg:order-2">
            <img src="../assets/images/overviewsec1.png" alt="" class="w-full">
        </div>
    </div>

    <section class="max-w-7xl mx-auto py-16">
        <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-10 mx-[3vw] xl:mx-0">
            <div>
                <i class="fa-solid fa-network-wired text-6xl mb-3"></i>

                <p class="text-xl font-semibold">Connect your assets your way</p>
                <p class="text-xl">Connect assets via the Geotab GO device, OEM connected vehicle, or any third party device, sensor, or data stream. </p>
            </div>
            <div>
                <i class="fa-solid fa-chart-simple text-6xl mb-3"></i>
                <p class="text-xl font-semibold">Transform data into insights</p>
                <p class="text-xl">Capture, normalise, and analyse all of your fleet and asset data and turn it into actionable insights.</p>
            </div>
            <div>
                <i class="fa-solid fa-kaaba text-6xl mb-3"></i>
                <p class="text-xl font-semibold">Empower resilient operations</p>
                <p class="text-xl">Plug into an open ecosystem of hardware, software and add-ons that you need to meet new opportunities and challenges.</p>
            </div>

        </div>
    </section>



    <section class="max-w-7xl mx-auto mt-16 xl:my-16 relative">
        <h2 class="text-2xl md:text-4xl lg:text-5xl font-semibold text-center mb-10">Securely capture fleet data from anywhere and gather insights to make smarter decisions</h2>
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
                <div class="md:flex justify-center items-center gap-10 p-3 md:p-10">
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
                <h2 class="text-4xl font-semibold text-[#25477B]">Fleet management resources</h2>
                <p class="text-black mt-4 text-lg">Geotab's latest fleet management blog posts offer tips and solutions for managing your fleet.</p>
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

    <script>
        var divs = ['show1', 'show2', 'show3', 'show4', 'show5', 'one1', 'one2', 'one3', 'one4', 'one5', 'one6', 'one7'];

        // Hide all elements initially
        for (var i = 0; i < divs.length; i++) {
            var element = document.getElementById(divs[i]);
            if (element) {
                element.style.display = "none";
            } else {
                console.error("Element with ID '" + divs[i] + "' not found.");
            }
        }

        // Show the first element initially
        document.getElementById(divs[0]).style.display = "block";

        function toggleVisibility(targetId) {
            for (var i = 0; i < divs.length; i++) {
                var div = document.getElementById(divs[i]);
                if (div) {
                    div.style.display = divs[i] === targetId ? 'block' : 'none';
                } else {
                    console.error("Element with ID '" + divs[i] + "' not found.");
                }
            }
        }
    </script>
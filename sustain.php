<?php include('components/header.php');
include('components/navbar.php');
?>

<!---------- banner starts from here xl above start ----------->
<div class="hidden xl:block relative overflow-hidden min-w-full lg:h-[70vh]">
        <video class="lg:min-w-full lg:min-h-full brightness-50" src="./assets/video/fleetbanner.mp4" loop muted autoplay>
        </video>
        <div class="absolute top-16 md:top-1/2 inset-x-0 z-10 mx-[10vw]">
            <h1 class=" text-white md:text-3xl lg:text-5xl font-semibold text-left mb-3">Insights to help fleets
            <strong class=" block font-extrabold text-sky-800"> reduce emissions</strong>
            </h1>
            <p class="text-white lg:text-lg text-left mb-5">Lower fuel costs, boost efficiency, track your equipment,
                and
                more. All on one platform</p>
            <div class="flex ">
                <button class="font-semibold bg-sky-400 px-5 py-2 text-white rounded-md">Schedule a demo</button>
            </div>
        </div>
    </div>
    <!---------- banner starts from here xl above end ----------->

    <!---------- banner starts from here lg smaller start ----------->
    <div class="block xl:hidden relative">
        <img class="w-full brightness-50" src="./assets/video/tabmobbanner.gif" alt="">
        <div class="absolute top-1/3 md:top-1/3 inset-x-0 z-10 mx-[10vw]">
            <h1 class=" text-white text-3xl md:text-5xl  font-semibold text-center mb-5">Insights to help fleets
            <strong class=" block font-extrabold text-sky-800"> reduce emissions</strong>
        </h1>
            <p class="text-white text-sm md:text-lg text-left mb-5">Lower fuel costs, boost efficiency, track your equipment,
                and
                more. All on one platform</p>
            <div class="flex ">
                <button class="font-semibold bg-sky-400 px-5 py-2 text-white rounded-md">Schedula a demo</button>
            </div>
        </div>
    </div>
    
    <!---------- banner ends from here ----------->
<!-- first section -->

<section class="max-w-7xl mx-auto mt-16 lg:mt-28 relative">
        <h2 class="text-2xl md:text-4xl lg:text-5xl font-semibold text-center mb-10">See better. Operate smarter.</h2>
        <div class="flex justify-center md:flex-row flex-col">
            <button class="bt6 md:w-1/4 bg-slate-100 hover:bg-white transition-color duration-300 border-0" onclick="toggleVisibility('one1')">
                <div class="flex ml-3 md:ml-0 md:justify-center">
                    <div class="flex md:flex-col py-5 items-center">
                        <p class="font-semibold text-sky-800 text-xl">Reduce Fuel Use</p>
                    </div>
                </div>
            </button>

            <button class="bt7 md:w-1/4 bg-slate-100 hover:bg-white transition-color duration-300 border-0" onclick="toggleVisibility('one2')">
                <div class="flex ml-3 md:ml-0 md:justify-center">
                    <div class="flex md:flex-col py-5 items-center">
                        <p class="font-semibold text-sky-800 text-xl">Lower Operating Costs</p>
                    </div>
                </div>
            </button>

            <button class="bt8 md:w-1/4 bg-slate-100 hover:bg-white transition-color duration-300 border-0" onclick="toggleVisibility('one3')">
                <div class="flex ml-3 md:ml-0 md:justify-center">
                    <div class="flex md:flex-col py-5 items-center">
                        <p class="font-semibold text-sky-800 text-xl">Manage Co2 Emissions</p>
                    </div>
                </div>
            </button>

            <button class="bt9 md:w-1/4 bg-slate-100 hover:bg-white transition-color duration-300 border-0" onclick="toggleVisibility('one4')">
                <div class="flex ml-3 md:ml-0 md:justify-center">
                    <div class="flex md:flex-col py-5 items-center">
                        <p class="font-semibold text-sky-800 text-xl">Fleet Electrification</p>
                    </div>
                </div>
            </button>

        </div>

        <div class="">
            <div id="one1" class=" bg-white shadow-lg w-full">
                <div class="md:flex justify-center items-center gap-10 p-10">
                    <div class="md:w-1/2 text-sky-800">
                        <h2 class="text-3xl font-bold mb-5 font-lora lg:text-4xl">Reduce fuel use</h2>

                        <p class="mb-5 text-gray-600"> Improve your fleet’s fuel efficiency</p>
                        <p class="mb-3">Increase profitability by setting fuel economy standards across your fleet.</p>
                        <div class="flex gap-5 mt-10 px-5">
                            <a href="" class="bg-sky-700 px-4 py-3 text-white font-semibold">Learn more</a>
                            
                        </div>
                    </div>
                    <div class="md:w-1/2">
                        <img class="rounded-xl" src="./assets/images/reduce.jpg" alt="">
                    </div>
                </div>
            </div>
            <div id="one2" class=" bg-white shadow-lg w-full">
                <div class="md:flex justify-center items-center gap-10 p-10">
                    <div class="md:w-1/2 text-sky-800">
                        <h2 class="text-3xl font-bold mb-5 font-lora lg:text-4xl">Manage Co2 Emissions</h2>

                        <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat perspiciatis ipsam asperiores possimus provident qui.</p>
                    

                        <div class="flex gap-5 mt-10 px-5">
                            <a href="" class="bg-sky-700 px-4 py-3 text-white font-semibold">learn more</a>
                            

                        </div>

                    </div>
                    <div class="md:w-1/2">
                        <img class="rounded-xl" src="./assets/images/safety.jpg" alt="">
                    </div>
                </div>
            </div>
            <div id="one3" class="  bg-white shadow-lg w-full">
                <div class="md:flex justify-center items-center gap-10 p-10">
                    <div class="md:w-1/2 text-sky-800">
                        <h2 class="text-3xl font-bold mb-5 font-lora lg:text-4xl">Fleet Electrification</h2>
                        
                        <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint accusantium, quos,
                            hic numquam
                            suscipit voluptas, exercitationem quas </p>
                        <p class="mb-3">lorem dolor sit amet exercitationem quas</p>
                        

                        <div class="flex gap-5 mt-10 px-5">
                            <a href="" class="bg-sky-700 px-4 py-3 text-white font-semibold">Learn more</a>
                            
                        </div>

                    </div>
                    <div class="md:w-1/2">
                        <img class="rounded-xl" src="./assets/images/sustainability.jpg" alt="">
                    </div>
                </div>
            </div>
            <div id="one4" class="  bg-white shadow-lg w-full">
                <div class="md:flex justify-center items-center gap-10 p-10">
                    <div class="md:w-1/2 text-sky-800">
                        <h2 class="text-3xl font-bold mb-5 font-lora lg:text-4xl">Levarage AI Advantage</h2>
                       
                        <p class="mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident cupiditate
                            repellendus
                            dicta, pariatur distinctio voluptate consequatur</p>
                        <p class="mb-3">Lorem, ipsum dolor dicta, pariatur distinctio voluptate consequatur.</p>

                        <div class="flex gap-5 mt-10 px-5">
                            <a href="" class="bg-sky-700 px-4 py-3 text-white font-semibold">Learn more</a>
                        </div>

                    </div>
                    <div class="md:w-1/2">
                        <img class="rounded-xl" src="./assets/images/levarage.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- third section -->
    <section class="max-w-7xl mx-auto mt-16 lg:mt-28 relative">
        <!-- <h2 class="text-2xl md:text-4xl lg:text-5xl font-semibold text-center mb-10">See better. Operate smarter.</h2> -->
        <div class="flex justify-center md:flex-row flex-col">
            <button class="bt10 md:w-1/4 bg-slate-100 hover:bg-white transition-color duration-300 border-0" onclick="toggleVisibility('one5')">
                <div class="flex ml-3 md:ml-0 md:justify-center">
                    <div class="flex md:flex-col py-5 items-center">
                        <p class="font-semibold text-sky-800 text-xl">Visualize sustainabilty efforts</p>
                    </div>
                </div>
            </button>

            <button class="bt11 md:w-1/4 bg-slate-100 hover:bg-white transition-color duration-300 border-0" onclick="toggleVisibility('one6')">
                <div class="flex ml-3 md:ml-0 md:justify-center">
                    <div class="flex md:flex-col py-5 items-center">
                        <p class="font-semibold text-sky-800 text-xl">Reduce Idling</p>
                    </div>
                </div>
            </button>

            <button class="bt12 md:w-1/4 bg-slate-100 hover:bg-white transition-color duration-300 border-0" onclick="toggleVisibility('one7')">
                <div class="flex ml-3 md:ml-0 md:justify-center">
                    <div class="flex md:flex-col py-5 items-center">
                        <p class="font-semibold text-sky-800 text-xl">Track Fuel costs</p>
                    </div>
                </div>
            </button>

            

        </div>

        <div class="">
            <div id="one5" class=" bg-white shadow-lg w-full">
                <div class="md:flex justify-center items-center gap-10 p-10">
                    <div class="md:w-1/2 text-sky-800">
                        <h2 class="text-3xl font-bold mb-5 font-lora lg:text-4xl">Visualize sustainabilty efforts</h2>

                        <p class="mb-5 text-gray-600"> Improve your fleet’s fuel efficiency</p>
                        <p class="mb-3">Increase profitability by setting fuel economy standards across your fleet.</p>
                        <div class="flex gap-5 mt-10 px-5">
                            <a href="" class="bg-sky-700 px-4 py-3 text-white font-semibold">Learn more</a>
                            
                        </div>
                    </div>
                    <div class="md:w-1/2">
                        <img class="rounded-xl" src="./assets/images/reduce.jpg" alt="">
                    </div>
                </div>
            </div>
            <div id="one6" class=" bg-white shadow-lg w-full">
                <div class="md:flex justify-center items-center gap-10 p-10">
                    <div class="md:w-1/2 text-sky-800">
                        <h2 class="text-3xl font-bold mb-5 font-lora lg:text-4xl">Reduce Idling</h2>

                        <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat perspiciatis ipsam asperiores possimus provident qui.</p>
                    

                        <div class="flex gap-5 mt-10 px-5">
                            <a href="" class="bg-sky-700 px-4 py-3 text-white font-semibold">learn more</a>
                            

                        </div>

                    </div>
                    <div class="md:w-1/2">
                        <img class="rounded-xl" src="./assets/images/safety.jpg" alt="">
                    </div>
                </div>
            </div>
            <div id="one7" class="  bg-white shadow-lg w-full">
                <div class="md:flex justify-center items-center gap-10 p-10">
                    <div class="md:w-1/2 text-sky-800">
                        <h2 class="text-3xl font-bold mb-5 font-lora lg:text-4xl">Track Fuel costs</h2>
                        
                        <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint accusantium, quos,
                            hic numquam
                            suscipit voluptas, exercitationem quas </p>
                        <p class="mb-3">lorem dolor sit amet exercitationem quas</p>
                        

                        <div class="flex gap-5 mt-10 px-5">
                            <a href="" class="bg-sky-700 px-4 py-3 text-white font-semibold">Learn more</a>
                            
                        </div>

                    </div>
                    <div class="md:w-1/2">
                        <img class="rounded-xl" src="./assets/images/sustainability.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- content section -->
    <div class="container  bg-slate-100 pt-14 flex flex-col px-6 py-4 mx-auto space-y-6 md:h-128 md:py-16 md:flex-row md:items-center md:space-x-6">
    <div class="flex flex-col items-center w-full md:flex-row md:w-1/2">

        <div class="max-w-xl md:mx-12 md:order-2">
            <h1 class="text-3xl font-bold tracking-wide text-sky-800 dark:text-white md:text-4xl pb-4">Adopting Electric Vehicles and Sustainable Fleet Strategies workbook</h1>
        <p class="mt-4 text-sky-800 dark:text-gray-300 text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut quia asperiores alias vero magnam recusandae adipisci ad vitae laudantium quod rem voluptatem eos accusantium cumque.</p>
        <div class="mt-6">
            <a href="#" class="flex items-center -mx-1 text-base text-sky-800  transition-colors duration-300 transform dark:text-blue-400 hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                <span class="mx-1 underline text-lg">learn more</span>
                <svg class="w-4 h-4 mx-1 rtl:-scale-x-100" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
            
        </div>
    </div>

    <div class="flex flex-col  justify-center w-full h-96 md:w-1/2 md:items-start">
        <img class="object-cover w-full h-full max-w-2xl rounded-md" src="./assets/images/tracking0.jpg" alt="">
    </div>
</div>
v
<!-- video section -->
<div class="container  bg-slate-100 pt-14 flex flex-col px-6 py-4 mx-auto space-y-6 md:h-128 md:py-16 md:flex-row md:items-center md:space-x-6">
    <div class="flex flex-col items-center w-full md:flex-row md:w-1/2">

        <div class="max-w-xl md:mx-12 md:order-2">
            <h1 class="text-3xl font-bold tracking-wide text-sky-800 dark:text-white md:text-4xl pb-4">Work with a partner as committed to climate action as you are</h1>
        <p class="mt-4 text-sky-800 dark:text-gray-300 text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut quia asperiores alias vero magnam recusandae adipisci ad vitae laudantium quod rem voluptatem eos accusantium cumque.</p>
        <div class="mt-6">
            <a href="#" class="flex items-center -mx-1 text-base text-sky-800  transition-colors duration-300 transform dark:text-blue-400 hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                <span class="mx-1 underline text-lg">learn more about sustainability </span>
                <svg class="w-4 h-4 mx-1 rtl:-scale-x-100" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
            
        </div>
    </div>

    <div class="flex flex-col  justify-center w-full h-96 md:w-1/2 md:items-start">
        <img class="object-cover w-full h-full max-w-2xl rounded-md" src="./assets/images/tracking0.jpg" alt="">
    </div>
</div>
<!-- swiper -->

<section class=" bg-slate-100">
        <div class="xl:flex max-w-7xl mx-auto py-24">
            <div class="p-10 xl:w-1/3">
                <h2 class="text-4xl font-semibold text-[#25477B]">Fleet productivity resources</h2>
                <p class="text-black mt-4 text-lg"> Maximize fleet productivity by measuring employee work output. Learn how to calculate your fleet productivity score, improve efficiency and save your business money with telematics.</p>
            </div>
            <div #swiperRef="" class="swiper mySwiper xl:w-2/3">
                <div class="swiper-wrapper p-10">
                    <div class="swiper-slide bg-white ">
                        <img src="./assets/images/swippic1.jpg" alt="">
                        <div class="p-5">
                            <p>Blog</p>
                            <h3 class="text-xl">Top 5 ways Fleet Is the new yeet </h3>
                            <p>Febuary 17, 2024</p>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white ">
                        <img src="./assets/images/swippic2.jpg" alt="">
                        <div class="p-5">
                            <p>Blog</p>
                            <h3 class="text-xl">Top 5 ways Fleet Is the new yeet </h3>
                            <p>Febuary 17, 2024</p>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white">
                        <img src="./assets/images/swippic3.jpg" alt="">
                        <div class="p-5">
                            <p>Blog</p>
                            <h3 class="text-xl">Top 5 ways Fleet Is the new yeet </h3>
                            <p>Febuary 17, 2024</p>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white">
                        <img src="./assets/images/swippic4.jpg" alt="">
                        <div class="p-5">
                            <p>Blog</p>
                            <h3 class="text-xl">Top 5 ways Fleet Is the new yeet </h3>
                            <p>Febuary 17, 2024</p>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white">
                        <img src="./assets/images/swippic1.jpg" alt="">
                        <div class="p-5">
                            <p>Blog</p>
                            <h3 class="text-xl">Top 5 ways Fleet Is the new yeet </h3>
                            <p>Febuary 17, 2024</p>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white">
                        <img src="./assets/images/swippic2.jpg" alt="">
                        <div class="p-5">
                            <p>Blog</p>
                            <h3 class="text-xl">Top 5 ways Fleet Is the new yeet </h3>
                            <p>Febuary 17, 2024</p>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white">
                        <img src="./assets/images/swippic3.jpg" alt="">
                        <div class="p-5">
                            <p>Blog</p>
                            <h3 class="text-xl">Top 5 ways Fleet Is the new yeet </h3>
                            <p>Febuary 17, 2024</p>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white">
                        <img src="./assets/images/swippic4.jpg" alt="">
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

    <!-- faqs -->
    <div class="max-w-screen-xl mx-auto px-5 bg-white pb-24 pt-8">
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
               Lorem ipsum dolor sit amet consectetur, adipisicing elit. At ab, maiores dolorum molestias quia, voluptate magnam, amet sed nostrum minima fugit numquam! Iste, aspernatur accusantium.
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
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum nemo atque ut obcaecati, explicabo sapiente excepturi, aperiam ea unde temporibus voluptatem natus cum maxime.</p>
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
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore ad quasi, nam beatae laudantium ratione sint atque. 
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
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor in eligendi quod cumque repellat consectetur nostrum, velit corporis.
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
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia soluta a et recusandae tempore error. Veniam, ratione!
              </p>
          </details>
      </div>
      </div>
      </div>
<!-- newsletter -->
<div class="w-full  pt-14">

  <div class=" flex flex-col gap-y-8 md:gap-y-10 mx-auto px-5 py-8 sm:py-12 md:py-16 lg:py-20 xl:py-24 text-gray-200"  
  style="background-image: url('./assets/images/newsletter1.jpg');">

    <div class="w-full text-center">

      <h2 class="mb-4 text-white text-3xl md:text-5xl font-extrabold">Take the next step toward a more sustainable <br> fleet </h2>

      <p class="text-lg">We are looking for innovators like you. Join a company working to make the world a <br>better place.</div>

      </p>

    <div class="w-full">

      <div class="flex flex-col justify-center sm:flex-row gap-3 w-full">

          <button
          style="box-shadow: inset 0 2px 4px 0 rgb(2 6 23 / 0.3), inset 0 -2px 4px 0 rgb(203 213 225);"
          class=" text-sky-800 inline-flex cursor-pointer items-center gap-1 rounded border border-slate-300 bg-gradient-to-b from-slate-50 to-slate-200 px-4 py-2 font-semibold hover:opacity-90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-slate-300 focus-visible:ring-offset-2 active:opacity-100"
        >
          Schedule a demo
        </button>

        <button
          style="box-shadow: inset 0 2px 4px 0 rgb(2 6 23 / 0.3), inset 0 -2px 4px 0 rgb(203 213 225);"
          class=" text-sky-800 inline-flex cursor-pointer items-center gap-1 rounded border border-slate-300 bg-gradient-to-b from-slate-50 to-slate-200 px-4 py-2 font-semibold hover:opacity-90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-slate-300 focus-visible:ring-offset-2 active:opacity-100"
        >
          visit our blogs
        </button>
        
      </div>

      <!-- <div class="mt-3 text-sm text-center">We care about your data in our <u class="cursor-pointer transition-all duration-300 ease-in-out hover:text-gray-50">privacy policy</u>.</div> -->

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

<?php include('components/footer.php'); ?>
</body>
</html>





    
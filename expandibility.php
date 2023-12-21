<?php include('components/header.php');
include('components/navbar.php');
?>
   <!-- banner starts -->
   <section
  class="relative bg-cover bg-center bg-no-repeat mb-15"
  style="background-image: url('./assets/images/ban2.jpg');">
  <div
    class="absolute inset-0 sm:bg-transparent sm:from-white/95 sm:to-white/25 ltr:sm:bg-gradient-to-r rtl:sm:bg-gradient-to-l"></div>

  <div
    class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-[80vh] lg:items-center lg:px-8">
    <div class="max-w-xl text-left ltr:sm:text-left rtl:sm:text-right text-sky-800">
      <h1 class="text-3xl font-extrabold sm:text-5xl text-gray-800">
      Expandability
      </h1>

      <p class="mt-4 max-w-xl sm:text-xl/relaxed text-black text-lg pb-8">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo tenetur fuga ducimus
        numquam ea!
      </p>
      <div class="mt-8">
      <a href="#" class="mt-10 w-full rounded bg-white px-12 py-3 text-lg font-medium text-sky-800 shadow  focus:outline-none focus:ring  sm:w-auto">
            Schedule A demo
          </a>
</div>
    </div>
  </div>
</section>
<!-- banner ends here  -->
<!-- first section -->
<div class="container pt-14 flex flex-col px-6 py-4 mx-auto space-y-6 md:h-128 md:py-16 md:flex-row md:items-center md:space-x-6">
    <div class="flex flex-col items-center w-full md:flex-row md:w-1/2">

        <div class="max-w-xl md:mx-12 md:order-2">
            <h1 class="text-3xl font-bold tracking-wide text-sky-800 dark:text-white md:text-4xl pb-4">Software integration</h1>
        <p class="mt-4 text-sky-800 dark:text-gray-300 text-lg">Extend platform functionality with Geotab’s Software Development Kit (SDK). Simplify or automate processes to add value, increase efficiency, or add a unique functionality to better support your business. Create phone and tablet apps, integrate third-party software, create MyGeotab Add-Ins, complex custom reports and more with Geotab’s SDK.</p>
        <div class="mt-6">
            <a href="#" class="flex items-center -mx-1 text-base text-sky-800  transition-colors duration-300 transform dark:text-blue-400 hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                <span class="mx-1 underline text-lg">Learn more about software integration</span>
                <svg class="w-4 h-4 mx-1 rtl:-scale-x-100" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
            
        </div>
    </div>

    <div class="flex flex-col  justify-center w-full h-96 md:w-1/2 md:items-start">
        <img class="object-cover w-full h-full max-w-2xl rounded-md" src="./assets/images/software.jpg" alt="">
    </div>
</div>
<!-- second section -->
<div class="container pt-14 flex flex-col px-6 py-4 mx-auto space-y-6 md:h-128 md:py-16 md:flex-row md:items-center md:space-x-6">
    <div class="flex flex-col items-center w-full md:flex-row md:w-1/2">

        <div class="max-w-xl md:mx-12 md:order-2">
            <img class="object-cover w-full h-full max-w-2xl rounded-md" src="./assets/images/hardware.jpg" alt="">
        </div>
    </div>

    <div class="flex flex-col  justify-center w-full h-96 md:w-1/2 md:items-start">
        <h1 class="text-3xl font-bold tracking-wide text-sky-800 dark:text-white md:text-4xl pb-4">Hardware integration</h1>
        <p class="mt-4 text-sky-800 dark:text-gray-300 text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut quia asperiores alias vero magnam recusandae adipisci ad vitae laudantium quod rem voluptatem eos accusantium cumque.</p>
        <div class="mt-6">
            <a href="#" class="flex items-center -mx-1 text-base text-sky-800  transition-colors duration-300 transform dark:text-blue-400 hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                <span class="mx-1 underline text-lg">Learn more about hardware integration</span>
                <svg class="w-4 h-4 mx-1 rtl:-scale-x-100" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
    </div>
</div>
<!-- swiper -->
<section class=" bg-slate-200">
        <div class="xl:flex max-w-7xl mx-auto py-24">
            <div class="p-10 xl:w-1/3">
                <h2 class="text-4xl font-semibold text-[#25477B]">Fleet and vehicle telematic resources</h2>
                <p class="text-black mt-4 text-lg">Learn how in-vehicle telematics solutions capture important vehicle and driver data to improve fleet operations. Discover new use cases, tips and tricks that will help you reduce costs and gain more control of your fleet.</p>
            </div>
            <div #swiperRef="" class="swiper mySwiper xl:w-2/3">
                <div class="swiper-wrapper p-10">
                    <div class="swiper-slide bg-white ">
                        <img src="/assets/images/swippic1.jpg" alt="">
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

      <h2 class="mb-4 text-white text-3xl md:text-5xl font-extrabold">Ready to expand your business?</h2>

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
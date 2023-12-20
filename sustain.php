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
            <button class="bt1 md:w-1/4 bg-slate-100 hover:bg-white transition-color duration-300 border-0" onclick="toggleVisibility('one1')">
                <div class="flex ml-3 md:ml-0 md:justify-center">
                    <div class="flex md:flex-col py-5 items-center">
                        <p class="font-semibold text-sky-800 text-xl">Reduce Fuel Use</p>
                    </div>
                </div>
            </button>

            <button class="bt2 md:w-1/4 bg-slate-100 hover:bg-white transition-color duration-300 border-0" onclick="toggleVisibility('one2')">
                <div class="flex ml-3 md:ml-0 md:justify-center">
                    <div class="flex md:flex-col py-5 items-center">
                        <p class="font-semibold text-sky-800 text-xl">Lower Operating Costs</p>
                    </div>
                </div>
            </button>

            <button class="bt3 md:w-1/4 bg-slate-100 hover:bg-white transition-color duration-300 border-0" onclick="toggleVisibility('one3')">
                <div class="flex ml-3 md:ml-0 md:justify-center">
                    <div class="flex md:flex-col py-5 items-center">
                        <p class="font-semibold text-sky-800 text-xl">Manage Co2 Emissions</p>
                    </div>
                </div>
            </button>

            <button class="bt4 md:w-1/4 bg-slate-100 hover:bg-white transition-color duration-300 border-0" onclick="toggleVisibility('one4')">
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
                        <h2 class="text-3xl font-bold mb-5 font-lora lg:text-4xl">Reduce Fuel Use</h2>

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
                            <a href="" class="bg-sky-700 px-4 py-3 text-white font-semibold">Lower Operating Costs</a>
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
            <div id="one2" class=" bg-white shadow-lg w-full">
                <div class="md:flex justify-center items-center gap-10 p-10">
                    <div class="md:w-1/2 text-sky-800">
                        <h2 class="text-3xl font-bold mb-5 font-lora lg:text-4xl">Manage Co2 Emissions</h2>

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
            <div id="one3" class="  bg-white shadow-lg w-full">
                <div class="md:flex justify-center items-center gap-10 p-10">
                    <div class="md:w-1/2 text-sky-800">
                        <h2 class="text-3xl font-bold mb-5 font-lora lg:text-4xl">Fleet Electrification</h2>
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
            <div id="one4" class="  bg-white shadow-lg w-full">
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
        </div>
    </section>

    <script>
//-------------- script for sustain First section---------------

var divs = ['one1', 'one2', 'one3', 'one4',];

// Hide all elements initially
for (var i = 0; i < divs.length; i++) {
  document.getElementById(divs[i]).style.display = "none";
}

// Show the first element initially
document.getElementById(divs[0]).style.display = "block";

function toggleVisibility(targetId) {
  for (var i = 0; i < divs.length; i++) {
    var div = document.getElementById(divs[i]);
    if (divs[i] === targetId) {
      div.style.display = 'block';
    } else {
      div.style.display = 'none';
    }
  }
}
</script>

 <script src="assets/js/main.js"></script>
</body>
<html>
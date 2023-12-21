<?php include('../components/header.php');
include('../components/navbar.php');
?>
<style>
    .search {
        width: 100%;
        position: relative;
        display: flex;
    }

    .searchTerm {
        width: 100%;
        height: 40px;
        border: 3px solid #0369A1;
        border-right: none;
        padding: 5px;
        border-radius: 5px 0 0 5px;
        outline: none;
        color: #0369A1;
    }

    .searchTerm:focus {
        color: #0369A1;
    }

    .searchButton {
        width: 50px;
        height: 40px;
        border: 1px solid #0369A1;
        background: #0369A1;
        text-align: center;
        color: #fff;
        border-radius: 0 5px 5px 0;
        cursor: pointer;
        font-size: 20px;
    }

    /*Resize the wrap to see the search bar change!*/
</style>

<body>

    <section class="support-banner mt-10">
        <div class="max-w-7xl mx-auto flex py-32">
            <div class=" mx-[3vw] xl:mx-0">
                <h1 class="text-white text-4xl md:text-6xl font-semibold">
                    Geotab Support Center</h1>
                <div class="wrap mt-5">
                    <div class="search">
                        <input type="text" class="searchTerm" placeholder="What are you looking for?">
                        <button type="submit" class="searchButton">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
                <div class="grid grid-cols md:grid-cols-2 xl:grid-cols-4 mt-7 gap-5">
                    <div class="flex h-32 hover:shadow-xl transition-shadow">
                        <div class="w-1/3 bg-slate-200 flex items-center justify-center  rounded-l-xl">
                            <i class="fa-regular fa-paste text-7xl mx-3"></i>
                        </div>
                        <div class="bg-white h-full rounded-r-xl">
                            <p class="mt-6 ml-4">Brouse Documents</p>
                            <p class=" ml-4">Explore Fleet Documents and Guides</p>
                        </div>
                    </div>
                    <div class="flex h-32 hover:shadow-xl transition-shadow">
                        <div class="w-1/3 bg-slate-200 flex items-center justify-center  rounded-l-xl">
                            <i class="fa-solid fa-people-group text-7xl mx-3"></i>
                        </div>
                        <div class="bg-white h-full rounded-r-xl">
                            <p class="mt-6 ml-4">Ask The Community</p>
                            <p class=" ml-4">Explore Fleet Documents and Guides</p>
                        </div>
                    </div>
                    <div class="flex h-32 hover:shadow-xl transition-shadow">
                        <div class="w-1/3 bg-slate-200 flex items-center justify-center  rounded-l-xl">
                            <i class="fa-solid fa-gear text-7xl mx-3"></i>
                        </div>
                        <div class="bg-white h-full rounded-r-xl">
                            <p class="mt-6 ml-4">Install Hub</p>
                            <p class=" ml-4">Explore Fleet Documents and Guides</p>
                        </div>
                    </div>
                    <div class="flex h-32 hover:shadow-xl transition-shadow">
                        <div class="w-1/3 bg-slate-200 flex items-center justify-center  rounded-l-xl">
                            <i class="fa-solid fa-headphones text-7xl mx-3"></i>
                        </div>
                        <div class="bg-white h-full rounded-r-xl">
                            <p class="mt-6 ml-4">Contact Us</p>
                            <p class=" ml-4">Explore Fleet Documents and Guides</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="max-w-7xl mx-auto py-16 ">
        <h2 class="text-4xl font-semibold mb-7 text-[#25477B] mx-[3vw] xl:mx-0">Featured content</h2>
        <div class="grid grid-cols md:grid-cols-2 xl:grid-cols-3 gap-10 mx-[3vw] xl:mx-0">

            <div class="drop-shadow-xl bg-white p-8 rounded-xl">
                <h3 class="text-2xl font-semibold">Documents and articles</h3>
                <div class="mt-5 space-y-3">
                    <p class="hover:bg-gray-200 hover:underline">How to add a user in MyGeotab</p>
                    <p class="hover:bg-gray-200 hover:underline">How to add a new vehicle in MyGeotab</p>
                    <p class="hover:bg-gray-200 hover:underline">How To troubleshoot a GO device not communicating (while you are at the vehicle)</p>
                    <p class="hover:bg-gray-200 hover:underline">Geotab Product Guide</p>
                    <p class="hover:bg-gray-200 hover:underline">Drive App: Driver's Guide to the Drive App</p>
                </div>
            </div>
            <div class="drop-shadow-xl bg-white p-8 rounded-xl">
                <h3 class="text-2xl font-semibold">Top discussions</h3>
                <div class="mt-5 space-y-3">
                    <p class="hover:bg-gray-200 hover:underline">Locating RP-1226 Connector in Heavy Duty Vehicles</p>
                    <p class="hover:bg-gray-200 hover:underline">How to solve "nodename nor servname provided, or not known" error for example data feed code using dotnet run?</p>
                    <p class="hover:bg-gray-200 hover:underline">Authentication call returns status of "Waiting ForActivation"</p>
                    <p class="hover:bg-gray-200 hover:underline">Red light keeps flashing on GO Device, but blue light is on. Why?</p>
                    <p class="hover:bg-gray-200 hover:underline">The beeps from Driver feedback</p>
                </div>
            </div>
            <div class="drop-shadow-xl bg-white p-8 rounded-xl">
                <h3 class="text-2xl font-semibold">Product Updates</h3>
                <div class="mt-5 space-y-3">
                    <p class="hover:bg-gray-200 hover:underline">August Release Notes</p>
                    <p class="hover:bg-gray-200 hover:underline">July What's New Blog</p>
                    <p class="hover:bg-gray-200 hover:underline">June Part II What's New Blog</p>
                    <p class="hover:bg-gray-200 hover:underline">June What's New Blog</p>
                    <p class="hover:bg-gray-200 hover:underline">View past updates</p>
                    <p class="hover:bg-gray-200 hover:underline">Release Notes</p>
                </div>
            </div>

        </div>
    </section>

    <section class="max-w-7xl mx-auto py-16">
        <h2 class="text-4xl font-semibold mb-7 text-[#25477B] mx-[3vw] xl:mx-0">Explore by solution</h2>
        <div class="grid grid-cols md:grid-cols-2 xl:grid-cols-4 gap-5 mx-[3vw] xl:mx-0">
            <div class="flex gap-5 border border-slate-400 rounded-xl p-5  hover:shadow-xl transition-shadow">
                <i class="fa-solid fa-traffic-light text-4xl"></i>
                <div>
                    <h3 class="text-2xl font-semibold">Compilance</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit, animi itaque!</p>
                </div>
            </div>
            <div class="flex gap-5 border border-slate-400 rounded-xl p-5  hover:shadow-xl transition-shadow">
                <div class="flex">
                    <i class="fa-solid fa-car text-4xl"></i>
                    <i class="fa-solid fa-chart-pie"></i>
                </div>
                <div>
                    <h3 class="text-2xl font-semibold">Fleet Otimization</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit, animi itaque!</p>
                </div>
            </div>
            <div class="flex gap-5 border border-slate-400 rounded-xl p-5  hover:shadow-xl transition-shadow">
                <i class="fa-solid fa-plug-circle-bolt text-4xl"></i>

                <div>
                    <h3 class="text-2xl font-semibold">Sustainability</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit, animi itaque!</p>
                </div>
            </div>
            <div class="flex gap-5 border border-slate-400 rounded-xl p-5  hover:shadow-xl transition-shadow">
                <i class="fa-solid fa-maximize text-4xl"></i>
                <div>
                    <h3 class="text-2xl font-semibold">Expandibility</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit, animi itaque!</p>
                </div>
            </div>
        </div>
    </section>


    <section class="max-w-7xl mx-auto py-16">
        <h2 class="text-4xl font-semibold mb-7 text-[#25477B] mx-[3vw] xl:mx-0">Explore by type</h2>
        <div class="grid grid-cols md:grid-cols-2 xl:grid-cols-4 gap-5 mx-[3vw] xl:mx-0">
            <div class="flex gap-5 border border-slate-400 rounded-xl p-5  hover:shadow-xl transition-shadow">
                <i class="fa-solid fa-traffic-light text-4xl"></i>
                <div>
                    <h3 class="text-2xl font-semibold">Product guide</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit, animi itaque!</p>
                </div>
            </div>
            <div class="flex gap-5 border border-slate-400 rounded-xl p-5 hover:shadow-xl transition-shadow">
            <i class="fa-solid fa-wrench text-4xl"></i>
                <div>
                    <h3 class="text-2xl font-semibold">Instalation Document</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit, animi itaque!</p>
                </div>
            </div>
            <div class="flex gap-5 border border-slate-400 rounded-xl p-5 hover:shadow-xl transition-shadow">
                <i class="fa-solid fa-headphones text-4xl"></i>
                <div>
                    <h3 class="text-2xl font-semibold">Suppot Documents</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit, animi itaque!</p>
                </div>
            </div>
            <div class="flex gap-5 border border-slate-400 rounded-xl p-5 hover:shadow-xl transition-shadow">
                <i class="fa-solid fa-video text-4xl"></i>
                <div>
                    <h3 class="text-2xl font-semibold">Video</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit, animi itaque!</p>
                </div>
            </div>
        </div>
    </section>





    <?php include('../components/footer.php'); ?>
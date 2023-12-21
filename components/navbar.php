<?php include('url.php'); ?>
<!--=============== HEADER ===============-->
<header class="header">
    <nav class="nav container max-w-7xl">
        <div class="nav__data">
            <a href="<?php echo $mainUrl; ?>" class="nav__logo text-3xl">
                Fleet
            </a>

            <div class="nav__toggle right-[30px] xl:right-0" id="nav-toggle">
                <i class="ri-menu-line nav__toggle-menu"></i>
                <i class="ri-close-line nav__toggle-close"></i>
            </div>
        </div>

        <!--=============== NAV MENU ===============-->
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="dropdown__item">
                    <div class="nav__link dropdown__button">
                        Products <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <div class="dropdown__group">
                                <span class="dropdown__title text-gray-500 text-lg">Products</span>

                                <ul class="dropdown__list">
                                    <li class="flex-col">
                                        <a href="<?php echo $mainUrl; ?>/product/platform-overview" class="dropdown__link text-xl"><i class="fa-solid fa-layer-group mr-2"></i>Platform Overview</a>
                                        <p class="w-3/4 text-sm">The connected Operatio cloud</p>
                                    </li>

                                    <li class="flex-col">
                                        <a href="<?php echo $mainUrl; ?>/product/video-safety" class="dropdown__link text-xl"><i class="fa-solid fa-video mr-2"></i>Video Based Safety</a>
                                        <p class=" text-sm">Al cameras, driver coaching,</p>
                                        <p class=" text-sm"> safety reports, in-cab alerts</p>
                                    </li>
                                    <li class="flex-col">
                                        <a href="<?php echo $mainUrl; ?>/product/vehicle-telematics" class="dropdown__link text-xl"><i class="fa-solid fa-truck mr-2"></i>Vehicle Telematics</a>
                                        <p class="w-3/4 text-sm">Real-time GPS, routing, </p>
                                        <p class=" text-sm"> fuel , maintenance, electrification</p>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown__group">

                                <span class="hidden lg:block dropdown__title text-gray-300 text-lg text-white">.</span>

                                <ul class="dropdown__list">
                                    <li class="flex-col">
                                        <a href="#" class="dropdown__link text-xl"><i class="fa-solid fa-mobile-screen-button mr-2"></i>App and Driver
                                            Workflow</a>
                                        <p class="w-3/4 text-sm"> Messaging, dispatch, documents, ELD</p>
                                    </li>
                                    <li class="flex-col">
                                        <a href="#" class="dropdown__link text-xl"><i class="fa-solid fa-computer mr-2"></i>Equipment Monitoring</a>
                                        <p class=" text-sm">Location tracking, utilization,
                                            continuous</p>
                                        <p class=" text-sm"> diagnostics</p>
                                    </li>
                                    <li class="flex-col">
                                        <a href="#" class="dropdown__link text-xl"><i class="fa-regular fa-eye mr-2"></i>Site Visibility</a>
                                        <p class="text-sm">Remote visibility, proactive alerting, </p>
                                        <p class="text-sm">on-the-go
                                            access</p>
                                    </li>
                                </ul>
                            </div>

                            <div class="hidden lg:block h-full w-[1px] bg-slate-200 my-5"></div>

                            <div class="dropdown__group">

                                <span class="dropdown__title text-gray-500 text-lg">INTEGRATIONS</span>

                                <ul class="dropdown__list">
                                    <li class="flex-col">
                                        <a href="<?php echo $mainUrl; ?>/product/software-integration" class="dropdown__link text-xl"><i class="fa-solid fa-code mr-2"></i>Developer API</a>
                                        <p>Install turnkey integrations</p>
                                    </li>
                                    <li class="flex-col">
                                        <a href="<?php echo $mainUrl; ?>/product/data-connector" class="dropdown__link text-xl"><i class="fa-solid fa-tablet-screen-button mr-2"></i>App Market
                                            Space</a>
                                        <p>Unlock embedded telematics data</p>
                                    </li>
                                    <li class="flex-col">
                                        <a href="<?php echo $mainUrl; ?>/product/expandability" class="dropdown__link text-xl"><i class="fa-solid fa-gears mr-2"></i>OEM Integration</a>
                                        <p>Unlock embedded telematics data</p>
                                    </li>
                                    <li class="flex-col">
                                        <a href="<?php echo $mainUrl; ?>/product/marketplace" class="dropdown__link text-xl"><i class="fa-solid fa-medal mr-2"></i>Expert Marketplace</a>
                                        <p>Find certified Samsara experts</p>
                                    </li>
                                </ul>
                            </div>
                            <a class="mb-4 text-sky-600" href="">Explore more Product</a>
                        </div>

                    </div>
                </li>

                <!--=============== DROPDOWN 1 ===============-->
                <li class="dropdown__item">
                    <div class="nav__link dropdown__button">
                        Solution <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <div class="dropdown__group">
                                <span class="dropdown__title text-gray-500 text-lg">By Business Needs</span>

                                <ul class="dropdown__list">
                                    <li class="flex-col">
                                        <a href="#" class="dropdown__link text-xl"><i class="fa-solid fa-magnifying-glass-dollar mr-2"></i>Efficiency</a>
                                        <p class=" text-sm">Reduce costs across your business</p>
                                    </li>

                                    <li class="flex-col">
                                        <a href="#" class="dropdown__link text-xl"><i class="fa-solid fa-shield mr-2"></i>Safety</a>
                                        <p class=" text-sm">Ensure safety wherever you operate</p>
                                    </li>
                                    <li class="flex-col">
                                        <a href="#" class="dropdown__link text-xl"><i class="fa-solid fa-seedling mr-2"></i>Sustainability</a>
                                        <p class=" text-sm">Prepare for transition to renewables</p>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown__group">

                                <span class="hidden lg:block dropdown__title text-gray-300 text-lg text-white">.</span>

                                <ul class="dropdown__list">
                                    <li class="flex-col">
                                        <a href="#" class="dropdown__link text-xl"><i class="fa-solid fa-clipboard-list mr-2"></i>Compliance</a>
                                        <p class=" text-sm">Automate regulatory compliance</p>
                                    </li>
                                    <li class="flex-col">
                                        <a href="#" class="dropdown__link text-xl"><i class="fa-solid fa-triangle-exclamation mr-2"></i>Security</a>
                                        <p class=" text-sm">Identify and eliminate risks</p>
                                    </li>
                                    <li class="flex-col">
                                        <a href="#" class="dropdown__link text-xl"><i class="fa-regular fa-face-grin-stars mr-2"></i>Customer
                                            Experience</a>
                                        <p class=" text-sm">Build customer loyalty and retention</p>
                                    </li>
                                </ul>
                            </div>

                            <div class="hidden lg:block h-full w-[1px] bg-slate-200 my-5"></div>

                            <div class="dropdown__group">

                                <span class="dropdown__title text-gray-500 text-lg">BY INDUSTRY</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link text-xl"><i class="fa-solid fa-truck-front mr-2"></i>Transportation &
                                            Logistics</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link text-xl"><i class="fa-solid fa-utensils mr-2"></i>Food & Beverage</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link text-xl"><i class="fa-solid fa-truck-ramp-box mr-2"></i>Field Services</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link text-xl"><i class="fa-solid fa-person-digging mr-2"></i>Construction</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link text-xl"><i class="fa-regular fa-flag mr-2"></i>Government</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link text-xl"><i class="fa-solid fa-bus mr-2"></i>K-12 Schools</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link text-xl"><i class="fa-solid fa-user-graduate mr-2"></i>Higher Education</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link text-xl"><i class="fa-solid fa-train-tram mr-2"></i>Passenger Transit</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link text-xl"><i class="fa-solid fa-bolt mr-2"></i>Utilities</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </li>

                <!--=============== DROPDOWN 2 ===============-->
                <li class="dropdown__item">
                    <div class="nav__link dropdown__button">
                        Customer <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <div class="dropdown__container ">
                        <div class="dropdown__content">
                            <div class="dropdown__group">
                                <span class="dropdown__title text-gray-500 text-lg">Customer Success</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link text-xl">Overview</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link text-xl">Customer Stories</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link text-xl">Customer & Training</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown__group">
                                <span class="dropdown__title text-gray-500 text-lg">Customer Support</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link text-xl">Help Center</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link text-xl">Developer Portal</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link text-xl">Customer Tips</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown__group w-[15rem]">

                                <span class="dropdown__title">Case Study highlights</span>

                                <div>
                                    <img class="w-60 h-36" src="./assets/images/navcus1.webp" alt="">
                                    <p class="mt-1 font-semibold">DHL</p>
                                    <p class="text-sm mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing
                                        elit. Perspiciatis, temporibus.lorem10</p>
                                    <a class="text-xs text-sky-600" href="">Read more<i class="fa-solid fa-arrow-right ml-2"></i></a>
                                </div>
                            </div>
                            <div class="dropdown__group w-[15rem]">

                                <span class="dropdown__title">Case Study highlights</span>

                                <div>
                                    <img class="w-60 h-36" src="./assets/images/navcus2.webp" alt="">
                                    <p class="mt-1 font-semibold">Nutrien Solution</p>
                                    <p class="text-sm mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing
                                        elit. Perspiciatis, temporibus.lorem10</p>
                                    <a class="text-xs text-sky-600" href="">Read more<i class="fa-solid fa-arrow-right ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="dropdown__item">
                    <div class="nav__link dropdown__button">
                        Resources <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <div class="dropdown__container ">
                        <div class="dropdown__content">
                            <div class="dropdown__group">
                                <span class="dropdown__title text-gray-500 text-lg">Resources</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="<?php echo $mainUrl; ?>/contact-us/contact-us" class="dropdown__link text-xl">contact-us</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link text-xl">Webinar</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link text-xl">Video Library</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link text-xl">Product Tour</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link text-xl">Fleet Safety Guide</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link text-xl">Business</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link text-xl">Guide</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown__group w-[16rem]">

                                <span class="dropdown__title">Report</span>

                                <div>
                                    <img class="w-60 h-36" src="./assets/images/navre1.webp" alt="">
                                    <p class="mt-1 font-semibold">State of Connected Operation</p>
                                    <p class="text-sm mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing
                                        elit. Perspiciatis, temporibus.lorem10</p>
                                    <a class="text-xs text-sky-600" href="">Read more<i class="fa-solid fa-arrow-right ml-2"></i></a>
                                </div>
                            </div>

                            <div class="dropdown__group w-[15rem]">

                                <span class="dropdown__title">Optimization</span>

                                <div>
                                    <img class="w-60 h-36" src="./assets/images/navre2.webp" alt="">
                                    <p class="mt-1 font-semibold">Make More Possible</p>
                                    <p class="text-sm mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing
                                        elit. Perspiciatis, temporibus.lorem10</p>
                                    <a class="text-xs text-sky-600" href="">Read more<i class="fa-solid fa-arrow-right ml-2"></i></a>
                                </div>
                            </div>
                            <div class="dropdown__group w-[15rem]">

                                <span class="dropdown__title">Innovation</span>

                                <div>
                                    <img class="w-60 h-36" src="./assets/images/navre3.webp" alt="">
                                    <p class="mt-1 font-semibold">Build Your Ev Fleet</p>
                                    <p class="text-sm mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing
                                        elit. Perspiciatis, temporibus.lorem10</p>
                                    <a class="text-xs text-sky-600" href="">Read more<i class="fa-solid fa-arrow-right ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!--=============== DROPDOWN 3 ===============-->
                <li class="dropdown__item">
                    <div class="nav__link dropdown__button">
                        Company <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <div class="dropdown__container ">
                        <div class="dropdown__content">

                            <div class="dropdown__group w-[15rem]">
                                <span class="dropdown__title">Report</span>
                                <div>
                                    <img class="w-60 h-36" src="./assets/images/navcom1.webp" alt="">
                                    <p class="mt-1 font-semibold mb-3">Apply For 2024 Connected operation Award</p>
                                    <a class="text-xs text-sky-600" href="">Read more<i class="fa-solid fa-arrow-right ml-2"></i></a>
                                </div>
                            </div>
                            <div class="dropdown__group">
                                <span class="dropdown__title text-gray-500 text-lg">About Fleet</span>

                                <ul class="dropdown__list">
                                    <li class="flex-col">
                                        <a href="<?php echo $mainUrl; ?>/company/about" class="dropdown__link text-xl"><i class="fa-solid fa-magnifying-glass-dollar mr-2"></i>About</a>
                                        <p class=" text-sm">Empowering business growth through insight.</p>
                                    </li>

                                    <li class="flex-col">
                                        <a href="<?php echo $mainUrl; ?>/company/career" class="dropdown__link text-xl"><i class="fa-solid fa-shield mr-2"></i>Careers</a>
                                        <p class=" text-sm">Where passion for innovation meets career opportunity.</p>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown__group">

                                <span class="hidden lg:block dropdown__title text-gray-300 text-lg text-white">.</span>

                                <ul class="dropdown__list">
                                    <li class="flex-col">
                                        <a href="<?php echo $mainUrl; ?>/company/ethics" class="dropdown__link text-xl"><i class="fa-solid fa-clipboard-list mr-2"></i>Ethics & Compliance</a>
                                        <p class="xl:w-2/3 text-sm">Committed to ethical practices, laws, and standards in our industry.</p>
                                    </li>
                                    <li class="flex-col">
                                        <a href="<?php echo $mainUrl; ?>/company/social-responsibility" class="dropdown__link text-xl"><i class="fa-solid fa-triangle-exclamation mr-2"></i>Social Responsibility</a>
                                        <p class=" text-sm">Leading by example.</p>
                                    </li>
                                    <li class="flex-col">
                                        <a href="<?php echo $mainUrl; ?>/company/security" class="dropdown__link text-xl"><i class="fa-regular fa-face-grin-stars mr-2"></i>Security</a>
                                        <p class="xl:w-2/3 text-sm">Protecting our customers' valuable data with our "Security First" principle.</p>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>


                </li>
            </ul>
        </div>
        <button class="bg-sky-700 my-6 text-white rounded-md px-8 hidden lg:block">Log In</button>
    </nav>
</header>
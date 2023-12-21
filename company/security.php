<?php include('../components/header.php');
include('../components/navbar.php');
?>


<style>
    .team-member {
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.21);
        transition: transform 0.3s ease-in-out;
    }

    .team-member:hover {
        transform: translateY(-10px);
    }

    .team-member img {
        object-fit: cover;
    }

    .team-member .role {
        color: #888;
        margin-bottom: 10px;
    }

    .fa {
        font-size: 24px;
        margin: 0 10px;
        color: #000;
        transition: transform 0.3s ease-in-out, color 0.3s ease-in-out;
        text-decoration: none;
    }

    .team-member:hover .fa {
        transform: scale(1.2);
        color: #007AFF;
    }
</style>

<body>

    <section class="securitybanner mt-10">
        <div class="max-w-7xl mx-auto flex py-32">
            <div class="xl:w-1/2 mx-[3vw] xl:mx-0">
                <h1 class="text-white text-5xl md:text-6xl font-semibold">Geotab Security Center</h1>
                <p class="text-white text-xl md:text-2xl w-3/4 mt-3">Information related to Geotab’s security and privacy policies</p>
                <button class="bg-sky-600 px-8 py-3 rounded text-sky-100 hover:bg-sky-500 transition duration-300 mt-10">Schedule a Demo</button>
            </div>
            <div class="hidden xl:block w-1/2">
            </div>
        </div>
    </section>



    <div class="flex flex-col items-center lg:flex-row max-w-7xl mx-auto mx-[5vw] gap-8 xl:gap-16 py-8 xl:py-16 ">
        <div class="xl:w-1/2 order-2 lg:order-1">
            <h2 class="xl:text-5xl text-3xl text-head font-semibold text-[#25477B] mx-[3vw] xl:mx-0">
                Geotab’s security policy
            </h2>
            <p class=" md:text-lg xl:text-xl md:mt-5 text-start mx-[3vw] xl:mx-0">
                Geotab takes a rigorous approach to information security following the principle of continuous improvement. To protect ourselves, our customers and partners, Geotab is constantly reviewing, improving and validating our security mechanisms and processes to ensure our systems remain resilient to intrusion and disaster. Geotab also collaborates with leading stakeholders to advance security across the industry. As we grow, more industries, fleets and customers will benefit from Geotab’s uncompromising stance on information security.
            </p>
        </div>
        <div class="xl:w-1/2 order-1 lg:order-2 mx-[3vw] xl:mx-0">
            <img src="../assets/images/securitysec1.jpg" alt="" class="w-full">
        </div>
    </div>



    <section class=" bg-slate-200">
        <div class="xl:flex max-w-7xl mx-auto py-24">
            <div class="p-10 xl:w-1/3">
                <h2 class="text-4xl font-semibold text-[#25477B]">Cybersecurity</h2>
                <p class="text-black mt-4 text-lg">Cybersecurity is an essential part of your business, now more than ever. Learn data security best practices for executives. Get information on cybersecurity notifications and standards to help mitigate cyber risk.</p>
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


    <div class="flex flex-col items-center lg:flex-row max-w-7xl mx-auto mx-[5vw] gap-8 xl:gap-16 py-8 xl:py-16 ">
        <div class="xl:w-1/2 order-2 lg:order-1">
            <h2 class="xl:text-5xl text-3xl text-head font-semibold text-[#25477B] mx-[3vw] xl:mx-0">
                Customer data privacy
            </h2>
            <p class=" md:text-lg xl:text-xl md:mt-5 text-start mx-[3vw] xl:mx-0">
                Geotab provides its customers with an industry-leading, open platform fleet management solution for collecting and analyzing vehicle and fleet data. With Geotab, customers have power and control over their own data. Although the Geotab platform does not require personal data, nevertheless, some customers may choose to include personal data (also called personally identifiable information or PII), such as driver-specific data, to help achieve additional business goals.

                Maintaining the privacy of customers’ data is an important priority of Geotab’s data management activities. As a data processor, Geotab implements and maintains technical and organizational measures designed to keep customer data secure and private. Individual customer data is processed according to the customer’s instructions and chosen settings that enable the proper functioning of the solution and its ongoing improvement. Geotab has carefully controlled and audited access to personal data in a customers’ database in the event that the customer needs support on their data for safety or troubleshooting.
            </p>
        </div>
        <div class="xl:w-1/2 order-1 lg:order-2 mx-[3vw] xl:mx-0">
            <img src="../assets/images/securitysec2.svg" alt="" class="w-full">
        </div>
    </div>

    <section class="max-w-7xl mx-auto py-16">
        <h2 class="text-4xl font-semibold text-center mb-10">Fleet’s security leadership team</h2>
        <div class="team-section flex flex-wrap justify-center gap-10">
            <div class="team-member text-center  p-10 bg-white rounded-xl">
                <img class="w-36 rounded-full mb-5" src="../assets/images/secureprofile.jpg" alt="Team Member 1">
                <h3 class="text-xl font-semibold">John Doe</h3>

                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-linkedin"></a>
            </div>
            <div class="team-member text-center p-10 bg-white rounded-xl">
                <img class="w-36 rounded-full mb-5" src="../assets/images/secureprofile2.jpg" alt="Team Member 2">
                <h3 class="text-xl font-semibold">Hannah</h3>

                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-linkedin"></a>
            </div>
            <div class="team-member text-center p-10 bg-white rounded-xl">
                <img class="w-36 rounded-full mb-5" src="../assets/images/secureprofile.jpg" alt="Team Member 3">
                <h3 class="text-xl font-semibold">John Doe</h3>
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-linkedin"></a>
            </div>
            <div class="team-member text-center p-10 bg-white rounded-xl">
                <img class="w-36 rounded-full mb-5" src="../assets/images/secureprofile2.jpg" alt="Team Member 2">
                <h3 class="text-xl font-semibold">Hannah</h3>

                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-linkedin"></a>
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
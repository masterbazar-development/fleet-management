<?php include('../components/header.php');
include('../components/navbar.php');
?>

<body>

    <section class="product-software mt-10">
        <div class="max-w-7xl mx-auto flex py-32">
            <div class="xl:w-1/2 mx-[3vw] xl:mx-0">
                <h1 class="text-white text-6xl font-semibold">Fleet software integration</h1>
                <p class="text-white text-2xl w-3/4 mt-3">Leverage real-time connected vehicle data feeds and build your own custom applications using Geotab integrations and data.</p>
                <button class="bg-sky-600 px-8 py-3 rounded text-sky-100 hover:bg-sky-500 transition duration-300 mt-10">Schedule a Demo</button>
            </div>
            <div class="hidden xl:block w-1/2">
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
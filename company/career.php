<?php include('../components/header.php');
include('../components/navbar.php');
?>


<style>
.active{
    border-bottom: 5px solid blue;
}
</style>

<body>

    <section class="company-career mt-10 mb-16">
        <div class="max-w-7xl mx-auto flex py-40">
            <div class="xl:w-1/2 mx-[3vw] xl:mx-0">
                <h1 class="text-white text-4xl md:text-6xl font-semibold">
                    Where passion for innovation meets creativity</h1>
            </div>
            <div class="hidden xl:block w-1/2">
            </div>
        </div>
    </section>


    <section class="max-w-7xl mx-auto py-16">
        <div class="button-wrap flex justify-between">
            <a onclick="showbox(1)" id="toggle-1" href="#" class="active button w-74 w-full h-10  text-black text-xl font-semibold">
                Safety
            </a>
            <a onclick="showbox(2)" id="toggle-2" href="#" class="button w-74 w-full h-10  text-black text-xl font-semibold">
                Efficiency
            </a>
            <a onclick="showbox(3)" id="toggle-3" href="#" class="button w-74 w-full h-10  text-black text-xl font-semibold">
                Sustainability
            </a>


        </div>

        <div class="content mt-10">
            <div id="box-1" class="">
                <div class="flex gap-10">
                    <p class="w-1/2 h-full my-auto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea illo harum optio perferendis similique animi aliquid nulla praesentium dolorum iusto!</p>
                    <img class="w-1/2 p-10" src="../assets/images/carsec11.jpg" alt="">
                </div>
            </div>
            <div id="box-2" class="hidden">
                <div class="flex gap-10">
                    <p class="w-1/2 h-full my-auto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea illo harum optio perferendis similique animi aliquid nulla praesentium dolorum iusto!</p>
                    <img class="w-1/2 p-10" src="../assets/images/carsec22.jpg" alt="">
                </div>
            </div>
            <div id="box-3" class="hidden">
                <div class="flex gap-10">
                    <p class="w-1/2 h-full my-auto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea illo harum optio perferendis similique animi aliquid nulla praesentium dolorum iusto!</p>
                    <img class="w-1/2 p-10" src="../assets/images/carsec33.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <script>
        function showbox(position) {
            let getbox = `box-${position}`

            for (let i = 1; i <= 3; i++) {
                let box = `box-${i}`
                document.getElementById(box).style.display = 'none';
                let toggles = `toggle-${i}`
                document.getElementById(toggles).classList.remove('active');
            }
            document.getElementById(getbox).style.display = 'block';
            let getToggle = `toggle-${position}`;
            document.getElementById(getToggle).classList.add('active');

        }
        // $(document).ready(function() {
        //     $('.button').first().addClass('active');

        //     $('.button').click(function() {
        //         var $this = $(this);
        //         $siblings = $this.parent().children(),
        //             position = $siblings.index($this);

        //         $('.content div').removeClass('active').eq(position).addClass('active');

        //         $siblings.removeClass('active');
        //         $this.addClass('active');
        //     });
        // });
    </script>


    <?php include('../components/footer.php'); ?>